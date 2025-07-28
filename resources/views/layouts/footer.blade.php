@php
$footerBgImage = asset('media/footer.jpg');
@endphp
<footer
    id="site-footer"
    class="site-footer background four-columns m-t-0"
    style="background-image: url('{{ $footerBgImage }}') ; background-size: cover;  background-repeat: no-repeat;">
    <div class="footer">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-6 column-1">
                            <div class="block block-menu m-b-20">
                                <div class="site-logo footer-logo pb-1">
                                    <a href="{{ route('home') }}">
                                        <img
                                            width="150"
                                            height="auto"
                                            src="{{ Voyager::image(setting('site.logo', 'media/logo.png')) }}"
                                            alt="{{ setting('site.title', 'AKTAŞ KUYUMCULUK') }}" />
                                    </a>
                                </div>
                                <div class="block-content footer-text text-white">
                                    <p>
                                        {{ setting('footer.description', 'AKTAŞ KUYUMCULUK olarak, 20 yılı aşkın deneyimimizle Konya\'nın güvenilir kuyumcu markası olarak hizmet vermekteyiz. Müşterilerimize en kaliteli altın, gümüş ve pırlanta ürünlerini sunuyoruz.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-2">
                            <div class="block block-menu">
                                <h2 class="block-title text-white">HIZLI MENÜ</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">Ana Sayfa</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">Kurumsal</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('products') }}">Ürünler</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blogs') }}">Blog & Haberler</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">İletişim</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-3">
                            <div class="block block-menu">
                                <h2 class="block-title text-white">ÜRÜNLER</h2>
                                <div class="block-content">
                                    <ul>
                                        @php
                                        try {
                                        $recent_products = \App\Product::orderBy('created_at', 'desc')->take(5)->get();
                                        } catch(Exception $e) {
                                        $recent_products = collect([]);
                                        }
                                        @endphp
                                        @foreach($recent_products as $product)
                                        <li>
                                            <a href="{{ route('product_details', $product->slug) }}">{{ $product->title ?? $product->name }}</a>
                                        </li>
                                        @endforeach
                                        @if($recent_products->count() == 0)
                                        <li>
                                            <a href="{{ route('products') }}">Ürünlerimizi İnceleyin</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-3">
                            <div class="block block-menu">
                                <h2 class="block-title text-white">İLETİŞİM</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="https://maps.app.goo.gl/bjZSamUqUUgeNQoB9">
                                                <span class="text-white fw-bold">Adres: </span>{{ setting('iletisim.adress') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:{{ setting('iletisim.phone') }}">
                                                <span class="text-white fw-bold">Telefon: </span>{{ setting('iletisim.phone') }}
                                            </a>
                                        </li>
                                        <li>
                                            <span class="text-white fw-bold">Email:</span>
                                            <a href="mailto:{{ setting('iletisim.email') }}">{{ setting('iletisim.e-mail') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block block-social">
                                    <ul class="social-link">
                                        <li>
                                            <a href="{{ setting('iletisim.instagram') }}" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ setting('iletisim.facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
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
    <div class="footer-bottom">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row">
                        <div class="col-12 display-flex justify-content-center">
                            <div class="footer-left">
                                <p class="copyright">
                                    <span>
                                        Tüm hakları saklıdır.Tasarım ve uygulama © 2025</span>
                                    <a href="https://pylixmedia.com/" target="_blank">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="" width="60" /></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
