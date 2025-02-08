<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <div class="desktop-homepage">
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
                                <h3></h3>
                                {{-- <span class="store-devider"></span> --}}
                            </div>


                            {{-- =======================Filter ======================= --}}
                            <div class="d-flex align-items-center">

                                {{-- <!-- Filter Store - Division -->
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
                                </div> --}}

                                <div class="d-flex align-items-center">

                                    <!-- Filter Store - Division -->
                                    <div class="pe-2">
                                        <select class="form-select" id="" name="division_id"
                                            data-placeholder="Select Division" autocomplete="off"
                                            onchange="searchStoreByDivision(this.value)">

                                            <option value="">Select Division</option>

                                            @foreach ($alldivs as $division)
                                                <option value="{{ $division->id }}"
                                                    {{ request()->get('division') == $division->id ? 'selected' : '' }}>
                                                    {{ $division->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <script>
                                        function searchStoreByDivision(divisionId) {
                                            if (divisionId) {
                                                // Redirect to the courses page with the selected section ID
                                                window.location.href = `/offers/all?division=${divisionId}`;
                                            }
                                        }
                                    </script>

                                    <div class="pe-2">
                                        <select class="form-select" id="" name="city_id"
                                            data-placeholder="Select City" autocomplete="off"
                                            onchange="searchStoreByCity(this.value)">
                                            <option value="">Select City</option>

                                            @foreach ($allcitys as $allcity)
                                                <option value="{{ $allcity->id }}"
                                                    {{ request()->get('city') == $allcity->id ? 'selected' : '' }}>
                                                    {{ $allcity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <script>
                                        function searchStoreByCity(cityId) {
                                            if (cityId) {
                                                // Redirect to the courses page with the selected section ID
                                                window.location.href = `/offers/all?city=${cityId}`;
                                            }
                                        }
                                    </script>

                                    <div class="pe-2">
                                        <select class="form-select" id="" name="area_id"
                                            data-placeholder="Select Area" onchange="searchStoreByArea(this.value)">
                                            <option value="">Select Area</option>
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

                                    <!-- Search Store -->

                                    <div class="wrapper-store">
                                        <div class="search-input-store">
                                            {{-- <form action=""> --}}
                                            <input type="text" id="serviceSearch" autocomplete="off" name="search"
                                                placeholder="Type to search..." />
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

                            </div>
                            {{-- =======================Filter ======================= --}}

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-3 border py-2 shadow-sm">
                        {{-- Accordion Filter Start --}}

                        {{-- <div class="accordion">

                            @foreach ($categories as $header_category)
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
                                                ({{ $header_category->offers->count() }})</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="panel" id="panel-{{ $header_category->id }}">
                                    @foreach ($header_category->children as $header_category_child)
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
                                                    <span style="font-size: 14px">{{ $header_category_child->name }}
                                                        ({{ $header_category_child->offers->count() }})
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div> --}}

                        <div class="accordion">
                            @foreach ($categories as $header_category)
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
                                                ({{ $header_category->offers->count() }})</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="panel" id="panel-{{ $header_category->id }}">
                                    @foreach ($header_category->children as $header_category_child)
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
                                                    <span style="font-size: 14px">{{ $header_category_child->name }}
                                                        ({{ $header_category_child->offers->count() }})
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
                                            <div class="col-lg-4 mb-4 pe-2">
                                                <div class="card border-0 shadow-sm bg-light offer-boxes">
                                                    <div class="row p-4 align-items-center">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                                    width="80px" height="80px" class="rounded-2"
                                                                    style="object-fit: contain;" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($offer->badge))
                                                                <h4 class="main-color special-font-box text-end">
                                                                    {{ $offer->badge }}</h4>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-12 pt-4 offer_title">
                                                            <p class="pb-4 text-black">{{ $offer->name }}</p>
                                                        </div>
                                                        <div class="col-lg-12 pt-4">
                                                            <div class="d-flex">
                                                                <a href="{{ route('offer.details', $offer->slug) }}"
                                                                    class="w-100 btn-common-one rounded-3"><small>View</small></a>
                                                                @if (!empty($offer->coupon_code))
                                                                    <a href="javascript:void(0);"
                                                                        class="w-100 btn-common-three rounded-3 ms-2"
                                                                        onclick="copyCouponCode('{{ $offer->coupon_code }}')">Coupon
                                                                        <i class="fa-solid fa-copy"></i></a>
                                                                @endif
                                                            </div>

                                                            {{-- {{ Carbon\Carbon::parse($offer->expiry_date)->format('D, d F Y') }} --}}

                                                            @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d'))
                                                                <p class="pt-2 text-center countdown"
                                                                    data-expire-date="{{ $offer->expiry_date }}">
                                                                    <span class="main-color">Expire In:</span>
                                                                    <span class="countdown-timer"> Days</span>
                                                                </p>
                                                            @else
                                                                <p class="pt-2 text-center countdown"
                                                                    data-expire-date="{{ $offer->expiry_date }}">
                                                                    <span class="main-color">Expire In:</span>
                                                                    <span class="countdown-timer"> Days</span>
                                                                </p>
                                                            @endif



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                @else
                                    <p>No Offer Avaiable</p>
                                @endif



                            </div>

                            {{-- Category-wise Offers Tabs --}}
                            @foreach ($categories as $category)
                                <div class="tab-pane fade" id="category-{{ $category->id }}-pane" role="tabpanel"
                                    aria-labelledby="category-{{ $category->id }}" tabindex="0">
                                    <div class="row servicesContainer" id="servicesContainer">
                                        @foreach ($category->offers as $offer)
                                            <div class="col-lg-4 mt-4">
                                                <div class="card border-0 shadow-sm bg-light">
                                                    <div class="row p-4 align-items-center">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                                    width="80px" height="80px" class="rounded-2"
                                                                    style="object-fit: contain;"
                                                                    alt="Offer logo for {{ $offer->name }}"
                                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($offer->badge))
                                                                <h4 class="main-color special-font-box text-end">
                                                                    {{ $offer->badge }}</h4>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-12 pt-4 offer_title">
                                                            <p class="pb-4 text-black">{{ $offer->name }}</p>
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
                            @endforeach

                        </div>

                        {{-- Dynamic Pagination --}}
                        {{-- @if ($offers->count() > 0) --}}
                        <nav aria-label="Page navigation example">
                            {{ $offers->links() }}
                        </nav>
                        {{-- @else
                            <p>No Offer Avaiable</p>
                        @endif --}}
                        {{-- Dynamic Pagination --}}

                    </div>

                </div>

            </div>
        </section>

    </div>

    {{-- Ashik ======================= --}}

    {{-- For Mobile Code --}}
    @include('frontend.pages.alloffer_mobile_view')
    {{-- For Mobile Code --}}



    @push('scripts')
        <script>
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
                                $('#servicesContainer').html(data);
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
