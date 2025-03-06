<x-frontend-app-layout :title="'All Store || DiscountZShop'">

    <div class="all-offers-container">
        <!-- Hero Section -->
        <section>
            <div class="regular-banner">
                <img class="img-fluid w-100"
                    src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                    alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
            </div>
        </section>
        <!-- Top Stores -->
        <section class="py-3 py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-flex align-items-center d-none d-lg-block">
                            <h3>All Stores</h3>
                            <span class="store-devider"></span>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="px-2 row px-lg-0">

                            <!-- Filter Store - Division -->
                            <div class="px-1 col-4 col-lg-2 px-lg-2">

                                <div class="">
                                    <select class="form-select" id="" name="division_id"
                                        data-placeholder="Select Division" autocomplete="off"
                                        onchange="searchStoreByDivision(this.value)">

                                        <option value="">Division</option>

                                        @foreach ($alldivs as $division)
                                            <option value="{{ $division->id }}"
                                                {{ request()->get('division') == $division->id ? 'selected' : '' }}>
                                                {{ $division->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <!-- Filter Store - City -->
                            <div class="px-1 col-4 col-lg-2 px-lg-2">
                                <div class="">
                                    <select class="form-select" id="" name="city_id"
                                        data-placeholder="Select City" autocomplete="off"
                                        onchange="searchStoreByCity(this.value)">
                                        <option value="">City</option>

                                        @foreach ($allcitys as $allcity)
                                            <option value="{{ $allcity->id }}"
                                                {{ request()->get('city') == $allcity->id ? 'selected' : '' }}>
                                                {{ $allcity->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <!-- Filter Store - Area -->
                            <div class="px-1 col-4 col-lg-2 px-lg-2">
                                <div class="">
                                    <select class="form-select" id="" name="area_id"
                                        data-placeholder="Select Area" onchange="searchStoreByArea(this.value)">
                                        <option value="">Area</option>
                                        @foreach ($allareas as $allarea)
                                            <option value="{{ $allarea->id }}"
                                                {{ request()->get('area') == $allarea->id ? 'selected' : '' }}>
                                                {{ $allarea->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="px-1 col-12 col-lg-6 px-lg-2">
                                <div class="pt-2 wrapper-store pt-lg-0">
                                    <div class="search-input-store">
                                        {{-- <form action=""> --}}
                                        <input type="text" class="py-3 w-100" id="serviceSearch" autocomplete="off"
                                            name="search" placeholder="Type to search..." />
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                                </path>
                                            </svg>
                                        </div>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Search Store -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- All Stores -->
        <section>
            <div class="container">
                @if ($stores->count() > 0)
                    <div class="pb-4 row" id="servicesContainer">
                        @foreach ($stores as $store)
                            <div class="col-lg-3 col-6">
                                <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}">
                                    <div class="mb-4 border-0 shadow-sm card">
                                        <div class="p-0 card-body rounded-2">
                                            <!-- Store Banner -->
                                            <div class="main-store-banner">
                                                <img class="img-fluid rounded-2"
                                                    src="{{ !empty(optional($store->brand)->image) ? url('storage/' . optional($store->brand)->image) : asset('images/no-image(random).png') }}"
                                                    alt="" />
                                            </div>
                                            <!-- Store Logo And Rating -->
                                            <div class="px-3 pb-0 pb-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="store-logo">
                                                        <img class="img-fluid"
                                                            src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : asset('images/no-image(random).png') }}"
                                                            alt="arong-logo.png"
                                                            onerror="this.onerror=null; this.src='{{ asset('img/no-img.jpg') }}';" />
                                                    </div>
                                                    <div class="store-rating">
                                                        <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}"
                                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Store Info -->
                                                <div class="d-flex justify-content-between store_title">
                                                    <a
                                                        href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}">
                                                        <div>
                                                            <h6>
                                                                {{ Str::words($store->title, 5, '...') }}
                                                            </h6>
                                                        </div>
                                                    </a>
                                                    <div>
                                                        <div>
                                                            <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}"
                                                                class="p-0 m-0 border-0 btn ps-2">
                                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                                    title="Store Location"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        @endforeach

                        <!-- Pagination Links -->
                        <nav aria-label="Page navigation example">
                            {{ $stores->links() }}
                        </nav>

                    </div>
                @else
                    <p class="mb-3">No Store Avaiable</p>
                @endif



            </div>
        </section>

    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();

                    // If the input field is empty, do a search without a query
                    if (query === '') {
                        window.location.href = "{{ route('allStore') }}";
                    } else {
                        $.ajax({
                            url: "{{ route('store.search.names') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#servicesContainer').html(data);
                            }
                        });
                    }
                });
            });
        </script>

        <script>
            // function searchStoreByDivision(divisionId) {
            //     if (divisionId) {
            //         window.location.href = `/store/all?division=${divisionId}`;
            //     }
            // }

            // function searchStoreByCity(cityId) {
            //     if (cityId) {
            //         window.location.href = `/store/all?city=${cityId}`;
            //     }
            // }

            // function searchStoreByArea(areaId) {
            //     if (areaId) {
            //         window.location.href = `/store/all?area=${areaId}`;
            //     }
            // }
        </script>

        {{-- <script>
            $(document).ready(function() {
                // When Division is selected
                $('select[name="division_id"]').on('change', function() {
                    var division_id = $(this).val();
                    if (division_id) {
                        $.ajax({
                            url: "{{ url('/district-get/ajax') }}/" + division_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                // Empty the city dropdown before populating
                                $('select[name="city_id"]').html(
                                    '<option value="">Select City</option>');
                                $('select[name="area_id"]').html(
                                    '<option value="">Select Area</option>'); // Clear area dropdown

                                $.each(data, function(key, value) {
                                    $('select[name="city_id"]').append('<option value="' +
                                        value.id + '">' + value.name + '</option>');
                                });
                            },
                            error: function() {
                                alert("Error fetching cities");
                            }
                        });
                    } else {
                        alert('Please select a division');
                    }
                });

                // When City is selected
                $('select[name="city_id"]').on('change', function() {
                    var city_id = $(this).val();
                    if (city_id) {
                        $.ajax({
                            url: "{{ url('/state-get/ajax') }}/" + city_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                // Empty the area dropdown before populating
                                $('select[name="area_id"]').html(
                                    '<option value="">Select Area</option>');

                                $.each(data, function(key, value) {
                                    $('select[name="area_id"]').append('<option value="' +
                                        value.id + '">' + value.name + '</option>');
                                });
                            },
                            error: function() {
                                alert("Error fetching areas");
                            }
                        });
                    } else {
                        $('select[name="area_id"]').html('<option value="">Select Area</option>');
                    }
                });
            });
        </script> --}}

        <script>
            $(document).ready(function() {
                // When Division is selected
                $('select[name="division_id"]').on('change', function() {
                    var division_id = $(this).val();
                    if (division_id) {
                        $.ajax({
                            url: "{{ url('/district-get/ajax') }}/" + division_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="city_id"]').html(
                                    '<option value="">Select City</option>');
                                $('select[name="area_id"]').html(
                                    '<option value="">Select Area</option>');

                                $.each(data.cities, function(key, value) {
                                    $('select[name="city_id"]').append('<option value="' +
                                        value.id + '">' + value.name + '</option>');
                                });

                                // Update store list
                                $('#servicesContainer').html(data.stores);
                            }
                        });
                    }
                });

                // When City is selected
                $('select[name="city_id"]').on('change', function() {
                    var city_id = $(this).val();
                    if (city_id) {
                        $.ajax({
                            url: "{{ url('/state-get/ajax') }}/" + city_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="area_id"]').html(
                                    '<option value="">Select Area</option>');

                                $.each(data.areas, function(key, value) {
                                    $('select[name="area_id"]').append('<option value="' +
                                        value.id + '">' + value.name + '</option>');
                                });

                                // Update store list
                                $('#servicesContainer').html(data.stores);
                            }
                        });
                    }
                });


                $('select[name="area_id"]').on('change', function() {
                    var area_id = $(this).val();
                    if (area_id) {
                        $.ajax({
                            url: "{{ url('/store/filter/area') }}/" + area_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('#servicesContainer').html(data.stores);
                            }
                        });
                    }
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
