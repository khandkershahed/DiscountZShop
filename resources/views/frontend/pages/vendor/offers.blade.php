<x-frontend-app-layout :title="'Offers || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <div class="desktop-homepage">
        <section>
            <div class="container">
                <div class="mb-4 row">
                    <div class="col-lg-12 pe-0">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h3>All Offers</h3>
                                <span class="store-devider"></span>
                            </div>

                            <div class="d-flex align-items-center">
                                <!-- Search Store -->
                                {{-- <div class="wrapper-store">
                                    <div class="search-input-store">
                                        <input type="text" id="serviceSearch" name=""
                                            placeholder="Type to search...">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row servicesContainer divisionContainer">
                    @foreach (optional($brand)->offers as $offer)
                        {{-- @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $offer->expiry_date == null) --}}
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
                            </div>

                        {{-- @endif --}}

                        {{-- @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d'))
                            <div class="mb-4 col-lg-3">
                                <div class="border-0 shadow-sm card bg-light">
                                    <div class="p-4 row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                    width="80px" height="80px" class="rounded-2"
                                                    style="object-fit: contain;" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            @if (!empty($offer->badge))
                                                <h4 class="main-color special-font-box text-end">{{ $offer->badge }}
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
                        @elseif($offer->expiry_date == null)
                            <div class="mb-4 col-lg-3">
                                <div class="border-0 shadow-sm card bg-light">
                                    <div class="p-4 row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                    width="80px" height="80px" class="rounded-2"
                                                    style="object-fit: contain;" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            @if (!empty($offer->badge))
                                                <h4 class="main-color special-font-box text-end">{{ $offer->badge }}
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
                        @else
                            <p>Offer Expired</p>
                        @endif --}}
                    @endforeach



                </div>
            </div>
        </section>
    </div>

    <div class="mobile-homepage" style="margin-bottom: 8rem">
        <section>
            <div class="container">
                <div class="mb-4 row">
                    <div class="col-lg-12 pe-0">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- Search Store -->
                                <div class="wrapper-store d-none d-lg-block">
                                    <div class="search-input-store cst-input">
                                        <input class="w-100" type="text" id="serviceSearch" name=""
                                            placeholder="Type to search...">
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
                <div class="row servicesContainer divisionContainer">
                    @foreach (optional($brand)->offers as $offer)
                        {{-- @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $offer->expiry_date == null) --}}
                            <div class="mb-4 col-lg-3">
                                <div class="border-0 shadow-sm card bg-light">
                                    <div class="p-4 row align-items-center">
                                        <div class="col-lg-12">
                                            <div>
                                                <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                    width="80px" height="80px" class="rounded-2"
                                                    style="object-fit: contain;" alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('images/demo-logo.png') }}';" />
                                            </div>
                                            <div class="pt-2">
                                                @if (!empty($offer->badge))
                                                    {{-- <span>Upto</span> --}}
                                                    <h4 class="main-color special-font-box text-start">{{ $offer->badge }}
                                                    </h4>
                                                @endif
                                                <p class="pb-4 text-black">{{ $offer->name }}</p>
                                            </div>
                                        </div>
                                        <div class="pt-4 col-lg-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="w-50">
                                                    <a href="{{ route('offer.details', $offer->slug) }}"
                                                        class="btn-common-one rounded-3">
                                                        <small>View</small>
                                                    </a>
                                                    @if (!empty($offer->coupon_code))
                                                        <a href="javascript:void(0);"
                                                            class="btn-common-three rounded-3 ms-2"
                                                            onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                            Coupon <i class="fa-solid fa-copy"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                                <p class="text-center ps-5 countdown w-50"
                                                    data-expire-date="{{ $offer->expiry_date }}">
                                                    <span class="main-color">
                                                        <i class="fa-solid fa-clock"></i>
                                                    </span>
                                                    <span class="countdown-timer"> Days</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- @endif --}}
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</x-frontend-app-layout>
