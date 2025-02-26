<x-frontend-app-layout :title="'DiscountZShop'">
    <div class="desktop-homepage">
        <!-- Hero Section -->
        <section>
            <div class="px-0 container-fluid" style="overflow: hidden">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row gx-3">
                            <div class="col-lg-7 col-sm-12">
                                <div class="slick-slider" style="height: 100%">
                                    <div class="hero-slider">
                                        @foreach ($sliders as $slider)
                                            <div class="items">
                                                <a href="{{ $slider->url }}">
                                                    <img class="mb-2 img-fluid w-100 responsive-img mb-lg-0"
                                                        src="{{ !empty($slider->image) ? url('storage/' . $slider->image) : asset('images/no-banner(1920-330).png') }}"
                                                        onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row gx-3">
                                    {{-- @dd($banner); --}}
                                    <div class="col-lg-12">
                                        <a href="{{ $banner->image_one_url }}">
                                            <img class="mb-2 img-fluid w-100 responsive-img mb-lg-0"
                                                src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : asset('images/banner-demo.png') }}"
                                                alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-2 row mt-lg-3 gx-3">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ $banner->image_two_url }}">
                                                <img class="mb-2 img-fluid w-100 responsive-img mb-lg-0"
                                                    src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : asset('images/banner-demo.png') }}"
                                                    alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ $banner->image_three_url }}">
                                                <img class="mb-2 img-fluid w-100 responsive-img mb-lg-0"
                                                    src="{{ !empty($banner->image_three) ? url('storage/' . $banner->image_three) : asset('images/banner-demo.png') }}"
                                                    alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Available Coupon Start -->
        @include('frontend.pages.home.coupon')

        <!-- Available Coupon End -->

        <!-- App Discount Start -->
        <section class="app-discount-box">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="text-white get-discounts-text">Get 20% on App</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-end get-discounts">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/panda.png" alt="" />
                            </div>
                            <div class="px-3 py-2 bg-white rounded-2">
                                <h4>ramadan20</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App Discount End -->

        <!-- Grab Your Offer -->
        @include('frontend.pages.home.grab_your_offer')
        <!-- Grab Your Offer End -->

        <!-- Biggest Deals From Product -->
        @if (optional($homepage)->brand)
            <section>
                <div class="container px-0 py-4 biggest-deals">
                    <div class="row gx-4 promotion-container align-items-center">
                        <div class="py-2 col-lg-12">
                            <h1 class="pt-0 promotion-title">Biggest Deals From {{ optional($homepage->brand)->name }}</h1>
                        </div>
                        <div class="mt-2 col-lg-4">
                            <div class="row d-flex align-items-stretch side-product">
                                @foreach ($brand_offers_left as $brand_offer_left)
                                    <div class="px-0 mb-2 col-lg-6 bg-light d-flex align-items-center">
                                        <div class="w-100">
                                            <a href="{{ route('offer.details', $brand_offer_left->slug) }}">
                                                <img src="{{ !empty($brand_offer_left->image) ? url('storage/' . $brand_offer_left->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                    class="img-fluid w-100" alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('http://discountzshop.com/storage/offer/image/qrGE6dP1rf1733201788.png') }}';" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-0 mb-2 col-lg-6 bg-light d-flex">
                                        <div class="p-3 py-4 w-100">
                                            <h5>{{ $brand_offer_left->name }}</h5>
                                            <p class="py-4 mb-0 fw-bold">{!! Str::words($brand_offer_left->short_description, 8) !!}</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="main-color">
                                                        {{ str_ireplace('discount', 'off', $brand_offer_left->badge) }}
                                                    </h3>
                                                </div>
                                                <div class="pe-4">
                                                    <a href="{{ route('offer.details', $brand_offer_left->slug) }}"
                                                        class="btn-{{ $loop->iteration }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" viewBox="0 0 30 30" fill="none">
                                                            <circle cx="15" cy="15" r="15" fill="#F15A2D">
                                                            </circle>
                                                            <path
                                                                d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                                fill="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Repeat the product showcase for other products -->
                        </div>
                        <div class="px-0 col-lg-4">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid w-100 middle-banner"
                                    src="{{ asset('storage/' . optional($homepage)->deal_brand_image) }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='{{ asset('http://discountzshop.com/storage/homepage/deal_brand_image/prLka0SI3X1733812486.jpg') }}';" />
                            </div>
                        </div>
                        <div class="mt-2 col-lg-4">
                            <div class="row d-flex align-items-stretch side-product">
                                @foreach ($brand_offers_right as $brand_offer_right)
                                    <div class="px-0 mb-2 col-lg-6 bg-light d-flex align-items-center">
                                        <div class="w-100">
                                            <a href="{{ route('offer.details', $brand_offer_right->slug) }}">
                                                <img src="{{ !empty($brand_offer_right->image) ? url('storage/' . $brand_offer_right->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                    class="img-fluid w-100" alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('http://discountzshop.com/storage/offer/image/qrGE6dP1rf1733201788.png') }}';" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-0 mb-2 col-lg-6 bg-light d-flex">
                                        <div class="p-3 py-4 w-100">
                                            <h5>{{ $brand_offer_right->name }}</h5>
                                            <p class="py-4 mb-0 fw-bold">{!! Str::words($brand_offer_right->short_description, 8) !!}</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="main-color">
                                                        {{ str_ireplace('discount', 'off', $brand_offer_right->badge) }}
                                                    </h3>
                                                </div>
                                                <div class="pe-4">
                                                    <a href="{{ route('offer.details', $brand_offer_right->slug) }}"
                                                        class="btn-{{ $loop->iteration }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" viewBox="0 0 30 30" fill="none">
                                                            <circle cx="15" cy="15" r="15"
                                                                fill="#F15A2D"></circle>
                                                            <path
                                                                d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                                fill="white"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Repeat the product showcase for other products -->
                        </div>
                    </div>
                </div>
            </section>
        @else
            <!-- Fallback section for no data -->
            <section>
                <div class="container py-5 text-center deal-hbox">
                    <img src="{{ asset('images/NoOffers.png') }}" alt="No Data Available" class="img-fluid w-100">
                </div>
            </section>
        @endif
        <!-- Biggest Deals From -->

        <!-- Map By Location -->
        {{-- @include('frontend.pages.home.map') --}}
        <!-- Map By Location End -->

        <!-- Product Slider -->
        <section>
            <div class="container px-0 py-4 latest-offers">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slick Slider -->
                        <div class="slick-slider-product">
                            @forelse ($offerLatests as $offerLatest)
                                @if ($offerLatest->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $offerLatest->expiry_date == null)
                                    <div class="items me-2" style="background-color: #f5f6f8">
                                        <div class="p-4 row align-items-center product-discount-box">
                                            <div class="col-lg-7 col-sm-12">
                                                <div class="product_discount_box">
                                                    <h4>{{ $offerLatest->name }}</h4>
                                                    <p class="py-3">
                                                        {{ \Illuminate\Support\Str::words($offerLatest->short_description, 7, '...') }}
                                                    </p>
                                                    <div class="pt-4">
                                                        <a href="{{ route('offer.details', $offerLatest->slug) }}">
                                                            <button class="learn-more">
                                                                <span class="circle" aria-hidden="true">
                                                                    <span class="icon arrow"></span>
                                                                </span>
                                                                <span class="button-text">See Details</span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>
                                                    <h5 class="pt-4 pb-3 text-center main-color pt-lg-0 fw-bold">
                                                        {{ $offerLatest->badge }}
                                                    </h5>
                                                    <div class="text-center d-flex justify-content-center">
                                                        <img class="img-fluid flat-offer-img rounded-circle"
                                                            src="{{ !empty($offerLatest->image) ? url('storage/' . $offerLatest->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerLatest->name) }}"
                                                            alt=""
                                                            onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @empty
                                <p>No Offer Avaiable</p>
                            @endforelse

                        </div>
                        <!-- End Slick Slider -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Slider End -->

        <!-- Deal Of The Day -->
        <section>
            <div class="container px-0 py-4">
                <div class="row gx-0">
                    <div class="col-lg-3">
                        <div class="card deal-of-the-day rounded-0">
                            <!-- Card Header -->
                            <div class="text-white border-0 card-header rounded-0 deal-of-the-day-header"
                                style="background-color: var(--primary-color)">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="py-3 mb-0">Deals Of The Day</h4>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center">
                                            <button type="button" class="deal-custom-prev rounded-circle">
                                                <i class="fas fa-arrow-left-long"></i>
                                            </button>
                                            <button type="button" class="deal-custom-next rounded-circle ms-3">
                                                <i class="fas fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Header End -->
                            <div class="card-body">
                                <!-- Slider Items -->
                                <div class="deal-slider">

                                    @forelse ($offerDealLefts as $offerDealLeft)
                                        @if ($offerDealLeft->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $offerDealLeft->expiry_date == null)
                                            <div class="items">
                                                <div class="py-2 d-flex justify-content-center deals-of-the-day-box">
                                                    <img class="img-fluid"
                                                        src="{{ !empty($offerDealLeft->image) ? url('storage/' . $offerDealLeft->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                        alt=""
                                                        onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                                </div>
                                                <div class="py-3">

                                                    <h5 class="text-center">
                                                        <span class="fw-bold main-color">{{ $offerDealLeft->badge }}
                                                        </span>
                                                        <br>
                                                        {{ $offerDealLeft->name }}
                                                    </h5>

                                                </div>

                                                <div class="py-2 d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('offer.details', $offerDealLeft->slug) }}"
                                                        class="px-4 btn btn-common-one rounded-pill">See
                                                        Details</a>
                                                </div>

                                                <div class="pt-4 pb-5 text-center">
                                                    <div>
                                                        <h5>
                                                            <span class="main-color">Hurry Up!</span> Offers
                                                            end in:
                                                        </h5>
                                                    </div>
                                                    <div class="mt-4 countdown-with-days">
                                                        <p class="pt-2 text-center countdown"
                                                            data-expire-date="{{ $offerDealLeft->expiry_date }}">
                                                            <span class="main-color">Expire In:</span>
                                                            <span class="countdown-timer"> Days</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                        <p>No Offer Avaiable</p>
                                    @endforelse

                                </div>
                                <!-- Slider Items -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 bg-light product-scroll-show">
                        <!-- Search Box -->
                        <div class="p-3 pb-0 d-flex justify-content-center align-items-center">
                            {{-- <form method="get" action="{{ route('courses.search') }}" class="d-flex w-100" role="search"> --}}
                            <div class="mb-3 input-group w-50 ms-auto">
                                <input type="text" id="serviceSearch" class="p-2 form-control rounded-pill"
                                    placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2" />
                                <div class="input-group-append search-btn" style="margin-left: -25px;">
                                    <button class="border-0 btn" type="button">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            {{-- </form> --}}
                        </div>

                        <!-- Search Box -->
                        <div class="p-3 pt-0 row gx-3" id="servicesContainer">
                            @forelse ($offerDeals as $offerDeal)
                                <div class="mb-3 col-lg-4">
                                    <div class="border-0 card deal-card">
                                        <div class="p-4 border-0 card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Counter -->
                                                <div>
                                                    <div class="countdown-hms">
                                                        <p class="text-center countdown"
                                                            data-expire-date="{{ $offerDeal->expiry_date }}">
                                                            <span class="main-color">Expire In:</span>
                                                            <span class="countdown-timer"> Days</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Wishlist -->
                                                <div>
                                                    <a type="submit" class="add_to_wishlist"
                                                        style="cursor: pointer;"
                                                        data-product_id="{{ $offerDeal->id }}" data-tip="Wishlist">
                                                        <i class="fa-regular fa-heart fs-5"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <!-- Product Image -->
                                            <div
                                                class="py-3 d-flex justify-content-center align-items-center deal-scroll-box">
                                                <img class="img-fluid deal-img"
                                                    src="{{ !empty($offerDeal->image) ? url('storage/' . $offerDeal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDeal->name) }}"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="{{ route('offer.details', $offerDeal->slug) }}">
                                                        <h6 class="mb-3 product-title">
                                                            {{ $offerDeal->name }}
                                                        </h6>
                                                    </a>
                                                    @if (!empty($offerDeal->price))
                                                        <del class="pt-2">BDT {{ $offerDeal->price }}</del>
                                                    @endif
                                                    @if (!empty($offerDeal->offer_price))
                                                        <h6 class="main-color">BDT {{ $offerDeal->offer_price }}</h6>
                                                    @endif
                                                </div>
                                                <div class="mt-4">
                                                    <a href="{{ route('offer.details', $offerDeal->slug) }}"
                                                        class="px-4 btn btn-common-one rounded-pill">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="not-available">
                                    <div class="py-3 text-center">
                                        <img width="260" class="img-fluid"
                                            src="{{ asset('images/no-data.jpg') }}" alt="No Content">
                                    </div>
                                    <h5 class="text-warning">No Offer available right now.</h5>
                                </div>
                            @endforelse

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Deal Of The Day End -->

        <!-- Normal Slider Product Show -->
        <section>
            <div class="container px-0 py-0 py-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slick-slider-normal">
                            <div class="items">
                                <a href="{{ $homepage->offer_slider_image_one_link }}">
                                    <div>
                                        <img src="{{ !empty($homepage->offer_slider_image_one) ? url('storage/' . $homepage->offer_slider_image_one) : asset('images/banner-demo.png') }}"
                                            class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                            alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="items">
                                <a href="{{ $homepage->offer_slider_image_two_link }}">
                                    <div>
                                        <img src="{{ !empty($homepage->offer_slider_image_two) ? url('storage/' . $homepage->offer_slider_image_two) : asset('images/banner-demo.png') }}"
                                            class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                            alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="items">
                                <a href="{{ $homepage->offer_slider_image_three_link }}">
                                    <div>
                                        <img src="{{ !empty($homepage->offer_slider_image_three) ? url('storage/' . $homepage->offer_slider_image_three) : asset('images/banner-demo.png') }}"
                                            class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                            alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="items">
                                <a href="{{ $homepage->offer_slider_image_four_link }}">
                                    <div>
                                        <img src="{{ !empty($homepage->offer_slider_image_four) ? url('storage/' . $homepage->offer_slider_image_four) : asset('images/banner-demo.png') }}"
                                            class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                            alt="" />
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Normal Slider Product Show ENd -->

        @if ($brands->count() > 0)
            <section>
                <div class="container px-0 py-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h1>Top Brands</h1>
                                {{-- <p class="pt-3 w-lg-50 w-100">
                                Problems trying to resolve the conflict between <br />
                                the two major realms of Classical physics: Newtonian
                                mechanics
                            </p> --}}
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
                                        <img class="img-fluid partners-logos-single"
                                            src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'http://discountzshop.com/storage/brands/logo/koQPsCroGn1737948806.jpg' }}"
                                            alt=""
                                            onerror="this.onerror=null;this.src='http://discountzshop.com/storage/brands/logo/koQPsCroGn1737948806.jpg';" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- Footer Slider -->

        @if (
            !empty($homepage->bottom_banner_slider_one) ||
                !empty($homepage->bottom_banner_slider_two) ||
                !empty($homepage->bottom_banner_slider_three) ||
                !empty($homepage->bottom_banner_slider_four))
            <section>
                <div class="container px-0 py-4 latest-offers">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slick-slider-footer-slider">
                                @php
                                    $bottom_banners = [
                                        [
                                            'link' => $homepage->bottom_banner_slider_one_link,
                                            'image' => $homepage->bottom_banner_slider_one,
                                        ],
                                        [
                                            'link' => $homepage->bottom_banner_slider_two_link,
                                            'image' => $homepage->bottom_banner_slider_two,
                                        ],
                                        [
                                            'link' => $homepage->bottom_banner_slider_three_link,
                                            'image' => $homepage->bottom_banner_slider_three,
                                        ],
                                        [
                                            'link' => $homepage->bottom_banner_slider_four_link,
                                            'image' => $homepage->bottom_banner_slider_four,
                                        ],
                                    ];
                                    $defaultImage = asset('images/banner-demo.png');
                                @endphp

                                @foreach ($bottom_banners as $bottom_banner)
                                    <a href="{{ $bottom_banner['link'] }}">
                                        <div class="items d-flex justify-content-center align-items-center">
                                            <img class="img-fluid w-100 rounded-lg-3 rounded-2"
                                                src="{{ !empty($bottom_banner['image']) ? url('storage/' . $bottom_banner['image']) : $defaultImage }}"
                                                alt="Banner image"
                                                onerror="this.onerror=null;this.src='https://img.freepik.com/free-vector/no-data-concept-illustration_114360-2506.jpg';" />
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>

    {{-- Home Page Mobile View --}}
    @include('frontend.pages.home.mobile_pages_view')
    {{-- Home Page Mobile View --}}

    @push('scripts')
        <!-- Category Slide In Mobile -->
        <script>
            // Select elements
            const tabsContainer = document.getElementsByClassName("tabs-container-mobile");
            const chevronLeft = document.getElementsByClassName("chevron-left-mobile");
            const chevronRight = document.getElementsByClassName("chevron-right-mobile");

            // Function to check overflow and toggle chevron buttons
            const checkOverflow = () => {
                const isOverflowing = tabsContainer.scrollWidth > tabsContainer.clientWidth;

                // Show or hide chevrons based on overflow
                chevronLeft.classList.toggle("hidden", tabsContainer.scrollLeft <= 0);
                chevronRight.classList.toggle(
                    "hidden",
                    tabsContainer.scrollLeft + tabsContainer.clientWidth >= tabsContainer.scrollWidth
                );
            };

            // Function to scroll tabs
            const scrollTabs = (direction) => {
                const scrollAmount = 100; // Adjust scroll amount
                tabsContainer.scrollBy({
                    left: direction === "left" ? -scrollAmount : scrollAmount,
                    behavior: "smooth",
                });
            };

            // Attach event listeners for scrolling
            chevronLeft.addEventListener("click", () => scrollTabs("left"));
            chevronRight.addEventListener("click", () => scrollTabs("right"));

            // Re-check overflow on scroll
            tabsContainer.addEventListener("scroll", checkOverflow);

            // Initial check on page load
            window.addEventListener("DOMContentLoaded", checkOverflow);
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('.coupon-slide').slick({
                    dots: false, // Disable dots for navigation
                    arrows: false, // Disable arrows
                    infinite: true, // Enable infinite scrolling
                    slidesToShow: 2, // Show 2 slides at a time
                    slidesToScroll: 1, // Scroll 1 slide at a time
                    adaptiveHeight: true, // Adjust height dynamically
                    speed: 300, // Transition speed
                    autoplay: true, // Enable autoplay
                    autoplaySpeed: 3000, // Autoplay interval
                    pauseOnHover: true, // Pause autoplay on hover
                    pauseOnDotsHover: true // Pause autoplay on dots hover
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('.custom-slider').slick({
                    dots: true,
                    arrows: false,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    infinite: true,
                    speed: 300,
                    autoplay: false,
                    autoplaySpeed: 3000,
                    pauseOnHover: true,
                    pauseOnDotsHover: true
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.mobile-partners').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    speed: 2000,
                    cssEase: 'linear',
                    draggable: false,
                    swipe: false,
                    arrows: false, // Disable navigation buttons
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            infinite: true,
                            slidesToShow: 6,
                            slidesToScroll: 6,
                            autoplay: true,
                            autoplaySpeed: 5000,
                            arrows: false // Ensure navigation is also disabled for smaller screens
                        }
                    }]
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('deal.search') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#servicesContainer').html(data);
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const showMoreBtn = document.getElementById('show-more-btn');
                const showLessBtn = document.getElementById('show-less-btn');
                const moreTabs = document.querySelectorAll('.more-tabs');

                showMoreBtn.addEventListener('click', function() {
                    moreTabs.forEach(tab => {
                        tab.classList.remove('d-none');
                    });
                    showMoreBtn.classList.add('d-none');
                    showLessBtn.classList.remove('d-none');
                });

                showLessBtn.addEventListener('click', function() {
                    moreTabs.forEach(tab => {
                        tab.classList.add('d-none');
                    });
                    showLessBtn.classList.add('d-none');
                    showMoreBtn.classList.remove('d-none');
                });
            });
        </script>



        <script>
            // Define your data for the map
            var data = [
                ["bd-da", 0],
                ["bd-sy", 1],
                ["bd-bk", 2],
                ["bd-kh", 3],
                ["bd-ba", 4],
                ["bd-cg", 5],
                ["bd-rp", 6],
                ["bd-rj", 7],
                ["bd-js", 8],
                ["bd-lg", 9],
                ["bd-br", 10],
                ["bd-co", 11],
                ["bd-hb", 12],
                ["bd-sh", 13],
                ["bd-dh", 14],
                ["bd-nj", 15],
                ["bd-pl", 16],
                ["bd-na", 17],
                ["bd-gb", 18],
                ["bd-md", 19],
                ["bd-mw", 20],
                ["bd-ct", 21],
                ["bd-kn", 22],
                ["bd-sw", 23],
                ["bd-rg", 24],
                ["bd-nk", 25],
                ["bd-lk", 26],
                ["bd-pb", 27],
                ["bd-fr", 28],
                ["bd-gz", 29],
                ["bd-sd", 30],
                ["bd-ss", 31],
                ["bd-ku", 32],
                ["bd-ra", 33],
                ["bd-mr", 34],
            ];

            // Create the chart
            var chart = Highcharts.mapChart("mapcontainer", {
                chart: {
                    type: "map",
                    map: "countries/bd/bd-all",
                    backgroundColor: "rgba(0, 0, 0, 0)", // Transparent background color
                },

                title: {
                    text: "",
                    style: {
                        color: "#fff",
                    },
                },

                subtitle: {
                    text: "",
                    style: {
                        color: "#fff",
                    },
                },

                legend: {
                    enabled: false,
                },

                tooltip: {
                    enabled: false,
                },

                navigation: {
                    buttonOptions: {
                        enabled: false,
                    },
                },

                credits: {
                    enabled: false,
                },

                plotOptions: {
                    series: {
                        point: {
                            events: {
                                click: function() {
                                    updateDetails(this.series.name, this.name, this.value);
                                },
                            },
                        },
                    },
                },

                series: [{
                    data: data,
                    name: "Random data",
                    allowPointSelect: true,
                    cursor: "pointer",
                    color: "#fff",
                    states: {
                        select: {
                            color: "#f15a2d",
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        format: "{point.name}",
                    },
                }, ],
            });

            // Function to update details
            function updateDetails(seriesName, pointName, pointValue) {
                var pointNameElem = document.getElementById("pointName");
                if (pointNameElem) {
                    pointNameElem.textContent = pointName;
                }

                if (pointName) {
                    $.ajax({
                        url: "{{ route('map.division') }}",
                        method: 'GET',
                        data: {
                            division: pointName
                        },
                        success: function(data) {
                            $('.zone-name').html(data.html);
                        },
                        error: function() {
                            $('.zone-name').html(
                                '<p>An error occurred while fetching offers.</p>');
                        }
                    });
                } else {
                    $('.zone-name').html('<p>Please select a division to see offers.</p>');
                }
            }

            function cityAreas(pointName) {

                if (pointName) {
                    $.ajax({
                        url: "{{ route('map.city') }}",
                        method: 'GET',
                        data: {
                            city: pointName
                        },
                        success: function(data) {
                            $('.zone-name').html(data.html);
                        },
                        error: function() {
                            $('.zone-name').html(
                                '<p>An error occurred while fetching offers.</p>');
                        }
                    });
                } else {
                    $('.zone-name').html('<p>Please select a division to see offers.</p>');
                }
            }
        </script>

        {{-- <script>
            $(document).ready(function() {
                $(".category-tab").click(function() {
                    var categoryId = $(this).data("id"); // Get the clicked category ID

                    $(".grab-offer-tabs-box-hide").hide();
                    $(".dynamic-offer-section").show();
                    $("#dynamicOfferContent .tab-pane").removeClass("show active");
                    $("#offer-category-" + categoryId).addClass("show active");

                });
            });
        </script> --}}


        <script>
            $(document).ready(function() {
                // When a category from offer_cat_types (dynamic category list) is clicked
                $(".category-tab").click(function() {
                    var categoryId = $(this).data("id"); // Get the clicked category ID

                    // Hide the main offer tabs and show the dynamic offer section
                    $(".grab-offer-tabs-box-hide").hide(); // Hide the left-side category tabs
                    $(".dynamic-offer-section").show(); // Show the dynamically loaded offer section

                    // Remove 'show active' class from all categories in the dynamic section
                    $("#dynamicOfferContent .tab-pane").removeClass("show active");

                    // Add 'show active' class to the clicked category's tab-pane in the dynamic section
                    $("#offer-category-" + categoryId).addClass("show active");

                    // Highlight the corresponding tab in the left-side category navigation
                    $("#myTab .nav-item").removeClass("active"); // Remove 'active' class from all tabs
                    $("#home-" + categoryId + "-tab").addClass(
                        "active"); // Add 'active' class to the selected tab
                });

                // When a category from the left-side categories (nav-tabs) is clicked
                $('#myTab .nav-link').click(function() {
                    var targetId = $(this).attr('data-bs-target').replace('#', ''); // Get the target tab ID

                    // Hide the dynamic section and show the main offer tabs
                    $(".dynamic-offer-section").hide(); // Hide the dynamically loaded offer section
                    $(".grab-offer-tabs-box-hide").show(); // Show the left-side category tabs

                    // Reset to the "All Offers" tab view if necessary
                    if (targetId !== 'home-tab-pane') {
                        $("#myTabContent .tab-pane").removeClass("show active");
                        $("#" + targetId).addClass("show active");
                    }

                    // Highlight the corresponding tab in the left-side navigation
                    $("#myTab .nav-item").removeClass("active"); // Remove 'active' class from all tabs
                    $(this).closest('li').addClass("active"); // Add 'active' class to the clicked tab
                });

                // Show more categories on click
                $('#show-more-btn').click(function() {
                    $('.more-tabs').removeClass('d-none');
                    $(this).hide();
                    $('#show-less-btn').show();
                });

                // Show less categories on click
                $('#show-less-btn').click(function() {
                    $('.more-tabs').addClass('d-none');
                    $(this).hide();
                    $('#show-more-btn').show();
                });
            });
        </script>

    @endpush
    <!-- Footer Slider End -->
</x-frontend-app-layout>
