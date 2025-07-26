<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Mail\ContactsMail;
use App\Mail\RequestMail;
use App\Post;
use App\Category;
use App\Slider;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Http\Request;
use App\Blog;
use App\Product;
use App\ProductCategory;

class FrontController extends Controller
{
    public $data = array();

    public function __construct()
    {
        $this->data['meta'] = [
            'title' => setting('meta.title'),
            'description' => setting('meta.description'),
            'keywords' => setting('meta.keywords'),
            'og_image' => Voyager::image(setting('meta.og_image')),
            'favicon' => Voyager::image(setting('meta.favicon')),
        ];
    }

    public function home()
    {
        $this->data['sliders'] = Slider::all();
        return view('pages.home', $this->data);
    }

    public function about()
    {
        $this->data['meta']['title'] = 'Kurumsal';
        return view('pages.about', $this->data);
    }

    public function kvkk()
    {
        $this->data['meta']['title'] = 'KVKK';
        return view('pages.kvkk', $this->data);
    }



    public function contact()
    {
        $this->data['meta']['title'] = 'İletişimk';
        return view('pages.contact', $this->data);
    }


    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        try {
            // Direkt mail gönder - veritabanına kaydetmeden
            $mailData = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'message' => $validatedData['message'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'submitted_at' => now()->format('d.m.Y H:i:s')
            ];

            // Mail gönder
            Mail::to('berkaykaanuzun@gmail.com')->send(new ContactFormMail($mailData));

            // Başarı mesajı
            session()->flash('success', 'Mesajınız başarıyla gönderildi. En kısa sürede size geri döneceğiz.');
        } catch (\Exception $e) {
            // Hata mesajı
            session()->flash('error', 'Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.');
        }

        return back();
    }

    public function blogs()
    {
        $this->data['meta']['title'] = 'Blog & Haberler';
        $this->data['blogs'] = Blog::orderBy('created_at', 'desc')->get();
        return view('blogs.index', $this->data);
    }

    public function blog_details($slug)
    {
        $this->data['blog'] = Blog::where('slug', $slug)->firstOrFail();
        $this->data['meta']['title'] = $this->data['blog']->title;
        $this->data['meta']['description'] = $this->data['blog']->description;
        return view('blogs.details', $this->data);
    }

        public function products(Request $request)
    {
        $this->data['meta']['title'] = 'Ürünler';

                $query = Product::orderBy('created_at', 'desc');

        // Kategori filtresi
        if ($request->has('category') && $request->category) {
            $query->where('product_category_id', $request->category);
        }

        // Arama filtresi
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', '%' . $search . '%')
                  ->orWhere('description', 'LIKE', '%' . $search . '%');
            });
        }

        $this->data['products'] = $query->paginate(12);
        $this->data['categories'] = ProductCategory::orderBy('name')->get();
        $this->data['selected_category'] = $request->category;
        $this->data['search_query'] = $request->search;

        return view('products.index', $this->data);
    }

    public function product_details($slug)
    {
        $this->data['product'] = \App\Product::where('slug', $slug)->firstOrFail();
        $this->data['meta']['title'] = $this->data['product']->name ?? $this->data['product']->title ?? 'Ürün Detayı';
        $this->data['meta']['description'] = $this->data['product']->description ?? '';

        // Benzer ürünleri getir
        $related_products = \App\Product::where('id', '!=', $this->data['product']->id)
            ->when($this->data['product']->product_category_id, function($query) {
                return $query->where('product_category_id', $this->data['product']->product_category_id);
            })
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        // Eğer aynı kategoride yeterli ürün yoksa, diğer ürünlerden de ekle
        if ($related_products->count() < 8) {
            $remaining_count = 8 - $related_products->count();
            $additional_products = \App\Product::where('id', '!=', $this->data['product']->id)
                ->whereNotIn('id', $related_products->pluck('id'))
                ->orderBy('created_at', 'desc')
                ->take($remaining_count)
                ->get();

            $related_products = $related_products->merge($additional_products);
        }

        $this->data['related_products'] = $related_products;

        return view('products.details', $this->data);
    }

}
