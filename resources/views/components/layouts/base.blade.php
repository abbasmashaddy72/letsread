@props([
    'meta' => [],
])

@php
    $title = $meta->title ? $meta->title . ' | ' . config('app.name') : config('app.name');
    $description = $meta->description ? $meta->description : config('app.description');
    $robots = $meta->robots ? 'index,follow' : 'noindex,nofollow';
    $ogImage = $meta->ogImage ? $meta->ogImage : null;

    $fontConfig = config('main.font');
    if (!empty($fontConfig) && !empty($fontConfig['url']) && !empty($fontConfig['family'])) {
        $fontsUrl = $fontConfig['url'];
        $fontFamily = $fontConfig['family'];
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js"
    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Favicons - Place favicon.ico in the root directory --> --}}
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="robots" content="{{ $robots }}" />

    <link rel="canonical" href="{{ trailing_slash_it(url()->current()) }}">

    {{-- Open Graph --> --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ config('brand.social_media.twitter') }}" />
    <meta name="twitter:creator" content="{{ config('brand.social_media.twitter') }}" />

    <meta property="og:url" content="{{ trailing_slash_it(url()->current()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />

    @if ($ogImage)
        <meta property="og:image" content="{{ $ogImage->url }}" />
        <meta property="og:image:alt" content="{{ $ogImage->alt }}" />
        <meta property="og:image:width" content="{{ $ogImage->width }}" />
        <meta property="og:image:height" content="{{ $ogImage->height }}" />
    @endif

    @yield('meta')

    @if (!empty($fontsUrl))
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="{{ $fontsUrl }}" rel="stylesheet" />

        <style>
            body {
                font-family: '{{ $fontFamily }}', 'sans-serif';
            }
        </style>
    @endif

    <style>
        :root {
            @foreach ($cssVariables ?? [] as $cssVariableName => $cssVariableValue)
                --{{ $cssVariableName }}: {{ $cssVariableValue }};
            @endforeach
        }
    </style>

    @stack('styles')
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"> --}}
    {{-- Fontawesome Icon --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    {{-- Layerslider --}}
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.min.css') }}">
    {{-- Magnific Popup --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    {{-- Slick Slider --}}
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    {{-- Theme Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
</head>

<body class="text-base text-slate-950 dark:text-white dark:bg-slate-900">
    <x-skip-link />

    <x-headers.default :siteSettings="$siteSettings" :menu='$menu' />

    @yield('hero')

    {{ $slot }}

    <x-footers.default :siteSettings="$siteSettings" :menu='$menu' />
    {{-- Scroll To Top --}}
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    {{-- Jquery --}}
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- Slick Slider --}}
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/app.min.js') }}"></script> --}}
    {{-- Layerslider --}}
    <script src="{{ asset('assets/js/layerslider.utils.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    {{-- jquery ui --}}
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- Magnific Popup --}}
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    {{-- Isotope Filter --}}
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    {{-- Main Js File --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts

    @stack('scripts')
</body>

</html>
