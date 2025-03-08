<x-frontend-app-layout :title="'All Offers || DiscountZShop'">
    <div class="">

        <!-- Hero Section -->
        <section>
            <div class="regular-banner">
                <img class="img-fluid w-100"
                    src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                    alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
            </div>
        </section>
        <!-- Hero End -->

        <section class="all-offers-container">
            <div class="container mb-5">
                <div class="py-5 pt-2 pb-2 row pt-lg-3">
                    <div class="col-lg-12 pe-0">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center d-none d-lg-block">
                                <h3>All Offers</h3>
                                <span class="store-devider"></span>
                            </div>

                            {{-- =======================Filter ======================= --}}
                            <div class="row pe-2 pe-lg-0">
                                <div class="col-4 col-lg-3">
                                    <div class="">
                                        <select class="form-select" id="" name="division_id"
                                            data-placeholder="Division" autocomplete="off">

                                            <option value="">Division</option>

                                            @foreach ($alldivs as $division)
                                                <option value="{{ $division->id }}"
                                                    {{ request()->get('division') == $division->id ? 'selected' : '' }}>
                                                    {{ $division->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-4 col-lg-3">
                                    <div class="">
                                        <select class="form-select" id="" name="city_id"
                                            data-placeholder="City" autocomplete="off">
                                            <option value="">City</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-4 col-lg-3">
                                    <div class="">
                                        <select class="form-select" id="" name="area_id"
                                            data-placeholder="Area" onchange="searchStoreByArea(this.value)">
                                            <option value="">Area</option>
                                            @foreach ($allareas as $allarea)
                                                <option value="{{ $allarea->id }}"
                                                    {{ request()->get('area') == $allarea->id ? 'selected' : '' }}>
                                                    {{ $allarea->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <script>
                                        function searchStoreByArea(areaId) {
                                            if (areaId) {
                                                // Redirect to the courses page with the selected section ID
                                                window.location.href = `/offers/all?area=${areaId}`;
                                            }
                                        }
                                    </script>
                                </div>

                                <div class="mt-3 col-12 col-lg-3 mt-lg-0">

                                    <!-- Search Store -->
                                    <div class="wrapper-store ">
                                        <div class="search-input-store">
                                            <input type="text" class="py-3" id="serviceSearch" autocomplete="off"
                                                name="search" placeholder="Type to search..." />
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
                                    <!-- Search Store -->

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="pt-2 row">

                    <div class="col-lg-3">

                        {{-- Accordion Filter Start --}}
                        <div class="accordion d-none d-lg-block">
                            @foreach ($categories as $header_category)
                                @php
                                    // Filter offers with expiry date greater than or equal to today
                                    $validOffers = $header_category->offers->filter(function ($offer) {
                                        return \Carbon\Carbon::parse($offer->expiry_date)->greaterThanOrEqualTo(
                                            \Carbon\Carbon::now()->startOfDay(),
                                        );
                                    });
                                @endphp
                                @if ($validOffers->count() > 0)
                                    <!-- Check if category has valid offers -->
                                    <div class="accordion-header">
                                        <div class="checkbox-wrapper-offers">
                                            <input class="inp-cbx accordion-checkbox"
                                                id="category-{{ $header_category->id }}" type="checkbox" />
                                            <label class="cbx" for="category-{{ $header_category->id }}"
                                                onclick="toggleOffers('{{ $header_category->id }}')">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span style="font-size: 14px">{{ $header_category->name }}
                                                    ({{ $validOffers->count() }})</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel" id="panel-{{ $header_category->id }}">
                                        @foreach ($header_category->children as $header_category_child)
                                            @php
                                                // Filter valid offers for the child category
                                                $validChildOffers = $header_category_child->offers->filter(function (
                                                    $offer,
                                                ) {
                                                    return \Carbon\Carbon::parse(
                                                        $offer->expiry_date,
                                                    )->greaterThanOrEqualTo(\Carbon\Carbon::now()->startOfDay());
                                                });
                                            @endphp
                                            @if ($validChildOffers->count() > 0)
                                                <!-- Check if subcategory has valid offers -->
                                                <div class="accordion-header">
                                                    <div class="checkbox-wrapper-offers">
                                                        <input class="inp-cbx accordion-checkbox"
                                                            id="subcategory-{{ $header_category_child->id }}"
                                                            type="checkbox" />
                                                        <label class="cbx"
                                                            for="subcategory-{{ $header_category_child->id }}">
                                                            <span>
                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                </svg>
                                                            </span>
                                                            <span
                                                                style="font-size: 14px">{{ $header_category_child->name }}
                                                                ({{ $validChildOffers->count() }})
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-9 pe-0">
                        <div class="tab-content" id="myTabContent">
                            {{-- Category All Offers Tab --}}
                            <div class="tab-pane fade show active" id="category-all-pane" role="tabpanel"
                                aria-labelledby="category-all" tabindex="0">

                                @if ($offers->count() > 0)
                                    <div class="row" id="servicesContainer">
                                        @foreach ($offers as $offer)
                                            <div class="mb-4 col-lg-4 col-6 pe-2">
                                                <a href="{{ route('offer.details', $offer->slug) }}">
                                                    <div class="mb-4 border-0 shadow-sm card">
                                                        <div class="p-0 card-body rounded-2">
                                                            <!-- Store Banner -->
                                                            <div class="main-store-banner">
                                                                <img class="img-fluid rounded-2"
                                                                    src="{{ !empty(optional($offer)->image) ? url('storage/' . optional($offer)->image) : asset('images/no-image(random).png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <!-- Store Logo And Rating -->
                                                            <div class="px-3 pb-0 pb-lg-0">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="store-logo">
                                                                        <img class="img-fluid"
                                                                            src="{{ !empty(optional($offer->brand)->logo) ? url('storage/' . optional($offer->brand)->logo) : asset('images/no-image(random).png') }}"
                                                                            alt="arong-logo.png"
                                                                            onerror="this.onerror=null; this.src='{{ asset('img/no-img.jpg') }}';" />
                                                                    </div>
                                                                    <div class="store-rating">
                                                                        <a href="{{ route('offer.details', $offer->slug) }}"
                                                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                                                class="fa-solid fa-arrow-right fs-5"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- Store Info -->
                                                                <div
                                                                    class="d-flex justify-content-between store_title">
                                                                    <a
                                                                        href="{{ route('offer.details', $offer->slug) }}">
                                                                        <div>
                                                                            <h6>
                                                                                {{ Str::words($offer->name, 5, '...') }}
                                                                            </h6>
                                                                        </div>
                                                                    </a>
                                                                    {{-- <div>
                                                                        <div>
                                                                            <a href="{{ route('offer.details', $offer->slug) }}"
                                                                                class="p-0 m-0 border-0 btn ps-2">
                                                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                                                    title="Store Location"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                {{-- <div class="border-0 shadow-sm card bg-light offer-boxes">
                                                    <div class="p-4 row align-items-center">
                                                        <div class="col-lg-6 col-4">
                                                            <div>
                                                                <img src="{{ !empty($offer->brand->logo) ? url('storage/' . $offer->brand->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                                    width="80px" height="80px"
                                                                    class="rounded-2 mobile-offers"
                                                                    style="object-fit: contain;" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-8">
                                                            @if (!empty($offer->badge))
                                                                <h4 class="main-color special-font-box text-end">
                                                                    {{ $offer->badge }}</h4>
                                                            @endif
                                                        </div>

                                                        <div class="pt-4 col-lg-12 offer_title">
                                                            <a href="{{ route('offer.details', $offer->slug) }}">
                                                                <div
                                                                    class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                                                                    <p class="text-black">
                                                                        {{ Str::words($offer->name, 1, '') }}</p>

                                                                    <a type="submit" class="add_to_wishlist"
                                                                        style="cursor: pointer;"
                                                                        data-product_id="{{ $offer->id }}"
                                                                        data-tip="Wishlist">
                                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                                    </a>

                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="pt-0 pt-lg-4 col-lg-12">
                                                            <div class="d-flex mobile-coupon-btn">
                                                                <a href="{{ route('offer.details', $offer->slug) }}"
                                                                    class="w-100 btn-common-one rounded-3"><small>View</small></a>
                                                                @if (!empty($offer->coupon_code))
                                                                    <a href="javascript:void(0);"
                                                                        class="w-100 btn-common-three rounded-3 ms-2"
                                                                        onclick="copyCouponCode('{{ $offer->coupon_code }}')">Coupon
                                                                        <i class="fa-solid fa-copy"></i></a>
                                                                @endif
                                                            </div>
                                                            <p class="pt-2 text-center countdown"
                                                                data-expire-date="{{ $offer->expiry_date }}">
                                                                <span class="main-color">Expire In:</span>
                                                                <span class="countdown-timer"> Days</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="mt-5 text-center text-danger">No Offers Available</p>
                                @endif

                            </div>

                            {{-- Category-wise Offers Tabs --}}
                            @foreach ($categories as $category)
                                <div class="tab-pane fade" id="category-{{ $category->id }}-pane" role="tabpanel"
                                    aria-labelledby="category-{{ $category->id }}" tabindex="0">
                                    <div class="row servicesContainer" id="servicesContainer">
                                        @forelse ($category->offers as $offer)
                                            <div class="mt-4 col-lg-4">
                                                <div class="border-0 shadow-sm card bg-light">
                                                    <div class="p-4 row align-items-center">
                                                        <div class="col-lg-6 col-4">
                                                            <div>

                                                                <img src="{{ !empty($offer->brand->logo) ? url('storage/' . $offer->brand->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                                    width="80px" height="80px"
                                                                    class="rounded-2 mobile-offers"
                                                                    style="object-fit: contain;"
                                                                    alt="Offer logo for {{ $offer->name }}"
                                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-8">
                                                            @if (!empty($offer->badge))
                                                                <h4 class="main-color special-font-box text-end">
                                                                    {{ $offer->badge }}</h4>
                                                            @endif
                                                        </div>
                                                        {{-- <div class="pt-4 col-lg-12 offer_title">
                                                                <a href="{{ route('offer.details', $offer->slug) }}">
                                                                    <p class="pb-4 text-black">
                                                                        {{ Str::words($offer->name, 1, '') }}
                                                                    </p>
                                                                </a>
                                                            </div> --}}
                                                        <div class="pt-4 col-lg-12 offer_title">
                                                            <a href="{{ route('offer.details', $offer->slug) }}">
                                                                <div
                                                                    class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                                                                    <p class="text-black">
                                                                        {{ Str::words($offer->name, 1, '') }}</p>


                                                                    <a type="submit" class="add_to_wishlist"
                                                                        style="cursor: pointer;"
                                                                        data-product_id="{{ $offer->id }}"
                                                                        data-tip="Wishlist">
                                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                                    </a>


                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="pt-0 pt-lg-4 col-lg-12">
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
                                            <p class="mt-5 text-center text-danger">No Offers Available</p>
                                        @endforelse
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        {{-- Dynamic Pagination --}}
                        @if ($offers->count() > 0)
                            <nav aria-label="Page navigation example" style="display: flex; justify-content: center;">
                                {{ $offers->links() }}
                            </nav>
                        @endif
                        {{-- Dynamic Pagination --}}

                    </div>

                </div>

            </div>
        </section>

    </div>



    @push('scripts')
        {{-- <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();

                    // If the input field is empty, do a search without a query
                    if (query === '') {
                        window.location.href = "{{ route('allOffer') }}";
                    } else {
                        $.ajax({
                            url: "{{ route('offer.search.names') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#servicesContainer').html(
                                    data); // Update the content with the new results

                                // Handle pagination visibility: Hide it if no results found
                                if (data.indexOf('No Offers Available') !== -1) {
                                    $('.pagination').hide(); // Hide pagination if no results
                                } else {
                                    $('.pagination').show(); // Show pagination if there are results
                                }
                            }
                        });
                    }
                });
            });
        </script> --}}

        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();

                    if (query === '') {
                        window.location.href = "{{ route('allOffer') }}";
                    } else {
                        $.ajax({
                            url: "{{ route('offer.search.names') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#servicesContainer').html(data); // Update offer list
                                // Check if pagination is available
                                if (data.indexOf('No Offers Available') !== -1 || $(
                                        '#servicesContainer .pagination').length === 0) {
                                    $('.pagination').hide(); // Hide pagination if no results
                                } else {
                                    $('.pagination').show(); // Show pagination if results exist
                                }
                            }
                        });
                    }
                });
            });
        </script>


        <script>
            $(document).ready(function() {
                // When Division is selected
                $('select[name="division_id"]').on('change', function() {
                    var division_id = $(this).val();
                    if (division_id) {
                        $.ajax({
                            url: "{{ url('/division-get/ajax') }}/" + division_id,
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
                            url: "{{ url('/city-get/ajax') }}/" + city_id,
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle the checkbox when the category or subcategory is clicked
                function toggleOffers(categoryId) {
                    const checkbox = document.getElementById('category-' + categoryId);
                    if (checkbox) {
                        checkbox.checked = !checkbox.checked; // Toggle the checkbox state
                    }
                    showOffersByCategory(categoryId);
                }

                // Show or hide the offers for the selected category and subcategory
                function showOffersByCategory(categoryId) {
                    const checkbox = document.getElementById('category-' + categoryId);
                    const categoryTab = document.getElementById('category-' + categoryId + '-pane');

                    if (checkbox.checked) {
                        categoryTab.classList.add('show', 'active');
                    } else {
                        categoryTab.classList.remove('show', 'active');
                    }

                    // Hide "category-all" pane if any category is checked
                    const categoryAllPane = document.getElementById('category-all-pane');
                    const allCheckboxes = document.querySelectorAll('.accordion-checkbox');
                    let isAnyChecked = false;

                    allCheckboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            isAnyChecked = true;
                        }
                    });

                    if (categoryAllPane) {
                        if (isAnyChecked) {
                            categoryAllPane.classList.remove('show', 'active');
                        } else {
                            categoryAllPane.classList.add('show', 'active');
                        }
                    }

                    // Show only offers related to the checked categories
                    filterOffersByCategory();
                }

                // Filter offers based on the selected categories
                function filterOffersByCategory() {
                    const allOffers = document.querySelectorAll('.offer-item');
                    const checkedCategoryIds = [];

                    // Collect all checked categories
                    document.querySelectorAll('.accordion-checkbox:checked').forEach(checkbox => {
                        const categoryId = checkbox.id.split('-')[1];
                        checkedCategoryIds.push(categoryId);
                    });

                    // Show/hide offers based on checked categories
                    allOffers.forEach(offer => {
                        const offerCategories = offer.getAttribute('data-offer-category').split(',');
                        const shouldShow = checkedCategoryIds.some(id => offerCategories.includes(id));
                        if (shouldShow) {
                            offer.classList.remove('d-none');
                        } else {
                            offer.classList.add('d-none');
                        }
                    });

                    // Hide the pagination if any offer is selected, otherwise show it
                    togglePaginationVisibility();
                }

                // Toggle the visibility of the pagination based on selected categories
                function togglePaginationVisibility() {
                    const pagination = document.querySelector('.pagination');
                    const isAnyChecked = document.querySelectorAll('.accordion-checkbox:checked').length > 0;

                    if (pagination) {
                        if (isAnyChecked) {
                            pagination.classList.add('d-none'); // Hide pagination
                        } else {
                            pagination.classList.remove('d-none'); // Show pagination
                        }
                    }
                }

                // Add event listener to all category and subcategory checkboxes
                document.querySelectorAll('.accordion-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        showOffersByCategory(this.id.split('-')[1]);
                    });
                });
            });
        </script>
    @endpush




</x-frontend-app-layout>
