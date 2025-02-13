<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <div class="mb-5">
        <section>
            <div class="regular-banner">
                <img class="img-fluid w-100"
                    src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                    alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
            </div>
        </section>
        <!-- Brands All -->
        <section>
            <div class="container py-3 py-lg-3">
                <div class="row">
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="mb-0 text-center mb-lg-5">
                            <h1>Discover Our Esteemed Brands</h1>
                        </div>
                    </div>
                </div>
                <div class="py-3 border row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <h1 class="mb-0 site-color">All Brands</h1>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <div class="text-end">
                            <form class="d-flex" role="search" id="searchForm">
                                {{-- <input class="form-control me-0" type="search" id="serviceSearch" placeholder="Search"
                                    aria-label="Search"> --}}
                                <div class="input-group">
                                    <input class="form-control" type="search" id="serviceSearch"
                                        placeholder="Search Your Brand" aria-describedby="button-addon2"
                                        aria-label="Search">
                                    <button class="btn btn-outline-secondary rounded-0 brand-search" type="button"
                                        id="button-addon2">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="mb-5 row gx-5 mb-lg-0" id="servicesContainer">
                    @foreach ($categories as $category)
                        @if ($category->brands->count() > 0)
                            <div class="col-lg-12 col-12">
                                <div class="row bg-light">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p class="py-2 mb-0 fs-5 main-color">{{ $category->name }}</p>
                                            <span class="store-devider"></span>
                                        </div>
                                    </div>
                                    @foreach ($category->brands as $brand)
                                        <div class="mt-2 mb-3 col-lg-2 col-4">
                                            <a href="{{ route('brand.details', $brand->slug) }}">
                                                <div class="shadow-sm card brands-card">
                                                    <div class="p-0 card-body">
                                                        <div class="brands-logo">
                                                            <img class="img-fluid rounded-3"
                                                                src="{{ asset('storage/' . $brand->logo) }}"
                                                                alt="Brand Logo" title="Brand Logo"
                                                                onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </section>

    </div>

    {{-- <div class="mobile-homepage" style="margin-top: 4.6rem;margin-bottom: 8rem;">
        <div class="container">
            <div class="row">
                <div class="px-0 col-12">
                    <div>
                        <img class="img-fluid" src="{{ asset('images/brand-banner.png') }}" alt="">
                    </div>
                </div>
                <div class="px-0 pt-2 col-12">

                    <form class="d-flex" role="search" id="searchForm">
                        <input class="mx-2 mt-2 form-control" type="search" id="serviceSearch" placeholder="Search"
                            aria-label="Search" style="height: 35px">
                    </form>

                    <div class="d-flex justify-content-end">
                        <span>
                            <i class="fa-solid fa-search brand-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row gx-5" id="servicesContainer" style="margin-top: -25px">
                @foreach ($categories as $category)
                    @if ($category->brands->count() > 0)
                        <div class="col-12">
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="py-2 mb-0 main-color">{{ $category->name }}</p>
                                        <span class="store-devider"></span>
                                    </div>
                                </div>
                                @foreach ($category->brands as $brand)
                                    <div class="px-1 mt-2 mb-1 col-3">
                                        <a href="{{ route('brand.details', $brand->slug) }}">
                                            <div class="p-0 shadow-sm card brands-card">
                                                <div class="p-0 card-body">
                                                    <div class="brands-logo">
                                                        <img class="h-auto p-0 img-fluid"
                                                            src="{{ asset('storage/' . $brand->logo) }}"
                                                            alt="Brand Logo" title="Brand Logo"
                                                            onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> --}}

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val(); // Get the input value

                    if (query.length >= 2) { // Start searching after 2 characters
                        $.ajax({
                            url: "{{ route('brands.all.search.name') }}", // The URL to send the search request
                            method: 'GET',
                            data: {
                                query: query // Send the search query to the backend
                            },
                            success: function(data) {
                                $('#servicesContainer').html(
                                    data); // Update the brand list with the new data
                            }
                        });
                    } else if (query.length === 0) { // If the search input is cleared
                        // Redirect to the 'allBrand' route if the search query is empty
                        window.location.href = "{{ route('allBrand') }}";
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
