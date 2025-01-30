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
                                <h3>All Stores</h3>
                                <span class="store-devider"></span>
                            </div>

                            {{-- =============== --}}
                            <div class="d-flex align-items-center">

                                <!-- Filter Store - Division -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="" name="division_id"
                                        data-placeholder="Select Division" autocomplete="off">
                                        <option value="">Select Division</option>
                                        @foreach ($alldivs as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Filter Store - City -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="" name="city_id"
                                        data-placeholder="Select City" autocomplete="off">
                                        <option value="">Select City</option>
                                        <!-- Dynamically filled by AJAX -->
                                    </select>
                                </div>

                                <!-- Filter Store - Area -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="" name="area_id"
                                        data-placeholder="Select Area">
                                        <option value="">Select Area</option>
                                        <!-- Dynamically filled by AJAX -->
                                    </select>
                                </div>

                                <!-- Search Store -->
                                <div class="wrapper-store">
                                    <div class="search-input-store">
                                        <form action="">
                                            <input type="text" id="" autocomplete="off" name="search"
                                                placeholder="Type to search..." />
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                                    </path>
                                                </svg>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            {{-- ======================= --}}

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- All Stores -->
        <section>
            <div class="container">

                <div class="row pb-4">
                    @foreach ($stores as $store)
                        <div class="col-lg-3">
                            <a href="{{ route('vendor.stores', optional($store->brand)->slug) }}">

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
                                                    <div>
                                                        <a href="{{ $store->location }}"
                                                            class="btn border-0 p-0 m-0 ps-2">
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
                </div>

                <!-- Pagination Links -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <!-- Previous Page Link -->
                        @if ($stores->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $stores->previousPageUrl() }}">Previous</a></li>
                        @endif

                        <!-- Pagination Numbers -->
                        @foreach ($stores->getUrlRange(1, $stores->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $stores->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        <!-- Next Page Link -->
                        @if ($stores->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $stores->nextPageUrl() }}">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                        @endif

                    </ul>
                </nav>

            </div>
        </section>
    </div>

    @include('frontend.pages.allStore_mobile_view')

    @push('scripts')
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
        </script>
    @endpush

</x-frontend-app-layout>
