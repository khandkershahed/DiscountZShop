<x-frontend-app-layout :title="'All Store || DiscountZShop'">
    <div class="desktop-homepage">
        <!-- Hero Section -->
        <section>
            <div class="regular-banner">
                <img class="img-fluid w-100"
                    src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                    alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
            </div>
        </section>

        <!-- Top Stores -->
        <section>
            <div class="container">

                <div class="row py-5">

                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h3>Top Stores</h3>
                                <span class="store-devider"></span>
                            </div>
                            <div class="d-flex align-items-center">

                                <!-- Filter Store -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="custom_select1" name="division_id"
                                        data-placeholder="Select Division" autocomplete="off">
                                        <option value="">Select Division</option>
                                        @forelse ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @empty
                                            <option disabled>No Division Available</option>
                                        @endforelse
                                    </select>
                                </div>

                                <!-- Filter Store -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="custom_select2" name="city_id"
                                        data-placeholder="Select City" autocomplete="off">
                                        <option value="">Select City</option>
                                        @foreach ($citys as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Filter Store -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="custom_select3" name="area_id"
                                        data-placeholder="Select Area">
                                        <option value="">Select Area</option>
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Search Store -->
                                <div class="wrapper-store">

                                    <div class="search-input-store">

                                        <form action="">
                                            <input type="text" id="serviceSearch" autocomplete="off" name="" placeholder="Type to search..." />
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                                </svg>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row pb-1 servicesContainer divisionContainer cityContainer" id="servicesContainer">
                    @foreach ($latest_stores as $latest_store)
                        <div class="col-lg-3">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-0 rounded-2">
                                    <!-- Store Banner -->
                                    <div class="main-store-banner">
                                        <img class="img-fluid rounded-2"
                                            src="{{ !empty(optional($latest_store->brand)->image) ? url('storage/' . optional($latest_store->brand)->image) : asset('images/no-image(random).png') }}"
                                            alt="arong-banner.jpg" />
                                    </div>
                                    <!-- Store Logo And Rating -->
                                    <div class="px-3 pb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="store-logo">
                                                <img class="img-fluid"
                                                    src="{{ !empty(optional($latest_store->brand)->logo) ? url('storage/' . optional($latest_store->brand)->logo) : asset('images/no-image(random).png') }}"
                                                    alt="arong-logo.png" />
                                            </div>
                                            <div class="store-rating">
                                                <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}"
                                                    class="btn btn-common-one rounded-circle store-btn"><i
                                                        class="fa-solid fa-store" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Store Info -->
                                        <div class="pt-4 d-flex justify-content-between store_title">
                                            <a
                                                href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}">
                                                <div>
                                                    <h6>{{ $latest_store->title }}</h6>
                                                </div>
                                            </a>
                                            <div>
                                                <button class="btn border-0 p-0 m-0 ps-2">
                                                    <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                        title="Store Location" data-bs-toggle="modal"
                                                        data-bs-target="#store-Location" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>

        <!-- All Stores -->
        <section>
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h3>All Stores</h3>
                            <span class="store-devider"></span>
                        </div>
                    </div>
                </div>

                <div class="row pb-4">
                    @foreach ($stores as $store)
                        <div class="col-lg-3">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-0 rounded-2">
                                    <!-- Store Banner -->
                                    <div class="main-store-banner">
                                        <img class="img-fluid rounded-2"
                                            src="{{ !empty(optional($store->brand)->image) ? url('storage/' . optional($store->brand)->image) : asset('images/no-image(random).png') }}"
                                            alt="arong-banner.jpg" />
                                    </div>
                                    <!-- Store Logo And Rating -->
                                    <div class="px-3 pb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="store-logo">
                                                <img class="img-fluid"
                                                    src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : asset('images/no-image(random).png') }}"
                                                    alt="arong-logo.png" />
                                            </div>
                                            <div class="store-rating">
                                                <a href="{{ route('vendor.stores', optional($store->brand)->slug) }}"
                                                    class="btn btn-common-one rounded-circle store-btn"><i
                                                        class="fa-solid fa-store" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Store Info -->
                                        <div class="pt-4 d-flex justify-content-between store_title">
                                            <a href="{{ route('vendor.stores', optional($store->brand)->slug) }}">
                                                <div>
                                                    <h6>{{ $store->title }}</h6>
                                                </div>
                                            </a>
                                            <div>
                                                <button class="btn border-0 p-0 m-0 ps-2">
                                                    <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                        title="Store Location" data-bs-toggle="modal"
                                                        data-bs-target="#store-Location" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination Links -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item {{ $stores->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $stores->previousPageUrl() }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $stores->lastPage(); $i++)
                                <li class="page-item {{ $i == $stores->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $stores->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item {{ $stores->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $stores->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </section>

    </div>

    <div class="mobile-homepage" style="margin-top: 6rem;margin-bottom: 8rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 pe-0">
                    <p class="mfs site-text fw-bold">Top Stores</p>
                </div>
                <div class="col-4 px-0">
                    <div class="btn-group pe-2">
                        <select class="form-select form-select-sm" id="custom_select1" name="division_id"
                            data-placeholder="Select Division" autocomplete="off">
                            <option value="">Select Division</option>
                            @forelse ($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                            @empty
                                <option disabled>No Division Available</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-5 ps-0">
                    <div class="wrapper-store">
                        <div class="search-input-store">
                            <input type="text" id="serviceSearch" autocomplete="off" name=""
                                placeholder="Type to search..." />
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 gx-2">
                @foreach ($stores as $store)
                    <div class="col-6 mb-2">
                        <div class="card p-0 border-0 shadow-none" style="border: 1px solid #F15A2D !important;">
                            <div class="card-header p-0 border-0 shadow-none">
                                <div>
                                    <img class="img-fluid"
                                        src="{{ !empty(optional($store->brand)->image) ? url('storage/' . optional($store->brand)->image) : asset('images/demo-card-store.png') }}"
                                        alt=""
                                        onerror="this.onerror=null;this.src='{{ asset('images/demo-card-store.png') }}';">
                                </div>
                            </div>
                            <div class="card-body border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <img class="img-fluid" src="{{ asset('images/demo-logo.png') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <button class="store-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <g clip-path="url(#clip0_1_2457)">
                                                    <path
                                                        d="M12.9878 4.37048L12.2524 1.4276C12.1623 1.06604 11.8373 0.812542 11.4643 0.812542H1.53638C1.16344 0.812542 0.838439 1.06604 0.747439 1.4276L0.0121265 4.37048C0.00400146 4.40217 -6.10352e-05 4.43548 -6.10352e-05 4.46879C-6.10352e-05 5.58842 0.865252 6.50004 1.92963 6.50004C2.54794 6.50004 3.09963 6.1921 3.45306 5.71435C3.8065 6.1921 4.35819 6.50004 4.9765 6.50004C5.59481 6.50004 6.1465 6.1921 6.49994 5.71435C6.85338 6.1921 7.40425 6.50004 8.02338 6.50004C8.6425 6.50004 9.19338 6.1921 9.54681 5.71435C9.90025 6.1921 10.4511 6.50004 11.0703 6.50004C12.1346 6.50004 12.9999 5.58842 12.9999 4.46879C12.9999 4.43548 12.9959 4.40217 12.9878 4.37048ZM11.0703 7.31254C10.5169 7.31254 9.99125 7.14354 9.54681 6.83479C8.65794 7.4531 7.38881 7.4531 6.49994 6.83479C5.61106 7.4531 4.34194 7.4531 3.45306 6.83479C3.00863 7.14354 2.48294 7.31254 1.92963 7.31254C1.53069 7.31254 1.1545 7.2191 0.812439 7.05985V11.375C0.812439 11.8235 1.17644 12.1875 1.62494 12.1875H4.87494V8.93754H8.12494V12.1875H11.3749C11.8234 12.1875 12.1874 11.8235 12.1874 11.375V7.05985C11.8454 7.2191 11.4692 7.31254 11.0703 7.31254Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1_2457">
                                                        <rect width="13" height="13" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mfs mb-0">
                                            {{ \Illuminate\Support\Str::limit($store->title, 10, '') }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <button class="bg-transparent border-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20"
                                                viewBox="0 0 15 20" fill="none">
                                                <path
                                                    d="M7.5 0C3.365 0 0 3.38833 0 7.55417C0 13.4733 6.795 19.585 7.08417 19.8417C7.19846 19.944 7.34644 20.0006 7.49984 20.0008C7.65324 20.0009 7.80133 19.9446 7.91583 19.8425C8.205 19.585 15 13.4733 15 7.55417C15 3.38833 11.635 0 7.5 0ZM7.5 11.6667C5.2025 11.6667 3.33333 9.7975 3.33333 7.5C3.33333 5.2025 5.2025 3.33333 7.5 3.33333C9.7975 3.33333 11.6667 5.2025 11.6667 7.5C11.6667 9.7975 9.7975 11.6667 7.5 11.6667Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('store.search.name') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('.servicesContainer').html(data);
                        }
                    });
                });
            });
        </script>

        <script>
            // === === === === === Division === === === === ===

            $(document).ready(function() {
                $('#custom_select1').on('change', function() {

                    var divisionId = $(this).val(); // Get selected division ID

                    if (divisionId) {

                        $.ajax({
                            url: "{{ route('store.search.division') }}",
                            method: 'GET',
                            data: {
                                division_id: divisionId
                            },
                            success: function(data) {
                                $('.divisionContainer').html(data.html);
                            },
                            error: function() {
                                $('.divisionContainer').html(
                                    '<p>An error occurred while fetching offers.</p>');
                            }
                        });
                    } else {
                        $('.divisionContainer').html('<p>Please select a division to see offers.</p>');
                    }
                });
            });

            // ====== City ====

            $(document).ready(function() {
                $('#custom_select2').on('change', function() {
                    var cityId = $(this).val();

                    if (cityId) {
                        $.ajax({
                            url: "{{ route('store.search.city') }}",
                            method: 'GET',
                            data: {
                                city_id: cityId
                            },
                            success: function(data) {
                                $('.divisionContainer').html(data.html);
                            },
                            error: function() {
                                $('.divisionContainer').html(
                                    '<p>An error occurred while fetching offers.</p>');
                            }
                        });
                    } else {
                        $('.divisionContainer').html('<p>Please select a city to see offers.</p>');
                    }
                });
            });

            // ============ area ============

            $(document).ready(function() {
                $('#custom_select3').on('change', function() {

                    var areaId = $(this).val(); // Get selected division ID

                    if (areaId) {

                        $.ajax({
                            url: "{{ route('store.search.area') }}",
                            method: 'GET',
                            data: {
                                area_id: areaId
                            },
                            success: function(data) {
                                $('.divisionContainer').html(data.html);
                            },
                            error: function() {
                                $('.divisionContainer').html(
                                    '<p>An error occurred while fetching offers.</p>');
                            }
                        });
                    } else {
                        $('.divisionContainer').html('<p>Please select a division to see offers.</p>');
                    }
                });
            });
        </script>

        {{-- //Store Title  --}}

        {{-- <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('stores.search') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#servicesContainer').html(data);
                        }
                    });
                });
            });
        </script> --}}

        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();

                    // If the input field is cleared (query is empty), fetch all stores
                    if (query === "") {
                        // Send an empty query to fetch all stores
                        $.ajax({
                            url: "{{ route('stores.search') }}",
                            method: 'GET',
                            data: {
                                query: ""
                            },
                            success: function(data) {
                                $('#servicesContainer').html(data); // Revert to all stores
                            }
                        });
                    } else {
                        // Search with the typed query
                        $.ajax({
                            url: "{{ route('stores.search') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#servicesContainer').html(
                                    data); // Update the list with search results
                            }
                        });
                    }
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
