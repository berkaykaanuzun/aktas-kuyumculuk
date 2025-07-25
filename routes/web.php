<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/kurumsal', [FrontController::class, 'about'])->name('about');
Route::get('/urunler', [FrontController::class, 'products'])->name('products');
Route::get('/urunler/{slug}', [FrontController::class, 'product_details'])->name('product_details');
Route::get('/blog', [FrontController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [FrontController::class, 'blog_details'])->name('blog_details');
Route::get('/iletisim', [FrontController::class, 'contact'])->name('contact');
Route::post('/iletisim', [FrontController::class, 'send'])->name('contact.send');
