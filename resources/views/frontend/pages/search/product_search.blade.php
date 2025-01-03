<x-frontend-app-layout :title="'Search || DiscountZShop'">

    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Hero End -->

    <!-- Search Results Section -->
    <div class="search-results container my-5">

        <!-- Brands Section -->
        <h3>Brand</h3>
        @if ($brands->isEmpty())
            <p class="my-3 text-danger">Brand Not Found</p>
        @else
            <div class="row">

                @foreach ($brands as $brand)
                    <div class="col-lg-2 mb-3 mt-2">
                        <a href="{{ route('brand.details', $brand->slug) }}">
                            <div class="card shadow-sm brands-card">
                                <div class="card-body p-0">
                                    <div class="brands-logo">
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
            <p class="text-danger my-3">Offer Not Found</p>
        @else
            <div class="row">

                @foreach ($offers as $offer)
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 shadow-sm bg-light">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                            alt=""
                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if (!empty($offer->badge))
                                        {{-- <span>Upto</span> --}}
                                        <h4 class="main-color special-font-box text-end">
                                            {{ $offer->badge }}
                                        </h4>
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
                                            <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                                onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                Coupon <i class="fa-solid fa-copy"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                                        <span class="main-color">Expire In:</span>
                                        <span class="countdown-timer"> Days</span>
                                    </p>
                                </div>
                            </div>
                        </div>
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

                @foreach ($stores as $latest_store)
                    <div class="col-lg-3">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ !empty(optional($latest_store->brand)->image) ? url('storage/' . optional($latest_store->brand)->image) : asset('images/no-image(random).png') }}"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">

                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ !empty(optional($latest_store->brand)->logo) ? url('storage/' . optional($latest_store->brand)->logo) : asset('images/no-image(random).png') }}"
                                                alt="arong-logo.png" />
                                        </div>

                                        <div class="store-rating">
                                            <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between store_title">
                                        <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}">
                                            <div>
                                                <h5 style="width: 98%;margin-bottom: 0.75rem;">
                                                    {{ $latest_store->title }}</h5>
                                                <p>{{ $latest_store->headquarter }}</p>
                                            </div>
                                        </a>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 ps-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">{{ $latest_store->badge }}</span> Off
                                        </small>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @endif

    </div>

</x-frontend-app-layout>
