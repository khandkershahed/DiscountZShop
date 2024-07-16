<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="{{ !empty($setting->site_motto) ? $setting->site_motto : config('app.name') }}" />
    <meta property="og:url" content="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <meta property="og:site_name"
        content="{{ !empty($setting->site_name) ? $setting->site_name : config('app.name') }}" />
    <link rel="canonical" href="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap_icons.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/css/font_awesome_6.css') }}"> --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">


    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @props(['title'])
    <title>{{ $title ?? config('app.name') }}</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">


    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            @include('admin.layouts.sidebar')


            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('admin.layouts.header')


                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    @include('admin.layouts.toolbar')


                    <div class="post d-flex flex-column-fluid" id="kt_post">

                        <div id="kt_content_container" class="container-xxl">

                            {{ $slot }}

                        </div>

                    </div>

                </div>


                @include('admin.layouts.footer')

            </div>

        </div>

    </div>


    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>

    </div>



    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>


    <script src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>



    <script src="{{ asset('admin/assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script src="{{ asset('admin/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>

    <script src="{{ asset('admin/js/custom.js') }}"></script>
    @include('toastr')
    @stack('scripts')



</body>

</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title"
        content="{{ !empty($setting->site_motto) ? $setting->site_motto : config('app.name') }}" />
    <meta property="og:url" content="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <meta property="og:site_name"
        content="{{ !empty($setting->site_name) ? $setting->site_name : config('app.name') }}" />
    <link rel="canonical" href="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <link rel="shortcut icon"
        href="{{ !empty($site->site_logo) && file_exists(public_path('storage/settings/' . $site->site_logo)) ? asset('storage/settings/' . $site->site_logo) : asset('images') }}"
        type="image/x-icon" />

    <title>{{ $setting->site_name ?? config('app.name') }}</title>
    <!-- CSS Links -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick-theme.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body>
    <div id="loader">
        <img src="{{ asset('frontend/assets/img/loader.gif') }}" alt="Loading..." />
    </div>

    <div id="content" style="display: none">
        <!-- Top Area Box -->
        <div class="container-fluid py-3">
            <div class="container px-0">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="logo-text">discount<span class="main-color extrafont"
                                style="font-size: 30px">Z</span>shop</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="pe-3 user-name">Saju</div>
                            <div class="btn-group">
                                <a href="javascript:void(0)"
                                    class="border-0 bg-transparent dropdown-toggle custom-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="pe-3">
                                        <img class="profile-logo-account" src="./assets/img/profile/profile-one.png"
                                            alt="" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu toggler-menu py-3">
                                    <li class="dropdown-item pb-2">
                                        <a href=""><i class="fa-solid fa-house-user main-color pe-2"></i>
                                            Dashboard</a>
                                    </li>
                                    <li class="dropdown-item pb-2">
                                        <a href=""><i class="fa-solid fa-wallet main-color pe-2"></i>
                                            Points</a>
                                    </li>
                                    <li class="dropdown-item pb-2">
                                        <a href=""><i class="fa-solid fa-percent main-color pe-3"></i>My
                                            Discounts</a>
                                    </li>
                                    <div class="d-flex justify-content-center align-items-center pt-3">
                                        <button class="btn btn-common-one rounded-pill px-4 pt-2">
                                            <i class="fa-solid fa-right-from-bracket"></i> Log Out
                                        </button>
                                    </div>
                                </ul>
                            </div>
                            <div>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29"
                                        viewBox="0 0 30 29" fill="none">
                                        <path
                                            d="M28.6364 12.5311V9.19017C28.6369 8.82112 28.5646 8.4556 28.4236 8.11454C28.2827 7.77348 28.0758 7.46359 27.8148 7.20264C27.5538 6.94168 27.244 6.73479 26.9029 6.59381C26.5618 6.45283 26.1963 6.38054 25.8273 6.38108H24L9.06818 0.162897C8.81429 0.0556622 8.54152 0.000277985 8.26592 1.04377e-06C7.99031 -0.000275898 7.71743 0.0545601 7.46333 0.161284C7.20922 0.268008 6.97902 0.424465 6.78627 0.621455C6.59351 0.818444 6.44209 1.05199 6.34091 1.30835L4.30909 6.38108H2.80909C2.44005 6.38054 2.07452 6.45283 1.73346 6.59381C1.39241 6.73479 1.08252 6.94168 0.821566 7.20264C0.56061 7.46359 0.353715 7.77348 0.212735 8.11454C0.0717561 8.4556 -0.000535636 8.82112 2.98779e-06 9.19017V25.3902C-0.000535636 25.7592 0.0717561 26.1247 0.212735 26.4658C0.353715 26.8069 0.56061 27.1167 0.821566 27.3777C1.08252 27.6386 1.39241 27.8455 1.73346 27.9865C2.07452 28.1275 2.44005 28.1998 2.80909 28.1993H25.8273C26.1963 28.1998 26.5618 28.1275 26.9029 27.9865C27.244 27.8455 27.5538 27.6386 27.8148 27.3777C28.0758 27.1167 28.2827 26.8069 28.4236 26.4658C28.5646 26.1247 28.6369 25.7592 28.6364 25.3902V22.0493C29.0011 22.0366 29.3467 21.8833 29.6009 21.6215C29.8551 21.3596 29.9981 21.0096 30 20.6447V13.9356C29.9981 13.5707 29.8551 13.2207 29.6009 12.9589C29.3467 12.6971 29.0011 12.5438 28.6364 12.5311ZM7.60909 1.8129C7.64181 1.72409 7.69265 1.64307 7.75838 1.57499C7.82412 1.5069 7.90331 1.45325 7.99091 1.41744C8.16636 1.34938 8.36092 1.34938 8.53637 1.41744L20.4545 6.38108H17.1545L9.08182 3.69471C8.91528 3.63674 8.73275 3.64554 8.57257 3.71928C8.41238 3.79302 8.28699 3.92595 8.22273 4.09017L7.33637 6.38108H5.78182L7.60909 1.8129ZM12.8455 6.38108H8.80909L9.25909 5.19471L12.8455 6.38108ZM27.2727 25.3902C27.2724 25.7734 27.12 26.1409 26.849 26.4119C26.578 26.6829 26.2105 26.8353 25.8273 26.8356H2.80909C2.42585 26.8353 2.0584 26.6829 1.7874 26.4119C1.5164 26.1409 1.364 25.7734 1.36364 25.3902V9.19017C1.36614 8.80758 1.51923 8.44138 1.78977 8.17084C2.0603 7.90031 2.42651 7.74722 2.80909 7.74471H25.8273C26.2099 7.74722 26.5761 7.90031 26.8466 8.17084C27.1171 8.44138 27.2702 8.80758 27.2727 9.19017V12.5174H21.1364C19.8706 12.5174 18.6566 13.0203 17.7615 13.9153C16.8665 14.8104 16.3636 16.0244 16.3636 17.2902C16.3636 18.556 16.8665 19.7699 17.7615 20.665C18.6566 21.5601 19.8706 22.0629 21.1364 22.0629H27.2727V25.3902ZM28.6364 20.6447C28.6354 20.6589 28.6294 20.6722 28.6193 20.6822C28.6093 20.6922 28.596 20.6983 28.5818 20.6993H21.1364C20.2322 20.6993 19.3651 20.3401 18.7258 19.7008C18.0864 19.0614 17.7273 18.1943 17.7273 17.2902C17.7273 16.386 18.0864 15.5189 18.7258 14.8796C19.3651 14.2402 20.2322 13.8811 21.1364 13.8811L28.6364 13.9356V20.6447Z"
                                            fill="#252525" />
                                        <path
                                            d="M21.1363 15.2446C20.7317 15.2446 20.3363 15.3646 19.9999 15.5894C19.6635 15.8141 19.4013 16.1336 19.2465 16.5073C19.0917 16.8811 19.0512 17.2924 19.1301 17.6892C19.209 18.0859 19.4039 18.4504 19.6899 18.7365C19.976 19.0225 20.3404 19.2173 20.7372 19.2963C21.134 19.3752 21.5453 19.3347 21.919 19.1799C22.2928 19.025 22.6122 18.7629 22.837 18.4265C23.0618 18.0901 23.1817 17.6947 23.1817 17.2901C23.1817 16.7476 22.9662 16.2273 22.5826 15.8437C22.199 15.4602 21.6788 15.2446 21.1363 15.2446ZM21.1363 17.9719C21.0014 17.9719 20.8696 17.9319 20.7575 17.857C20.6454 17.7821 20.558 17.6756 20.5064 17.551C20.4548 17.4264 20.4412 17.2893 20.4676 17.1571C20.4939 17.0248 20.5588 16.9033 20.6542 16.808C20.7495 16.7126 20.871 16.6477 21.0033 16.6214C21.1355 16.5951 21.2726 16.6086 21.3972 16.6602C21.5218 16.7118 21.6283 16.7992 21.7032 16.9113C21.7781 17.0234 21.8181 17.1553 21.8181 17.2901C21.8181 17.4709 21.7463 17.6444 21.6184 17.7722C21.4905 17.9001 21.3171 17.9719 21.1363 17.9719ZM8.18173 11.1537C8.18173 11.3346 8.10989 11.508 7.98203 11.6359C7.85416 11.7637 7.68074 11.8356 7.49991 11.8356H4.77264C4.59181 11.8356 4.41839 11.7637 4.29052 11.6359C4.16265 11.508 4.09082 11.3346 4.09082 11.1537C4.09082 10.9729 4.16265 10.7995 4.29052 10.6716C4.41839 10.5438 4.59181 10.4719 4.77264 10.4719H7.49991C7.68074 10.4719 7.85416 10.5438 7.98203 10.6716C8.10989 10.7995 8.18173 10.9729 8.18173 11.1537ZM10.909 13.881C10.909 14.0618 10.8372 14.2353 10.7093 14.3631C10.5814 14.491 10.408 14.5628 10.2272 14.5628H4.77264C4.59181 14.5628 4.41839 14.491 4.29052 14.3631C4.16265 14.2353 4.09082 14.0618 4.09082 13.881C4.09082 13.7002 4.16265 13.5268 4.29052 13.3989C4.41839 13.271 4.59181 13.1992 4.77264 13.1992H10.2272C10.408 13.1992 10.5814 13.271 10.7093 13.3989C10.8372 13.5268 10.909 13.7002 10.909 13.881Z"
                                            fill="#252525" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Area Box End -->
        <!-- Header and Navigation -->
        <header class="sticky-top bg-light">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container px-0">
                    <!-- Toggler Button for Mobile View -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item d-flex align-items-center">
                                <!-- Current Location -->
                                <a class="nav-link current-location shadow-sm" aria-current="page"
                                    title="Location Wise Current Discount" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                        x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M341.476 338.285c54.483-85.493 47.634-74.827 49.204-77.056C410.516 233.251 421 200.322 421 166 421 74.98 347.139 0 256 0 165.158 0 91 74.832 91 166c0 34.3 10.704 68.091 31.19 96.446l48.332 75.84C118.847 346.227 31 369.892 31 422c0 18.995 12.398 46.065 71.462 67.159C143.704 503.888 198.231 512 256 512c108.025 0 225-30.472 225-90 0-52.117-87.744-75.757-139.524-83.715zm-194.227-92.34a15.57 15.57 0 0 0-.517-.758C129.685 221.735 121 193.941 121 166c0-75.018 60.406-136 135-136 74.439 0 135 61.009 135 136 0 27.986-8.521 54.837-24.646 77.671-1.445 1.906 6.094-9.806-110.354 172.918L147.249 245.945zM256 482c-117.994 0-195-34.683-195-60 0-17.016 39.568-44.995 127.248-55.901l55.102 86.463a14.998 14.998 0 0 0 25.298 0l55.101-86.463C411.431 377.005 451 404.984 451 422c0 25.102-76.313 60-195 60z"
                                                fill="#ffffff" opacity="1" data-original="#000000"
                                                class=""></path>
                                            <path
                                                d="M256 91c-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75-33.645-75-75-75zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z"
                                                fill="#ffffff" opacity="1" data-original="#000000"
                                                class=""></path>
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown position-static">
                                    <a href="javascript:void(0)" class="dropdown-toggle ms-3 category-menu"
                                        type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                        <span>
                                            Menu
                                            <div class="ps-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.2998 5.4999C3.2998 5.20816 3.4157 4.92838 3.62199 4.72209C3.82828 4.5158 4.10807 4.3999 4.3998 4.3999H17.5998C17.8915 4.3999 18.1713 4.5158 18.3776 4.72209C18.5839 4.92838 18.6998 5.20816 18.6998 5.4999C18.6998 5.79164 18.5839 6.07143 18.3776 6.27772C18.1713 6.48401 17.8915 6.5999 17.5998 6.5999H4.3998C4.10807 6.5999 3.82828 6.48401 3.62199 6.27772C3.4157 6.07143 3.2998 5.79164 3.2998 5.4999ZM3.2998 10.9999C3.2998 10.7082 3.4157 10.4284 3.62199 10.2221C3.82828 10.0158 4.10807 9.8999 4.3998 9.8999H10.9998C11.2915 9.8999 11.5713 10.0158 11.7776 10.2221C11.9839 10.4284 12.0998 10.7082 12.0998 10.9999C12.0998 11.2916 11.9839 11.5714 11.7776 11.7777C11.5713 11.984 11.2915 12.0999 10.9998 12.0999H4.3998C4.10807 12.0999 3.82828 11.984 3.62199 11.7777C3.4157 11.5714 3.2998 11.2916 3.2998 10.9999ZM3.2998 16.4999C3.2998 16.2082 3.4157 15.9284 3.62199 15.7221C3.82828 15.5158 4.10807 15.3999 4.3998 15.3999H17.5998C17.8915 15.3999 18.1713 15.5158 18.3776 15.7221C18.5839 15.9284 18.6998 16.2082 18.6998 16.4999C18.6998 16.7916 18.5839 17.0714 18.3776 17.2777C18.1713 17.484 17.8915 17.5999 17.5998 17.5999H4.3998C4.10807 17.5999 3.82828 17.484 3.62199 17.2777C3.4157 17.0714 3.2998 16.7916 3.2998 16.4999Z"
                                                        fill="#F15A2D" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu w-100 border-0 bg-light mt-0 rounded-0 py-0"
                                        aria-labelledby="dropdownMenuButton1"
                                        style="
                        border-top: 2px solid #eee !important;
                        background-image: url(./assets/img/shape/shape1.avif);
                        object-fit: fill;
                      ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2 bg-white px-0">
                                                    <ul class="nav nav-tabs flex-column border-0" id="myTab"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0 active"
                                                                id="home-tab" data-bs-toggle="tab"
                                                                data-bs-target="#home" type="button" role="tab"
                                                                aria-controls="home" aria-selected="true">
                                                                Kitchen Accessories
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0"
                                                                id="profile-tab" data-bs-toggle="tab"
                                                                data-bs-target="#profile" type="button"
                                                                role="tab" aria-controls="profile"
                                                                aria-selected="false">
                                                                Health And Beauty
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0"
                                                                id="contact-tab" data-bs-toggle="tab"
                                                                data-bs-target="#contact" type="button"
                                                                role="tab" aria-controls="contact"
                                                                aria-selected="false">
                                                                Winter Collections
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0"
                                                                id="contact-tab" data-bs-toggle="tab"
                                                                data-bs-target="#contact" type="button"
                                                                role="tab" aria-controls="contact"
                                                                aria-selected="false">
                                                                Home Appliances
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0"
                                                                id="contact-tab" data-bs-toggle="tab"
                                                                data-bs-target="#contact" type="button"
                                                                role="tab" aria-controls="contact"
                                                                aria-selected="false">
                                                                Ladies Bag Collections
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0"
                                                                id="contact-tab" data-bs-toggle="tab"
                                                                data-bs-target="#contact" type="button"
                                                                role="tab" aria-controls="contact"
                                                                aria-selected="false">
                                                                Furniture Item
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home"
                                                            role="tabpanel" aria-labelledby="home-tab">
                                                            <div class="row py-4" style="background-color: #eee">
                                                                <div class="col-lg-4">
                                                                    <h6 class="divider-title">
                                                                        Bathroom Accessories
                                                                    </h6>
                                                                    <span class="divider-underline"></span>
                                                                    <ul class="ps-0 pt-3 main-category-dropdown">
                                                                        <li class="p-1">
                                                                            <a href="#">Wall Fitting Rack</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Kitchen Trolley</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Multi-Functional Knife
                                                                                Holder</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Commode Stand</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h6 class="divider-title">
                                                                        Metal Furniture
                                                                    </h6>
                                                                    <span class="divider-underline"></span>
                                                                    <ul class="ps-0 pt-3 main-category-dropdown">
                                                                        <li class="p-1">
                                                                            <a href="#">Wall Fitting Rack</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Kitchen Trolley</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Multi-Functional Knife
                                                                                Holder</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Commode Stand</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h6 class="divider-title">Clothing Item</h6>
                                                                    <span class="divider-underline"></span>
                                                                    <ul class="ps-0 pt-3 main-category-dropdown">
                                                                        <li class="p-1">
                                                                            <a href="#">Wall Fitting Rack</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Kitchen Trolley</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Multi-Functional Knife
                                                                                Holder</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Commode Stand</a>
                                                                        </li>
                                                                        <li class="p-1">
                                                                            <a href="#">Double Layer High
                                                                                Quality</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                                            aria-labelledby="profile-tab">
                                                            ...
                                                        </div>
                                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                                            aria-labelledby="contact-tab">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link active" href="index.html">Home <span
                                        class="ps-3"> | </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link" href="offers.html">Offers <span class="ps-3"> |
                                    </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link" href="#">All Brands <span class="ps-3"> |
                                    </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link" href="brand-all.html">Brands</a>
                            </li>
                        </ul>
                        <!-- Search Form -->
                        <form class="d-flex" role="search">
                            <div class="d-flex hdr-search align-items-center">
                                <a href="#" class="border-0 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_64_445)">
                                            <path
                                                d="M0.9375 9.84376V7.50001C0.941711 7.35668 0.976892 7.21595 1.04063 7.08751L3.32812 2.49376C3.56197 2.02534 3.92193 1.63149 4.36747 1.35655C4.81301 1.0816 5.32645 0.936477 5.85 0.937505H24.15C24.6735 0.936477 25.187 1.0816 25.6325 1.35655C26.0781 1.63149 26.438 2.02534 26.6719 2.49376L28.9594 7.07813C29.0244 7.20943 29.0596 7.3535 29.0625 7.50001V9.84376C29.0614 10.5371 28.8898 11.2196 28.5629 11.831C28.2359 12.4425 27.7636 12.9641 27.1875 13.35V27.1875H28.125C28.3736 27.1875 28.6121 27.2863 28.7879 27.4621C28.9637 27.6379 29.0625 27.8764 29.0625 28.125C29.0625 28.3736 28.9637 28.6121 28.7879 28.7879C28.6121 28.9637 28.3736 29.0625 28.125 29.0625H1.875C1.62636 29.0625 1.3879 28.9637 1.21209 28.7879C1.03627 28.6121 0.9375 28.3736 0.9375 28.125C0.9375 27.8764 1.03627 27.6379 1.21209 27.4621C1.3879 27.2863 1.62636 27.1875 1.875 27.1875H2.8125V13.35C2.23643 12.9641 1.7641 12.4425 1.43713 11.831C1.11016 11.2196 0.938576 10.5371 0.9375 9.84376ZM2.8125 9.84376C2.8125 10.4654 3.05943 11.0615 3.49897 11.501C3.93851 11.9406 4.53465 12.1875 5.15625 12.1875C5.77785 12.1875 6.37399 11.9406 6.81353 11.501C7.25307 11.0615 7.5 10.4654 7.5 9.84376V8.43751H2.8125V9.84376ZM27.1875 9.84376V8.43751H22.5V9.84376C22.5 10.4654 22.7469 11.0615 23.1865 11.501C23.626 11.9406 24.2221 12.1875 24.8438 12.1875C25.4654 12.1875 26.0615 11.9406 26.501 11.501C26.9406 11.0615 27.1875 10.4654 27.1875 9.84376ZM20.625 8.43751H15.9375V9.84376C15.9375 10.4654 16.1844 11.0615 16.624 11.501C17.0635 11.9406 17.6596 12.1875 18.2812 12.1875C18.9029 12.1875 19.499 11.9406 19.9385 11.501C20.3781 11.0615 20.625 10.4654 20.625 9.84376V8.43751ZM14.0625 8.43751H9.375V9.84376C9.375 10.4654 9.62193 11.0615 10.0615 11.501C10.501 11.9406 11.0971 12.1875 11.7188 12.1875C12.3404 12.1875 12.9365 11.9406 13.376 11.501C13.8156 11.0615 14.0625 10.4654 14.0625 9.84376V8.43751ZM24.9937 3.32813C24.9151 3.1721 24.7945 3.04114 24.6454 2.95003C24.4963 2.85892 24.3247 2.81129 24.15 2.81251H5.85C5.67528 2.81129 5.5037 2.85892 5.35462 2.95003C5.20553 3.04114 5.08487 3.1721 5.00625 3.32813L3.39375 6.56251H26.6063L24.9937 3.32813ZM12.1875 27.1875H17.8125V21.5625C17.8125 21.3139 17.7137 21.0754 17.5379 20.8996C17.3621 20.7238 17.1236 20.625 16.875 20.625H13.125C12.8764 20.625 12.6379 20.7238 12.4621 20.8996C12.2863 21.0754 12.1875 21.3139 12.1875 21.5625V27.1875ZM4.6875 27.1875H10.3125V21.5625C10.3125 20.8166 10.6088 20.1012 11.1363 19.5738C11.6637 19.0463 12.3791 18.75 13.125 18.75H16.875C17.6209 18.75 18.3363 19.0463 18.8637 19.5738C19.3912 20.1012 19.6875 20.8166 19.6875 21.5625V27.1875H25.3125V14.0625C25.1573 14.0874 25.0008 14.1031 24.8438 14.1094C24.2109 14.1039 23.5874 13.9562 23.0194 13.677C22.4514 13.3979 21.9535 12.9946 21.5625 12.4969C21.167 12.9862 20.6671 13.3809 20.0994 13.6521C19.5316 13.9233 18.9104 14.064 18.2812 14.064C17.6521 14.064 17.0309 13.9233 16.4631 13.6521C15.8954 13.3809 15.3955 12.9862 15 12.4969C14.6045 12.9862 14.1046 13.3809 13.5369 13.6521C12.9691 13.9233 12.3479 14.064 11.7188 14.064C11.0896 14.064 10.4684 13.9233 9.90062 13.6521C9.33287 13.3809 8.83296 12.9862 8.4375 12.4969C8.04189 12.986 7.54192 13.3804 6.97418 13.6513C6.40644 13.9222 5.78531 14.0627 5.15625 14.0625C5.00014 14.0717 4.84361 14.0717 4.6875 14.0625V27.1875Z"
                                                fill="#252525" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_64_445">
                                                <rect width="30" height="30" fill="white"
                                                    transform="matrix(-1 0 0 1 30 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <input class="form-control hdr-search-box" type="search" placeholder="Search"
                                    aria-label="Search" />
                            </div>
                            <button class="btn position-relative border-0 bg-transparent search-action"
                                type="submit">
                                <i class="fa-solid fa-search text-muted"></i>
                            </button>
                            <button class="border-0 bg-transparent bt-common bt-common-heart">
                                <i class="fa-regular fa-heart fs-2 fw-normal">
                                    <span class="cart-count">0</span>
                                </i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header and Navigation End -->
        <!-- Main Content Start -->
        <main>
            <!-- Hero Section -->
            <section>
                <div class="container-fluid px-0" style="overflow: hidden">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row gx-3">
                                <div class="col-lg-7">
                                    <div class="slick-slider" style="height: 100%">
                                        <div class="hero-slider">
                                            <div class="items">
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner1.png" alt="" />
                                            </div>
                                            <div class="items">
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner1.png" alt="" />
                                            </div>
                                            <div class="items">
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner1.png" alt="" />
                                            </div>
                                            <div class="items">
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner1.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row gx-3">
                                        <div class="col-lg-12">
                                            <div>
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner2.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 gx-3">
                                        <div class="col-lg-6">
                                            <div>
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner3.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <img class="img-fluid w-100 responsive-img"
                                                    src="./assets/img/banner/banner4.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->
            <!-- Available Coupon Start -->
            <section>
                <div class="container pt-70 pb-70 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0 border-0 shadow-sm">
                                <div class="card-header py-3 px-5" style="border-bottom: 1px solid #eee">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="d-flex align-items-center">
                                                <h4 class="coupon-title mb-0 pe-3">
                                                    Available Coupon
                                                </h4>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36"
                                                        height="23" viewBox="0 0 36 23" fill="none">
                                                        <path
                                                            d="M28.6172 14.5408C28.0353 14.5408 27.5625 15.0064 27.5625 15.5794C27.5625 16.1525 28.0353 16.618 28.6172 16.618C29.1991 16.618 29.6719 16.1525 29.6719 15.5794C29.6719 15.0064 29.1991 14.5408 28.6172 14.5408Z"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M34.9453 0H10.6344V3.11591C10.6344 3.69 10.1627 4.15455 9.57973 4.15455C8.99677 4.15455 8.52504 3.69 8.52504 3.11591V0H1.05469C0.471727 0 0 0.464547 0 1.03864V7.27045C0 7.84454 0.471727 8.30909 1.05469 8.30909C2.79942 8.30909 4.21875 9.70682 4.21875 11.425C4.21875 13.1432 2.79942 14.5409 1.05469 14.5409C0.471727 14.5409 0 15.0055 0 15.5795V21.8114C0 22.3855 0.471727 22.85 1.05469 22.85H8.4375V19.7341C8.4375 19.16 8.90923 18.6955 9.49219 18.6955C10.0751 18.6955 10.5469 19.16 10.5469 19.7341V22.85H34.9453C35.5283 22.85 36 22.3855 36 21.8114V1.03864C36 0.464547 35.5283 0 34.9453 0ZM10.5469 15.5795C10.5469 16.1536 10.0751 16.6182 9.49219 16.6182C8.90923 16.6182 8.4375 16.1536 8.4375 15.5795V13.5023C8.4375 12.9282 8.90923 12.4636 9.49219 12.4636C10.0751 12.4636 10.5469 12.9282 10.5469 13.5023V15.5795ZM10.5469 9.34773C10.5469 9.92182 10.0751 10.3864 9.49219 10.3864C8.90923 10.3864 8.4375 9.92182 8.4375 9.34773V7.27045C8.4375 6.69637 8.90923 6.23182 9.49219 6.23182C10.0751 6.23182 10.5469 6.69637 10.5469 7.27045V9.34773ZM17.0156 7.27045C17.0156 5.55227 18.435 4.15455 20.1797 4.15455C21.9244 4.15455 23.3438 5.55227 23.3438 7.27045C23.3438 8.98864 21.9244 10.3864 20.1797 10.3864C18.435 10.3864 17.0156 8.98864 17.0156 7.27045ZM19.5947 18.521C19.1096 18.2024 18.9787 17.5584 19.3022 17.0807L27.7397 4.61702C28.0621 4.13931 28.7161 4.01149 29.2023 4.32897C29.6873 4.64748 29.8182 5.29151 29.4948 5.76928L21.0573 18.2329C20.7391 18.7036 20.0875 18.8427 19.5947 18.521ZM28.6172 18.6955C26.8725 18.6955 25.4531 17.2977 25.4531 15.5795C25.4531 13.8614 26.8725 12.4636 28.6172 12.4636C30.3619 12.4636 31.7812 13.8614 31.7812 15.5795C31.7812 17.2977 30.3619 18.6955 28.6172 18.6955Z"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M20.1797 6.23193C19.5978 6.23193 19.125 6.69752 19.125 7.27057C19.125 7.84362 19.5978 8.30921 20.1797 8.30921C20.7616 8.30921 21.2344 7.84362 21.2344 7.27057C21.2344 6.69752 20.7616 6.23193 20.1797 6.23193Z"
                                                            fill="#F15A2D" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="d-flex justify-content-space-between align-items-center">
                                                <form class="d-flex w-75" role="search">
                                                    <div class="d-flex w-100">
                                                        <input class="form-control rounded-pill form-control-sm"
                                                            type="search" placeholder="Search Coupon..."
                                                            aria-label="Search Coupon..." />
                                                    </div>
                                                    <button
                                                        class="btn position-relative border-0 bg-transparent coupon-action"
                                                        type="submit">
                                                        <i class="fa-solid fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <div class="d-flex justify-content-end align-items-center w-25">
                                                    <button type="button" class="custom-prev rounded-circle">
                                                        <i class="fas fa-arrow-left-long"></i>
                                                    </button>
                                                    <button type="button" class="custom-next rounded-circle ms-3">
                                                        <i class="fas fa-arrow-right-long"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-5" style="background-color: #f8f8f8">
                                    <div class="slick-slider">
                                        <div class="available-coupon-slider">
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-flex coupons-box">
                                                    <div class="logo">
                                                        <div class="coupon-logo">
                                                            <img src="./assets/img/coupon/coupon-logo.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="content-area"
                                                        style="
                                background-image: url('./assets/img/coupon/coupon-bg.png');
                                background-repeat: no-repeat;
                              ">
                                                        <div class="p-1">
                                                            <p
                                                                class="align-items-center text-start ps-5 coupon-text text-white">
                                                                Get Upto
                                                            </p>
                                                            <h5 class="discount-percentage text-center fw-bold">
                                                                50%
                                                            </h5>
                                                            <p class="text-white text-center ps-5 coupon-text">
                                                                OFF
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-center coupon-text pt-1">
                                                                Code: ”<span id="coupon-code">SAVE50</span>”
                                                                <a href="javascript:void(0);" class="copy-btn"><i
                                                                        class="fas fa-copy ps-2"></i></a>
                                                            </p>
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
            </section>
            <!-- Available Coupon End -->
            <!-- App Discount Start -->
            <section class="app-discount-box">
                <div class="container px-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 class="text-white">Get 20% on App</h1>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center justify-content-end">
                                <div>
                                    <img src="./assets/img/panda.png" alt="" />
                                </div>
                                <div class="bg-white px-3 py-2 rounded-2">
                                    <h4>ramadan20</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- App Discount End -->
            <!-- Grab Your Offer -->
            <section style="background: #f9f9f9">
                <div class="container pt-70 pb-70 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0 shadow-sm p-3 grab-card">
                                <div class="card-header border-0 py-3 pb-4 bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <h4 class="coupon-title mb-0 pe-3">
                                                    Grab Your Offer
                                                </h4>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17"
                                                        height="36" viewBox="0 0 17 36" fill="none">
                                                        <path
                                                            d="M0.700195 0V19.7492H5.44065V35.9075L16.5017 14.363H10.1811L16.5017 0H0.700195Z"
                                                            fill="#F15A2D" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="d-flex justify-content-space-between align-items-center">
                                                <!-- Grab Tags -->
                                                <div class="w-75">
                                                    <a href=""><span class="badge mt-2 ct-badge">Super
                                                            Deal</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Hot
                                                            Deal</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Buy 2 Get
                                                            1</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Flat 20%
                                                            Off</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Super
                                                            Deal</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Best
                                                            offer</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Best
                                                            offer</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Super
                                                            Deal</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Super
                                                            Deal</span></a>
                                                    <a href=""><span class="badge mt-2 ct-badge">Buy 1 Get
                                                            1</span></a>
                                                </div>
                                                <!-- Grab End -->
                                                <div class="d-flex justify-content-end align-items-center w-25">
                                                    <button type="button" class="grab-custom-prev rounded-circle">
                                                        <i class="fas fa-arrow-left-long"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="grab-custom-next rounded-circle ms-3">
                                                        <i class="fas fa-arrow-right-long"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pe-0">
                                    <div class="row">
                                        <div class="col-lg-3 grab-offer-tabs-box">
                                            <ul class="nav nav-tabs flex-column border-0" id="myTab"
                                                role="tablist">
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0 active"
                                                        id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                                        aria-controls="home-tab-pane" aria-selected="true">
                                                        Food
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile-tab-pane" type="button"
                                                        role="tab" aria-controls="profile-tab-pane"
                                                        aria-selected="false">
                                                        Cloth
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Home Appliance
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Electronics
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Furniture
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Resort & Hotel
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile-tab-pane" type="button"
                                                        role="tab" aria-controls="profile-tab-pane"
                                                        aria-selected="false">
                                                        Cloth
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Home Appliance
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Electronics
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Furniture
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-2" role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button"
                                                        role="tab" aria-controls="contact-tab-pane"
                                                        aria-selected="false">
                                                        Resort & Hotel
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-tab-pane"
                                                    role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                    <div class="grab-slider">
                                                        <div class="row grab-items">
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row grab-items">
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row grab-items">
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <img class="img-fluid"
                                                                                    src="./assets/img/coupon/coupon-logo.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo" />
                                                                            </div>
                                                                            <div class="col-8 text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center pb-2">
                                                                                    <p class="">
                                                                                        <span
                                                                                            class="para-font">Get</span>
                                                                                        <span
                                                                                            class="ps-2 para-font">Upto</span>
                                                                                    </p>
                                                                                    <h1>50%</h1>
                                                                                    <p class="coupon-off">OFF</p>
                                                                                </div>
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: EVALY30
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                    aria-labelledby="profile-tab" tabindex="0">
                                                    ...
                                                </div>
                                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                    aria-labelledby="contact-tab" tabindex="0">
                                                    ...
                                                </div>
                                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                                    aria-labelledby="disabled-tab" tabindex="0">
                                                    ...
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
            <!-- Grab Your Offer End -->
            <!-- Promotion Product -->
            <section>
                <div class="container px-0 pb-70">
                    <div class="row gx-4 promotion-container align-items-center">
                        <div class="col-lg-12 py-5">
                            <h1 class="promotion-title">Biggest Deals From Oraimo</h1>
                            <p class="text-center">
                                Problems trying to resolve the conflict between <br />
                                the two major realms of Classical physics: Newtonian mechanics
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="./assets/img/product/03.png" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pe-2">
                                        <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <del>BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                            <div class="pe-4">
                                                <a href="" class="btn-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center bg-light py-4 mt-3 product-showcase brand-home-img">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="./assets/img/product/04.png" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pe-2">
                                        <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <del>BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                            <div class="pe-4">
                                                <a href="" class="btn-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 px-0">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid w-100 middle-banner"
                                    src="./assets/img/product/static-banner.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="./assets/img/product/03.png" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pe-2">
                                        <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <del>BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                            <div class="pe-4">
                                                <a href="" class="btn-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center bg-light py-4 mt-3 product-showcase brand-home-img">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="./assets/img/product/04.png" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pe-2">
                                        <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <del>BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                            <div class="pe-4">
                                                <a href="" class="btn-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Promotion Product End -->
            <!-- Grab By Location -->
            <section style="background-color: #f5f6f8">
                <div class="container pt-70 pb-70 px-0">
                    <div class="row">
                        <div class="col-lg-12 px-0">
                            <div class="card rounded-0 shadow-sm p-3"
                                style="background-color: #f5f6f8; border: 1px solid #EBEBEB;">
                                <div class="card-header border-0 py-3 bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="d-flex align-items-center">
                                                <h4 class="coupon-title mb-0 pe-3">
                                                    Grab By Location
                                                </h4>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="31" viewBox="0 0 22 31" fill="none">
                                                        <path
                                                            d="M10.263 30.2372C9.84392 29.7675 0 18.6461 0 11.0705C5.93225e-05 4.96621 4.93463 0 11.0001 0C17.0655 0 22 4.96621 22 11.0705C22 18.6461 12.1561 29.7675 11.737 30.2372C11.3432 30.6786 10.6559 30.6777 10.263 30.2372Z"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M21.9999 11.0705C21.9999 4.96621 17.0653 0 11 0V30.5679C11.27 30.5679 11.5402 30.4579 11.737 30.2372C12.156 29.7675 21.9999 18.6461 21.9999 11.0705Z"
                                                            fill="#F15A2D" />
                                                        <path
                                                            d="M10.9986 16.6402C7.94694 16.6402 5.46436 14.1416 5.46436 11.0704C5.46436 7.99912 7.94706 5.50049 10.9986 5.50049C14.0502 5.50049 16.5329 7.99912 16.5329 11.0704C16.5329 14.1416 14.0502 16.6402 10.9986 16.6402Z"
                                                            fill="#F9F9F9" />
                                                        <path
                                                            d="M11 5.50049V16.6402C14.0517 16.6402 16.5343 14.1415 16.5343 11.0703C16.5343 7.99906 14.0515 5.50049 11 5.50049Z"
                                                            fill="#C5D8DF" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="d-flex justify-content-space-between align-items-center">
                                                <form class="d-flex w-100" role="search">
                                                    <div class="d-flex w-100">
                                                        <input class="form-control rounded-pill form-control-sm"
                                                            type="search" placeholder="Search"
                                                            aria-label="Search" />
                                                    </div>
                                                    <button
                                                        class="btn position-relative border-0 bg-transparent coupon-action"
                                                        type="submit">
                                                        <i class="fa-solid fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-2 py-0">
                                    <div class="row">
                                        <div class="col-lg-3" id="mapsidebar">
                                            <div id="mapdetails">
                                                <!-- <p id="seriesName"></p> -->
                                                <div class="selected-point">
                                                    <small class="text-white">All Of <span
                                                            id="pointName"></span></small>

                                                </div>
                                                <!-- Selected Area All Zone Name  -->
                                                <div>
                                                    <ul class="zone-name ps-0" style="list-style-type: none">
                                                        <li class="area-names">Mirpur</li>
                                                        <li class="area-names">Gulshan</li>
                                                        <li class="area-names">Banani</li>
                                                        <li class="area-names">Gulistan</li>
                                                        <li class="area-names">Farmgate</li>
                                                        <li class="area-names">Karwan Bazar</li>
                                                        <li class="area-names">Dhanmondi</li>
                                                        <li class="area-names">Mohammadpur</li>
                                                        <li class="area-names">New Market</li>
                                                        <li class="area-names">Shymoli</li>
                                                        <li class="area-names">Uttara</li>
                                                        <li class="area-names">Savar</li>
                                                        <li class="area-names">Abdullahpur</li>
                                                        <li class="area-names">Paltan</li>
                                                        <li class="area-names">Moghbazar</li>
                                                        <li class="area-names">Badda</li>
                                                        <li class="area-names">Jatrabari</li>
                                                        <li class="area-names">Sadar Ghat</li>
                                                    </ul>
                                                </div>
                                                <!-- <p id="pointValue"></p> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-9 position-relative"
                                            style="
                          background-image: url(./assets/img/product/map.png);
                          /* background-repeat: no-repeat; */
                          background-size: contain;
                          background-position: center;
                          display: flex;
                          align-items: center;
                        ">
                                            <!-- <div class="mapoverlay"></div> -->
                                            <div id="mapcontainer" class="text-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Grab By Location End -->
            <!-- Product Slider -->
            <section>
                <div class="container pb-70 pt-70 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Slick Slider -->
                            <div class="slick-slider-product">
                                <div class="items me-2" style="background-color: #f5f6f8">
                                    <div class="row p-4 align-items-center">
                                        <div class="col-lg-7">
                                            <h4>A community doing good</h4>
                                            <p class="py-3">
                                                Commerce is a global online marketplace, where people
                                            </p>
                                            <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div>
                                                <h6 class="main-color text-center pb-3">25% OFF</h6>
                                                <div class="d-flex justify-content-center text-center">
                                                    <img class="img-fluid flat-offer-img"
                                                        src="./assets/img/product/sliderproduct1.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items me-2" style="background-color: #f5f6f8">
                                    <div class="row p-4 align-items-center">
                                        <div class="col-lg-7">
                                            <h4>A community doing good</h4>
                                            <p class="py-3">
                                                Commerce is a global online marketplace, where people
                                            </p>
                                            <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div>
                                                <h6 class="main-color text-center pb-3">25% OFF</h6>
                                                <div class="d-flex justify-content-center text-center">
                                                    <img class="img-fluid flat-offer-img"
                                                        src="./assets/img/product/sliderproduct1.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items me-2" style="background-color: #f5f6f8">
                                    <div class="row p-4 align-items-center">
                                        <div class="col-lg-7">
                                            <h4>A community doing good</h4>
                                            <p class="py-3">
                                                Commerce is a global online marketplace, where people
                                            </p>
                                            <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div>
                                                <h6 class="main-color text-center pb-3">25% OFF</h6>
                                                <div class="d-flex justify-content-center text-center">
                                                    <img class="img-fluid flat-offer-img"
                                                        src="./assets/img/product/sliderproduct1.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items me-2" style="background-color: #f5f6f8">
                                    <div class="row p-4 align-items-center">
                                        <div class="col-lg-7">
                                            <h4>A community doing good</h4>
                                            <p class="py-3">
                                                Commerce is a global online marketplace, where people
                                            </p>
                                            <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div>
                                                <h6 class="main-color text-center pb-3">25% OFF</h6>
                                                <div class="d-flex justify-content-center text-center">
                                                    <img class="img-fluid flat-offer-img"
                                                        src="./assets/img/product/sliderproduct1.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slick Slider -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Slider End -->
            <!-- Deal Of The Day -->
            <section>
                <div class="container px-0 pt-70 pb-70">
                    <div class="row gx-0">
                        <div class="col-lg-3">
                            <div class="card deal-of-the-day rounded-0">
                                <!-- Card Header -->
                                <div class="card-header border-0 text-white rounded-0 deal-of-the-day-header"
                                    style="background-color: var(--primary-color)">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="mb-0">Deals Of The Day</h4>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="button" class="deal-custom-prev rounded-circle">
                                                    <i class="fas fa-arrow-left-long"></i>
                                                </button>
                                                <button type="button" class="deal-custom-next rounded-circle ms-3">
                                                    <i class="fas fa-arrow-right-long"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Header End -->
                                <div class="card-body">
                                    <!-- Slider Items -->
                                    <div class="deal-slider">
                                        <div class="items">
                                            <div class="py-5 d-flex justify-content-center">
                                                <img class="img-fluid rounded-2" src="./assets/img/deal.png"
                                                    alt="" />
                                            </div>
                                            <div class="py-3">
                                                <h5 class="text-center">
                                                    <span class="fw-bold">২৮%</span> ছাড়ে বই, অতিরিক্ত
                                                    ৪% ছাড় অ্যাপ অর্ডারে 'APPUSER' ব্যবহারে (৩০-৩১
                                                    মার্চ)
                                                </h5>
                                            </div>
                                            <div class="py-5 d-flex justify-content-center align-items-center">
                                                <a href="" class="btn btn-common-one rounded-pill px-4">See
                                                    Details</a>
                                            </div>
                                            <div class="text-center pb-5 pt-4">
                                                <div>
                                                    <h5>
                                                        <span class="main-color">Hurry Up!</span> Offers
                                                        end in:
                                                    </h5>
                                                </div>
                                                <div class="countdown-with-days mt-4">
                                                    <ul class="countdown-box ps-0 mb-0">
                                                        <li>
                                                            <span class="days count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="hours count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="minutes count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="seconds count-items p-2"></span>
                                                        </li>
                                                    </ul>
                                                    <ul class="countdown-box-text ps-0 mb-0">
                                                        <li class="pe-1">Day</li>
                                                        <li class="pe-2">Hour</li>
                                                        <li class="pe-2">Min</li>
                                                        <li class="pe-2">Sec</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="py-5 d-flex justify-content-center">
                                                <img class="img-fluid rounded-2" src="./assets/img/deal.png"
                                                    alt="" />
                                            </div>
                                            <div class="py-3">
                                                <h5 class="text-center">
                                                    <span class="fw-bold">২৮%</span> ছাড়ে বই, অতিরিক্ত
                                                    ৪% ছাড় অ্যাপ অর্ডারে 'APPUSER' ব্যবহারে (৩০-৩১
                                                    মার্চ)
                                                </h5>
                                            </div>
                                            <div class="py-5 d-flex justify-content-center align-items-center">
                                                <a href="" class="btn btn-common-one rounded-pill px-4">See
                                                    Details</a>
                                            </div>
                                            <div class="text-center">
                                                <div>
                                                    <h5>
                                                        <span class="main-color">Hurry Up!</span> Offers
                                                        end in:
                                                    </h5>
                                                </div>
                                                <div class="countdown-with-days mt-4">
                                                    <ul class="countdown-box ps-0 mb-0">
                                                        <li>
                                                            <span class="days count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="hours count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="minutes count-items p-2"></span>
                                                        </li>
                                                        <li>
                                                            <span class="seconds count-items p-2"></span>
                                                        </li>
                                                    </ul>
                                                    <ul class="countdown-box-text ps-0 mb-0">
                                                        <li class="pe-1">Day</li>
                                                        <li class="pe-2">Hour</li>
                                                        <li class="pe-2">Min</li>
                                                        <li class="pe-2">Sec</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slider Items -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 bg-light product-scroll-show">
                            <!-- Search Box -->
                            <div class="d-flex justify-content-center align-items-center p-3 pb-0">
                                <form class="d-flex w-100" role="search">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control rounded-pill p-2"
                                            placeholder="Search..." aria-label="Search..."
                                            aria-describedby="basic-addon2" />
                                        <div class="input-group-append search-btn">
                                            <button class="btn border-0" type="button">
                                                <i class="fa-solid fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Search Box -->
                            <div class="row p-3 gx-3 pt-0">
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
                                            <div class="d-flex justify-content-between">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li>
                                                                <span class="hours count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="minutes count-items p-2 me-1"></span>
                                                            </li>
                                                            <li>
                                                                <span class="seconds count-items p-2 me-1"></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                            <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                                Hour
                                                            </li>
                                                            <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                                Min
                                                            </li>
                                                            <li class="me-3 pt-0" style="font-size: 12px">
                                                                Sec
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a href="">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image -->
                                            <div class="d-flex justify-content-center py-3">
                                                <img class="img-fluid" src="./assets/img/deal1.png"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <a href="">
                                                    <h6 class="mb-0 product-title">
                                                        Rovena Riva Series 6 Pcs.
                                                    </h6>
                                                </a>
                                                <del class="pt-2">BDT 3350</del>
                                                <h6 class="main-color">BDT 2550</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Deal Of The Day End -->
            <!-- Normal Slider Product Show -->
            <section>
                <div class="container py-5 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slick-slider-normal">
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img src="./assets/img/slider1.png"
                                            class="img-fluid custom-img w-100 rounded-2" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Normal Slider Product Show ENd -->
            <section>
                <div class="container py-5 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h1>Big Brands Are Here</h1>
                                <p class="w-lg-50 w-100 pt-3">
                                    Problems trying to resolve the conflict between <br />
                                    the two major realms of Classical physics: Newtonian
                                    mechanics
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid partners">
                    <div class="container px-0">
                        <div class="slick-slider-partners">
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 20.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 21.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 22.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 23.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 24.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 25.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 26.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 27.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 28.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 29.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 30.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 25.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 26.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 27.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 28.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 29.png"
                                    alt="" />
                            </div>
                            <div class="items d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="./assets/img/partner/Rectangle 30.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Slider -->
            <section>
                <div class="container px-0 pt-70 pb-70">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slick-slider-footer-slider">
                                <div class="items d-flex justify-content-center align-items-center">
                                    <img class="img-fluid w-100" src="./assets/img/Footer Banner (2).png"
                                        alt="" />
                                </div>
                                <div class="items d-flex justify-content-center align-items-center">
                                    <img class="img-fluid w-100" src="./assets/img/Footer Banner (2).png"
                                        alt="" />
                                </div>
                                <div class="items d-flex justify-content-center align-items-center">
                                    <img class="img-fluid w-100" src="./assets/img/Footer Banner (2).png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Slider End -->
        </main>
        <!-- Main Content End -->
        <!-- Footer Start -->
        <footer style="background-color: #f9f9f9">
            <section class="py-5">
                <div class="container">
                    <div class="row gx-5 pb-5">
                        <div class="col-lg-4">
                            <div>
                                <div>
                                    <span class="logo-text">discount<span class="main-color extrafont"
                                            style="font-size: 30px">Z</span>shop</span>
                                </div>
                                <p class="pt-3 mb-0 footer-description">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard.
                                </p>
                                <!-- Contact Info Start -->
                                <div class="pt-3">
                                    <div class="d-flex align-items-center pt-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12"
                                                viewBox="0 0 16 12" fill="none">
                                                <path
                                                    d="M14.4 0H1.6C0.72 0 0.00799999 0.659561 0.00799999 1.46569L0 10.2598C0 11.066 0.72 11.7255 1.6 11.7255H14.4C15.28 11.7255 16 11.066 16 10.2598V1.46569C16 0.659561 15.28 0 14.4 0ZM14.4 2.93138L8 6.59561L1.6 2.93138V1.46569L8 5.12992L14.4 1.46569V2.93138Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                        <p class="ps-3 company-link">Email: info@gmail.com</p>
                                    </div>
                                    <div class="d-flex align-items-center pt-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15"
                                                viewBox="0 0 14 15" fill="none">
                                                <path
                                                    d="M13.2222 9.96908C12.25 9.96908 11.3167 9.81708 10.4456 9.53589C10.1733 9.45229 9.87 9.51309 9.65222 9.71829L7.94111 11.3903C5.74 10.2959 3.93556 8.54031 2.81556 6.38194L4.52667 4.70237C4.74444 4.50477 4.80667 4.20838 4.72111 3.94238C4.43333 3.0912 4.27778 2.17921 4.27778 1.22923C4.27778 0.811233 3.92778 0.469238 3.5 0.469238H0.777778C0.35 0.469238 0 0.811233 0 1.22923C0 8.36551 5.91889 14.149 13.2222 14.149C13.65 14.149 14 13.807 14 13.389V10.7291C14 10.3111 13.65 9.96908 13.2222 9.96908ZM14 2.7492H11.6667V0.469238H10.1111V2.7492H7.77778V4.26918H10.1111V6.54914H11.6667V4.26918H14V2.7492Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                        <p class="ps-3 company-link">Call: +(880)16764745794</p>
                                    </div>
                                    <div class="d-flex align-items-center pt-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                                viewBox="0 0 14 18" fill="none">
                                                <path
                                                    d="M7 9.40276C7.48125 9.40276 7.89337 9.23686 8.23637 8.90506C8.57879 8.57382 8.75 8.17544 8.75 7.7099C8.75 7.24437 8.57879 6.8457 8.23637 6.5139C7.89337 6.18266 7.48125 6.01705 7 6.01705C6.51875 6.01705 6.10692 6.18266 5.7645 6.5139C5.4215 6.8457 5.25 7.24437 5.25 7.7099C5.25 8.17544 5.4215 8.57382 5.7645 8.90506C6.10692 9.23686 6.51875 9.40276 7 9.40276ZM7 17.5496C6.88333 17.5496 6.76667 17.5285 6.65 17.4861C6.53333 17.4438 6.43125 17.3874 6.34375 17.3169C4.21458 15.497 2.625 13.8079 1.575 12.2493C0.525 10.6902 0 9.23347 0 7.87919C0 5.76312 0.703792 4.07731 2.11138 2.82178C3.51838 1.56624 5.14792 0.938477 7 0.938477C8.85208 0.938477 10.4816 1.56624 11.8886 2.82178C13.2962 4.07731 14 5.76312 14 7.87919C14 9.23347 13.475 10.6902 12.425 12.2493C11.375 13.8079 9.78542 15.497 7.65625 17.3169C7.56875 17.3874 7.46667 17.4438 7.35 17.4861C7.23333 17.5285 7.11667 17.5496 7 17.5496Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                        <p class="ps-3 company-link">
                                            5th Floor, Mahfuza Tower, Ring Road <br />
                                            Mohammadpur, Dhaka 1207
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center pt-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M7.992 0.863281C3.576 0.863281 0 4.3653 0 8.68029C0 12.9953 3.576 16.4973 7.992 16.4973C12.416 16.4973 16 12.9953 16 8.68029C16 4.3653 12.416 0.863281 7.992 0.863281ZM10.632 12.3621L7.2 9.00079V4.77179H8.8V8.3598L11.768 11.2599L10.632 12.3621Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                        <p class="ps-3 company-link">
                                            Hours: 10:00 AM - 09:00 PM
                                        </p>
                                    </div>
                                </div>
                                <!-- Contact Info End -->
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <h5 class="mb-3 footer-title">Information</h5>
                                        <span class="title-divider"></span>
                                        <span class="title-divider-small"></span>
                                    </div>
                                    <ul class="ps-0 footer-link"
                                        style="
                        list-style-type: none;
                        position: relative;
                        top: 10px;
                      ">
                                        <li class="mb-2">
                                            <a href="">About Us</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Contact Us</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Sitemap</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">All Brands</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Coupons</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">About Us</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Photos</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <h5 class="mb-3 footer-title">Custom Links</h5>
                                        <span class="title-divider"></span>
                                        <span class="title-divider-small"></span>
                                    </div>
                                    <ul class="ps-0 footer-link"
                                        style="
                        list-style-type: none;
                        position: relative;
                        top: 10px;
                      ">
                                        <li class="mb-2">
                                            <a href="">Legal Notice</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">New Offer</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Best Coupon</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Login</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">Register</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <h5 class="mb-3 footer-title">Newsletter</h5>
                                        <span class="title-divider"></span>
                                        <span class="title-divider-small"></span>
                                    </div>
                                    <p class="pt-3 footer-description">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                    </p>
                                    <div class="pt-5">
                                        <p class="footer-description">Follow us on</p>
                                        <div class="pt-3 d-flex justify-content-space-around align-items-center">
                                            <a href="#" class="p-2">
                                                <i class="fa-brands fa-facebook-f" style="font-size: 22px"></i>
                                            </a>
                                            <a href="#" class="p-2">
                                                <i class="fa-brands fa-twitter" style="font-size: 22px"></i>
                                            </a>
                                            <a href="#" class="p-2">
                                                <i class="fa-brands fa-instagram" style="font-size: 22px"></i>
                                            </a>
                                            <a href="#" class="p-2">
                                                <i class="fa-brands fa-linkedin-in" style="font-size: 22px"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-5" style="border-top: 2px solid var(--primary-color)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                                <p class="footer-description">
                                    2024 @ All Right Reserved By
                                    <span class="main-color">DiscountZshop</span>
                                </p>
                                <div class="d-flex justify-content-center align-items-center pt-3">
                                    <a href="" class="pe-2" style="font-size: 14px; color: #808083">Terms
                                        & Condition</a>
                                    <a href="" class=""
                                        style="font-size: 14px; color: #808083">Privacy Policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>I will not close if you click outside of me.</div>
            </div>
        </div>
        <!-- Offcanvas Menu End -->
    </div>
    <!-- JavaScript Files -->
    <!-- Bootstrap 5.3 Bundle with Popper -->
    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="./assets/js/jquery-3.6.js"></script>
    <!-- FontAwesome -->
    <script src="./assets/js/icons/fontawesome.js"></script>
    <!-- Slick Slider JavaScript -->
    <script src="./assets/js/slider/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="./assets/js/script-dev.js"></script>

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/bd/bd-all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"></script>
    <script>
        // Define your data for the map
        var data = [
            ["bd-da", 0],
            ["bd-sy", 1],
            ["bd-bk", 2],
            ["bd-kh", 3],
            ["bd-ba", 4],
            ["bd-cg", 5],
            ["bd-rp", 6],
            ["bd-rj", 7],
            ["bd-js", 8],
            ["bd-lg", 9],
            ["bd-br", 10],
            ["bd-co", 11],
            ["bd-hb", 12],
            ["bd-sh", 13],
            ["bd-dh", 14],
            ["bd-nj", 15],
            ["bd-pl", 16],
            ["bd-na", 17],
            ["bd-gb", 18],
            ["bd-md", 19],
            ["bd-mw", 20],
            ["bd-ct", 21],
            ["bd-kn", 22],
            ["bd-sw", 23],
            ["bd-rg", 24],
            ["bd-nk", 25],
            ["bd-lk", 26],
            ["bd-pb", 27],
            ["bd-fr", 28],
            ["bd-gz", 29],
            ["bd-sd", 30],
            ["bd-ss", 31],
            ["bd-ku", 32],
            ["bd-ra", 33],
            ["bd-mr", 34],
        ];

        // Create the chart
        var chart = Highcharts.mapChart("mapcontainer", {
            chart: {
                type: "map",
                map: "countries/bd/bd-all",
                backgroundColor: "rgba(0, 0, 0, 0)", // Transparent background color
            },

            title: {
                text: "",
                style: {
                    color: "#fff",
                },
            },

            subtitle: {
                text: "",
                style: {
                    color: "#fff",
                },
            },

            legend: {
                enabled: false,
            },

            tooltip: {
                enabled: false,
            },

            navigation: {
                buttonOptions: {
                    enabled: false,
                },
            },

            credits: {
                enabled: false,
            },

            plotOptions: {
                series: {
                    point: {
                        events: {
                            click: function() {
                                updateDetails(this.series.name, this.name, this.value);
                            },
                        },
                    },
                },
            },

            series: [{
                data: data,
                name: "Random data",
                allowPointSelect: true,
                cursor: "pointer",
                color: "#fff",
                states: {
                    select: {
                        color: "#f15a2d",
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: "{point.name}",
                },
            }, ],
        });

        // Function to update details
        function updateDetails(seriesName, pointName, pointValue) {
            var pointNameElem = document.getElementById("pointName");
            if (pointNameElem) {
                pointNameElem.textContent = pointName;
            }
        }
    </script>
    @include('toastr')
    @stack('scripts')
</body>

</html>
