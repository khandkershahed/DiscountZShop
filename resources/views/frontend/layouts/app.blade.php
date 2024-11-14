<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="{{ !empty($setting->site_motto) ? $setting->site_motto : config('app.name') }}" />
    <meta property="og:url" content="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <meta property="og:site_name"
        content="{{ !empty($setting->site_name) ? $setting->site_name : config('app.name') }}" />
    <link rel="canonical" href="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <link rel="shortcut icon"
        href="{{ !empty($setting->site_favicon) && file_exists(public_path('storage/' . $setting->site_favicon)) ? asset('storage/' . $setting->site_favicon) : asset('images/no_icon.png') }}"
        type="image/x-icon" />

    @props(['title'])
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- CSS Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
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
        {{-- <div> --}}
        <!-- Top Area Box -->
        @include('frontend.layouts.header-top')

        <!-- Top Area Box End -->
        <!-- Header and Navigation -->
        @include('frontend.layouts.header')
        <!-- Header and Navigation End -->
        <!-- Main Content Start -->
        <main>
            {{ $slot }}
        </main>
        <!-- Main Content End -->
        <!-- Footer Start -->
        @include('frontend.layouts.footer')
    </div>
    <!-- JavaScript Files -->
    <!-- Bootstrap 5.3 Bundle with Popper -->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('frontend/assets/js/jquery-3.6.js') }}"></script> --}}
    <!-- FontAwesome -->
    <script src="{{ asset('frontend/assets/js/icons/fontawesome.js') }}"></script>
    <!-- Slick Slider JavaScript -->
    <script src="{{ asset('frontend/assets/js/slider/slick.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('frontend/assets/js/script-dev.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

                this.timerElement.innerHTML = `${days}D-${hours}H-${minutes}M-${seconds}S`;
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
                    timerElement.innerHTML = "Still Available";
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
        $(document).ready(function() {
            // Hide the loader
            $("#loader").addClass('d-none');
            // Show the content
            $("#content").show();
        });
    </script>
</body>

</html>
