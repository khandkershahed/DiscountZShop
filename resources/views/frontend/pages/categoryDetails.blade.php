<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Hero End -->

    <section>
        <div class="container mb-5">
            <div class="py-5 pb-2 row">
                <div class="col-lg-12 pe-0">
                    <div class="d-flex justify-content-between">

                        <div class="d-flex align-items-center">
                            <h3></h3>
                            {{-- <span class="store-devider"></span> --}}
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

                                    <input type="text" id="serviceSearch" name=""
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
            <div class="row">

                <div class="col-lg-12 pe-0">
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="category-all-pane" role="tabpanel"
                            aria-labelledby="category-all" tabindex="0">

                            <div class="row servicesContainer divisionContainer" id="servicesContainer">

                                @forelse ($offerss as $offer)
                                    <div class="mb-4 col-lg-3 pe-2">
                                        <div class="border-0 shadow-sm card bg-light offer-boxes">
                                            <div class="p-4 row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="pb-4">
                                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                            width="80px" height="80px" class="rounded-2"
                                                            style="object-fit: contain;" alt=""
                                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="shop-heart">

                                                        {{-- wishlist  --}}
                                                        <a type="submit" class="add_to_wishlist"
                                                            style="cursor: pointer;"
                                                            data-product_id="{{ $offer->id }}" data-tip="Wishlist">
                                                            <i class="fa-regular fa-heart fs-5"></i>
                                                        </a>

                                                    </div>
                                                    @if (!empty($offer->badge))
                                                        {{-- <span>Upto</span> --}}
                                                        <h4 class="main-color special-font-box text-end">
                                                            {{ $offer->badge }}
                                                        </h4>
                                                    @endif
                                                </div>

                                                <div class="pt-4 col-lg-12 offer_title">
                                                    <p class="pb-4 text-black">{{ $offer->name }}</p>
                                                </div>

                                                <div class="pt-4 col-lg-12">
                                                    <div class="d-flex">
                                                        <a href="{{ route('offer.details', $offer->slug) }}"
                                                            class="w-100 btn-common-one rounded-3">
                                                            <small>View</small>
                                                        </a>
                                                        @if (!empty($offer->coupon_code))
                                                            <a href="javascript:void(0);"
                                                                class="w-100 btn-common-three rounded-3 ms-2"
                                                                onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                                Coupon <i class="fa-solid fa-copy"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <p class="pt-2 text-center countdown"
                                                        data-expire-date="{{ $offer->expiry_date }}">
                                                        <span class="main-color">Expire In:</span>
                                                        <span class="countdown-timer"> Days</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>No Offer Available </p>
                                @endforelse
                            </div> 

                        </div>

                        <!-- Other tabs content -->


                    </div>

                    

                </div>

            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Bootstrap Tab Activation
            var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
            triggerTabList.forEach(function(triggerEl) {
                var tabTrigger = new bootstrap.Tab(triggerEl)

                triggerEl.addEventListener('click', function(event) {
                    event.preventDefault()
                    tabTrigger.show()
                })
            })
        </script>



        {{-- Offer Search --}}
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('offer.search') }}",
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
        </script>
        {{-- ============= --}}

        <script>
            $(document).ready(function() {
                $('#custom_select1').on('change', function() {

                    var divisionId = $(this).val(); // Get selected division ID

                    if (divisionId) {

                        $.ajax({
                            url: "{{ route('offer.search.division') }}",
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
                            url: "{{ route('offer.search.city') }}",
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
                            url: "{{ route('offer.search.area') }}",
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
