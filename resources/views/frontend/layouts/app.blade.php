<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $setting->site_motto ?? config('app.name') }}" />
    <meta property="og:url" content="{{ $setting->site_url ?? config('app.url') }}" />
    <meta property="og:site_name" content="{{ $setting->site_name ?? config('app.name') }}" />

    <!-- Canonical URL -->
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
</head>

<body>
    <!-- Loader -->
    <div id="loader" class="discount_loader">
        <img src="{{ asset('frontend/assets/img/loader.gif') }}" alt="Loading..." />
    </div>

    <!-- Main Content -->
    <div id="content" class="discount_content" style="display: none">
        <!-- Header Section -->
        @include('frontend.layouts.header-top')
        @include('frontend.layouts.header')

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include('frontend.layouts.footer')
    </div>
    <!-- JavaScript Dependencies -->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/icons/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slider/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script-dev.js') }}"></script>
    {{-- Direct Cdns --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/bd/bd-all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    {{-- CSRF Token --}}
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    <script>
        class Countdown {
            constructor(element, expireDate) {
                this.element = element;
                this.expireDate = new Date(expireDate).getTime();
                this.timerElement = this.element.querySelector(".countdown-timer");
                this.start();
            }

            start() {
                this.update();
                this.interval = setInterval(() => this.update(), 1000);
            }

            update() {
                const now = new Date().getTime();
                const distance = this.expireDate - now;

                if (distance < 0) {
                    clearInterval(this.interval);
                    this.timerElement.innerHTML = "EXPIRED";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                this.timerElement.innerHTML = `${days}d : ${hours}h : ${minutes}m : ${seconds}s`;
            }
        }

        // Initialize countdowns on DOMContentLoaded
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".countdown").forEach((element) => {
                const expireDate = element.getAttribute("data-expire-date");
                if (expireDate) {
                    new Countdown(element, expireDate);
                } else {
                    const timerElement = element.querySelector(".countdown-timer");
                    timerElement.innerHTML = "Available";
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#custom_select1').select2({
                theme: 'bootstrap-5',
                placeholder: $(this).data('placeholder'),
            });
            $('#custom_select2').select2({
                theme: 'bootstrap-5',
                placeholder: $(this).data('placeholder'),
            });
            $('#custom_select3').select2({
                theme: 'bootstrap-5',
                placeholder: $(this).data('placeholder'),
            });
        });
    </script>

    @include('toastr')
    @stack('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the loader
            document.getElementById("loader").style.display = "none";
            // Show the content
            document.getElementById("content").style.display = "block";
        });
    </script>

    <script>
        $('.add_to_wishlist').click(function() {

            var product_id = $(this).data('product_id');

            $.ajax({
                type: 'POST',
                dataType: 'json',

                data: {
                    product_id: product_id,
                },

                url: '/add-to-wishlist',

                success: function(data) {
                    wishlist();

                    // Start Message

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })

                        // window.location.href = '/compare-product';

                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                    // End Message
                }
            })

        })
    </script>

    {{-- Load Wishlist --}}
    <script>
        function wishlist() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/get-wishlist',

                success: function(response) {

                    $('#cartWishlistQty').text(response.cartWishlistQty);
                    $('#cartWishlistMobileQty').text(response.cartWishlistMobileQty);

                    var tableHtml = "";
                    var serialNumber = 1;

                    if (response.cartWishlist.length === 0) {

                        tableHtml = `
                                <h4 class="my-2 text-center">Wishlist List is Empty</h4>
                            `;

                        $('#wishlistLink').hide();

                    } else {
                        $.each(response.cartWishlist, function(key, value) {

                            //console.log('http://127.0.0.1:8000/', value.options.image);
                            var offerDetailsUrl = '/offer-details/' + value.slug;

                            tableHtml +=

                                `<tr class="">

                                    <td valign="middle">${serialNumber++}.</td>

                                    <td>
                                        <img class="img-fluid rounded-2" width="60px"
                                                src="http://www.discountzshop.com/storage/${value.options.image}"
                                                alt="">
                                    </td>

                                    <td valign="middle">
                                        <p><a href="${offerDetailsUrl}">${ value.name }</a></p>
                                    </td>

                                    <td valign="middle">
                                        <div class="text-center">
                                            <a type="submit" style="cursor:pointer" id="${value.rowId}" onclick="wishlistRemove(this.id)">
                                                <i class="fa-solid fa-trash text-danger"></i>
                                            </a>

                                        </div>
                                    </td>

                                </tr>`;

                        });

                        $('#wishlistLink').show(); // Show the comparison link when list has items
                    }

                    $('#wishlist').html(tableHtml);
                }
            });
        }

        wishlist();
    </script>

    <script>
        function wishlistRemove(rowId) {

            $.ajax({
                type: 'GET',
                url: '/wishlist/product/remove/' + rowId,
                dataType: 'json',
                success: function(data) {

                    wishlist();

                    // Start Message

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            title: data.error,
                        })
                    }

                    // End Message

                }


            })
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Override CSS scroll behavior
            document.documentElement.style.scrollBehavior = "auto";
            document.body.style.scrollBehavior = "auto";

            // Prevent JavaScript-based smooth scrolling
            window.scrollTo = function(x, y) {
                window.scroll({
                    top: y,
                    left: x,
                    behavior: "auto"
                });
            };

            // Handle elements that may have smooth scrolling
            const allElements = document.querySelectorAll("*");
            allElements.forEach(el => {
                el.style.scrollBehavior = "auto";
            });
        });
    </script>
</body>

</html>
