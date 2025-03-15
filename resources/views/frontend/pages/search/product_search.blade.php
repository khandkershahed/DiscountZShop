<x-frontend-app-layout :title="'Search || DiscountZShop'">

    <!-- Hero Section -->
    <section class="">
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Hero End -->

    <!-- Search Results Section -->
    <div class="container my-5 search-results all-offers-container">

        <!-- Brands Section -->
        <h3>Brand</h3>
        @if ($brands->isEmpty())
            <p class="my-3 text-danger">Brand Not Found</p>
        @else
            <div class="row">

                @foreach ($brands as $brand)
                    <div class="mt-2 mb-3 col-lg-2 col-6">
                        <a href="{{ route('brand.details', $brand->slug) }}">
                            <div class="shadow-sm card brands-card">
                                <div class="p-0 card-body">
                                    <div class="brands-logo search-brands">
                                        <img class="img-fluid rounded-3" src="{{ asset('storage/' . $brand->logo) }}"
                                            alt="Brand Logo" title="Brand Logo" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        @endif

        <!-- Offers Section -->
        <h3>Offer</h3>
        @if ($offers->isEmpty())
            <p class="my-3 text-danger">Offer Not Found</p>
        @else
            <div class="row">
                @foreach ($offers as $offer)
                    <div class="mb-4 col-lg-3 col-6 pe-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="store-logo">
                                                <img class="img-fluid"
                                                    src="{{ !empty(optional($offer->brand)->logo) ? url('storage/' . optional($offer->brand)->logo) : asset('images/no-image(random).png') }}"
                                                    alt="arong-logo.png"
                                                    onerror="this.onerror=null; this.src='{{ asset('img/no-img.jpg') }}';" />
                                            </div>
                                            <div class="store-rating">
                                                <a href="{{ route('offer.details', $offer->slug) }}"
                                                    class="btn btn-common-one rounded-circle store-btn"><i
                                                        class="fa-solid fa-arrow-right fs-5" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Store Info -->
                                        <div class="d-flex justify-content-between store_title">
                                            <a href="{{ route('offer.details', $offer->slug) }}">
                                                <div>
                                                    <h6>
                                                        {{ Str::words($offer->name, 5, '...') }}
                                                    </h6>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach

            </div>
        @endif

        <!-- Stores Section -->
        <h3>Store</h3>
        @if ($stores->isEmpty())
            <p class="my-3 text-danger">Store Not Found</p>
        @else
            <div class="row">
                @foreach ($stores as $store)
                    <div class="col-lg-3 col-6 mb-3">
                        <div class="border-0 shadow-sm card bg-light offer-boxes">
                            <div class="p-4 row align-items-center">
                                <div class="col-lg-6 col-4">
                                    <div>
                                        <img src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                                            width="80px" height="80px" class="rounded-2 mobile-offers"
                                            style="object-fit: contain;" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-8 text-end">
                                    {{-- @if (!empty($store->badge))
                                    <h4 class="main-color special-font-box text-end">
                                        {{ $store->badge }}</h4>
                                @endif --}}
                                    <a class="add_to_wishlist" style="cursor: pointer;" data-bs-toggle="modal"
                                        data-bs-target="#store_location_{{ $store->id }}">
                                        <i class="fa-solid fa-store fs-5 text-danger"></i>
                                    </a>
                                </div>

                                <div class="pt-4 col-lg-12 offer_title">
                                    <a href="{{ route('vendor.stores', $store->slug) }}">
                                        <div class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                                            <p class="text-black">
                                                {{ $store->title }}</p>

                                            {{-- <a class="add_to_wishlist" style="cursor: pointer;" data-product_id="{{ $store->id }}"
                                            data-tip="Wishlist">
                                            <i class="fa-regular fa-heart fs-5 text-danger"></i>
                                        </a> --}}

                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Store Location Modal -->
                    <div class="modal fade" id="store_location_{{ $store->id }}" tabindex="-1"
                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header py-4" style="background-color: #f15a2d">
                                    <h5 class="modal-title text-white" id="modalTitleId">
                                        Store Location
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="{{ $store->map_url }}" width="100%" height="450"
                                                frameborder="0" style="border: 0" allowfullscreen=""
                                                class="map-store"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @endif

    </div>

</x-frontend-app-layout>
