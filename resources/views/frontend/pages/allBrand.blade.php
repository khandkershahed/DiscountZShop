<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <div class="desktop-homepage">
        <section>
            <div class="regular-banner">
                <img class="img-fluid w-100"
                    src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                    alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
            </div>
        </section>

        <!-- Brands All -->
        <section>
            <div class="container py-5">
                <div class="row pb-5">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Discover Our Esteemed Brands</h1>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-lg-8">
                        <!-- Optional Filter or Sorting Controls -->
                    </div>

                    <div class="col-lg-4">
                        <div class="text-end">
                            <form class="d-flex" role="search" id="searchForm">
                                <input class="form-control me-2" type="search" id="serviceSearch" placeholder="Search"
                                    aria-label="Search">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row gx-5" id="servicesContainer">
                    @foreach ($categories as $category)
                        @if ($category->brands->count() > 0)
                            <div class="col-lg-12">
                                <div class="row bg-light">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 py-2 main-color">{{ $category->name }}</p>
                                            <span class="store-devider"></span>
                                        </div>
                                    </div>
                                    @foreach ($category->brands as $brand)
                                        <div class="col-lg-2 mb-3 mt-2">
                                            <a href="{{ route('brand.details', $brand->slug) }}">
                                                <div class="card shadow-sm brands-card">
                                                    <div class="card-body p-0">
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

        <!-- Big Brands Section -->
        <section>
            <div class="container py-5 pt-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Big Brands Are Here</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid partners">
                <div class="container px-0">
                    <div class="slick-slider-partners">
                        @foreach ($brands as $brand)
                            <div class="items d-flex justify-content-center align-items-center partners-logos">
                                <a href="{{ route('brand.details', $brand->slug) }}">
                                    <img class="img-fluid"
                                        src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                        alt="" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="mobile-homepage" style="margin-top: 4.6rem;margin-bottom: 8rem;">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div>
                        <img class="img-fluid" src="{{ asset('images/brand-banner.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <form class="d-flex" role="search" id="searchForm">
                        <input class="form-control mx-2 mt-2" type="search" id="serviceSearch" placeholder="Search"
                            aria-label="Search" style="height: 35px">
                    </form>
                    <div>
                        <span>
                            <i class="fa-solid fa-search brand-search"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12">
                </div>
            </div>
            <div class="row gx-5 mt-4" id="servicesContainer">
                @foreach ($categories as $category)
                    @if ($category->brands->count() > 0)
                        <div class="col-12">
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 py-2 main-color">{{ $category->name }}</p>
                                        <span class="store-devider"></span>
                                    </div>
                                </div>
                                @foreach ($category->brands as $brand)
                                    <div class="col-3 mb-3 mt-2">
                                        <a href="{{ route('brand.details', $brand->slug) }}">
                                            <div class="card shadow-sm brands-card p-0">
                                                <div class="card-body p-0">
                                                    <div class="brands-logo">
                                                        <img class="img-fluid p-0  h-auto"
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
    </div>

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
                        $.ajax({
                            url: "{{ route('brands.all.search.name') }}", // URL to fetch all brands
                            method: 'GET',
                            success: function(data) {
                                $('#servicesContainer').html(data); // Reload all brands
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
