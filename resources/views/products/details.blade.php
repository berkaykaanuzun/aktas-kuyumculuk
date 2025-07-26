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
                            @if(isset($related_products) && $related_products->count() > 0)
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
                                                        @foreach($related_products as $related_product)
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div
                                                                    class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        @if($related_product->created_at->diffInDays(now()) <= 30)
                                                                        <div class="product-lable">
                                                                            <div class="hot">YENİ</div>
                                                                        </div>
                                                                        @endif
                                                                        <div class="product-thumb-hover">
                                                                            <a href="{{ route('product_details', $related_product->slug) }}">
                                                                                @if($related_product->image)
                                                                                <img
                                                                                    width="600"
                                                                                    height="600"
                                                                                    src="{{ Voyager::image($related_product->image) }}"
                                                                                    class="post-image"
                                                                                    alt="{{ $related_product->title ?? $related_product->name }}" />
                                                                                <img
                                                                                    width="600"
                                                                                    height="600"
                                                                                    src="{{ Voyager::image($related_product->image) }}"
                                                                                    class="hover-image back"
                                                                                    alt="{{ $related_product->title ?? $related_product->name }}" />
                                                                                @else
                                                                                <img
                                                                                    width="600"
                                                                                    height="600"
                                                                                    src="{{ asset('media/product/1.jpg') }}"
                                                                                    class="post-image"
                                                                                    alt="{{ $related_product->title ?? $related_product->name }}" />
                                                                                <img
                                                                                    width="600"
                                                                                    height="600"
                                                                                    src="{{ asset('media/product/1.jpg') }}"
                                                                                    class="hover-image back"
                                                                                    alt="{{ $related_product->title ?? $related_product->name }}" />
                                                                                @endif
                                                                            </a>
                                                                        </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
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
                        placeholder="Ara..." />
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
