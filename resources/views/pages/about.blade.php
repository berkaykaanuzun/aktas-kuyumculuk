<!DOCTYPE html>
<html lang="tr">


@extends('layouts.master')
@section('content')

<body class="page">
    <div id="page" class="hfeed page-wrapper">
        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading">Kurumsal</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="/">Ana Sayfa</a><span class="delimiter"></span>Kurumsal
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="page-about-us">
                            <section class="section section-padding m-b-70">
                                <div class="section-container">
                                    <!-- Block Intro (Layout 5) -->
                                    <div class="block block-intro layout-5 text-center">
                                        <div class="block-widget-wrap">
                                            <div class="intro-wrap">
                                                <div class="intro-icon animation-horizontal">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        id="Capa_1"
                                                        height="512"
                                                        viewBox="0 0 512.001 512.001"
                                                        width="512">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m479.371 131.029c-3.099 0-6.154-1.436-8.11-4.139-3.236-4.475-2.233-10.727 2.241-13.963l22.638-16.376c4.475-3.239 10.727-2.233 13.964 2.241 3.236 4.475 2.233 10.727-2.241 13.963l-22.638 16.376c-1.772 1.281-3.823 1.898-5.854 1.898z"></path>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m32.63 131.029c-2.032 0-4.082-.617-5.854-1.898l-22.637-16.376c-4.475-3.237-5.478-9.488-2.241-13.963 3.238-4.474 9.49-5.478 13.964-2.241l22.638 16.375c4.475 3.237 5.478 9.488 2.241 13.963-1.956 2.703-5.012 4.14-8.111 4.14z"></path>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m256.001 49.025c-5.522 0-10-4.477-10-10v-23.867c0-5.523 4.478-10 10-10s10 4.477 10 10v23.866c0 5.523-4.478 10.001-10 10.001z"></path>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m492.647 215.277-77.499-133.949c-1.787-3.09-5.086-4.992-8.655-4.992h-300.986c-3.569 0-6.868 1.902-8.655 4.992l-77.498 133.949c-2.092 3.614-1.717 8.147.939 11.369l227.991 276.558c1.899 2.305 4.729 3.639 7.716 3.639s5.816-1.334 7.716-3.639l85.631-103.871 1.009.399 22.572 57.368c1.505 3.824 5.196 6.338 9.306 6.338s7.801-2.514 9.306-6.338l22.572-57.368 57.228-22.623c3.817-1.509 6.324-5.196 6.324-9.3s-2.507-7.791-6.323-9.3l-57.229-22.623-4.026-10.231 81.621-99.009c2.657-3.222 3.032-7.754.94-11.369zm-25.994-4.992h-113.904l53.737-103.991zm-210.652 248.864-67.465-228.863h22.259c5.522 0 10-4.477 10-10s-4.478-10-10-10h-17.303l62.508-102.427 62.508 102.426h-17.301c-5.522 0-10 4.477-10 10s4.478 10 10 10h22.26zm79.601-259.246-63.204-103.567h116.722zm-167.918 30.382 65.943 223.697-184.414-223.697zm8.713-30.382-53.517-103.567h116.722zm-70.883-93.609 53.736 103.991h-113.902zm172.86 347.689 21.836-74.074 29.588 11.696zm162.089-86.174-37.741 14.919c-2.577 1.019-4.615 3.06-5.63 5.638l-14.857 37.76-14.857-37.76c-1.015-2.578-3.053-4.62-5.63-5.638l-37.741-14.919 37.742-14.92c2.576-1.019 4.614-3.06 5.629-5.638l14.857-37.76 14.857 37.76c1.015 2.578 3.053 4.62 5.629 5.638zm-48.923-89.291c-1.505-3.824-5.196-6.338-9.306-6.338s-7.801 2.514-9.306 6.338l-22.572 57.368-42.071 16.631 36.032-122.232h118.47l-61.075 74.087z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="m256.18 230.291c-4.12 0-7.897-2.638-9.35-6.483-1.491-3.948-.269-8.58 3.006-11.255 3.235-2.643 7.897-2.987 11.481-.842 3.583 2.144 5.496 6.426 4.674 10.529-.924 4.61-5.103 8.051-9.811 8.051z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h2 class="intro-title"> {{ setting('kurumsal.title', 'Hikayemizin Başlangıcı') }}</h2>
                                                <div class="intro-text">
                                                    {{ setting('kurumsal.description') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-padding m-t-20 m-b-70">
                                <div class="section-container">
                                    <!-- Block Banners -->
                                    <div class="block block-banners banners-effect">
                                        <div class="block-widget-wrap">
                                            <div class="row">
                                                <div class="col-md-4 sm-m-b-20">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image hover-opacity">
                                                                    <a href="javascript:void(0)">
                                                                        <img
                                                                            src="{{ Voyager::image(setting('kurumsal.image-1', 'media/banner/banner-about-1.jpg')) }}"
                                                                            alt="Banner Image" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 sm-m-b-20">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image hover-opacity">
                                                                    <a href="javascript:void(0)">
                                                                        <img
                                                                            src="{{ Voyager::image(setting('kurumsal.image-2', 'media/banner/banner-about-2.jpg')) }}"
                                                                            alt="Banner Image" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image hover-opacity">
                                                                    <a href="javascript:void(0)">
                                                                        <img
                                                                            src="{{ Voyager::image(setting('kurumsal.image-3', 'media/banner/banner-about-3.jpg')) }}"
                                                                            alt="Banner Image" />
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
                            </section>
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
