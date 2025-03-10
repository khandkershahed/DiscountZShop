<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta Tags for SEO & Social Sharing -->
    <meta property="og:title" content="{{ $setting->site_motto ?? config('app.name') }}" />
    <meta property="og:url" content="{{ $setting->site_url ?? config('app.url') }}" />
    <meta property="og:site_name" content="{{ $setting->site_name ?? config('app.name') }}" />

    <!-- Canonical URL for SEO -->
    <link rel="canonical" href="{{ $setting->site_url ?? config('app.url') }}" />

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ $setting->site_favicon && file_exists(public_path('storage/' . $setting->site_favicon)) ? asset('storage/' . $setting->site_favicon) : asset('images/no_icon.png') }}"
        type="image/x-icon" />

    <!-- Page Title -->
    @props(['title'])
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mobile-style.css') }}" />
</head>

<body>
    <!-- Loader Section -->
    <div id="loader" class="discount_loader">
        <img src="{{ asset('frontend/assets/img/loader.gif') }}" alt="Loading..." />
    </div>

    <!-- Main Content Wrapper -->
    <div id="content" class="discount_content" style="display: none">
        <div>
            <!-- Top Area Section -->
            @include('frontend.layouts.header-top')

            <!-- Header and Navigation -->
            @include('frontend.layouts.header')

            <!-- Main Content Area -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer Section -->
            @include('frontend.layouts.footer')
        </div>
    </div>

    <!-- JavaScript Dependencies -->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('frontend/assets/js/icons/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slider/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script-dev.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/bd/bd-all.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BW1ZWY5Q1E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-BW1ZWY5Q1E');
    </script>

    <!-- AJAX Setup for CSRF Token -->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the loader
            document.getElementById("loader").style.display = "none";
            // Show the content
            document.getElementById("content").style.display = "block";
        });
    </script>
    {{-- There Is No Code In Toastr --}}
    @include('toastr')
    @stack('scripts')
</body>

</html>
