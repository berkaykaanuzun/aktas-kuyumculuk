<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Ana Sayfa - ' . setting('site.title', 'Aktaş Kuyumculuk'))</title>
    <meta name="description" content="@yield('meta_description', setting('site.description', 'Aktaş Kuyumculuk olarak kaliteli takı ve mücevher ürünlerimizle sizlere hizmet veriyoruz. Altın, gümüş, pırlanta ve daha fazlası için bizi tercih edin.'))" />
    <meta name="keywords" content="@yield('meta_keywords', setting('site.keywords', 'kuyumcu, takı, mücevher, altın, gümüş, pırlanta, yüzük, kolye, küpe, bilezik, Aktaş Kuyumculuk'))" />
    <meta name="author" content="@yield('meta_author', setting('site.author', 'Aktaş Kuyumculuk'))" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Ana Sayfa - ' . setting('site.title', 'Aktaş Kuyumculuk'))" />
    <meta property="og:description" content="@yield('og_description', setting('site.description', 'Aktaş Kuyumculuk olarak kaliteli takı ve mücevher ürünlerimizle sizlere hizmet veriyoruz.'))" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', Voyager::image(setting('site.logo', 'media/logo-dark.png')))" />
    <meta property="og:site_name" content="@yield('og_site_name', setting('site.name', 'Aktaş Kuyumculuk'))" />
    <meta property="og:locale" content="tr_TR" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', 'Ana Sayfa - ' . setting('site.title', 'Aktaş Kuyumculuk'))" />
    <meta name="twitter:description" content="@yield('twitter_description', setting('site.description', 'Aktaş Kuyumculuk olarak kaliteli takı ve mücevher ürünlerimizle sizlere hizmet veriyoruz.'))" />
    <meta name="twitter:image" content="@yield('twitter_image', Voyager::image(setting('site.logo', 'media/logo-dark.png')))" />

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.favicon', 'media/favicon.png')) }}" />
    <link rel="apple-touch-icon" href="{{ Voyager::image(setting('site.favicon', 'media/favicon.png')) }}" />

    <!-- Dependency Styles -->
    <link
      rel="stylesheet"
      href="/libs/bootstrap/css/bootstrap.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/feather-font/css/iconfont.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/icomoon-font/css/icomoon.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/font-awesome/css/font-awesome.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/wpbingofont/css/wpbingofont.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/elegant-icons/css/elegant.css"
      type="text/css"
    />
    <link rel="stylesheet" href="/libs/slick/css/slick.css" type="text/css" />
    <link
      rel="stylesheet"
      href="/libs/slick/css/slick-theme.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="/libs/mmenu/css/mmenu.min.css"
      type="text/css"
    />

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />

    <!-- Google Web Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
      rel="stylesheet"
    />
</head>
