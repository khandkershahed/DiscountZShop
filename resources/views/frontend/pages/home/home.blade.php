<x-frontend-app-layout :title="'DiscountZShop'">
    <div class="desktop-homepage">

        <!-- Hero Section -->
        <section>
            <div class="container-fluid px-0" style="overflow: hidden">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row gx-3">
                            <div class="col-lg-7 col-sm-12">
                                <div class="slick-slider" style="height: 100%">
                                    <div class="hero-slider">
                                        @foreach ($sliders as $slider)
                                            <div class="items">
                                                <a href="{{ $slider->url }}">
                                                    <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
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
                                            <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                                src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : asset('images/banner-demo.png') }}"
                                                alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-lg-3 mt-2 gx-3">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ $banner->image_two_url }}">
                                                <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                                    src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : asset('images/banner-demo.png') }}"
                                                    alt=""
                                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ $banner->image_three_url }}">
                                                <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
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
                            <div class="bg-white px-3 py-2 rounded-2">
                                <h4>ramadan20</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App Discount End -->

        <!-- Grab Your Offer -->
        <section style="background: #f9f9f9">
            <div class="container pt-70 pb-70 px-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 shadow-sm p-3 grab-card">
                            <div class="card-header border-0 py-3 pb-4 bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="d-flex align-items-center">
                                            <h4 class="coupon-title mb-0 pe-3">
                                                Grab Your Offer
                                            </h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="36"
                                                    viewBox="0 0 17 36" fill="none">
                                                    <path
                                                        d="M0.700195 0V19.7492H5.44065V35.9075L16.5017 14.363H10.1811L16.5017 0H0.700195Z"
                                                        fill="#F15A2D" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">

                                        <div class="d-flex justify-content-space-between align-items-center">

                                            <!-- Grab Tags -->
                                            {{-- <div class="">
                                            @foreach ($offer_types as $offer_type)
                                                <a href="javascript:void(0)"><span
                                                        class="badge mt-2 ct-badge">{{ $offer_type->name }}</span></a>
                                            @endforeach
                                        </div> --}}
                                            <!-- Grab End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pe-0">

                                <div class="row">

                                    <div class="col-lg-3 grab-offer-tabs-box">
                                        <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                            <li class="nav-item mb-2" role="presentation">
                                                <button class="nav-link grab-tabs w-100 rounded-0 active"
                                                    id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                                    aria-controls="home-tab-pane" aria-selected="true">
                                                    All Offers
                                                </button>
                                            </li>
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $index => $offercategory)
                                                    <li class="nav-item mb-2 {{ $index >= 7 ? 'd-none more-tabs' : '' }}"
                                                        role="presentation">
                                                        <button class="nav-link grab-tabs w-100 rounded-0"
                                                            id="home-{{ $offercategory->id }}-tab"
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#home-{{ $offercategory->id }}-pane"
                                                            type="button" role="tab"
                                                            aria-controls="home-{{ $offercategory->id }}-pane"
                                                            aria-selected="true">
                                                            {{ $offercategory->name }}
                                                        </button>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <div class="d-flex justify-content-center">
                                            <button id="show-more-btn" class="arrow-btn">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </button>
                                            <button id="show-less-btn" class="arrow-btn d-none">
                                                <i class="fa-solid fa-chevron-up"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 grab-offer-tabs-box">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <div class="row">
                                                    @foreach ($alloffers as $alloffer)
                                                        <!-- Removed the limit -->
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="coupon-box">
                                                                <div class="coupon-box-content">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4">
                                                                            <a
                                                                                href="{{ route('offer.details', $alloffer->slug) }}">
                                                                                <img class="img-fluid"
                                                                                    src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                                                    alt="Logo"
                                                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="col-8 text-center">
                                                                            <a
                                                                                href="{{ route('offer.details', $alloffer->slug) }}">
                                                                                <div
                                                                                    class="d-flex justify-content-center align-items-center">

                                                                                    @if (!empty($alloffer->badge))
                                                                                        <h2>
                                                                                            {{ $alloffer->badge }}
                                                                                            {{-- {{ substr($alloffer->badge, 0, -4) }} --}}
                                                                                        </h2>
                                                                                    @endif

                                                                                </div>


                                                                                @if (!empty($alloffer->coupon_code))
                                                                                    <p class="para-font coupon-extra">
                                                                                        Code:
                                                                                        {{ $alloffer->coupon_code }}
                                                                                        <a href="javascript:void(0);"
                                                                                            class="copy-btn"><i
                                                                                                class="fa-regular fa-copy"></i></a>
                                                                                    </p>
                                                                                @endif
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            @foreach ($categories as $offercategory)
                                                <div class="tab-pane fade" id="home-{{ $offercategory->id }}-pane"
                                                    role="tabpanel"
                                                    aria-labelledby="home-{{ $offercategory->id }}-tab"
                                                    tabindex="0">
                                                    <div class="">
                                                        <div class="row">
                                                            {{-- <div class="grab-slider">
                                                    <div class="row grab-items"> --}}
                                                            @if ($offercategory->offers->count() > 0)
                                                                @foreach ($offercategory->offers as $category_offer)
                                                                    <div class="col-lg-4 mb-4">
                                                                        <div class="coupon-box">
                                                                            <div class="coupon-box-content">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-4">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                            alt="Logo"
                                                                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                                                    </div>
                                                                                    <div class="col-8 text-center">
                                                                                        <div
                                                                                            class="d-flex justify-content-center align-items-center">
                                                                                            {{-- <p class="">
                                                                                            <span
                                                                                                class="para-font">Get</span><br>
                                                                                            <span
                                                                                                class="ps-2 para-font">Upto</span>
                                                                                        </p> --}}
                                                                                            @if (!empty($category_offer->badge))
                                                                                                <h1>{{ substr($category_offer->badge, 0, -4) }}
                                                                                                </h1>
                                                                                            @endif
                                                                                            {{-- <p class="coupon-off">OFF</p> --}}
                                                                                        </div>

                                                                                        @if (!empty($category_offer->coupon_code))
                                                                                            <p
                                                                                                class="para-font coupon-extra">
                                                                                                Code:
                                                                                                {{ $category_offer->coupon_code }}
                                                                                                <a href="javascript:void(0);"
                                                                                                    class="copy-btn"><i
                                                                                                        class="fa-regular fa-copy"></i></a>
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('images/NoOffers.png') }}"
                                                                    alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grab Your Offer End -->
        <!-- Promotion Product -->
        @if (optional($homepage)->brand)
            <section>
                <div class="container px-0 pb-70 biggest-deals">
                    <div class="row gx-4 promotion-container align-items-center">
                        <div class="col-lg-12 py-5">
                            <h1 class="promotion-title">Biggest Deals From {{ optional($homepage->brand)->name }}</h1>
                        </div>
                        <div class="col-lg-4">
                            <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                                @foreach ($brand_offers_left as $brand_offer_left)
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('offer.details', $brand_offer_left->slug) }}">
                                                <img src="{{ !empty($brand_offer_left->image) ? url('storage/' . $brand_offer_left->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                    class="img-fluid w-100" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-4 pe-2">

                                            <h5>{{ $brand_offer_left->name }}</h5>
                                            <p class="py-4 mb-0 main-color fs-6 fw-bold">{!! Str::words($brand_offer_left->short_description, 8) !!}</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6>{{ $brand_offer_left->badge }}</h6>
                                                    {{-- @if (!empty($brand_offer_left->price))
                                                    <del class="pt-2">BDT {{ $brand_offer_left->price }}</del>
                                                @endif
                                                @if (!empty($brand_offer_left->offer_price))
                                                    <h6 class="main-color">BDT {{ $brand_offer_left->offer_price }}</h6>
                                                @endif --}}
                                                </div>
                                                <div class="pe-4">
                                                    <a href="{{ route('offer.details', $brand_offer_left->slug) }}"
                                                        class="btn-{{ $loop->iteration }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" viewBox="0 0 30 30" fill="none">
                                                            <circle cx="15" cy="15" r="15"
                                                                fill="#F15A2D">
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
                        <div class="col-lg-4 px-0">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid w-100 middle-banner"
                                    src="{{ asset('storage/' . optional($homepage)->deal_brand_image) }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='{{ asset('images/no-image(random).png') }}';" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                                @foreach ($brand_offers_right as $brand_offer_right)
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('offer.details', $brand_offer_right->slug) }}">
                                                <img src="{{ !empty($brand_offer_right->image) ? url('storage/' . $brand_offer_right->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                    class="img-fluid w-100" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-4 pe-2">
                                            {{-- <h5>{{ $brand_offer_right->badge }}</h5> --}}
                                            <h5>{{ $brand_offer_right->name }}</h5>
                                            <p class="py-4 mb-0 main-color fs-6 fw-bold">{!! Str::words($brand_offer_right->short_description, 8) !!}</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6>{{ $brand_offer_right->badge }}</h6>
                                                    {{-- @if (!empty($brand_offer_right->price))
                                                    <del class="pt-2">BDT {{ $brand_offer_right->price }}</del>
                                                @endif
                                                @if (!empty($brand_offer_right->offer_price))
                                                    <h6 class="main-color">BDT {{ $brand_offer_right->offer_price }}</h6>
                                                @endif --}}
                                                </div>
                                                <div class="pe-4">
                                                    <a href="{{ route('offer.details', $brand_offer_right->slug) }}"
                                                        class="btn-{{ $loop->iteration }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" viewBox="0 0 30 30" fill="none">
                                                            <circle cx="15" cy="15" r="15"
                                                                fill="#F15A2D">
                                                            </circle>
                                                            <path
                                                                d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                                fill="white">
                                                            </path>
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
                <div class="container text-center py-5 deal-hbox">
                    <img src="{{ asset('images/NoOffers.png') }}" alt="No Data Available" class="img-fluid w-100">
                </div>
            </section>
        @endif
        <!-- Promotion Product End -->
        <!-- Grab By Location -->
        <section style="background-color: #f5f6f8">
            <div class="container pt-70 pb-70 px-0">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="card rounded-0 shadow-sm p-3"
                            style="background-color: #f5f6f8; border: 1px solid #EBEBEB;">
                            <div class="card-header border-0 py-3 bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <h4 class="coupon-title mb-0 pe-3">
                                                Grab By Location
                                            </h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="31"
                                                    viewBox="0 0 22 31" fill="none">
                                                    <path
                                                        d="M10.263 30.2372C9.84392 29.7675 0 18.6461 0 11.0705C5.93225e-05 4.96621 4.93463 0 11.0001 0C17.0655 0 22 4.96621 22 11.0705C22 18.6461 12.1561 29.7675 11.737 30.2372C11.3432 30.6786 10.6559 30.6777 10.263 30.2372Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M21.9999 11.0705C21.9999 4.96621 17.0653 0 11 0V30.5679C11.27 30.5679 11.5402 30.4579 11.737 30.2372C12.156 29.7675 21.9999 18.6461 21.9999 11.0705Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M10.9986 16.6402C7.94694 16.6402 5.46436 14.1416 5.46436 11.0704C5.46436 7.99912 7.94706 5.50049 10.9986 5.50049C14.0502 5.50049 16.5329 7.99912 16.5329 11.0704C16.5329 14.1416 14.0502 16.6402 10.9986 16.6402Z"
                                                        fill="#F9F9F9" />
                                                    <path
                                                        d="M11 5.50049V16.6402C14.0517 16.6402 16.5343 14.1415 16.5343 11.0703C16.5343 7.99906 14.0515 5.50049 11 5.50049Z"
                                                        fill="#C5D8DF" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-8">
                                        <div class="d-flex justify-content-space-between align-items-center">
                                            <form class="d-flex w-100" role="search">
                                                <div class="d-flex w-100">
                                                    <input class="form-control rounded-pill form-control-sm"
                                                        type="search" placeholder="Search" aria-label="Search" />
                                                </div>
                                                <button
                                                    class="btn position-relative border-0 bg-transparent coupon-action"
                                                    type="submit">
                                                    <i class="fa-solid fa-search" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="card-body p-2 py-0">
                                <div class="row">
                                    <div class="col-lg-3" id="mapsidebar">
                                        <div id="mapdetails">
                                            <!-- <p id="seriesName"></p> -->
                                            <div class="selected-point">
                                                <small class="text-white">All Of <span id="pointName"></span></small>

                                            </div>
                                            <!-- Selected Area All Zone Name  -->
                                            <div>
                                                <ul class="zone-name ps-0" style="list-style-type: none">
                                                    <li class="area-names">No Area Available</li>
                                                </ul>
                                            </div>
                                            <!-- <p id="pointValue"></p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-9 position-relative"
                                        style="background-image: url({{ asset('frontend') }}/assets/img/product/map.png);background-size: contain;background-position: center;display: flex;align-items: center;">
                                        <!-- <div class="mapoverlay"></div> -->
                                        <div id="mapcontainer" class="text-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grab By Location End -->

        <!-- Product Slider -->
        <section>
            <div class="container pb-70 pt-70 px-0 latest-offers">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slick Slider -->
                        <div class="slick-slider-product">
                            @forelse ($offerLatests as $offerLatest)
                                <div class="items me-2" style="background-color: #f5f6f8">
                                    <div class="row p-4 align-items-center product-discount-box">
                                        <div class="col-lg-7 col-sm-12">
                                            <div class="product_discount_box">
                                                <h4>{{ $offerLatest->name }}</h4>
                                                <p class="py-3">
                                                    {{ \Illuminate\Support\Str::words($offerLatest->short_description, 7, '...') }}
                                                </p>
                                                <a class="btn btn-dark rounded-pill px-5"
                                                    href="{{ route('offer.details', $offerLatest->slug) }}">See
                                                    Details</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div>
                                                <h5 class="main-color text-center pb-3 pt-4 pt-lg-0 fw-bold">
                                                    {{ $offerLatest->badge }}
                                                </h5>
                                                <div class="d-flex justify-content-center text-center">
                                                    <img class="img-fluid flat-offer-img rounded-circle"
                                                        src="{{ !empty($offerLatest->image) ? url('storage/' . $offerLatest->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerLatest->name) }}"
                                                        alt=""
                                                        onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            <div class="container px-0 pb-70">
                <div class="row gx-0">
                    <div class="col-lg-3">
                        <div class="card deal-of-the-day rounded-0">
                            <!-- Card Header -->
                            <div class="card-header border-0 text-white rounded-0 deal-of-the-day-header"
                                style="background-color: var(--primary-color)">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0">Deals Of The Day</h4>
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
                                        <div class="items">
                                            <div class="py-2 d-flex justify-content-center">
                                                <img class="img-fluid rounded-2"
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
                                                    class="btn btn-common-one rounded-pill px-4">See
                                                    Details</a>
                                            </div>

                                            <div class="text-center pb-5 pt-4">
                                                <div>
                                                    <h5>
                                                        <span class="main-color">Hurry Up!</span> Offers
                                                        end in:
                                                    </h5>
                                                </div>
                                                <div class="countdown-with-days mt-4">
                                                    <p class="pt-2 text-center countdown"
                                                        data-expire-date="{{ $offerDealLeft->expiry_date }}">
                                                        <span class="main-color">Expire In:</span>
                                                        <span class="countdown-timer"> Days</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
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
                        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
                            {{-- <form method="get" action="{{ route('courses.search') }}" class="d-flex w-100" role="search"> --}}
                            <div class="input-group mb-3">
                                <input type="text" id="serviceSearch" class="form-control rounded-pill p-2"
                                    placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2" />
                                <div class="input-group-append search-btn">
                                    <button class="btn border-0" type="button">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            {{-- </form> --}}
                        </div>

                        <!-- Search Box -->
                        <div class="row p-3 gx-3 pt-0" id="servicesContainer">
                            @forelse ($offerDeals as $offerDeal)
                                <div class="col-lg-4 mb-3">
                                    <div class="card deal-card border-0">
                                        <div class="card-body border-0 p-4">
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
                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                <img class="img-fluid deal-img"
                                                    src="{{ !empty($offerDeal->image) ? url('storage/' . $offerDeal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDeal->name) }}"
                                                    alt=""
                                                    onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
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
                                                        class="btn btn-common-one rounded-pill px-4">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-3">
                                    <img class="img-fluid" width="210px"
                                        src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg"
                                        alt="No Content">
                                </div>
                                <h5 class="text-center text-warning">No Offer available right now.</h5>
                            @endforelse

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Deal Of The Day End -->

        <!-- Normal Slider Product Show -->
        <section>
            <div class="container py-lg-5 py-0 px-0">
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
                <div class="container py-5 pb-4 px-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h1>Big Brands Are Here</h1>
                                {{-- <p class="w-lg-50 w-100 pt-3">
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
                                            src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                            alt=""
                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
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
                <div class="container px-0 pt-70 pb-70 latest-offers">
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
    {{-- Mobile View --}}

    <div class="mobile-homepage">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper-search">
                        <div class="search-input">
                            <a href="#" target="_blank" hidden></a>
                            <input type="text" class="custom-placeholder" placeholder="Type to search...">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                    viewBox="0 0 20 22" fill="none">
                                    <path
                                        d="M19.5161 20.4702L15.0436 15.8091C16.419 14.1838 17.1764 12.0902 17.1731 9.92303C17.1731 7.53222 16.2801 5.2846 14.6584 3.59427C13.0367 1.90393 10.8803 0.973145 8.58712 0.973145C6.29394 0.973145 4.137 1.90393 2.51471 3.59367C0.892428 5.28341 0 7.53162 0 9.92243C0 12.3132 0.893001 14.5603 2.51471 16.2506C4.13643 17.9409 6.29279 18.8723 8.58655 18.8723C10.6874 18.8723 12.668 18.0829 14.2336 16.6521L18.7055 21.3132C18.7585 21.3688 18.8216 21.413 18.8911 21.4431C18.9605 21.4732 19.035 21.4887 19.1102 21.4887C19.1854 21.4887 19.2599 21.4732 19.3294 21.4431C19.3988 21.413 19.4619 21.3688 19.5149 21.3132C19.6222 21.2014 19.6825 21.0496 19.6825 20.8914C19.6825 20.7332 19.6222 20.5815 19.5149 20.4696L19.5161 20.4702ZM3.32414 15.4075C1.91881 13.9421 1.14487 11.9946 1.14487 9.92303C1.14487 7.85143 1.91881 5.90334 3.32414 4.43794C4.73004 2.97315 6.59848 2.16646 8.58655 2.16646C10.5746 2.16646 12.4431 2.97315 13.849 4.43794C15.2543 5.90334 16.0288 7.85083 16.0288 9.92303C16.0288 11.9952 15.2543 13.9421 13.849 15.4075C12.4431 16.8723 10.5746 17.6796 8.58712 17.6796C6.59962 17.6796 4.72947 16.8723 3.32414 15.4075Z"
                                        fill="#929292" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="custom-slider pb-5 pt-3">
                        <div>
                            <a href="{{ $banner->image_one_url }}">
                                <img class="img-fluid fixed-size rounded-2"
                                    src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : asset('images/banner-demo.png') }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                            </a>
                        </div>
                        <div>
                            <a href="{{ $banner->image_two_url }}">
                                <img class="img-fluid fixed-size rounded-2"
                                    src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : asset('images/banner-demo.png') }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                            </a>
                        </div>
                        <div>
                            <a href="{{ $banner->image_three_url }}">
                                <img class="img-fluid fixed-size rounded-2"
                                    src="{{ !empty($banner->image_three) ? url('storage/' . $banner->image_three) : asset('images/banner-demo.png') }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                            </a>
                        </div>
                    </div>
                    {{-- <div class="mobile-home-banner">
                        <img src="{{ asset('images/mobile.png') }}" alt="">
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2021)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M56.4847 45.6465L53.5597 39.6663C53.5019 39.5486 53.3818 39.4724 53.2501 39.4724H52.0625C51.7783 38.8928 51.2631 38.4634 50.6393 38.2925C51.0899 37.9993 51.411 37.556 51.5427 37.0341C51.7391 36.4223 51.7044 35.7573 51.3648 35.1985C51.0621 34.6859 50.5677 34.3327 49.9901 34.2034C50.1587 34.0926 50.3112 33.9586 50.4429 33.8062C50.7363 33.4622 50.2165 33.0143 49.9185 33.356C49.5627 33.7693 48.992 33.9494 48.4675 33.8178L43.1189 32.4578C42.7469 32.3632 42.435 32.1276 42.2363 31.7975C42.0376 31.4673 41.9822 31.0794 42.0769 30.7077L42.1323 30.486C42.2271 30.1143 42.4627 29.8026 42.7931 29.604C43.1258 29.4077 43.5117 29.35 43.8837 29.4447L49.2323 30.8046C49.6943 30.9224 50.0687 31.2641 50.2327 31.7167C50.2974 31.8968 50.4961 31.9891 50.674 31.9245C50.8542 31.8598 50.9466 31.6612 50.8819 31.4835C50.6416 30.8139 50.0871 30.3105 49.4032 30.1373L48.3474 29.8695L48.5299 29.1537C48.6408 28.722 48.5761 28.2717 48.3474 27.8884C48.1186 27.5052 47.7559 27.2327 47.3216 27.1219C46.8895 27.011 46.439 27.0757 46.0554 27.3043C45.6742 27.5306 45.397 27.8977 45.2884 28.3295L45.1058 29.0452L44.05 28.7774C43.5001 28.6365 42.9271 28.722 42.435 29.0129C41.9452 29.3038 41.5963 29.7679 41.4577 30.3174L41.4022 30.5391C41.2705 31.0609 41.3376 31.6012 41.594 32.0745L41.5224 32.0561C40.9725 31.9152 40.3995 32.0007 39.9074 32.2916C39.4153 32.5825 39.0687 33.0466 38.9301 33.5961L38.8746 33.8178C38.773 34.2126 38.7891 34.6259 38.9185 35.0115C38.3132 34.6859 37.6663 34.4966 36.9801 34.4435C39.1173 33.0882 39.1311 31.4811 38.9671 30.6753C38.6944 29.3523 37.7888 28.4888 37.4953 28.2394C37.426 28.027 37.2412 27.519 36.9108 26.9048C38.0752 26.6624 38.5512 26.069 38.743 25.5841C39.0849 24.716 38.7476 23.543 37.8581 22.5271C37.1164 21.6797 35.9404 21.3865 34.9285 21.8021C34.1244 22.1323 33.6069 22.8319 33.4913 23.6908C32.5579 23.3329 31.4212 23.1921 30.0512 23.4738C28.6811 23.7554 27.6922 24.335 26.976 25.03C26.5324 24.2842 25.7769 23.8455 24.9105 23.8617C23.8176 23.8801 22.8519 24.6121 22.5053 25.6834C22.0894 26.9672 22.2419 28.1771 22.9004 28.842C23.1869 29.1307 23.6536 29.41 24.3952 29.41C24.6078 29.41 24.8435 29.3869 25.1045 29.3338C25.0422 30.0265 25.0745 30.5668 25.0953 30.7885C24.9243 31.1325 24.4322 32.2823 24.7048 33.6054C24.825 34.1918 25.2409 35.2724 26.671 35.8981C27.0638 36.0713 27.5074 36.196 27.9995 36.2791C26.5139 37.0457 25.8416 38.3318 25.5458 39.477H24.885C24.7533 39.477 24.6332 39.5532 24.5754 39.6709L21.6504 45.6511C21.5673 45.8219 21.6366 46.0297 21.8099 46.1129C21.8561 46.136 21.9092 46.1475 21.9624 46.1475H24.5408V55.8866C24.5408 56.0782 24.6956 56.2306 24.885 56.2306H53.2409C53.4326 56.2306 53.5851 56.0759 53.5851 55.8866V46.1475H56.1635C56.3553 46.1475 56.5078 45.9928 56.5078 45.8035C56.5078 45.7504 56.4962 45.6996 56.4731 45.6511L56.4847 45.6465ZM45.9607 28.498C46.0231 28.2463 46.1871 28.0293 46.4112 27.8977C46.6354 27.7638 46.901 27.7245 47.1552 27.7915C47.6797 27.9254 47.9962 28.4588 47.8645 28.9829L47.682 29.6986L45.7805 29.2161L45.963 28.5003L45.9607 28.498ZM51.247 39.4724H42.2802C42.1046 38.9252 41.6148 37.616 40.6606 36.4661L48.9504 38.5742L50.4291 38.9506C50.7502 39.0337 51.0367 39.2161 51.247 39.4724ZM39.547 33.984L39.6024 33.7624C39.6972 33.3906 39.9328 33.0789 40.2632 32.8804C40.5959 32.6841 40.9817 32.6264 41.3537 32.721L49.8861 34.8914C50.7548 35.1062 51.1753 36.0459 50.8704 36.8633C50.7756 37.235 50.54 37.5467 50.2096 37.7453C49.8769 37.9415 49.491 37.9993 49.1191 37.9046L40.5867 35.7342C39.8173 35.5379 39.3483 34.7529 39.5447 33.984H39.547ZM41.5478 39.4724H39.9536C38.9024 37.2604 37.8511 35.8173 36.7768 35.12C37.4699 35.15 38.1168 35.3371 38.7106 35.6788C40.3764 36.6416 41.2336 38.6019 41.5478 39.4701V39.4724ZM27.3849 33.4022C27.4311 32.3424 28.2536 31.3495 29.5498 30.7238C29.5914 31.0494 29.7762 31.3518 30.0766 31.5827C30.4231 31.8506 30.8875 31.996 31.3588 31.996C31.3912 31.996 31.4258 31.996 31.4582 31.9937L31.6916 33.132C30.4416 33.2775 29.7693 32.721 29.7392 32.698C29.5937 32.5756 29.3765 32.5917 29.2517 32.7372C29.1316 32.8804 29.1455 33.0928 29.2841 33.2175C29.3187 33.2475 30.0211 33.8478 31.2872 33.8478C31.5575 33.8478 31.8533 33.8201 32.1721 33.7554C33.9927 33.3814 34.5888 32.1738 34.6119 32.123C34.6928 31.9522 34.6212 31.749 34.4502 31.6659C34.2792 31.5827 34.0736 31.6543 33.9881 31.8229C33.9696 31.8575 33.5699 32.6356 32.3662 32.9935L32.1328 31.8552C32.6041 31.6774 33.0108 31.3426 33.2395 30.9316C33.4244 30.5991 33.4729 30.2505 33.3805 29.9342C34.8198 29.9965 35.9681 30.5853 36.4302 31.5412C36.8577 32.4278 36.6081 33.4437 35.7463 34.3304C35.4968 34.4481 35.2057 34.5659 34.9192 34.6721C34.2469 34.9192 33.4475 35.1454 32.4979 35.3417C31.204 35.6072 30.0696 35.7227 29.1015 35.6903C27.9671 35.2147 27.341 34.3835 27.3826 33.4022H27.3849ZM32.2483 29.9642C32.2876 29.9642 32.3246 29.9642 32.3616 29.9688C32.5464 29.9803 32.6827 30.0219 32.7127 30.0981C32.7821 30.2897 32.6966 30.4929 32.6388 30.5968C32.4563 30.9247 32.0728 31.1925 31.6638 31.2757C31.2549 31.3611 30.7974 31.2664 30.4994 31.0378C30.4046 30.9639 30.2452 30.8116 30.2337 30.6084C30.3469 30.1905 31.8302 29.9757 32.2507 29.9665L32.2483 29.9642ZM30.0581 36.3669C30.8413 36.3253 31.7008 36.2098 32.6365 36.0182C33.6115 35.8173 34.4409 35.5818 35.1479 35.3232C36.4441 35.2655 37.8003 36.6601 39.1842 39.4747H28.2398C28.5702 37.7384 29.1801 36.6947 30.0581 36.3692V36.3669ZM35.1941 22.4394C35.8064 22.1877 36.7098 22.257 37.3405 22.9796C38.0591 23.8016 38.3502 24.7021 38.103 25.3301C37.8627 25.9374 37.158 26.1775 36.5365 26.2699C36.3586 25.9974 36.1645 25.7342 35.9566 25.4872C35.513 24.9584 34.9192 24.4112 34.1637 24.0002C34.1799 23.2775 34.5565 22.7026 35.1941 22.4417V22.4394ZM23.3948 28.3525C22.9189 27.8746 22.8311 26.9302 23.1661 25.8935C23.4618 24.9815 24.2612 24.5613 24.9243 24.5497C25.6128 24.5382 26.1858 24.9192 26.4885 25.5749C25.9571 26.2514 25.629 26.988 25.428 27.6483C25.3333 27.96 25.2593 28.2763 25.2039 28.5973C24.5962 28.7589 23.8546 28.8143 23.3925 28.3502L23.3948 28.3525ZM25.3864 33.4645C25.1207 32.1738 25.7491 31.0355 25.7537 31.024C25.7907 30.9593 25.8046 30.8854 25.7953 30.8116C25.7953 30.7977 25.6244 29.3639 26.0957 27.8284C26.329 27.0688 26.671 26.4177 27.1192 25.882C28.5032 24.1318 31.7285 23.4668 33.6924 24.5243C34.3208 24.8406 34.8938 25.3047 35.4113 25.9143C36.4487 27.138 36.86 28.5234 36.8646 28.5349C36.8854 28.6065 36.9293 28.6689 36.987 28.715C36.9963 28.722 38.0221 29.5116 38.2878 30.8116C38.4056 31.3888 38.3941 32.4717 37.1072 33.5061C37.4075 32.7488 37.396 31.9591 37.0494 31.2433C36.3655 29.8256 34.5403 29.0568 32.3916 29.2784C31.9318 29.2484 31.4513 29.3592 31.2733 29.4077C31.0908 29.4331 30.6057 29.5209 30.1944 29.731C28.1335 30.3752 26.7588 31.8021 26.6895 33.3745C26.6548 34.1664 26.9529 34.8914 27.5212 35.4687C27.3179 35.411 27.1285 35.3463 26.9506 35.2678C25.8623 34.7922 25.4973 34.0256 25.3818 33.4691L25.3864 33.4645ZM28.5032 36.8009C28.0642 37.4451 27.7407 38.3387 27.5374 39.4724H26.269C26.6363 38.2071 27.3849 37.3135 28.5032 36.8009ZM25.1068 40.1627H45.1012L42.5136 45.4525H22.5192L25.1068 40.1627ZM25.2362 46.1429H42.7307C42.8624 46.1429 42.9826 46.0667 43.0403 45.9489L45.3092 41.3103V55.5379H25.2362V46.1429ZM52.9012 55.5379H46V41.3103L48.2688 45.9489C48.3266 46.0667 48.4467 46.1429 48.5784 46.1429H52.8989V55.5379H52.9012ZM48.7956 45.4525L46.2079 40.1627H53.0306L55.6183 45.4525H48.7956Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M38.1723 48.8448C37.1949 48.3738 36.3955 48.8933 35.9219 49.4636C35.1017 48.0228 34.062 47.8196 33.3712 48.1221C32.5279 48.4915 31.9711 49.706 32.5487 51.0221C33.556 53.3241 35.1757 53.4973 35.245 53.5042C35.2542 53.5042 35.2658 53.5042 35.2773 53.5042C37.2065 53.5042 38.7268 52.0681 39.0318 50.7381C39.2235 49.9023 38.9024 49.1934 38.1746 48.8448H38.1723ZM38.3571 50.5857C38.1122 51.6571 36.8276 52.8046 35.2981 52.8162C35.1502 52.7954 33.9788 52.5691 33.1818 50.7473C32.789 49.8515 33.1078 48.9926 33.6485 48.7547C33.7478 48.7109 33.8541 48.6878 33.9627 48.6878C34.5172 48.6878 35.1179 49.2743 35.5638 50.2879C35.6169 50.4102 35.7371 50.4888 35.8711 50.4934C36.0051 50.498 36.1275 50.4241 36.1899 50.304C36.2177 50.2509 36.8761 48.9856 37.8742 49.4659C38.4241 49.7314 38.4403 50.2209 38.3571 50.5857ZM28.7458 28.727C28.7804 28.9141 28.9606 29.0387 29.1478 29.0041C29.3349 28.9695 29.4597 28.7894 29.425 28.6024C29.425 28.5977 29.425 28.5931 29.4227 28.5885L29.2702 27.8496C29.2309 27.6626 29.0484 27.5426 28.8613 27.5818C28.6741 27.6211 28.554 27.8035 28.5933 27.9905L28.7458 28.7293V28.727ZM32.6642 27.9212C32.6989 28.1082 32.8791 28.2329 33.0662 28.1983C33.2534 28.1637 33.3782 27.9836 33.3435 27.7965C33.3435 27.7919 33.3435 27.7873 33.3412 27.7827L33.1887 27.0438C33.1494 26.8568 32.9669 26.7367 32.7797 26.776C32.5926 26.8152 32.4724 26.9976 32.5117 27.1847L32.6642 27.9235V27.9212Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M50.6094 32.9844C50.7995 32.9844 50.9536 32.8304 50.9536 32.6404C50.9536 32.4504 50.7995 32.2964 50.6094 32.2964C50.4193 32.2964 50.2651 32.4504 50.2651 32.6404C50.2651 32.8304 50.4193 32.9844 50.6094 32.9844Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2021" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2021" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2021"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Babies & Toys</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-3 mb-3">
                    <a href="#" class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                viewBox="0 0 83 83" fill="none">
                                <g filter="url(#filter0_d_1_2002)">
                                    <rect x="2" y="2" width="75" height="75" rx="37.5" fill="#F8F8F9" />
                                    <path
                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.5019C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M39.4788 31.083C39.2669 27.0984 36.1051 23.9229 32.2464 23.9229C28.3877 23.9229 25.023 27.3035 25.0004 31.4662C25.0004 31.4774 25.0004 31.4865 25.0004 31.4977V52.7889H22.0777C21.8206 52.7889 21.6154 52.9963 21.6154 53.251C21.6154 53.5056 21.8228 53.7152 22.0777 53.7152H29.3349C29.592 53.7152 29.7995 53.5079 29.7995 53.251C29.7995 52.994 29.5898 52.7889 29.3349 52.7889H25.9296V31.5293C25.9296 31.5293 25.9296 31.5135 25.9296 31.509C25.9296 27.8399 28.7644 24.8514 32.2442 24.8514C35.7239 24.8514 38.34 27.6122 38.5474 31.0853C36.4884 31.3309 34.9369 33.0731 34.9346 35.1466V35.87C34.9346 36.1269 35.1421 36.3343 35.3992 36.3343H37.465C37.6702 37.0758 38.3355 37.6257 39.1112 37.6257C39.887 37.6257 40.5546 37.078 40.7576 36.3343H42.6542C42.9113 36.3343 43.1188 36.1269 43.1188 35.87V35.1466C43.1165 33.0618 41.5491 31.3152 39.4788 31.0808V31.083ZM39.1112 36.6994C38.8496 36.6949 38.6083 36.5574 38.4708 36.3365H39.754C39.6164 36.5574 39.3751 36.6949 39.1135 36.6994H39.1112ZM42.1896 35.408H35.8638V35.1466C35.8638 33.3999 37.28 31.9845 39.0278 31.9845C40.7756 31.9845 42.1919 33.4021 42.1919 35.1466V35.408H42.1896Z"
                                        fill="#F15A2D" />
                                    <path
                                        d="M57.5002 45.6197V42.5501C57.4912 41.4706 56.6094 40.6029 55.5292 40.6119H47.0316C46.5084 40.6096 46.0077 40.8147 45.6378 41.1866C45.5995 41.2249 45.5634 41.2655 45.5296 41.306C45.153 40.8666 44.6004 40.6119 44.0209 40.6141H35.4759C34.3979 40.6051 33.5161 41.4728 33.5071 42.5524V45.631C32.3547 45.7347 31.4684 46.6925 31.4594 47.8487V53.2577C31.4594 53.5146 31.6668 53.7197 31.9217 53.7197H35.5232C35.7803 53.7197 35.9878 53.5124 35.9878 53.2577V52.6379L55.1638 52.6447V53.2577C55.1638 53.5146 55.3713 53.7197 55.6284 53.7197H59.2277C59.4848 53.7197 59.6923 53.5124 59.6923 53.2577V47.8487C59.681 46.6362 58.7113 45.6535 57.5002 45.6242V45.6197ZM35.0587 52.7912H32.3863V47.8464C32.4065 47.1072 33.02 46.528 33.7574 46.546C34.4678 46.5663 35.0384 47.1365 35.0587 47.8464V52.7912ZM34.434 45.7324V42.5524C34.443 41.9844 34.9098 41.5337 35.4759 41.5404H44.0209C44.5892 41.5314 45.0537 41.9844 45.0628 42.5524V48.0267H35.9878V47.8509C35.981 46.8841 35.3541 46.0322 34.434 45.7369V45.7324ZM55.1638 51.7161L35.9878 51.7094V48.9508H45.5296V48.953H55.1638V51.7139V51.7161ZM55.1638 47.8464V48.0267H45.9942V42.5952C45.9897 42.3135 46.0979 42.0408 46.2964 41.8402C46.4926 41.6441 46.7564 41.5359 47.0316 41.5382H55.5292C56.0975 41.5292 56.5621 41.9822 56.5711 42.5479V45.7843C55.7254 46.1201 55.1684 46.9359 55.1638 47.8442V47.8464ZM58.7654 52.7912H56.093V47.8464C56.1133 47.1072 56.7267 46.528 57.4642 46.546C58.1745 46.5663 58.7451 47.1365 58.7654 47.8464V52.7912Z"
                                        fill="#F15A2D" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_1_2002" x="0" y="0" width="83" height="83"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="2" dy="2" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_1_2002" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_2002"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p class="category-title">Home & Decors</p>
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="load-btn-area">
                        <button class="btn load-more-btn-mobile">See More</button>
                    </div>
                </div>
            </div>
            <div class="row mt-5 bg-light py-4">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Available Coupon...
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 21 13" fill="none">
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
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm rounded-pill"
                                    placeholder="Recipient's username" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" style="height: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="coupon-slide pt-4">
                        <div>
                            <div class="card border-0 p-0" style="background-color: #1E1E1E;">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center justify-content-end w-100 py-2">
                                        <div class="coupon-images-mb">
                                            <img class=""
                                                src="http://www.discountzshop.com/storage/coupon/logo/W1L8VtY8hA1729401322.jpg"
                                                alt="">
                                        </div>
                                        <div>
                                            <div class="text-start">
                                                <div class="">
                                                    <p class="fw-bold" style="color: #F15A2D">50% <span
                                                            class="text-white">OFF</span></p>
                                                </div>
                                            </div>
                                            <hr class="py-0 my-2" style="height: 2px; color: #ffffff;">
                                            <span style="font-size: 12px;">
                                                <div class="d-flex justify-content-between align-items-center pe-3">
                                                    <span class="text-white pe-2"
                                                        style="font-size: 9px"><small>Code: "WELBC"</small></span>
                                                    <i class="fa-solid fa-copy text-white"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card border-0 p-0" style="background-color: #1E1E1E;">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center justify-content-end w-100 py-2">
                                        <div class="coupon-images-mb">
                                            <img class=""
                                                src="http://www.discountzshop.com/storage/coupon/logo/W1L8VtY8hA1729401322.jpg"
                                                alt="">
                                        </div>
                                        <div>
                                            <div class="text-start">
                                                <div class="">
                                                    <p class="fw-bold" style="color: #F15A2D">50% <span
                                                            class="text-white">OFF</span></p>
                                                </div>
                                            </div>
                                            <hr class="py-0 my-2" style="height: 2px; color: #ffffff;">
                                            <span style="font-size: 12px;">
                                                <div class="d-flex justify-content-between align-items-center pe-3">
                                                    <span class="text-white pe-2" style="font-size: 9px">Code:
                                                        "WELBC"</span>
                                                    <i class="fa-solid fa-copy text-white"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row bg-panda mt-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <p class="text-white">Get 20% on App</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 ps-0">
                    <div class="second-banner-mb">
                        <img clss="img-fluid" src="{{ asset('images/mobile-2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-2 bg-light py-4">
                <div class="col-12">
                    <ul class="nav nav-tabs border-0 d-flex justify-content-center align-items-center"
                        id="myTab" role="tablist">
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true" style="font-size: 10px">Hot Deals</button>
                        </li>
                        @if ($categories->count() > 0)
                            @foreach ($categories as $index => $offercategory)
                                <li class="nav-item me-1 mb-2"
                                    role="presentation">
                                    <button class="nav-link mb-link-tabs" style="font-size: 10px"
                                        id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-{{ $offercategory->id }}-pane" type="button"
                                        role="tab" aria-controls="home-{{ $offercategory->id }}-pane"
                                        aria-selected="true">
                                        {{ $offercategory->name }}
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row g-2 mt-3">
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card p-0" style="border: 2px dashed #eee">
                                        <div
                                            class="card-body p-1 py-3 d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="http://www.discountzshop.com/storage/offer/logo/STJH9w5hbH1728190151.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">30% OFF</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            ...</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ps-0">
                    <div class="custom-slider pb-5 pt-3">
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
            <div class="row mt-2 bg-light py-4 pt-0 pb-0">
                <div class="col-12 ">
                    <h4 class="text-center py-4">Deals of the Day</h4>
                </div>
                <div class="col-12">
                    <ul class="nav nav-tabs border-0 d-flex justify-content-center align-items-center"
                        id="myTab" role="tablist">
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs active" id="home2-tab" data-bs-toggle="tab"
                                data-bs-target="#home2" type="button" role="tab" aria-controls="home2"
                                aria-selected="true">Hot Deals</button>
                        </li>
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs" id="profile2-tab" data-bs-toggle="tab"
                                data-bs-target="#profile2" type="button" role="tab"
                                aria-controls="profile2" aria-selected="false">Cashback</button>
                        </li>
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab"
                                aria-controls="contact2" aria-selected="false">Flat %</button>
                        </li>
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab"
                                aria-controls="contact2" aria-selected="false">Buy 1 Get 1</button>
                        </li>
                        <li class="nav-item me-1 mb-2" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab"
                                aria-controls="contact2" aria-selected="false">Upto 50%</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home2" role="tabpanel"
                            aria-labelledby="home2-tab">
                            <div class="row g-2 mt-3">
                                <div class="col-6">
                                    <div class="card p-0 rounded-3">
                                        <div class="card-header p-0">
                                            <div class="p-0">
                                                <div>
                                                    <img class="img-fluid w-100"
                                                        src="{{ asset('images/bata-banner.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="d-flex align-items-center py-2 px-2">
                                                    <div>
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/daraz.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                    </div>
                                                </div>
                                                <div class="py-2 pt-0 px-2">
                                                    <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                            2024</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3" style="border-top: 1px dashed #252525">
                                            <div class="ticket py-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="11" viewBox="0 0 16 11" fill="none">
                                                        <path
                                                            d="M5.10356 5.6782C6.66009 5.71543 6.66267 7.99695 5.10667 8.03832C3.55014 8.00057 3.54808 5.72008 5.10356 5.6782ZM5.5095 6.85981C5.50898 6.33028 4.70383 6.32821 4.70073 6.85774C4.7028 7.38572 5.50536 7.38779 5.5095 6.85981ZM8.20678 4.93458C6.65078 4.89528 6.65078 2.61376 8.20678 2.57446C9.7633 2.61428 9.76227 4.89425 8.20678 4.93458ZM8.20678 3.35066C7.67777 3.35272 7.67777 4.15736 8.20678 4.15943C8.73579 4.15684 8.73528 3.35376 8.20678 3.35066ZM4.13707 2.79217C4.20994 2.71915 4.30881 2.67803 4.41196 2.67784C4.51512 2.67764 4.61414 2.71839 4.68728 2.79113L9.18103 7.26368C9.21815 7.29937 9.24778 7.3421 9.26821 7.38936C9.28864 7.43663 9.29946 7.48749 9.30002 7.53898C9.30059 7.59047 9.29089 7.64156 9.2715 7.68927C9.25212 7.73697 9.22342 7.78034 9.1871 7.81683C9.15077 7.85333 9.10754 7.88223 9.05993 7.90184C9.01232 7.92145 8.96128 7.93139 8.90978 7.93107C8.85829 7.93075 8.80738 7.92017 8.76001 7.89997C8.71265 7.87976 8.66979 7.85032 8.63392 7.81337L4.13966 3.34135C4.10337 3.30549 4.07451 3.26283 4.05474 3.2158C4.03496 3.16877 4.02466 3.11831 4.02442 3.06729C4.02418 3.01628 4.03401 2.96572 4.05334 2.91851C4.07267 2.8713 4.10112 2.82837 4.13707 2.79217ZM11.5515 2.9985C11.6544 2.9985 11.753 3.03936 11.8257 3.11209C11.8985 3.18483 11.9393 3.28348 11.9393 3.38634V4.38075C11.9393 4.48361 11.8985 4.58226 11.8257 4.65499C11.753 4.72773 11.6544 4.76859 11.5515 4.76859C11.4486 4.76859 11.35 4.72773 11.2773 4.65499C11.2045 4.58226 11.1637 4.48361 11.1637 4.38075V3.38634C11.1637 3.28348 11.2045 3.18483 11.2773 3.11209C11.35 3.03936 11.4486 2.9985 11.5515 2.9985ZM11.5515 5.84471C11.6544 5.84471 11.753 5.88557 11.8257 5.95831C11.8985 6.03104 11.9393 6.12969 11.9393 6.23255V7.22645C11.9393 7.32931 11.8985 7.42796 11.8257 7.50069C11.753 7.57342 11.6544 7.61428 11.5515 7.61428C11.4486 7.61428 11.35 7.57342 11.2773 7.50069C11.2045 7.42796 11.1637 7.32931 11.1637 7.22645V6.23255C11.1637 6.12969 11.2045 6.03104 11.2773 5.95831C11.35 5.88557 11.4486 5.84471 11.5515 5.84471Z"
                                                            fill="black" />
                                                        <path
                                                            d="M1.45401 4.02503C1.23906 3.90974 1.05953 3.73814 0.934644 3.52863C0.809755 3.31912 0.744214 3.07957 0.74504 2.83566V1.50564C0.74545 1.14685 0.888161 0.802871 1.14186 0.549168C1.39557 0.295465 1.73954 0.152754 2.09833 0.152344H14.6467C15.0055 0.152754 15.3495 0.295465 15.6032 0.549168C15.8569 0.802871 15.9996 1.14685 16 1.50564V2.83463C16.0008 3.07854 15.9353 3.31808 15.8104 3.5276C15.6855 3.73711 15.506 3.9087 15.291 4.024C15.059 4.14821 14.8651 4.33305 14.7299 4.55881C14.5947 4.78457 14.5233 5.04278 14.5233 5.30593C14.5233 5.56908 14.5947 5.82729 14.7299 6.05305C14.8651 6.27881 15.059 6.46365 15.291 6.58786C15.5061 6.70324 15.6858 6.875 15.8107 7.08471C15.9355 7.29442 16.001 7.53418 16 7.77827V9.10726C15.9996 9.46605 15.8569 9.81002 15.6032 10.0637C15.3495 10.3174 15.0055 10.4601 14.6467 10.4606H2.09833C1.73954 10.4601 1.39557 10.3174 1.14186 10.0637C0.888161 9.81002 0.74545 9.46605 0.74504 9.10726V7.77827C0.744214 7.53436 0.809755 7.29481 0.934644 7.0853C1.05953 6.87578 1.23906 6.70419 1.45401 6.5889C2.46962 6.08057 2.46187 4.53336 1.45401 4.02503ZM2.73129 6.35826C2.52387 6.74566 2.20649 7.06304 1.81909 7.27046C1.63345 7.37078 1.51865 7.56521 1.52071 7.7762V9.10519C1.52085 9.25834 1.58175 9.40518 1.69005 9.51348C1.79834 9.62177 1.94518 9.68267 2.09833 9.68281H11.1649C11.1861 9.34668 11.0315 8.70339 11.5528 8.69046C12.0746 8.70287 11.9194 9.34927 11.9406 9.68487H14.6467C14.7998 9.68474 14.9467 9.62384 15.055 9.51554C15.1633 9.40725 15.2242 9.26041 15.2243 9.10726V7.77827C15.2253 7.67479 15.1981 7.573 15.1455 7.48387C15.0929 7.39475 15.017 7.32167 14.9259 7.27253C14.5704 7.08205 14.2732 6.79869 14.066 6.45264C13.8588 6.10659 13.7494 5.71081 13.7494 5.30748C13.7494 4.90415 13.8588 4.50837 14.066 4.16232C14.2732 3.81627 14.5704 3.53291 14.9259 3.34244C15.017 3.29329 15.0929 3.22021 15.1455 3.13109C15.1981 3.04196 15.2253 2.94017 15.2243 2.8367V1.50564C15.2238 1.18658 14.9658 0.928536 14.6467 0.928019H11.9406C11.9194 1.26466 12.0751 1.90951 11.5528 1.92243C11.031 1.91002 11.1861 1.26363 11.1649 0.928019H2.09833C1.77927 0.928536 1.52123 1.18658 1.52071 1.50564V2.83463C1.51865 3.04561 1.63345 3.24005 1.81909 3.34037C2.0772 3.47858 2.30554 3.66628 2.49108 3.89277C2.67662 4.11925 2.81572 4.38007 2.90043 4.66033C2.98514 4.94059 3.01381 5.23479 2.98478 5.52612C2.95576 5.81746 2.86962 6.10023 2.73129 6.35826Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="ps-3">FREEDEL24</span>
                                            </div>
                                            <div class="text-center py-2">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                        height="11" viewBox="0 0 11 11" fill="none">
                                                        <path
                                                            d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                            fill="#F15A2D" />
                                                    </svg> Expires
                                                </p>
                                                <p>25 April 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-0 rounded-3">
                                        <div class="card-header p-0">
                                            <div class="p-0">
                                                <div>
                                                    <img class="img-fluid w-100"
                                                        src="{{ asset('images/bata-banner.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="d-flex align-items-center py-2 px-2">
                                                    <div>
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/daraz.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                    </div>
                                                </div>
                                                <div class="py-2 pt-0 px-2">
                                                    <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                            2024</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3" style="border-top: 1px dashed #252525">
                                            <div class="ticket py-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="11" viewBox="0 0 16 11" fill="none">
                                                        <path
                                                            d="M5.10356 5.6782C6.66009 5.71543 6.66267 7.99695 5.10667 8.03832C3.55014 8.00057 3.54808 5.72008 5.10356 5.6782ZM5.5095 6.85981C5.50898 6.33028 4.70383 6.32821 4.70073 6.85774C4.7028 7.38572 5.50536 7.38779 5.5095 6.85981ZM8.20678 4.93458C6.65078 4.89528 6.65078 2.61376 8.20678 2.57446C9.7633 2.61428 9.76227 4.89425 8.20678 4.93458ZM8.20678 3.35066C7.67777 3.35272 7.67777 4.15736 8.20678 4.15943C8.73579 4.15684 8.73528 3.35376 8.20678 3.35066ZM4.13707 2.79217C4.20994 2.71915 4.30881 2.67803 4.41196 2.67784C4.51512 2.67764 4.61414 2.71839 4.68728 2.79113L9.18103 7.26368C9.21815 7.29937 9.24778 7.3421 9.26821 7.38936C9.28864 7.43663 9.29946 7.48749 9.30002 7.53898C9.30059 7.59047 9.29089 7.64156 9.2715 7.68927C9.25212 7.73697 9.22342 7.78034 9.1871 7.81683C9.15077 7.85333 9.10754 7.88223 9.05993 7.90184C9.01232 7.92145 8.96128 7.93139 8.90978 7.93107C8.85829 7.93075 8.80738 7.92017 8.76001 7.89997C8.71265 7.87976 8.66979 7.85032 8.63392 7.81337L4.13966 3.34135C4.10337 3.30549 4.07451 3.26283 4.05474 3.2158C4.03496 3.16877 4.02466 3.11831 4.02442 3.06729C4.02418 3.01628 4.03401 2.96572 4.05334 2.91851C4.07267 2.8713 4.10112 2.82837 4.13707 2.79217ZM11.5515 2.9985C11.6544 2.9985 11.753 3.03936 11.8257 3.11209C11.8985 3.18483 11.9393 3.28348 11.9393 3.38634V4.38075C11.9393 4.48361 11.8985 4.58226 11.8257 4.65499C11.753 4.72773 11.6544 4.76859 11.5515 4.76859C11.4486 4.76859 11.35 4.72773 11.2773 4.65499C11.2045 4.58226 11.1637 4.48361 11.1637 4.38075V3.38634C11.1637 3.28348 11.2045 3.18483 11.2773 3.11209C11.35 3.03936 11.4486 2.9985 11.5515 2.9985ZM11.5515 5.84471C11.6544 5.84471 11.753 5.88557 11.8257 5.95831C11.8985 6.03104 11.9393 6.12969 11.9393 6.23255V7.22645C11.9393 7.32931 11.8985 7.42796 11.8257 7.50069C11.753 7.57342 11.6544 7.61428 11.5515 7.61428C11.4486 7.61428 11.35 7.57342 11.2773 7.50069C11.2045 7.42796 11.1637 7.32931 11.1637 7.22645V6.23255C11.1637 6.12969 11.2045 6.03104 11.2773 5.95831C11.35 5.88557 11.4486 5.84471 11.5515 5.84471Z"
                                                            fill="black" />
                                                        <path
                                                            d="M1.45401 4.02503C1.23906 3.90974 1.05953 3.73814 0.934644 3.52863C0.809755 3.31912 0.744214 3.07957 0.74504 2.83566V1.50564C0.74545 1.14685 0.888161 0.802871 1.14186 0.549168C1.39557 0.295465 1.73954 0.152754 2.09833 0.152344H14.6467C15.0055 0.152754 15.3495 0.295465 15.6032 0.549168C15.8569 0.802871 15.9996 1.14685 16 1.50564V2.83463C16.0008 3.07854 15.9353 3.31808 15.8104 3.5276C15.6855 3.73711 15.506 3.9087 15.291 4.024C15.059 4.14821 14.8651 4.33305 14.7299 4.55881C14.5947 4.78457 14.5233 5.04278 14.5233 5.30593C14.5233 5.56908 14.5947 5.82729 14.7299 6.05305C14.8651 6.27881 15.059 6.46365 15.291 6.58786C15.5061 6.70324 15.6858 6.875 15.8107 7.08471C15.9355 7.29442 16.001 7.53418 16 7.77827V9.10726C15.9996 9.46605 15.8569 9.81002 15.6032 10.0637C15.3495 10.3174 15.0055 10.4601 14.6467 10.4606H2.09833C1.73954 10.4601 1.39557 10.3174 1.14186 10.0637C0.888161 9.81002 0.74545 9.46605 0.74504 9.10726V7.77827C0.744214 7.53436 0.809755 7.29481 0.934644 7.0853C1.05953 6.87578 1.23906 6.70419 1.45401 6.5889C2.46962 6.08057 2.46187 4.53336 1.45401 4.02503ZM2.73129 6.35826C2.52387 6.74566 2.20649 7.06304 1.81909 7.27046C1.63345 7.37078 1.51865 7.56521 1.52071 7.7762V9.10519C1.52085 9.25834 1.58175 9.40518 1.69005 9.51348C1.79834 9.62177 1.94518 9.68267 2.09833 9.68281H11.1649C11.1861 9.34668 11.0315 8.70339 11.5528 8.69046C12.0746 8.70287 11.9194 9.34927 11.9406 9.68487H14.6467C14.7998 9.68474 14.9467 9.62384 15.055 9.51554C15.1633 9.40725 15.2242 9.26041 15.2243 9.10726V7.77827C15.2253 7.67479 15.1981 7.573 15.1455 7.48387C15.0929 7.39475 15.017 7.32167 14.9259 7.27253C14.5704 7.08205 14.2732 6.79869 14.066 6.45264C13.8588 6.10659 13.7494 5.71081 13.7494 5.30748C13.7494 4.90415 13.8588 4.50837 14.066 4.16232C14.2732 3.81627 14.5704 3.53291 14.9259 3.34244C15.017 3.29329 15.0929 3.22021 15.1455 3.13109C15.1981 3.04196 15.2253 2.94017 15.2243 2.8367V1.50564C15.2238 1.18658 14.9658 0.928536 14.6467 0.928019H11.9406C11.9194 1.26466 12.0751 1.90951 11.5528 1.92243C11.031 1.91002 11.1861 1.26363 11.1649 0.928019H2.09833C1.77927 0.928536 1.52123 1.18658 1.52071 1.50564V2.83463C1.51865 3.04561 1.63345 3.24005 1.81909 3.34037C2.0772 3.47858 2.30554 3.66628 2.49108 3.89277C2.67662 4.11925 2.81572 4.38007 2.90043 4.66033C2.98514 4.94059 3.01381 5.23479 2.98478 5.52612C2.95576 5.81746 2.86962 6.10023 2.73129 6.35826Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="ps-3">FREEDEL24</span>
                                            </div>
                                            <div class="text-center py-2">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                        height="11" viewBox="0 0 11 11" fill="none">
                                                        <path
                                                            d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                            fill="#F15A2D" />
                                                    </svg> Expires
                                                </p>
                                                <p>25 April 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-0 rounded-3">
                                        <div class="card-header p-0">
                                            <div class="p-0">
                                                <div>
                                                    <img class="img-fluid w-100"
                                                        src="{{ asset('images/bata-banner.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="d-flex align-items-center py-2 px-2">
                                                    <div>
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/daraz.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                    </div>
                                                </div>
                                                <div class="py-2 pt-0 px-2">
                                                    <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                            2024</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3" style="border-top: 1px dashed #252525">
                                            <div class="ticket py-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="11" viewBox="0 0 16 11" fill="none">
                                                        <path
                                                            d="M5.10356 5.6782C6.66009 5.71543 6.66267 7.99695 5.10667 8.03832C3.55014 8.00057 3.54808 5.72008 5.10356 5.6782ZM5.5095 6.85981C5.50898 6.33028 4.70383 6.32821 4.70073 6.85774C4.7028 7.38572 5.50536 7.38779 5.5095 6.85981ZM8.20678 4.93458C6.65078 4.89528 6.65078 2.61376 8.20678 2.57446C9.7633 2.61428 9.76227 4.89425 8.20678 4.93458ZM8.20678 3.35066C7.67777 3.35272 7.67777 4.15736 8.20678 4.15943C8.73579 4.15684 8.73528 3.35376 8.20678 3.35066ZM4.13707 2.79217C4.20994 2.71915 4.30881 2.67803 4.41196 2.67784C4.51512 2.67764 4.61414 2.71839 4.68728 2.79113L9.18103 7.26368C9.21815 7.29937 9.24778 7.3421 9.26821 7.38936C9.28864 7.43663 9.29946 7.48749 9.30002 7.53898C9.30059 7.59047 9.29089 7.64156 9.2715 7.68927C9.25212 7.73697 9.22342 7.78034 9.1871 7.81683C9.15077 7.85333 9.10754 7.88223 9.05993 7.90184C9.01232 7.92145 8.96128 7.93139 8.90978 7.93107C8.85829 7.93075 8.80738 7.92017 8.76001 7.89997C8.71265 7.87976 8.66979 7.85032 8.63392 7.81337L4.13966 3.34135C4.10337 3.30549 4.07451 3.26283 4.05474 3.2158C4.03496 3.16877 4.02466 3.11831 4.02442 3.06729C4.02418 3.01628 4.03401 2.96572 4.05334 2.91851C4.07267 2.8713 4.10112 2.82837 4.13707 2.79217ZM11.5515 2.9985C11.6544 2.9985 11.753 3.03936 11.8257 3.11209C11.8985 3.18483 11.9393 3.28348 11.9393 3.38634V4.38075C11.9393 4.48361 11.8985 4.58226 11.8257 4.65499C11.753 4.72773 11.6544 4.76859 11.5515 4.76859C11.4486 4.76859 11.35 4.72773 11.2773 4.65499C11.2045 4.58226 11.1637 4.48361 11.1637 4.38075V3.38634C11.1637 3.28348 11.2045 3.18483 11.2773 3.11209C11.35 3.03936 11.4486 2.9985 11.5515 2.9985ZM11.5515 5.84471C11.6544 5.84471 11.753 5.88557 11.8257 5.95831C11.8985 6.03104 11.9393 6.12969 11.9393 6.23255V7.22645C11.9393 7.32931 11.8985 7.42796 11.8257 7.50069C11.753 7.57342 11.6544 7.61428 11.5515 7.61428C11.4486 7.61428 11.35 7.57342 11.2773 7.50069C11.2045 7.42796 11.1637 7.32931 11.1637 7.22645V6.23255C11.1637 6.12969 11.2045 6.03104 11.2773 5.95831C11.35 5.88557 11.4486 5.84471 11.5515 5.84471Z"
                                                            fill="black" />
                                                        <path
                                                            d="M1.45401 4.02503C1.23906 3.90974 1.05953 3.73814 0.934644 3.52863C0.809755 3.31912 0.744214 3.07957 0.74504 2.83566V1.50564C0.74545 1.14685 0.888161 0.802871 1.14186 0.549168C1.39557 0.295465 1.73954 0.152754 2.09833 0.152344H14.6467C15.0055 0.152754 15.3495 0.295465 15.6032 0.549168C15.8569 0.802871 15.9996 1.14685 16 1.50564V2.83463C16.0008 3.07854 15.9353 3.31808 15.8104 3.5276C15.6855 3.73711 15.506 3.9087 15.291 4.024C15.059 4.14821 14.8651 4.33305 14.7299 4.55881C14.5947 4.78457 14.5233 5.04278 14.5233 5.30593C14.5233 5.56908 14.5947 5.82729 14.7299 6.05305C14.8651 6.27881 15.059 6.46365 15.291 6.58786C15.5061 6.70324 15.6858 6.875 15.8107 7.08471C15.9355 7.29442 16.001 7.53418 16 7.77827V9.10726C15.9996 9.46605 15.8569 9.81002 15.6032 10.0637C15.3495 10.3174 15.0055 10.4601 14.6467 10.4606H2.09833C1.73954 10.4601 1.39557 10.3174 1.14186 10.0637C0.888161 9.81002 0.74545 9.46605 0.74504 9.10726V7.77827C0.744214 7.53436 0.809755 7.29481 0.934644 7.0853C1.05953 6.87578 1.23906 6.70419 1.45401 6.5889C2.46962 6.08057 2.46187 4.53336 1.45401 4.02503ZM2.73129 6.35826C2.52387 6.74566 2.20649 7.06304 1.81909 7.27046C1.63345 7.37078 1.51865 7.56521 1.52071 7.7762V9.10519C1.52085 9.25834 1.58175 9.40518 1.69005 9.51348C1.79834 9.62177 1.94518 9.68267 2.09833 9.68281H11.1649C11.1861 9.34668 11.0315 8.70339 11.5528 8.69046C12.0746 8.70287 11.9194 9.34927 11.9406 9.68487H14.6467C14.7998 9.68474 14.9467 9.62384 15.055 9.51554C15.1633 9.40725 15.2242 9.26041 15.2243 9.10726V7.77827C15.2253 7.67479 15.1981 7.573 15.1455 7.48387C15.0929 7.39475 15.017 7.32167 14.9259 7.27253C14.5704 7.08205 14.2732 6.79869 14.066 6.45264C13.8588 6.10659 13.7494 5.71081 13.7494 5.30748C13.7494 4.90415 13.8588 4.50837 14.066 4.16232C14.2732 3.81627 14.5704 3.53291 14.9259 3.34244C15.017 3.29329 15.0929 3.22021 15.1455 3.13109C15.1981 3.04196 15.2253 2.94017 15.2243 2.8367V1.50564C15.2238 1.18658 14.9658 0.928536 14.6467 0.928019H11.9406C11.9194 1.26466 12.0751 1.90951 11.5528 1.92243C11.031 1.91002 11.1861 1.26363 11.1649 0.928019H2.09833C1.77927 0.928536 1.52123 1.18658 1.52071 1.50564V2.83463C1.51865 3.04561 1.63345 3.24005 1.81909 3.34037C2.0772 3.47858 2.30554 3.66628 2.49108 3.89277C2.67662 4.11925 2.81572 4.38007 2.90043 4.66033C2.98514 4.94059 3.01381 5.23479 2.98478 5.52612C2.95576 5.81746 2.86962 6.10023 2.73129 6.35826Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="ps-3">FREEDEL24</span>
                                            </div>
                                            <div class="text-center py-2">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                        height="11" viewBox="0 0 11 11" fill="none">
                                                        <path
                                                            d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                            fill="#F15A2D" />
                                                    </svg> Expires
                                                </p>
                                                <p>25 April 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-0 rounded-3">
                                        <div class="card-header p-0">
                                            <div class="p-0">
                                                <div>
                                                    <img class="img-fluid w-100"
                                                        src="{{ asset('images/bata-banner.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="d-flex align-items-center py-2 px-2">
                                                    <div>
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/daraz.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                    </div>
                                                </div>
                                                <div class="py-2 pt-0 px-2">
                                                    <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                            2024</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3" style="border-top: 1px dashed #252525">
                                            <div class="ticket py-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="11" viewBox="0 0 16 11" fill="none">
                                                        <path
                                                            d="M5.10356 5.6782C6.66009 5.71543 6.66267 7.99695 5.10667 8.03832C3.55014 8.00057 3.54808 5.72008 5.10356 5.6782ZM5.5095 6.85981C5.50898 6.33028 4.70383 6.32821 4.70073 6.85774C4.7028 7.38572 5.50536 7.38779 5.5095 6.85981ZM8.20678 4.93458C6.65078 4.89528 6.65078 2.61376 8.20678 2.57446C9.7633 2.61428 9.76227 4.89425 8.20678 4.93458ZM8.20678 3.35066C7.67777 3.35272 7.67777 4.15736 8.20678 4.15943C8.73579 4.15684 8.73528 3.35376 8.20678 3.35066ZM4.13707 2.79217C4.20994 2.71915 4.30881 2.67803 4.41196 2.67784C4.51512 2.67764 4.61414 2.71839 4.68728 2.79113L9.18103 7.26368C9.21815 7.29937 9.24778 7.3421 9.26821 7.38936C9.28864 7.43663 9.29946 7.48749 9.30002 7.53898C9.30059 7.59047 9.29089 7.64156 9.2715 7.68927C9.25212 7.73697 9.22342 7.78034 9.1871 7.81683C9.15077 7.85333 9.10754 7.88223 9.05993 7.90184C9.01232 7.92145 8.96128 7.93139 8.90978 7.93107C8.85829 7.93075 8.80738 7.92017 8.76001 7.89997C8.71265 7.87976 8.66979 7.85032 8.63392 7.81337L4.13966 3.34135C4.10337 3.30549 4.07451 3.26283 4.05474 3.2158C4.03496 3.16877 4.02466 3.11831 4.02442 3.06729C4.02418 3.01628 4.03401 2.96572 4.05334 2.91851C4.07267 2.8713 4.10112 2.82837 4.13707 2.79217ZM11.5515 2.9985C11.6544 2.9985 11.753 3.03936 11.8257 3.11209C11.8985 3.18483 11.9393 3.28348 11.9393 3.38634V4.38075C11.9393 4.48361 11.8985 4.58226 11.8257 4.65499C11.753 4.72773 11.6544 4.76859 11.5515 4.76859C11.4486 4.76859 11.35 4.72773 11.2773 4.65499C11.2045 4.58226 11.1637 4.48361 11.1637 4.38075V3.38634C11.1637 3.28348 11.2045 3.18483 11.2773 3.11209C11.35 3.03936 11.4486 2.9985 11.5515 2.9985ZM11.5515 5.84471C11.6544 5.84471 11.753 5.88557 11.8257 5.95831C11.8985 6.03104 11.9393 6.12969 11.9393 6.23255V7.22645C11.9393 7.32931 11.8985 7.42796 11.8257 7.50069C11.753 7.57342 11.6544 7.61428 11.5515 7.61428C11.4486 7.61428 11.35 7.57342 11.2773 7.50069C11.2045 7.42796 11.1637 7.32931 11.1637 7.22645V6.23255C11.1637 6.12969 11.2045 6.03104 11.2773 5.95831C11.35 5.88557 11.4486 5.84471 11.5515 5.84471Z"
                                                            fill="black" />
                                                        <path
                                                            d="M1.45401 4.02503C1.23906 3.90974 1.05953 3.73814 0.934644 3.52863C0.809755 3.31912 0.744214 3.07957 0.74504 2.83566V1.50564C0.74545 1.14685 0.888161 0.802871 1.14186 0.549168C1.39557 0.295465 1.73954 0.152754 2.09833 0.152344H14.6467C15.0055 0.152754 15.3495 0.295465 15.6032 0.549168C15.8569 0.802871 15.9996 1.14685 16 1.50564V2.83463C16.0008 3.07854 15.9353 3.31808 15.8104 3.5276C15.6855 3.73711 15.506 3.9087 15.291 4.024C15.059 4.14821 14.8651 4.33305 14.7299 4.55881C14.5947 4.78457 14.5233 5.04278 14.5233 5.30593C14.5233 5.56908 14.5947 5.82729 14.7299 6.05305C14.8651 6.27881 15.059 6.46365 15.291 6.58786C15.5061 6.70324 15.6858 6.875 15.8107 7.08471C15.9355 7.29442 16.001 7.53418 16 7.77827V9.10726C15.9996 9.46605 15.8569 9.81002 15.6032 10.0637C15.3495 10.3174 15.0055 10.4601 14.6467 10.4606H2.09833C1.73954 10.4601 1.39557 10.3174 1.14186 10.0637C0.888161 9.81002 0.74545 9.46605 0.74504 9.10726V7.77827C0.744214 7.53436 0.809755 7.29481 0.934644 7.0853C1.05953 6.87578 1.23906 6.70419 1.45401 6.5889C2.46962 6.08057 2.46187 4.53336 1.45401 4.02503ZM2.73129 6.35826C2.52387 6.74566 2.20649 7.06304 1.81909 7.27046C1.63345 7.37078 1.51865 7.56521 1.52071 7.7762V9.10519C1.52085 9.25834 1.58175 9.40518 1.69005 9.51348C1.79834 9.62177 1.94518 9.68267 2.09833 9.68281H11.1649C11.1861 9.34668 11.0315 8.70339 11.5528 8.69046C12.0746 8.70287 11.9194 9.34927 11.9406 9.68487H14.6467C14.7998 9.68474 14.9467 9.62384 15.055 9.51554C15.1633 9.40725 15.2242 9.26041 15.2243 9.10726V7.77827C15.2253 7.67479 15.1981 7.573 15.1455 7.48387C15.0929 7.39475 15.017 7.32167 14.9259 7.27253C14.5704 7.08205 14.2732 6.79869 14.066 6.45264C13.8588 6.10659 13.7494 5.71081 13.7494 5.30748C13.7494 4.90415 13.8588 4.50837 14.066 4.16232C14.2732 3.81627 14.5704 3.53291 14.9259 3.34244C15.017 3.29329 15.0929 3.22021 15.1455 3.13109C15.1981 3.04196 15.2253 2.94017 15.2243 2.8367V1.50564C15.2238 1.18658 14.9658 0.928536 14.6467 0.928019H11.9406C11.9194 1.26466 12.0751 1.90951 11.5528 1.92243C11.031 1.91002 11.1861 1.26363 11.1649 0.928019H2.09833C1.77927 0.928536 1.52123 1.18658 1.52071 1.50564V2.83463C1.51865 3.04561 1.63345 3.24005 1.81909 3.34037C2.0772 3.47858 2.30554 3.66628 2.49108 3.89277C2.67662 4.11925 2.81572 4.38007 2.90043 4.66033C2.98514 4.94059 3.01381 5.23479 2.98478 5.52612C2.95576 5.81746 2.86962 6.10023 2.73129 6.35826Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="ps-3">FREEDEL24</span>
                                            </div>
                                            <div class="text-center py-2">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                        height="11" viewBox="0 0 11 11" fill="none">
                                                        <path
                                                            d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                            fill="#F15A2D" />
                                                    </svg> Expires
                                                </p>
                                                <p>25 April 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="load-btn-area mb-0 py-3">
                                        <button class="btn load-more-btn-mobile">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile2" role="tabpanel"
                            aria-labelledby="profile2-tab">...</div>
                        <div class="tab-pane fade" id="contact2" role="tabpanel"
                            aria-labelledby="contact2-tab">...</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="custom-slider pb-5 pt-3">
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
            <div class="row bg-light" style="margin-bottom: 10rem">
                <h4 class="text-center py-4 pb-4">Partner Brands</h4>
                <div class="col-12">
                    <div class="mobile-partners">
                        @foreach ($brands as $brand)
                            <div>
                                <a href="{{ route('brand.details', $brand->slug) }}">
                                    <img class="img-fluid"
                                        src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                        alt=""
                                        onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
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
                    autoplay: true,
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
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            infinite: true,
                            slidesToShow: 6,
                            slidesToScroll: 6,
                            autoplay: true,
                            autoplaySpeed: 5000
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
    @endpush
    <!-- Footer Slider End -->
</x-frontend-app-layout>
