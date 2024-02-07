<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-bg-1-1.png') }}">
    <div class="footer-top">
        <div class="container">
            <div class="text-center row gx-60 gy-4 text-lg-start justify-content-between align-items-center">
                <div class="col-lg"><a href="{{ route('welcome') }}">
                        <x-curator-glider :media="$siteSettings->logo" :srcset="['1200w', '1024w', '640w']"
                            sizes="(max-width: 1200px) 100vw, 1024px" />
                    </a></div>
                <div class="col-lg-auto">
                    <h3 class="mb-0 text-white h4"><img src="{{ asset('assets/img/icon/check-list.svg') }}"
                            alt="icon" class="me-2"> Enrol your child in a Session now!</h3>
                </div>
                <div class="col-lg-auto"><a href="#" class="vs-btn">Start Registration</a></div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-center gx-60">
                <div class="col-lg-4">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <h3 class="mt-n2">Giving your child the best start in life</h3>
                            <p class="map-link"><img src="{{ asset('assets/img/icon/map.svg') }}"
                                    alt="svg">{{ $siteSettings->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Get In Touch</h3>
                        <div>
                            <p class="footer-text">Monday to Friday: <span class="time">8.30am – 02.00pm</span></p>
                            <p class="footer-text">Saturday, Sunday: <span class="time">Close</span></p>
                            <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a
                                    href="mailto:{{ $siteSettings->email }}">{{ $siteSettings->email }}</a></p>
                            <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a
                                    href="tel:{{ $siteSettings->phone }}">{{ $siteSettings->phone }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Useful Services</h3>
                        <div class="menu-all-pages-container footer-menu">
                            <ul class="menu">
                                @foreach ($menu->where('location', 'footer1')->pluck('items') as $items)
                                    @foreach ($items as $translation)
                                        <li>
                                            <a @if ($translation['blank']) target="__blank" @endif
                                                href="{{ $translation['url'] }}">{{ $translation['title'] }}</a>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="flex-row-reverse row gy-3 justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <div class="footer-social">
                        @foreach ($siteSettings->social as $item)
                            <a href="{{ $item['link'] }}" target="_blank">
                                <i class="align-middle {{ $item['icon'] }}"
                                    title="{{ ucfirst($item['platform']) }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-auto">
                    <p class="copyright-text ">Copyright &copy; {{ date('Y') }}
                        <a href="route('welcome')">{{ config('app.name') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
