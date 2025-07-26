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
                                <h1 class="text-title-heading">
                                    @if($search_query)
                                        "{{ $search_query }}" için arama sonuçları
                                    @else
                                        Ürünler
                                    @endif
                                </h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="{{ route('home') }}">Ana Sayfa</a><span class="delimiter"></span>
                                @if($search_query)
                                <a href="{{ route('products') }}">Ürünler</a><span class="delimiter"></span>"{{ $search_query }}" arama sonuçları
                                @elseif($selected_category)
                                <a href="{{ route('products') }}">Ürünler</a><span class="delimiter"></span>{{ \App\ProductCategory::find($selected_category)->name ?? '' }}
                                @else
                                Ürünler
                                @endif
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="row"></div>
                                    <div
                                        class="col-xl-12 col-lg-12 col-md-12 col-12 products-column">
                                        <div class="products-topbar clearfix">
                                            <div class="products-topbar-left">
                                                <div class="products-count">
                                                    @if($search_query)
                                                        "{{ $search_query }}" için {{ $products->total() }} sonuç bulundu
                                                        ({{ $products->firstItem() }}-{{ $products->lastItem() }} arası gösteriliyor)
                                                    @else
                                                        Toplam {{ $products->total() }} ürün
                                                        @if($selected_category)
                                                        - {{ \App\ProductCategory::find($selected_category)->name ?? '' }} kategorisi
                                                        @endif
                                                        ({{ $products->firstItem() }}-{{ $products->lastItem() }} arası gösteriliyor)
                                                    @endif
                                                </div>
                                                                                        </div>
                                        </div>

                                        <div class="tab-content">
                                            <div
                                                class="tab-pane fade show active"
                                                id="layout-grid"
                                                role="tabpanel">
                                                <div class="products-list grid">
                                                    <div class="row">
                                                        @foreach($products as $product)
                                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                                            <div
                                                                class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    @if($product->created_at->diffInDays(now()) <= 30)
                                                                    <div class="product-lable">
                                                                        <div class="hot">YENİ</div>
                                                                    </div>
                                                                    @endif
                                                                    <a href="{{ route('product_details', $product->slug) }}">
                                                                        <img
                                                                            width="1000"
                                                                            height="1000"
                                                                            src="{{ Voyager::image($product->image) }}"
                                                                            class="post-image"
                                                                            alt="{{ $product->title }}" />
                                                                    </a>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title">
                                                                            <a href="{{ route('product_details', $product->slug) }}">{{ $product->title }}</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="layout-list"
                                                role="tabpanel">
                                                <div class="products-list list">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/1.jpg"
                                                                                class="post-image"
                                                                                alt="Medium Flat Hoops" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/1-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Medium Flat Hoops" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Medium Flat Hoops</a>
                                                                    </h3>
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                        <div class="review-count">
                                                                            (1<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/5.jpg"
                                                                                class="post-image"
                                                                                alt="Yilver And Turquoise Earrings" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/5-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Yilver And Turquoise Earrings" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Yilver And Turquoise Earrings</a>
                                                                    </h3>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$150.00</span></del>
                                                                        <ins><span>$100.00</span></ins>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star star-0"></div>
                                                                        <div class="review-count">
                                                                            (0<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/2.jpg"
                                                                                class="post-image"
                                                                                alt="Bold Pearl Hoop Earrings" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/2-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Bold Pearl Hoop Earrings" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Bold Pearl Hoop Earrings</a>
                                                                    </h3>
                                                                    <span class="price">$150.00</span>
                                                                    <div class="rating">
                                                                        <div class="star star-4"></div>
                                                                        <div class="review-count">
                                                                            (1<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/6.jpg"
                                                                                class="post-image"
                                                                                alt="Bora Armchair" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/6-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Bora Armchair" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Bora Armchair</a>
                                                                    </h3>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$120.00</span></del>
                                                                        <ins><span>$100.00</span></ins>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star star-0"></div>
                                                                        <div class="review-count">
                                                                            (0<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/3.jpg"
                                                                                class="post-image"
                                                                                alt="Twin Hoops" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/3-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Twin Hoops" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Twin Hoops</a>
                                                                    </h3>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$100.00</span></del>
                                                                        <ins><span>$90.00</span></ins>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                        <div class="review-count">
                                                                            (3<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/7.jpg"
                                                                                class="post-image"
                                                                                alt="Diamond Bracelet" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/7-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Diamond Bracelet" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Diamond Bracelet</a>
                                                                    </h3>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$79.00</span></del>
                                                                        <ins><span>$50.00</span></ins>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                        <div class="review-count">
                                                                            (2<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/4.jpg"
                                                                                class="post-image"
                                                                                alt="Yilver And Turquoise Earrings" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/4-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Yilver And Turquoise Earrings" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Yilver And Turquoise Earrings</a>
                                                                    </h3>
                                                                    <span class="price">$120.00</span>
                                                                    <div class="rating">
                                                                        <div class="star star-4"></div>
                                                                        <div class="review-count">
                                                                            (1<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/8.jpg"
                                                                                class="post-image"
                                                                                alt="X Hoop Earrings" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/8-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="X Hoop Earrings" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">X Hoop Earrings</a>
                                                                    </h3>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$200.00</span></del>
                                                                        <ins><span>$180.00</span></ins>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                        <div class="review-count">
                                                                            (4<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="products-thumb">
                                                                    <div class="product-thumb-hover">
                                                                        <a href="urun-detay.html">
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/9.jpg"
                                                                                class="post-image"
                                                                                alt="Yintage Medallion Necklace" />
                                                                            <img
                                                                                width="600"
                                                                                height="600"
                                                                                src="media/product/9-2.jpg"
                                                                                class="hover-image back"
                                                                                alt="Yintage Medallion Necklace" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="products-content">
                                                                    <h3 class="product-title">
                                                                        <a href="urun-detay.html">Yintage Medallion Necklace</a>
                                                                    </h3>
                                                                    <span class="price">$140.00</span>
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                        <div class="review-count">
                                                                            (1<span> review</span>)
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div
                                                                            class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a
                                                                                rel="nofollow"
                                                                                href="#"
                                                                                class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div
                                                                            class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">
                                                                                Add to wishlist
                                                                            </button>
                                                                        </div>
                                                                        <div
                                                                            class="btn-compare"
                                                                            data-title="Compare">
                                                                            <button class="product-btn">
                                                                                Compare
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit, sed do eiusmod tempor
                                                                        incididunt ut labore et dolore magna
                                                                        aliqua. Ut enim ad minim veniam, quis…
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if($products->hasPages())
                                        <nav class="pagination">
                                            <ul class="page-numbers">
                                                @if($products->onFirstPage())
                                                <li><a href="javascript:void(0)" class="prev page-numbers disabled">Geri</a></li>
                                                @else
                                                <li><a class="prev page-numbers" href="{{ $products->previousPageUrl() }}">Geri</a></li>
                                                @endif

                                                @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                @if($page == $products->currentPage())
                                                <li><span aria-current="page" class="page-numbers current">{{ $page }}</span></li>
                                                @else
                                                <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                                                @endif
                                                @endforeach

                                                @if($products->hasMorePages())
                                                <li><a class="next page-numbers" href="{{ $products->nextPageUrl() }}">İleri</a></li>
                                                @else
                                                <li><a href="javascript:void(0)" class="next page-numbers disabled">İleri</a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                        @endif
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
                action="{{ route('products') }}">
                <a href="#" class="search-close"></a>
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input
                        type="text"
                        autocomplete="off"
                        value="{{ request('search') }}"
                        name="search"
                        class="input-search s"
                        placeholder="Ürün ara..." />
                </div>
            </form>
        </div>
    </div>


    <!-- Quickview -->
    <div class="quickview-popup">
        <div id="quickview-container">
            <div class="quickview-container">
                <a href="#" class="quickview-close"></a>
                <div class="quickview-notices-wrapper"></div>
                <div class="product single-product product-type-simple">
                    <div class="product-detail">
                        <div class="row">
                            <div class="img-quickview">
                                <div class="product-images-slider">
                                    <div id="quickview-slick-carousel">
                                        <div class="images">
                                            <div class="scroll-image">
                                                <div class="slick-wrap">
                                                    <div
                                                        class="slick-sliders image-additional"
                                                        data-dots="true"
                                                        data-columns4="1"
                                                        data-columns3="1"
                                                        data-columns2="1"
                                                        data-columns1="1"
                                                        data-columns="1"
                                                        data-nav="true">
                                                        <div class="img-thumbnail slick-slide">
                                                            <a
                                                                href="media/product/3.jpg"
                                                                class="image-scroll"
                                                                title="">
                                                                <img
                                                                    width="900"
                                                                    height="900"
                                                                    src="media/product/3.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="img-thumbnail slick-slide">
                                                            <a
                                                                href="media/product/3-2.jpg"
                                                                class="image-scroll"
                                                                title="">
                                                                <img
                                                                    width="900"
                                                                    height="900"
                                                                    src="media/product/3-2.jpg"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
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
    <script src="libs/popper/js/popper.min.js"></script>
    <script src="libs/jquery/js/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/slick/js/slick.min.js"></script>
    <script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>
    <script src="libs/slider/js/tmpl.js"></script>
    <script src="libs/slider/js/jquery.dependClass-0.1.js"></script>
    <script src="libs/slider/js/draggable-0.1.js"></script>
    <script src="libs/slider/js/jquery.slider.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>
@endsection

</html>
