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
                                <!-- Filter Store - Division -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="division_filter" name="division_id"
                                        data-placeholder="Select Division" autocomplete="off">
                                        <option value="">Select Division</option>
                                        @forelse ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @empty
                                            <option disabled>No Division Available</option>
                                        @endforelse
                                    </select>
                                </div>

                                <!-- Filter Store - City -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="city_filter" name="city_id"
                                        data-placeholder="Select City" autocomplete="off">
                                        <option value="">Select City</option>
                                        @foreach ($citys as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Filter Store - Area -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="area_filter" name="area_id"
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
                                            <input type="text" id="storeSearch" autocomplete="off" name="search"
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
                            {{-- =======================Filter ======================= --}}

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-3 border py-2 shadow-sm">
                        {{-- Accordion Filter Start --}}

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

                                <div class="row servicesContainer" id="servicesContainer">

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
                        <nav aria-label="Page navigation">
                            <ul class="pagination">

                                <li class="page-item @if ($offers->onFirstPage()) disabled @endif">
                                    <a class="page-link" href="{{ $offers->previousPageUrl() }}"
                                        aria-label="Previous">Previous</a>
                                </li>


                                @for ($i = 1; $i <= $offers->lastPage(); $i++)
                                    <li class="page-item @if ($offers->currentPage() == $i) active @endif">
                                        <a class="page-link" href="{{ $offers->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor


                                <li class="page-item @if (!$offers->hasMorePages()) disabled @endif">
                                    <a class="page-link" href="{{ $offers->nextPageUrl() }}"
                                        aria-label="Next">Next</a>
                                </li>
                            </ul>
                        </nav>


                    </div>

                </div>

            </div>
        </section>

    </div>

    {{-- Ashik ======================= --}}

    {{-- For Mobile Code --}}
    @include('frontend.pages.alloffer_mobile_view')
    {{-- For Mobile Code --}}



    {{-- <script>
            // Check the checkbox for the category
            $(document).ready(function() {
                // Listen for changes in the filter fields
                $('#division_filter, #city_filter, #area_filter, #storeSearch').on('change keyup', function() {
                    // Collect filter values
                    let division_id = $('#division_filter').val();
                    let city_id = $('#city_filter').val();
                    let area_id = $('#area_filter').val();
                    let search_query = $('#storeSearch').val();

                    // Check if all fields are cleared
                    if (division_id === '' && city_id === '' && area_id === '' && search_query === '') {
                        // If cleared, fetch all stores without any filters
                        fetchStores();
                    } else {
                        // AJAX request to fetch filtered stores
                        $.ajax({
                            url: '{{ route('offerss.filter') }}',
                            method: 'GET',
                            data: {
                                division_id: division_id,
                                city_id: city_id,
                                area_id: area_id,
                                search: search_query
                            },
                            success: function(response) {
                                // Update offer listings with the response
                                $('#servicesContainer').html(response.offers);
                                $('.pagination').html(response
                                    .pagination); // Update pagination links
                            },
                            error: function(xhr, status, error) {
                                console.error('Error fetching stores: ' + error);
                            }
                        });
                    }
                });

                // Fetch all stores when the page loads (in case no filter is applied)
                function fetchStores() {
                    $.ajax({
                        url: '{{ route('offerss.filter') }}',
                        method: 'GET',
                        data: {
                            division_id: '',
                            city_id: '',
                            area_id: '',
                            search: ''
                        },
                        success: function(response) {
                            // Update offer listings with the response
                            $('#servicesContainer').html(response.offers);
                            $('.pagination').html(response.pagination); // Update pagination links
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching stores: ' + error);
                        }
                    });
                }

                // Initially load all stores if no filters are applied
                fetchStores();

                // Clear filters button functionality
                $('#clearFilters').click(function() {
                    // Reset all filters and the search field
                    $('#division_filter').val('');
                    $('#city_filter').val('');
                    $('#area_filter').val('');
                    $('#storeSearch').val('');

                    // Fetch all stores again
                    fetchStores();
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                // Toggle the checkbox when the category or subcategory is clicked
                function toggleOffers(categoryId) {
                    const checkbox = document.getElementById('category-' + categoryId);
                    if (checkbox) {
                        checkbox.checked = true; // Automatically check the category checkbox
                    }
                    showOffersByCategory(categoryId);
                }

                // Show or hide the offers for the selected category and subcategory
                function showOffersByCategory(categoryId) {
                    const panel = document.getElementById('panel-' + categoryId);
                    const checkbox = document.getElementById('category-' + categoryId);

                    if (checkbox && checkbox.checked) {
                        // Show the panel for the selected category or subcategory
                        panel.classList.add('show');
                    } else {
                        // Hide the panel if checkbox is unchecked
                        panel.classList.remove('show');
                    }

                    // Also ensure that the offers tab is activated when the checkbox is checked
                    if (checkbox.checked) {
                        const categoryTab = document.getElementById('category-' + categoryId + '-pane');
                        if (categoryTab) {
                            categoryTab.classList.add('show', 'active');
                        }
                    }

                    // Check if any category or subcategory is selected to hide the "category-all" tab pane
                    updateCategoryAllVisibility();
                    removeOffersWhenUnchecked(categoryId);
                }

                // Handle checkbox changes for category and subcategory
                function handleCheckboxChange(checkbox) {
                    const categoryId = checkbox.id.split('-')[1];

                    // Show or hide the panel depending on the checkbox state
                    const panel = document.getElementById('panel-' + categoryId);
                    if (checkbox.checked) {
                        panel.classList.add('show'); // Show the panel for the selected category
                        showOffersByCategory(categoryId); // Also ensure the offers tab is visible
                    } else {
                        panel.classList.remove('show'); // Hide the panel if checkbox is unchecked
                    }

                    // Update visibility of the "category-all" tab pane
                    updateCategoryAllVisibility();
                    removeOffersWhenUnchecked(categoryId);
                }

                // Update the visibility of the "category-all" tab pane
                function updateCategoryAllVisibility() {
                    const categoryAllPane = document.getElementById('category-all-pane');
                    const allCheckboxes = document.querySelectorAll('.accordion-checkbox');

                    let isAnyChecked = false;

                    allCheckboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            isAnyChecked = true;
                        }
                    });

                    // Hide "category-all" pane if any checkbox is checked
                    if (categoryAllPane) {
                        if (isAnyChecked) {
                            categoryAllPane.classList.remove('show', 'active');
                        } else {
                            categoryAllPane.classList.add('show', 'active');
                        }
                    }
                }

                // Remove offers when the category or subcategory checkbox is unchecked
                function removeOffersWhenUnchecked(categoryId) {
                    const checkbox = document.getElementById('category-' + categoryId);
                    const categoryTab = document.getElementById('category-' + categoryId + '-pane');

                    // If the checkbox is unchecked, remove the offers
                    if (checkbox && !checkbox.checked && categoryTab) {
                        categoryTab.classList.remove('show', 'active'); // Remove the category tab
                    }
                }

                // Add event listener to all category and subcategory checkboxes
                document.querySelectorAll('.accordion-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const categoryId = this.id.split('-')[1];
                        handleCheckboxChange(this);
                    });
                });

                // Add click event listener to subcategory names
                document.querySelectorAll('.accordion-header span').forEach(span => {
                    span.addEventListener('click', function() {
                        const categoryId = this.parentElement.querySelector('input').id.split('-')[1];
                        toggleOffers(categoryId); // Call toggleOffers on click of subcategory
                    });
                });

                // Countdown Timer functionality (optional, if you're showing expiry times)
                document.querySelectorAll('.countdown').forEach(function(el) {
                    const expireDate = new Date(el.getAttribute('data-expire-date'));
                    setInterval(function() {
                        const now = new Date();
                        const timeRemaining = expireDate - now;

                        // Update the countdown display
                        const daysRemaining = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                        el.querySelector('.countdown-timer').textContent = `${daysRemaining} Days`;
                    }, 1000);
                });
            });
        </script> --}}

    @push('scripts')
        {{-- <script>
                // Document ready function to handle dynamic filtering
                $(document).ready(function() {
                    // Listen for changes in the filter fields
                    $('#division_filter, #city_filter, #area_filter, #storeSearch').on('change keyup', function() {
                        // Collect filter values
                        let division_id = $('#division_filter').val();
                        let city_id = $('#city_filter').val();
                        let area_id = $('#area_filter').val();
                        let search_query = $('#storeSearch').val();

                        // Check if all fields are cleared
                        if (division_id === '' && city_id === '' && area_id === '' && search_query === '') {
                            // If cleared, fetch all stores without any filters
                            fetchStores();
                        } else {
                            // AJAX request to fetch filtered stores
                            $.ajax({
                                url: '{{ route('offerss.filter') }}',
                                method: 'GET',
                                data: {
                                    division_id: division_id,
                                    city_id: city_id,
                                    area_id: area_id,
                                    search: search_query
                                },
                                success: function(response) {
                                    // Update offer listings with the response
                                    $('#servicesContainer').html(response.offers);
                                    $('.pagination').html(response
                                    .pagination); // Update pagination links
                                },
                                error: function(xhr, status, error) {
                                    console.error('Error fetching stores: ' + error);
                                }
                            });
                        }
                    });

                    // Fetch all stores when the page loads (in case no filter is applied)
                    function fetchStores() {
                        $.ajax({
                            url: '{{ route('offerss.filter') }}',
                            method: 'GET',
                            data: {
                                division_id: '',
                                city_id: '',
                                area_id: '',
                                search: ''
                            },
                            success: function(response) {
                                // Update offer listings with the response
                                $('#servicesContainer').html(response.offers);
                                $('.pagination').html(response.pagination); // Update pagination links
                            },
                            error: function(xhr, status, error) {
                                console.error('Error fetching stores: ' + error);
                            }
                        });
                    }

                    // Initially load all stores if no filters are applied
                    fetchStores();

                    // Clear filters button functionality
                    $('#clearFilters').click(function() {
                        // Reset all filters and the search field
                        $('#division_filter').val('');
                        $('#city_filter').val('');
                        $('#area_filter').val('');
                        $('#storeSearch').val('');

                        // Fetch all stores again
                        fetchStores();
                    });
                });
            </script> --}}

        <script>
            $(document).ready(function() {
                // Listen for pagination link clicks
                $(document).on('click', '.pagination .page-link', function(e) {
                    e.preventDefault(); // Prevent the default behavior of the link
                    let url = $(this).attr('href'); // Get the URL for the next page

                    // Make the AJAX request for the next page
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(response) {
                            // Update offer listings with the response
                            $('#servicesContainer').html(response.offers);
                            $('.pagination').html(response.pagination); // Update pagination links
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching offers: ' + error);
                        }
                    });
                });

                // Other AJAX functionality as before (for filtering)
                $('#division_filter, #city_filter, #area_filter, #storeSearch').on('change keyup', function() {
                    // Collect filter values
                    let division_id = $('#division_filter').val();
                    let city_id = $('#city_filter').val();
                    let area_id = $('#area_filter').val();
                    let search_query = $('#storeSearch').val();

                    // Check if all fields are cleared
                    if (division_id === '' && city_id === '' && area_id === '' && search_query === '') {
                        // If cleared, fetch all stores without any filters
                        fetchStores();
                    } else {
                        // AJAX request to fetch filtered stores
                        $.ajax({
                            url: '{{ route('offerss.filter') }}',
                            method: 'GET',
                            data: {
                                division_id: division_id,
                                city_id: city_id,
                                area_id: area_id,
                                search: search_query
                            },
                            success: function(response) {
                                // Update offer listings with the response
                                $('#servicesContainer').html(response.offers);
                                $('.pagination').html(response
                                    .pagination); // Update pagination links
                            },
                            error: function(xhr, status, error) {
                                console.error('Error fetching stores: ' + error);
                            }
                        });
                    }
                });

                // Fetch all stores when the page loads (in case no filter is applied)
                function fetchStores() {
                    $.ajax({
                        url: '{{ route('offerss.filter') }}',
                        method: 'GET',
                        data: {
                            division_id: '',
                            city_id: '',
                            area_id: '',
                            search: ''
                        },
                        success: function(response) {
                            // Update offer listings with the response
                            $('#servicesContainer').html(response.offers);
                            $('.pagination').html(response.pagination); // Update pagination links
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching stores: ' + error);
                        }
                    });
                }

                // Initially load all stores if no filters are applied
                fetchStores();

                // Clear filters button functionality
                $('#clearFilters').click(function() {
                    // Reset all filters and the search field
                    $('#division_filter').val('');
                    $('#city_filter').val('');
                    $('#area_filter').val('');
                    $('#storeSearch').val('');

                    // Fetch all stores again
                    fetchStores();
                });
            });
        </script>

        <script>
            // Handle the category and subcategory toggling and checkbox updates
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
                    const panel = document.getElementById('panel-' + categoryId);
                    const checkbox = document.getElementById('category-' + categoryId);

                    if (checkbox && checkbox.checked) {
                        panel.classList.add('show');
                    } else {
                        panel.classList.remove('show');
                    }

                    // Ensure the offer tab is visible when the checkbox is checked
                    if (checkbox.checked) {
                        const categoryTab = document.getElementById('category-' + categoryId + '-pane');
                        if (categoryTab) {
                            categoryTab.classList.add('show', 'active');
                        }
                    }

                    // Check if any category or subcategory is selected to hide the "category-all" tab pane
                    updateCategoryAllVisibility();
                }

                // Update the visibility of the "category-all" tab pane
                function updateCategoryAllVisibility() {
                    const categoryAllPane = document.getElementById('category-all-pane');
                    const allCheckboxes = document.querySelectorAll('.accordion-checkbox');

                    let isAnyChecked = false;

                    allCheckboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            isAnyChecked = true;
                        }
                    });

                    // Hide "category-all" pane if any checkbox is checked
                    if (categoryAllPane) {
                        if (isAnyChecked) {
                            categoryAllPane.classList.remove('show', 'active');
                        } else {
                            categoryAllPane.classList.add('show', 'active');
                        }
                    }
                }

                // Handle checkbox changes for category and subcategory
                function handleCheckboxChange(checkbox) {
                    const categoryId = checkbox.id.split('-')[1];

                    // Show or hide the panel depending on the checkbox state
                    const panel = document.getElementById('panel-' + categoryId);
                    if (checkbox.checked) {
                        panel.classList.add('show'); // Show the panel for the selected category
                        showOffersByCategory(categoryId); // Ensure the offers tab is visible
                    } else {
                        panel.classList.remove('show'); // Hide the panel if unchecked
                    }

                    // Update visibility of the "category-all" tab pane
                    updateCategoryAllVisibility();
                }

                // Add event listener to all category and subcategory checkboxes
                document.querySelectorAll('.accordion-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const categoryId = this.id.split('-')[1];
                        handleCheckboxChange(this);
                    });
                });

                // Add click event listener to subcategory names
                document.querySelectorAll('.accordion-header span').forEach(span => {
                    span.addEventListener('click', function() {
                        const categoryId = this.parentElement.querySelector('input').id.split('-')[1];
                        toggleOffers(categoryId); // Call toggleOffers on click of subcategory
                    });
                });
            });
        </script>
    @endpush




</x-frontend-app-layout>
