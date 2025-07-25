<header id="site-header" class="site-header header-v1">
    <div class="header-mobile">
        <div class="section-padding">
            <div class="section-container">
                <div class="row">
                    <div
                        class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                        <div class="navbar-header">
                            <button
                                type="button"
                                id="show-megamenu"
                                class="navbar-toggle"></button>
                        </div>
                    </div>
                    <div
                        class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                        <div class="site-logo">
                            <a href="index.html">
                                <img
                                    width="400"
                                    height="79"
                                    src="{{ asset('media/logo-dark.png') }}"
                                    alt="Aktaş Kuyumculuk – Kaliteli Takı ve Mücevher" />
                            </a>
                        </div>
                    </div>
                    <div
                        class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                        <div class="mojuri-topcart dropdown">
                            <div class="dropdown mini-cart top-cart">
                                <div class="remove-cart-shadow"></div>
                                <a
                                    class="dropdown-toggle cart-icon"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="icons-cart">
                                        <i class="icon-large-paper-bag"></i><span class="cart-count">2</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu cart-popup">
                                    <div class="cart-empty-wrap">
                                        <ul class="cart-list">
                                            <li class="empty">
                                                <span>No products in the cart.</span>
                                                <a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i
                                                        aria-hidden="true"
                                                        class="arrow_right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mobile-fixed">
            <!-- Shop -->
            <div class="shop-page">
                <a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
            </div>

            <!-- Login -->
            <div class="my-account">
                <div class="login-header">
                    <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                </div>
            </div>

            <!-- Search -->
            <div class="search-box">
                <div class="search-toggle">
                    <i class="wpb-icon-magnifying-glass"></i>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-box">
                <a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
            </div>
        </div>
    </div>

    <div class="header-desktop">
        <div class="header-wrapper">
            <div class="section-padding">
                <div class="section-container large p-l-r">
                    <div class="row">
                        <div
                            class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                            <div class="site-logo">
                                <a href="index.html">
                                    <img
                                        width="400"
                                        height="140"
                                        src="{{ asset('media/logo.png') }}"
                                        alt="Aktaş Kuyumculuk – Kaliteli Takı ve Mücevher" />
                                </a>
                            </div>
                        </div>

                        <div
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-navigation">
                                <nav id="main-navigation">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="level-0 menu-item {{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}"><span class="menu-item-text">ANA SAYFA</span></a>
                                        </li>
                                        <li class="level-0 menu-item {{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}"><span class="menu-item-text">KURUMSAL</span></a>
                                        </li>
                                        <li class="level-0 menu-item menu-item-has-children {{ request()->routeIs('products') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('products') }}"><span class="menu-item-text">ÜRÜNLER</span></a>
                                            <ul class="sub-menu">
                                                @php
                                                    try {
                                                        $categories = \App\ProductCategory::orderBy('name')->get();
                                                    } catch(Exception $e) {
                                                        $categories = collect([]);
                                                    }
                                                @endphp
                                                @foreach($categories as $category)
                                                <li>
                                                    <a href="{{ route('products', ['category' => $category->id]) }}"><span class="menu-item-text">{{ $category->name }}</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="level-0 menu-item menu-item-has-children {{ request()->routeIs('blogs') || request()->routeIs('blog_details') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('blogs') }}"><span class="menu-item-text">BLOG & HABERLER</span></a>
                                            <ul class="sub-menu">
                                                @php
                                                    try {
                                                        $blogs = \App\Blog::orderBy('created_at', 'desc')->take(5)->get();
                                                    } catch(Exception $e) {
                                                        $blogs = collect([]);
                                                    }
                                                @endphp
                                                @foreach($blogs as $blog)
                                                <li>
                                                    <a href="{{ route('blog_details', $blog->slug) }}"><span class="menu-item-text">{{ $blog->title }}</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="level-0 menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}"><span class="menu-item-text">İLETİŞİM</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div
                            class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">
                                <!-- Search -->
                                <div class="search-box">
                                    <div class="search-toggle">
                                        <i class="icon-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
