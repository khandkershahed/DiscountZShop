<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <base href="../../../">
    <title>{{ config('app.name', 'DiscountZShop') }}</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DiscountZShop" />
    <meta property="og:url" content="https://discountzshop.com/" />
    <meta property="og:site_name" content="discountzshop | " />
    <link rel="canonical" href="https://discountzshop.com/" />
    <link rel="shortcut icon"
        href="{{ !empty($setting->site_favicon) && file_exists(public_path('storage/' . $setting->site_favicon)) ? asset('storage/' . $setting->site_favicon) : asset('images/no_icon.png') }}"
        type="image/x-icon" />

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> --}}


    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>



<body id="kt_body" class="bg-body">


    <div class="d-flex flex-column flex-root">
        {{ $slot }}
    </div>



    <script>
        var hostUrl = "assets/";
    </script>

    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>


    <script src="{{ asset('admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/apps/user-management/users/view/update-password.js') }}"></script>

    @stack('scripts')

</body>


</html>
