<!DOCTYPE html>
<html lang="tr">


@extends('layouts.master')
@section('content')

<body class="shop">
    <div id="page" class="hfeed page-wrapper">
        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading">{{ $product->title ?? $product->name ?? 'Ürün Detayı' }}</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="{{ route('home') }}">Ana Sayfa</a><span class="delimiter"></span><a href="{{ route('products') }}">Ürünler</a><span class="delimiter"></span>{{ $product->title ?? $product->name ?? 'Ürün Detayı' }}
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div
                            class="shop-details zoom"
                            data-product_layout_thumb="scroll"
                            data-zoom_scroll="true"
                            data-zoom_contain_lens="true"
                            data-zoomtype="inner"
                            data-lenssize="200"
                            data-lensshape="square"
                            data-lensborder=""
                            data-bordersize="2"
                            data-bordercolour="#f9b61e"
                            data-popup="false">
                            <div class="product-top-info">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="row">
                                            <div class="product-images col-lg-7 col-md-12 col-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="content-thumbnail-scroll">
                                                            <div
                                                                class="image-thumbnail slick-carousel slick-vertical"
                                                                data-asnavfor=".image-additional"
                                                                data-centermode="true"
                                                                data-focusonselect="true"
                                                                data-columns4="5"
                                                                data-columns3="4"
                                                                data-columns2="4"
                                                                data-columns1="4"
                                                                data-columns="4"
                                                                data-nav="true"
                                                                data-vertical='"true"'
                                                                data-verticalswiping='"true"'>
                                                                @if($product->image)
                                                                <div class="img-item slick-slide">
                                                                    <span class="img-thumbnail-scroll">
                                                                        <img
                                                                            width="600"
                                                                            height="600"
                                                                            src="{{ Voyager::image($product->image) }}"
                                                                            alt="{{ $product->title ?? $product->name }}" />
                                                                    </span>
                                                                </div>
                                                                @else
                                                                <div class="img-item slick-slide">
                                                                    <span class="img-thumbnail-scroll">
                                                                        <img
                                                                            width="600"
                                                                            height="600"
                                                                            src="{{ asset('media/product/1.jpg') }}"
                                                                            alt="{{ $product->title ?? $product->name }}" />
                                                                    </span>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="scroll-image main-image">
                                                            <div
                                                                class="image-additional slick-carousel"
                                                                data-asnavfor=".image-thumbnail"
                                                                data-fade="true"
                                                                data-columns4="1"
                                                                data-columns3="1"
                                                                data-columns2="1"
                                                                data-columns1="1"
                                                                data-columns="1"
                                                                data-nav="true">
                                                                @if($product->image)
                                                                <div class="img-item slick-slide">
                                                                    <img
                                                                        width="900"
                                                                        height="900"
                                                                        src="{{ Voyager::image($product->image) }}"
                                                                        alt="{{ $product->title ?? $product->name }}"
                                                                        title="{{ $product->title ?? $product->name }}" />
                                                                </div>
                                                                @else
                                                                <div class="img-item slick-slide">
                                                                    <img
                                                                        width="900"
                                                                        height="900"
                                                                        src="media/product/1.jpg"
                                                                        alt="{{ $product->title ?? $product->name }}"
                                                                        title="{{ $product->title ?? $product->name }}" />
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-info col-lg-5 col-md-12 col-12">
                                                <h1 class="title">{{ $product->title ?? $product->name ?? 'Ürün Detayı' }}</h1>
                                                <div class="description">
                                                    <p>
                                                        {!! $product->description ?? 'Ürün açıklaması bulunmamaktadır.' !!}
                                                    </p>
                                                </div>
                                                <div class="product-meta">
                                                    @if($product->category)
                                                    <span class="posted-in">Kategori:
                                                        <a href="{{ route('products', ['category' => $product->category->id]) }}" rel="tag">{{ $product->category->name }}</a></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-related">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="block block-products slider">
                                            <div class="block-title">
                                                <h2>Benzer Ürünler</h2>
                                            </div>
                                            <div class="block-content">
                                                <div class="content-product-list slick-wrap">
                                                    <div
                                                        class="slick-sliders products-list grid"
                                                        data-slidestoscroll="true"
                                                        data-dots="false"
                                                        data-nav="1"
                                                        data-columns4="1"
                                                        data-columns3="2"
                                                        data-columns2="3"
                                                        data-columns1="3"
                                                        data-columns1440="4"
                                                        data-columns="4">
                                                        @php
                                                        try {
                                                        $related_products = \App\Product::where('id', '!=', $product->id)
                                                        ->where('product_category_id', $product->product_category_id)
                                                        ->orderBy('created_at', 'desc')
                                                        ->take(4)
                                                        ->get();

                                                        // Eğer aynı kategoride ürün yoksa, genel ürünlerden al
                                                        if($related_products->count() == 0) {
                                                            $related_products = \App\Product::where('id', '!=', $product->id)
                                                            ->orderBy('created_at', 'desc')
                                                            ->take(4)
                                                            ->get();
                                                        }
                                                        } catch(Exception $e) {
                                                        $related_products = collect([]);
                                                        }
                                                        @endphp
                                                        @foreach($related_products as $related_product)
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div
                                                                    class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <a href="{{ route('product_details', $related_product->slug) }}">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="{{ Voyager::image($related_product->image) }}"
                                                                                class="post-image"
                                                                                alt="{{ $related_product->title ?? $related_product->name }}" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title">
                                                                                <a href="{{ route('product_details', $related_product->slug) }}">{{ $related_product->title ?? $related_product->name }}</a>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @if($related_products->count() == 0)
                                                        <div class="col-12 text-center">
                                                            <p>Henüz benzer ürün bulunmamaktadır.</p>
                                                        </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #content -->
                </div>
                <!-- #primary -->
            </div>
            <!-- #main-content -->
        </div>

    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Search -->
    <div class="search-overlay">
        <div class="close-search"></div>
        <div class="wrapper-search">
            <form
                role="search"
                method="get"
                class="search-from ajax-search"
                action="">
                <a href="#" class="search-close"></a>
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input
                        type="text"
                        autocomplete="off"
                        value=""
                        name="s"
                        class="input-search s"
                        placeholder="Search..." />
                    <div class="content-menu_search">
                        <label>Suggested</label>
                        <ul id="menu_search" class="menu">
                            <li><a href="#">Earrings</a></li>
                            <li><a href="#">Necklaces</a></li>
                            <li><a href="#">Bracelets</a></li>
                            <li><a href="#">Jewelry Box</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->
    <div class="wishlist-popup">
        <div class="wishlist-popup-inner">
            <div class="wishlist-popup-content">
                <div class="wishlist-popup-content-top">
                    <span class="wishlist-name">Wishlist</span>
                    <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                    <span class="wishlist-popup-close"></span>
                </div>
                <div class="wishlist-popup-content-mid">
                    <table class="wishlist-items">
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="urun-detay.html">
                                        <img
                                            width="600"
                                            height="600"
                                            src="media/product/3.jpg"
                                            alt="" />
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="urun-detay.html">Twin Hoops</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <span>$150.00</span>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2023</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">In stock</div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="urun-detay.html">
                                        <img
                                            width="600"
                                            height="600"
                                            src="media/product/4.jpg"
                                            alt="" />
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="urun-detay.html">Yilver And Turquoise Earrings</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <del aria-hidden="true"><span>$150.00</span></del>
                                        <ins><span>$100.00</span></ins>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2023</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">In stock</div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-popup-content-bot">
                    <div class="wishlist-popup-content-bot-inner">
                        <a class="wishlist-page" href="shop-wishlist.html">
                            Open wishlist page
                        </a>
                        <span class="wishlist-continue" data-url="">
                            Continue shopping
                        </span>
                    </div>
                    <div class="wishlist-notice wishlist-notice-show">
                        Added to the wishlist!
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Page Loader -->
    <div class="page-preloader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Dependency Scripts -->
    <script src="{{ asset('libs/popper/js/popper.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/slick/js/slick.min.js') }}"></script>
    <script src="{{ asset('libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>
    <script src="{{ asset('libs/slider/js/tmpl.js') }}"></script>
    <script src="{{ asset('libs/slider/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('libs/slider/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('libs/slider/js/jquery.slider.js') }}"></script>
    <script src="{{ asset('libs/elevatezoom/js/jquery.elevatezoom.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
@endsection

</html>
