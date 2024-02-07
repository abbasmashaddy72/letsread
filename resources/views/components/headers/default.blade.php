{{-- Mobile Menu --}}
<div class="vs-menu-wrapper">
    <div class="text-center vs-menu-area">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('welcome') }}">
                <x-curator-glider :media="$siteSettings->logo" :srcset="['1200w', '1024w', '640w']" sizes="(max-width: 1200px) 100vw, 1024px" />
            </a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                @foreach ($menu->where('location', 'header')->pluck('items') as $items)
                    @foreach ($items as $translation)
                        <li>
                            <a href="{{ $translation['url'] }}"
                                @if ($translation['blank']) target="__blank" @endif>{{ $translation['title'] }}</a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{-- Side Menu --}}
<div class="sidemenu-wrapper d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget ">
            <div class="widget-about">
                <div class="footer-logo">
                    <x-curator-glider :media="$siteSettings->logo" :srcset="['1200w', '1024w', '640w']" sizes="(max-width: 1200px) 100vw, 1024px" />
                </div>
                <p class="mb-0">{{ $siteSettings->description }}</p>
            </div>
        </div>
        <div class="widget ">
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
</div>

{{-- Search Box --}}
<div class="popup-search-box d-none d-lg-block ">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" class="border-theme" placeholder="What are you looking for">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

{{-- Header --}}
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links style-white">
                        <ul>
                            <li><a href="{{ route('login') }}"><i class="far fa-user-circle"></i>Login & Register</a>
                            </li>
                            <li><a href="#" class="searchBoxTggler"><i class="far fa-search"></i>Search
                                    Keyword</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center col-lg-auto">
                    <div class="header-links style2 style-white">
                        <ul>
                            <li><i class="fas fa-envelope"></i>Email: <a
                                    href="mailto:{{ $siteSettings->email }}">{{ $siteSettings->email }}</a></li>
                            <li><i class="fas fa-mobile-alt"></i>Phone: <a
                                    href="tel:{{ $siteSettings->phone }}">{{ $siteSettings->phone }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrap">
        <div class="sticky-active">
            <div class="container">
                <div class="row gx-3 align-items-center justify-content-between">
                    <div class="col-8 col-sm-auto">
                        <div class="header-logo">
                            <a href="{{ route('welcome') }}">
                                <x-curator-glider :media="$siteSettings->logo" :srcset="['1200w', '1024w', '640w']"
                                    sizes="(max-width: 1200px) 100vw, 1024px" />
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-lg-center">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                @foreach ($menu->where('location', 'header')->pluck('items') as $items)
                                    @foreach ($items as $translation)
                                        <li>
                                            <a href="{{ $translation['url'] }}"
                                                @if ($translation['blank']) target="__blank" @endif>{{ $translation['title'] }}</a>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-icons">
                            <button class="simple-icon sideMenuToggler"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        @foreach ($menu->where('location', 'headerButtons')->pluck('items') as $items)
                            @foreach ($items as $translation)
                                <a href="{{ $translation['url'] }}" class="vs-btn"
                                    @if ($translation['blank']) target="__blank" @endif>{{ $translation['title'] }}</a>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
