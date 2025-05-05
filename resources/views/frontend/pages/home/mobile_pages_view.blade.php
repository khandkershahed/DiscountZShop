<div class="mobile-homepage">
    <div class="container">
        @include('frontend.pages.home.mobile_pages.banner')

        @include('frontend.pages.home.mobile_pages.store')
        {{-- Mobile Coupon Start --}}
        <div class="py-4 mt-5 row bg-light">
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 text-black">Available Coupons
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 13"
                                    fill="none">
                                    <path
                                        d="M16.6934 8.21872C16.3539 8.21872 16.0781 8.48188 16.0781 8.80575C16.0781 9.12968 16.3539 9.39279 16.6934 9.39279C17.0328 9.39279 17.3086 9.12968 17.3086 8.80575C17.3086 8.48188 17.0328 8.21872 16.6934 8.21872Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M20.3848 0H6.2034V1.76117C6.2034 2.08565 5.92824 2.34822 5.58818 2.34822C5.24812 2.34822 4.97294 2.08565 4.97294 1.76117V0H0.615236C0.275174 0 0 0.26257 0 0.587057V4.10938C0 4.43387 0.275174 4.69644 0.615236 4.69644C1.63299 4.69644 2.46094 5.48646 2.46094 6.45761C2.46094 7.42877 1.63299 8.21877 0.615236 8.21877C0.275174 8.21877 0 8.48137 0 8.8058V12.3282C0 12.6527 0.275174 12.9152 0.615236 12.9152H4.92188V11.1541C4.92188 10.8296 5.19705 10.567 5.53711 10.567C5.87714 10.567 6.15236 10.8296 6.15236 11.1541V12.9152H20.3848C20.7248 12.9152 21 12.6527 21 12.3282V0.587057C21 0.26257 20.7248 0 20.3848 0ZM6.15236 8.8058C6.15236 9.1303 5.87714 9.3929 5.53711 9.3929C5.19705 9.3929 4.92188 9.1303 4.92188 8.8058V7.63173C4.92188 7.30724 5.19705 7.04464 5.53711 7.04464C5.87714 7.04464 6.15236 7.30724 6.15236 7.63173V8.8058ZM6.15236 5.2835C6.15236 5.60799 5.87714 5.87057 5.53711 5.87057C5.19705 5.87057 4.92188 5.60799 4.92188 5.2835V4.10938C4.92188 3.7849 5.19705 3.52233 5.53711 3.52233C5.87714 3.52233 6.15236 3.7849 6.15236 4.10938V5.2835ZM9.92577 4.10938C9.92577 3.13824 10.7537 2.34822 11.7715 2.34822C12.7892 2.34822 13.6172 3.13824 13.6172 4.10938C13.6172 5.08054 12.7892 5.87057 11.7715 5.87057C10.7537 5.87057 9.92577 5.08054 9.92577 4.10938ZM11.4302 10.4684C11.1473 10.2883 11.0709 9.92431 11.2596 9.65431L16.1815 2.60962C16.3696 2.33961 16.7511 2.26736 17.0347 2.44681C17.3176 2.62684 17.3939 2.99085 17.2053 3.2609L12.2834 10.3056C12.0978 10.5716 11.7177 10.6502 11.4302 10.4684ZM16.6934 10.567C15.6756 10.567 14.8476 9.77696 14.8476 8.8058C14.8476 7.8347 15.6756 7.04464 16.6934 7.04464C17.7111 7.04464 18.539 7.8347 18.539 8.8058C18.539 9.77696 17.7111 10.567 16.6934 10.567Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M11.7715 3.5224C11.4321 3.5224 11.1562 3.78556 11.1562 4.10946C11.1562 4.43336 11.4321 4.69651 11.7715 4.69651C12.1109 4.69651 12.3867 4.43336 12.3867 4.10946C12.3867 3.78556 12.1109 3.5224 11.7715 3.5224Z"
                                        fill="#F15A2D" />
                                </svg>
                            </h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <form action="">
                            <div class="input-group">
                                <input type="text" name="available_coupon"
                                    class="form-control form-control-sm rounded-pill" placeholder="search.."
                                    aria-label="search.." aria-describedby="basic-addon2" style="height: 10px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pt-4 available-coupon-slider">

                    @foreach ($mobile_coupons as $mobile_coupon)
                        @if (optional($mobile_coupon->brand)->slug)
                            <div class="p-0 py-3 border-0 card" >
                                <div class="p-0 card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="{{ route('brand.details', optional($mobile_coupon->brand)->slug) }}">
                                                <div class="shadow-sm coupon-logo">
                                                    <img class="img-fluid"
                                                        src="{{ !empty($mobile_coupon->brand->logo) ? url('storage/' . $mobile_coupon->brand->logo) : 'N/A' }}"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <div class="px-2">
                                                <h3>{{ $mobile_coupon->badge }} Off</h3>
                                                <div class="mt-3 bg-white rounded-2 d-flex align-items-center copy-coupon"
                                                    data-coupon="{{ $mobile_coupon->coupon_code }}" style="cursor: pointer;">
                                                    <div class="p-1 border rounded-2">
                                                        {{-- <img class="img-fluid" width="25px"
                                                            src="{{ asset('images/coupon-icon.png') }}"
                                                            alt=""> --}}
                                                        <i class="px-2 fas fa-copy main-color"></i>
                                                    </div>
                                                    <div class="ps-2">
                                                        <small>Coupon : <span
                                                                class="main-color">{{ $mobile_coupon->coupon_code }}</span></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="py-2 d-flex align-items-center justify-content-center w-100">
                                        <div class="coupon-images-mb ps-2">
                                            <img class=""
                                                src="{{ !empty($mobile_coupon->logo) ? url('storage/' . $mobile_coupon->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <div class="text-start">
                                                <div class="">
                                                    <p class="fw-bold" style="color: #F15A2D">
                                                        {{ $mobile_coupon->badge }} <span class="text-white">OFF</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <hr class="py-0 my-2" style="height: 2px; color: #ffffff;">

                                            <div>
                                                <p class="pt-2 text-center text-white coupon-text coupon-code">
                                                    Code: ”<span class="couponCode"
                                                        id="coupon-code">{{ $mobile_coupon->coupon_code }}</span>”
                                                    <a href="javascript:void(0);" class="copy-btn"
                                                        data-coupon_id="{{ $mobile_coupon->coupon_code }}">
                                                        <i class="fas fa-copy ps-2"></i>
                                                    </a>
                                                </p>
                                            </div>

                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Coupon --}}
        <div class="mt-4 row bg-panda">
            <div class="col-12">
                <div class="py-3 d-flex justify-content-around align-items-center">
                    <p class="text-white">Get 20% on App</p>
                    <div class="d-flex justify-content-center">
                        <input type="text" value="ramadan20" disabled name="coupon_name"
                            class="border-0 ps-3 rounded-2 text-light" style="width: 70%; margin: auto;">
                    </div>
                    <div class="pe-3">
                        <img class="img-fluid" width="50px" src="{{ asset('images/panda.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        {{-- All Offers Start --}}

        <div class="py-4 mt-2 row bg-light">
            <div class="col-12">
                <div class="relative overflow-hidden">
                    <!-- Tabs Container -->
                    <ul class="flex items-center gap-2 pb-3 overflow-x-auto border-0 tabs-container-mobile nav nav-tabs flex-nowrap"
                        role="tablist">
                        <li class="flex-shrink-0 nav-item" role="presentation">
                            <button class="nav-link mb-link-tabs active whitespace-nowrap" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane-mobile" type="button"
                                role="tab" aria-controls="home" aria-selected="true" style="font-size: 10px">
                                All Offers
                            </button>
                        </li>
                        <!-- Loop through categories -->
                        {{-- @if ($categories->count() > 0)
                            @foreach ($categories as $index => $offercategory)
                                @if ($offercategory->offers->count() > 0)
                                    <li class="nav-item flex-shrink-0 {{ $index >= 7 ? 'd-none more-tabs' : '' }}"
                                        role="presentation">
                                        <button class="nav-link mb-link-tabs whitespace-nowrap" style="font-size: 10px"
                                            id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-mobile-{{ $offercategory->id }}-pane" type="button"
                                            role="tab" aria-controls="home-{{ $offercategory->id }}-pane"
                                            aria-selected="true">
                                            {{ $offercategory->name }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        @endif --}}
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <!-- All Offers Tab -->
                    <div class="tab-pane fade show active" id="home-tab-pane-mobile" role="tabpanel"
                        aria-labelledby="home-tab-mobile" tabindex="0">
                        <div class="mt-3 row g-1" id="all-offers">
                            @php
                                $offer_count = 0;
                                $visible_offer_count = 6; // Initially, show 9 offers (3 rows)
                            @endphp

                            @foreach ($alloffers as $alloffer)
                                @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                    @php $offer_count++; @endphp
                                    <div
                                        class="col-6 offer-item {{ $offer_count > $visible_offer_count ? 'd-none' : '' }}">
                                        <div class="p-0 card offers-card" style="border: 2px dashed #eee">
                                            <div class="p-1 py-3 card-body flex-column d-flex align-items-center">
                                                <div class="offers-img">
                                                    <a class="ps-2"
                                                        href="{{ route('offer.details', $alloffer->slug) }}">
                                                        <img src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-3 text-center ps-2">
                                                    @if (!empty($alloffer->badge))
                                                        <p style="font-size: 12px;">
                                                            <a
                                                                href="{{ route('offer.details', $alloffer->slug) }}">{{ $alloffer->badge }}</a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="pt-4 d-flex justify-content-center">
                            <button class="px-5 btn btn-dark rounded-pill" id="see-more-all"
                                onclick="toggleAllOffers()">
                                See More
                            </button>
                        </div>
                    </div>

                    <!-- Category-based Tabs -->
                    @foreach ($categories as $offercategory)
                        <div class="tab-pane fade" id="home-mobile-{{ $offercategory->id }}-pane" role="tabpanel"
                            aria-labelledby="home-{{ $offercategory->id }}-tab-mobile" tabindex="0">
                            <div class="row g-1" id="offers-{{ $offercategory->id }}">
                                @php
                                    $offer_count = 0;
                                    $visible_offer_count = 6; // Initially, show 9 offers (3 rows)
                                @endphp

                                @foreach ($offercategory->offers as $category_offer)
                                    @if ($category_offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $category_offer->expiry_date == null)
                                        @php $offer_count++; @endphp
                                        <div
                                            class="col-6 offer-item {{ $offer_count > $visible_offer_count ? 'd-none' : '' }}">
                                            <div class="p-0 card" style="border: 2px dashed #eee">
                                                <div
                                                    class="p-1 py-3 card-body flex-column d-flex justify-content-between align-items-center">
                                                    <div class="offers-img">
                                                        <a href="{{ route('offer.details', $category_offer->slug) }}">
                                                            <img src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pt-3 text-center ps-2">
                                                        @if (!empty($category_offer->badge))
                                                            <p style="font-size: 12px;">
                                                                <a
                                                                    href="{{ route('offer.details', $category_offer->slug) }}">
                                                                    {{ $category_offer->badge }}
                                                                </a>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                @if ($offer_count == 0)
                                    <img class="img-fluid" src="{{ asset('images/NoOffers.png') }}" alt="">
                                @endif
                            </div>

                            <div class="pt-4 d-flex justify-content-center">
                                <button class="px-5 btn btn-dark rounded-pill" id="see-more-{{ $offercategory->id }}"
                                    onclick="toggleOffers({{ $offercategory->id }})">
                                    See More
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        {{-- All Offers Section End --}}
        <!-- offerLatests Slider -->
        <div class="container px-0 pb-70 pt-70 latest-offers">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slick Slider -->
                    <div class="mt-4 slick-slider-product">
                        @forelse ($offerLatests as $offerLatest)
                            <div class="items me-2" style="background-color: #f5f6f8">
                                <div class="p-4 row align-items-center product-discount-box">

                                    <div class="col-lg-5 col-sm-12">

                                        <h5 class="pt-2 pb-3 text-center main-color pt-lg-0 fw-bold">
                                            {{ $offerLatest->badge }}
                                        </h5>
                                        <div class="text-center d-flex justify-content-center">
                                            <img class="img-fluid flat-offer-img rounded-circle"
                                                src="{{ !empty($offerLatest->image) ? url('storage/' . $offerLatest->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerLatest->name) }}"
                                                alt=""
                                                onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />

                                        </div>

                                    </div>

                                    <div class="col-lg-7 col-sm-12">
                                        <div class="product_discount_box">
                                            <h4 class="pt-3">{{ $offerLatest->name }}</h4>
                                            <p class="py-3">
                                                {{ \Illuminate\Support\Str::words($offerLatest->short_description, 7, '...') }}
                                            </p>
                                            <a class="px-5 btn btn-dark rounded-pill"
                                                href="{{ route('offer.details', $offerLatest->slug) }}">See
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No Offer Available </p>
                        @endforelse

                    </div>
                    <!-- End Slick Slider -->
                </div>
            </div>
        </div>
        <div class="py-4 pt-3 pb-0 mt-2 row bg-light">

            <div class="col-12 ">
                <h4 class="text-center">Deals of the Day</h4>
            </div>

            <div class="col-12">

                <div class="pb-4 tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home2" role="tabpanel"
                        aria-labelledby="home2-tab">
                        <div class="mt-3 row g-2">

                            @foreach ($offerDeals as $offerDeal)
                                <div class="col-6">
                                    <div class="p-0 card rounded-3">
                                        <div class="p-0 card-header">
                                            <div class="p-0">
                                                <div>
                                                    <img class="img-fluid w-100" style="height: 200px;"
                                                        src="{{ !empty($offerDeal->image) ? url('storage/' . $offerDeal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDeal->name) }}"
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='http://www.discountzshop.com/storage/offer/image/537vyydBJE1739264632.png';">
                                                </div>
                                                <div class="px-2 py-2 d-flex align-items-center">
                                                    <div class="ps-2">
                                                        <a href="{{ route('offer.details', $offerDeal->slug) }}">
                                                            <h6 class="my-3 product-title">
                                                                {{ Str::words($offerDeal->name, 2, '...') }}
                                                            </h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 card-body" style="border-top: 1px dashed #252525">
                                            <a href="{{ route('offer.details', $offerDeal->slug) }}">
                                                <div class="py-2 ticket">
                                                    <span class="">View Offer</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Offer Slider Image Start --}}
        <div class="mt-3 row">
            <div class="col-12 ps-1">
                <div class="pt-3 pb-5 custom-slider">
                    <div>
                        <a href="{{ $homepage->offer_slider_image_one_link }}">
                            <img class="img-fluid fixed-size rounded-2"
                                src="{{ !empty($homepage->offer_slider_image_one) ? url('storage/' . $homepage->offer_slider_image_one) : asset('images/banner-demo.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                        </a>
                    </div>
                    <div>
                        <a href="{{ $homepage->offer_slider_image_two_link }}">
                            <img class="img-fluid fixed-size rounded-2"
                                src="{{ !empty($homepage->offer_slider_image_two) ? url('storage/' . $homepage->offer_slider_image_two) : asset('images/banner-demo.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                        </a>
                    </div>
                    <div>
                        <a href="{{ $homepage->offer_slider_image_three_link }}">
                            <img class="img-fluid fixed-size rounded-2"
                                src="{{ !empty($homepage->offer_slider_image_three) ? url('storage/' . $homepage->offer_slider_image_three) : asset('images/banner-demo.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                        </a>
                    </div>
                    <div>
                        <a href="{{ $homepage->offer_slider_image_four_link }}">
                            <img class="img-fluid fixed-size rounded-2"
                                src="{{ !empty($homepage->offer_slider_image_four) ? url('storage/' . $homepage->offer_slider_image_four) : asset('images/banner-demo.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Offer Slider Image End --}}


        {{-- Brand Section Start --}}
        <div class="row" style="margin-bottom: 9rem">
            <h4 class="py-4 pb-4 text-center">Partner Brands</h4>
            <div class="col-12">
                <div class="mobile-partners">

                    @foreach ($brands as $brand)
                        <div class="mobile-partner">

                            <a href="{{ route('brand.details', $brand->slug) }}">
                                <img class="img-fluid"
                                    src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : '' }}"
                                    alt="">
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{-- Brand Section Ens --}}

    </div>
</div>



{{-- @push('scripts')
    <script>
        // Toggle All Offers visibility
        function toggleAllOffers() {
            let offers = document.querySelectorAll('#all-offers .offer-item');
            let seeMoreBtn = document.querySelector('#see-more-all');
            offers.forEach((offer, index) => {
                if (index > 8) {
                    offer.classList.toggle('d-none');
                }
            });
            seeMoreBtn.innerHTML = seeMoreBtn.innerHTML === 'See More' ? 'See Less' : 'See More';
        }

        // Toggle category-specific offers visibility
        function toggleOffers(category_id) {
            let offers = document.querySelectorAll(`#offers-${category_id} .offer-item`);
            let seeMoreBtn = document.querySelector(`#see-more-${category_id}`);

            offers.forEach((offer, index) => {
                if (index > 8) {
                    offer.classList.toggle('d-none');
                }
            });

            seeMoreBtn.innerHTML = seeMoreBtn.innerHTML === 'See More' ? 'See Less' : 'See More';
        }
    </script>
@endpush --}}

@push('scripts')
    <script>
        // Toggle All Offers visibility with incremental show/hide
        function toggleAllOffers() {
            let offers = document.querySelectorAll('#all-offers .offer-item');
            let seeMoreBtn = document.querySelector('#see-more-all');
            let visibleOffers = document.querySelectorAll('#all-offers .offer-item:not(.d-none)');
            let offerCount = offers.length;

            // Incrementally show more offers
            if (visibleOffers.length < offerCount) {
                // Show the next 6 offers
                for (let i = visibleOffers.length; i < Math.min(visibleOffers.length + 6, offerCount); i++) {
                    offers[i].classList.remove('d-none');
                }
                seeMoreBtn.innerHTML = visibleOffers.length + 6 < offerCount ? 'See More' : 'See Less';
            } else {
                // Hide extra offers if 'See Less' is clicked
                offers.forEach((offer, index) => {
                    if (index >= 9) offer.classList.add('d-none');
                });
                seeMoreBtn.innerHTML = 'See More';
            }
        }

        // Toggle category-specific offers visibility with incremental show/hide
        function toggleOffers(category_id) {
            let offers = document.querySelectorAll(`#offers-${category_id} .offer-item`);
            let seeMoreBtn = document.querySelector(`#see-more-${category_id}`);
            let visibleOffers = document.querySelectorAll(`#offers-${category_id} .offer-item:not(.d-none)`);
            let offerCount = offers.length;

            // Incrementally show more offers
            if (visibleOffers.length < offerCount) {
                // Show the next 6 offers
                for (let i = visibleOffers.length; i < Math.min(visibleOffers.length + 6, offerCount); i++) {
                    offers[i].classList.remove('d-none');
                }
                seeMoreBtn.innerHTML = visibleOffers.length + 6 < offerCount ? 'See More' : 'See Less';
            } else {
                // Hide extra offers if 'See Less' is clicked
                offers.forEach((offer, index) => {
                    if (index >= 9) offer.classList.add('d-none');
                });
                seeMoreBtn.innerHTML = 'See More';
            }
        }
    </script>
@endpush
