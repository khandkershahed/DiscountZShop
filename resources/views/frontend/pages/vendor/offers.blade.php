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
                                <div class="wrapper-store">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row servicesContainer divisionContainer">
                    @foreach (optional($brand)->offers as $offer)
                        <div class="mb-4 col-lg-3">
                            <div class="border-0 shadow-sm card bg-light">
                                <div class="p-4 row align-items-center">
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
                                            <h4 class="main-color special-font-box text-end">{{ $offer->badge }}
                                            </h4>
                                        @endif
                                    </div>
                                    <div class="pt-4 col-lg-12 offer_title">
                                        <p class="pb-4 text-black">{{ $offer->name }}</p>
                                        {{-- <a href="{{ route('offer.details', $offer->slug) }}"
                                    class="main-color">
                                    <small>See All In Store</small>
                                </a> --}}
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
                    @endforeach
                    {{-- Pagination Of The Data --}}
                    {{-- <div class="col-lg-12">
                    <div class="pt-2 pb-4 d-flex justify-content-center align-items-center">
                        <a href="javascript:void(0)" class="btn-common-one rounded-3 ">
                            <small>Show More</small>
                        </a>
                    </div>
                </div> --}}
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
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-frontend-app-layout>
