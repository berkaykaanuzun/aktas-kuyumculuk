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
                                <h1 class="text-title-heading">Blog & Haberler</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="/">Ana Sayfa</a><span class="delimiter"></span>Blog & Haberler
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                              <div class="posts-list grid">
                                    <div class="row">
                                        @forelse ($blogs as $blog)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="post-entry clearfix post-wapper">
                                                <div class="post-image">
                                                    <a href="{{ route('blog_details', $blog->slug) }}">
                                                        @if($blog->image)
                                                        <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->title }}"  style="width: 100%; height: 215px; object-fit: cover;"/>
                                                        @else
                                                        <img src="media/blog/1.jpg" alt="{{ $blog->title }}" />
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="{{ route('blog_details', $blog->slug) }}">{{ $blog->title }}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-time">{{ $blog->created_at->format('d.m.Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-12">
                                            <div class="alert alert-info text-center">
                                                Henüz blog yazısı bulunmamaktadır.
                                            </div>
                                        </div>
                                        @endforelse
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
                        placeholder="Ara..." />
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->






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
