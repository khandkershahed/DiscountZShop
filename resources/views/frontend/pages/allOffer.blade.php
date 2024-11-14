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
            <div class="row py-5 pb-2">
                <div class="col-lg-12 pe-0">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>All Offers</h3>
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
                <div class="col-lg-3 border py-2 shadow-sm">
                    {{-- <h6 class="fw-bold pb-3">All Categories</h6> --}}
                    <div class="bg-light">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item w-100" role="presentation">
                                <button class="nav-link custom-offer-tabs border-0 w-100 text-start active"
                                    id="category-all" data-bs-toggle="tab" data-bs-target="#category-all-pane"
                                    type="button" role="tab" aria-controls="category-all-pane"
                                    aria-selected="true">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>All Offers</span>
                                        <span>({{ $offerss->count() }})</span>
                                    </div>
                                </button>
                            </li>

                            @foreach ($categorys as $category)
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link custom-offer-tabs border-0 w-100 text-start"
                                        id="category-{{ $category->id }}" data-bs-toggle="tab"
                                        data-bs-target="#category-{{ $category->id }}-pane" type="button"
                                        role="tab" aria-controls="category-{{ $category->id }}-pane"
                                        aria-selected="false">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>{{ $category->name }}</span>
                                            <span>({{ $category->offers_count }})</span>
                                        </div>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="pt-4">
                        <div class="card overlay-card rounded-2"
                            style="background-image: url(https://htmlbeans.com/html/coupon/images/img39.jpg);">
                            <div class="card-body text-center">
                                <div>
                                    <p class="pb-3">
                                        <i class="fa-solid fa-receipt text-white"
                                            style="rotate: 90deg; font-size: 28px"></i>
                                    </p>
                                    <h6 class="pt-3">SUBMIT YOUR COUPON</h6>
                                    <a href="javascript:void(0)" class="btn-common-one mt-4">All Coupon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 pe-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="category-all-pane" role="tabpanel"
                            aria-labelledby="category-all" tabindex="0">

                            <div class="row servicesContainer divisionContainer" id="servicesContainer">
                                @foreach ($offerss as $offer)
                                    <div class="col-lg-4 mb-4 pe-2">
                                        <div class="card border-0 shadow-sm bg-light">
                                            <div class="row p-4 align-items-center">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                            width="80px" height="80px" class="rounded-2"
                                                            style="object-fit: contain;" alt=""
                                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    @if (!empty($offer->badge))
                                                        {{-- <span>Upto</span> --}}
                                                        <h3 class="main-color special-font-box text-end">{{ $offer->badge }}
                                                        </h3>
                                                    @endif
                                                </div>
                                                <div class="col-lg-12 pt-4 offer_title">
                                                    <p class="pb-4 text-black">{{ $offer->name }}</p>
                                                    {{-- <a href="{{ route('offer.details', $offer->slug) }}"
                                                        class="main-color">
                                                        <small>See All In Store</small>
                                                    </a> --}}
                                                </div>
                                                <div class="col-lg-12 pt-4">
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
                                @endforeach
                            </div>
                        </div>

                        <!-- Other tabs content -->
                        @foreach ($categorys as $category)
                            <div class="tab-pane fade" id="category-{{ $category->id }}-pane" role="tabpanel"
                                aria-labelledby="category-{{ $category->id }}" tabindex="0">

                                @php
                                    $cateWiseOffers = App\Models\Offer::where('category_id', $category->id)
                                        ->orderBy('name', 'ASC')
                                        ->get();
                                @endphp

                                <div class="row servicesContainer" id="servicesContainer">
                                    @if ($cateWiseOffers->count())
                                        @foreach ($cateWiseOffers as $offer)
                                            <div class="col-lg-4 mt-4">
                                                <div class="card border-0 shadow-sm bg-light">
                                                    <div class="row p-4 align-items-center">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                                    width="80px" height="80px" class="rounded-2"
                                                                    style="object-fit: contain;" alt=""
                                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($offer->badge))
                                                                {{-- <span>Upto</span> --}}
                                                                <h3 class="main-color special-font-box text-end">{{ $offer->badge }}
                                                                </h3>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-12 pt-4 offer_title">
                                                            <p class="pb-4 text-black">{{ $offer->name }}</p>
                                                            {{-- <a href="{{ route('offer.details', $offer->slug) }}"
                                                                class="main-color">
                                                                <small>See All In Store</small>
                                                            </a> --}}
                                                        </div>
                                                        <div class="col-lg-12 pt-4">
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
                                        @endforeach
                                    @else
                                        <div class="d-flex justify-content-ceneter flex-column">
                                            <img src="{{ asset('images/nocoupon.jpg') }}" alt="No Offers Available"
                                                class="img-fluid" />
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div>
                        <nav>
                            <ul class="pagination justify-content-center my-5">
                              <li class="page-item"><a class="page-link" href="#"><span>&laquo;</span> Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item active"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link" href="#">5</a></li>
                              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                              <li class="page-item"><a class="page-link" href="#">70</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next <span>&raquo;</span></a></li>
                            </ul>
                          </nav>
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

        <!-- Include jQuery -->


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
            // === === === === === Division === === === === ===

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
