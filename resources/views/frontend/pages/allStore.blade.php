<x-frontend-app-layout :title="'All Store || DiscountZShop'">

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
                </div>
            </div>

            <div class="row pb-1 servicesContainer divisionContainer cityContainer" id="">

                @foreach ($latest_stores as $latest_store)
                    <div class="col-lg-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ !empty($latest_store->image) ? url('storage/' . $latest_store->image) : 'https://ui-avatars.com/api/?name=' . urlencode($latest_store->name) }}"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ !empty($latest_store->logo) ? url('storage/' . $latest_store->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($latest_store->name) }}"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="{{ route('store.details', $latest_store->id) }}"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between store_title">
                                        <a href="{{ route('store.details', $latest_store->id) }}">
                                            <div>
                                                <h5 style="width: 98%;margin-bottom: 0.75rem;">{{ $latest_store->name }}</h5>
                                                <p>{{ $latest_store->headquarter }}</p>
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
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">{{ $latest_store->badge }}</span> Off
                                        </small>
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
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ !empty($store->image) ? url('storage/' . $store->image) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">

                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ !empty($store->logo) ? url('storage/' . $store->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                                                alt="arong-logo.png" />
                                        </div>

                                        <div class="store-rating">
                                            <a href="{{ route('store.details', $store->id) }}"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between store_title">
                                        <a href="{{ route('store.details', $store->id) }}">
                                            <div>
                                                <h5 style="width: 98%;margin-bottom: 0.75rem;">{{ $store->name }}</h5>
                                                <p>{{ $store->headquarter }}</p>
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
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">{{ $store->badge }}</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>

    @push('scripts')
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

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
    @endpush

</x-frontend-app-layout>
