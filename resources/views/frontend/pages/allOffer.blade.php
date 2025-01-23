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
                            <!-- Filter Store -->
                            <div class="d-flex align-items-center">
                                <!-- Division Filter -->
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

                                <!-- City Filter -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="custom_select2" name="city_id"
                                        data-placeholder="Select City" autocomplete="off">
                                        <option value="">Select City</option>
                                        @foreach ($citys as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Area Filter -->
                                <div class="btn-group pe-2">
                                    <select class="form-select cust-select" id="custom_select3" name="area_id"
                                        data-placeholder="Select Area">
                                        <option value="">Select Area</option>
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Search Field -->
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
                            {{-- =======================Filter ======================= --}}


                        </div>
                    </div>

                </div>

                <div class="row">

                    {{-- ================== --}}

                    {{-- ================== --}}

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
                                                    <!-- This is where the click happens -->
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
                                                                    style="object-fit: contain;" alt=""
                                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($offer->badge))
                                                                <h4 class="main-color special-font-box text-end">
                                                                    {{ $offer->badge }}
                                                                </h4>
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
                                {{-- Previous page link --}}
                                <li class="page-item @if ($offers->onFirstPage()) disabled @endif">
                                    <a class="page-link" href="{{ $offers->previousPageUrl() }}"
                                        aria-label="Previous">Previous</a>
                                </li>

                                {{-- Loop through the pagination links --}}
                                @for ($i = 1; $i <= $offers->lastPage(); $i++)
                                    <li class="page-item @if ($offers->currentPage() == $i) active @endif">
                                        <a class="page-link" href="{{ $offers->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Next page link --}}
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

    {{-- For Mobile Code --}}
    @include('frontend.pages.alloffer_mobile_view')
    {{-- For Mobile Code --}}

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Trigger AJAX when any filter changes
                $('#custom_select1, #custom_select2, #custom_select3').change(function() {
                    // Get selected values
                    let division_id = $('#custom_select1').val();
                    let city_id = $('#custom_select2').val();
                    let area_id = $('#custom_select3').val();
                    let search = $('#serviceSearch').val();

                    // Send AJAX request with selected filters
                    $.ajax({
                        url: "{{ route('offers.filter') }}", // Adjust this route based on your backend
                        method: "GET",
                        data: {
                            division_id: division_id,
                            city_id: city_id,
                            area_id: area_id,
                            search: search
                        },
                        success: function(response) {
                            // Update the offers container with filtered offers
                            $('#servicesContainer').html(response.html);
                            // Update pagination if necessary
                            $('.pagination').html(response.pagination);
                        }
                    });
                });

                // Optional: Trigger search on keyup event for the search input
                $('#serviceSearch').keyup(function() {
                    $('#custom_select1, #custom_select2, #custom_select3').trigger('change');
                });
            });
        </script>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle the checkbox when the category or subcategory is clicked
                function toggleOffers(categoryId) {
                    // Check the checkbox for the category
                    const checkbox = document.getElementById('category-' + categoryId);
                    if (checkbox) {
                        checkbox.checked = true; // Automatically check the category checkbox
                    }

                    // Show offers for that category
                    showOffersByCategory(categoryId);
                }

                // Show the offers for the selected category
                function showOffersByCategory(categoryId) {
                    // Remove the 'active' class from all category tabs
                    document.querySelectorAll('.tab-pane').forEach(tab => {
                        tab.classList.remove('show', 'active');
                    });

                    // Add the 'active' class to the relevant category's tab
                    const categoryTab = document.getElementById('category-' + categoryId + '-pane');
                    if (categoryTab) {
                        categoryTab.classList.add('show', 'active');
                    }
                }

                // Add event listener to all accordion checkboxes
                document.querySelectorAll('.accordion-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const categoryId = this.id.split('-')[1];
                        if (this.checked) {
                            showOffersByCategory(categoryId);
                        }
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

        <script>
            document.querySelectorAll('.accordion-checkbox').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const panel = this.closest('.accordion-header').nextElementSibling;

                    // Toggle the 'show' class on the panel
                    if (this.checked) {
                        panel.classList.add('show');
                    } else {
                        panel.classList.remove('show');
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
