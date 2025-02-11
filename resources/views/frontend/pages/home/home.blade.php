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

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body pe-0">

                                {{-- ====ASss===== --}}

                                <div class="row">
                                    <div class="col-lg-3 grab-offer-tabs-box">
                                        <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                            <li class="nav-item mb-2" role="presentation">
                                                <button class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                                    role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                                    All Offers
                                                </button>
                                            </li>
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $index => $offercategory)
                                                    @if ($offercategory->offers->count() > 0)
                                                        <!-- Only show category if there are offers -->
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
                                                    @endif
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
                                            <!-- All Offers Tab -->
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <div class="row">
                                                    @foreach ($alloffers as $alloffer)
                                                        @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                                            <div class="col-lg-4 mb-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <a
                                                                                    href="{{ route('offer.details', $alloffer->slug) }}">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                                                        alt="Logo" />
                                                                                </a>
                                                                            </div>

                                                                            <div class="col-8 text-center">
                                                                                <a
                                                                                    href="{{ route('offer.details', $alloffer->slug) }}">
                                                                                    <div
                                                                                        class="d-flex justify-content-center align-items-center">
                                                                                        @if (!empty($alloffer->badge))
                                                                                            <h2>{{ $alloffer->badge }}
                                                                                            </h2>
                                                                                        @endif
                                                                                    </div>

                                                                                    @if (!empty($alloffer->coupon_code))
                                                                                        <p
                                                                                            class="para-font coupon-extra">
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
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- Categories -->
                                            @foreach ($categories as $offercategory)
                                                @if ($offercategory->offers->count() > 0)
                                                    <!-- Only show category if it has offers -->
                                                    <div class="tab-pane fade"
                                                        id="home-{{ $offercategory->id }}-pane" role="tabpanel"
                                                        aria-labelledby="home-{{ $offercategory->id }}-tab"
                                                        tabindex="0">
                                                        <div class="row">
                                                            @foreach ($offercategory->offers as $category_offer)
                                                                @if ($category_offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $category_offer->expiry_date == null)
                                                                    <div class="col-lg-4 mb-4">
                                                                        <div class="coupon-box">
                                                                            <div class="coupon-box-content">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-4">
                                                                                        <a
                                                                                            href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                            <img class="img-fluid"
                                                                                                src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                                alt="Logo" />
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="col-8 text-center">
                                                                                        <a
                                                                                            href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                            <div
                                                                                                class="d-flex justify-content-center align-items-center">
                                                                                                @if (!empty($category_offer->badge))
                                                                                                    <h1>{{ substr($category_offer->badge, 0, -4) }}
                                                                                                    </h1>
                                                                                                @endif
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
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <!-- No expired offers shown -->
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- ====ASss===== --}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grab Your Offer End -->

        <!-- Biggest Deals From Product -->
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
        <!-- Biggest Deals From -->

        <!-- Map By Location -->
        @include('frontend.pages.home.map')
        <!-- Map By Location End -->

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
    @endpush
    <!-- Footer Slider End -->
</x-frontend-app-layout>
