<!DOCTYPE html>
<html lang="tr">


@extends('layouts.master')
@section('content')

<body class="blog">
    <div id="page" class="hfeed page-wrapper">


        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading"> {{ $blog->title }} </h1>
                            </div>
                            <div class="breadcrumbs"> <a href="/">Ana Sayfa</a><span class="delimiter"></span><a href="{{ route('blogs') }}">Blog & Haberler</a><span class="delimiter"></span>{{ $blog->title }} </div>
                        </div>
                    </div>
                    <div id="content" class="site-content" role="main">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="post-details no-sidebar"> @if($blog->image) <div class="post-image"> <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->title }}" /> </div> @endif <h2 class="post-title">{{ $blog->title }}</h2>
                                    <div class="post-meta"> <span class="post-time"><i class="icon_clock_alt"></i> {{ $blog->created_at->format('d.m.Y') }}</span> </div>
                                    <div class="post-content clearfix"> {!! $blog->description !!} </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- #content -->
                </div> <!-- #primary -->
            </div> <!-- #main-content -->
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
