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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 21 13"
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
                    {{-- <div class="col-6">
                        <form action="">
                            <div class="input-group">
                                <input type="text" name="available_coupon"
                                    class="form-control form-control-sm rounded-pill" placeholder="search.."
                                    aria-label="search.." aria-describedby="basic-addon2" style="height: 10px;">
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pt-4 coupon-slide">


                    @foreach ($mobile_coupons as $mobile_coupon)
                        <div>
                            <div class="p-0 py-3 border-0 card" style="background-color: #1E1E1E;">
                                <div class="p-0 card-body">
                                    <div class="py-2 d-flex align-items-center justify-content-end w-100">
                                        <div class="coupon-images-mb">
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
                                            <span style="font-size: 12px;">
                                                <div class="d-flex justify-content-between align-items-center pe-3">
                                                    <span class="text-white pe-2" style="font-size: 9px"><small>Code:
                                                            {{ $mobile_coupon->coupon_code }}</small></span>
                                                    <i class="text-white fa-solid fa-copy"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

        {{-- End Coupon --}}
        <div class="mt-4 row bg-panda">
            <div class="col-12">
                <div class="py-3 d-flex justify-content-between align-items-center">
                    <p class="text-white">Get 20% on App</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        {{-- Banner Image Section Start --}}
        {{-- <div class="row">
            <div class="col-12">
                <div class="pt-3 pb-5 custom-slider">
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

            </div>
        </div> --}}
        {{-- Banner Image Section End --}}

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
                        @if ($categories->count() > 0)
                            @foreach ($categories as $index => $offercategory)
                                <li class="flex-shrink-0 nav-item" role="presentation">
                                    <button class="nav-link mb-link-tabs whitespace-nowrap" style="font-size: 10px"
                                        id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-mobile-{{ $offercategory->id }}-pane" type="button"
                                        role="tab" aria-controls="home-{{ $offercategory->id }}-pane"
                                        aria-selected="true">
                                        {{ $offercategory->name }}
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    </ul>


                </div>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home-tab-pane-mobile" role="tabpanel"
                        aria-labelledby="home-tab-mobile" tabindex="0">
                        <div class="mt-3 row g-2">
                            @foreach ($alloffers as $alloffer)
                                <div class="col-4">
                                    <div class="p-0 card" style="border: 2px dashed #eee">
                                        <div
                                            class="p-1 py-3 card-body d-flex justify-content-between align-items-center">
                                            <div class="offers-img">
                                                <img src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                @if (!empty($alloffer->badge))
                                                    <p class="ps-2">
                                                        <small>{{ $alloffer->badge }}</small>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @foreach ($categories as $offercategory)
                        <div class="tab-pane fade" id="home-mobile-{{ $offercategory->id }}-pane" role="tabpanel"
                            aria-labelledby="home-{{ $offercategory->id }}-tab-mobile" tabindex="0">

                            <div class="row">
                                @if ($offercategory->offers->count() > 0)
                                    @foreach ($offercategory->offers as $category_offer)
                                        <div class="col-4">

                                            <div class="p-0 card" style="border: 2px dashed #eee">
                                                <div
                                                    class="p-1 py-3 card-body d-flex justify-content-between align-items-center">
                                                    <div class="offers-img">
                                                        <img src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        @if (!empty($category_offer->badge))
                                                            <h6>
                                                                {{ $category_offer->badge }}
                                                            </h6>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <img class="img-fluid" src="{{ asset('images/NoOffers.png') }}" alt="">
                                @endif
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
                    <div class="slick-slider-product">
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
                                            <h4>{{ $offerLatest->name }}</h4>
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
                            <p>No Offer Avaiable</p>
                        @endforelse

                    </div>
                    <!-- End Slick Slider -->
                </div>
            </div>
        </div>
        <!-- offerLatests Slider End -->


        <div class="py-4 pt-3 pb-0 mt-2 row bg-light">

            <div class="col-12 ">
                <h4 class="text-center">Deals of the Day</h4>
            </div>

            <div class="col-12">

                {{-- <div class="relative overflow-hidden">

                    <ul class="overflow-hidden border-0 tabs-container-mobile tabs-container-deal nav nav-tabs d-flex justify-content-start align-items-center"
                        id="myTab" role="tablist">
                        <li class="mb-2 nav-item me-1" role="presentation">
                            <button class="nav-link mb-link-tabs active" id="home2-tab" data-bs-toggle="tab"
                                data-bs-target="#home2" type="button" role="tab" aria-controls="home2"
                                aria-selected="true">
                                Hot Deals
                            </button>
                        </li>
                        <li class="mb-2 nav-item me-1" role="presentation">
                            <button class="nav-link mb-link-tabs" id="profile2-tab" data-bs-toggle="tab"
                                data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2"
                                aria-selected="false">
                                Cashback
                            </button>
                        </li>
                        <li class="mb-2 nav-item me-1" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2"
                                aria-selected="false">
                                Flat %
                            </button>
                        </li>
                        <li class="mb-2 nav-item me-1" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2"
                                aria-selected="false">
                                Buy 1 Get 1
                            </button>
                        </li>
                        <li class="mb-2 nav-item me-1" role="presentation">
                            <button class="nav-link mb-link-tabs" id="contact2-tab" data-bs-toggle="tab"
                                data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2"
                                aria-selected="false">
                                Upto 50%
                            </button>
                        </li>
                    </ul>

                </div> --}}

                <div class="tab-content" id="myTabContent">
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
                                                        alt="">
                                                </div>
                                                <div class="px-2 py-2 d-flex align-items-center">
                                                    <div class="ps-2">
                                                        <a href="{{ route('offer.details', $offerDeal->slug) }}">
                                                            <h6 class="mb-3 product-title">
                                                                {{ $offerDeal->name }}
                                                            </h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 card-body" style="border-top: 1px dashed #252525">

                                            <div class="py-2 ticket">

                                                <a href="">
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
                                                    <span class="ps-3">View</span>
                                                </a>

                                            </div>

                                            {{-- <div class="py-2 text-center">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                        height="11" viewBox="0 0 11 11" fill="none">
                                                        <path
                                                            d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                            fill="#F15A2D" />
                                                    </svg> Expires
                                                </p>
                                                <p>25 April 2024</p>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-6">
                                <div class="p-0 card rounded-3">
                                    <div class="p-0 card-header">
                                        <div class="p-0">
                                            <div>
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('images/bata-banner.png') }}" alt="">
                                            </div>
                                            <div class="px-2 py-2 d-flex align-items-center">
                                                <div>
                                                    <img class="img-fluid" src="{{ asset('images/daraz.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                </div>
                                            </div>
                                            <div class="px-2 py-2 pt-0">
                                                <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                        2024</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 card-body" style="border-top: 1px dashed #252525">
                                        <div class="py-2 ticket">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11"
                                                    viewBox="0 0 16 11" fill="none">
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
                                        <div class="py-2 text-center">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11"
                                                    viewBox="0 0 11 11" fill="none">
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
                                <div class="p-0 card rounded-3">
                                    <div class="p-0 card-header">
                                        <div class="p-0">
                                            <div>
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('images/bata-banner.png') }}" alt="">
                                            </div>
                                            <div class="px-2 py-2 d-flex align-items-center">
                                                <div>
                                                    <img class="img-fluid" src="{{ asset('images/daraz.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                </div>
                                            </div>
                                            <div class="px-2 py-2 pt-0">
                                                <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                        2024</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 card-body" style="border-top: 1px dashed #252525">
                                        <div class="py-2 ticket">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11"
                                                    viewBox="0 0 16 11" fill="none">
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
                                        <div class="py-2 text-center">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11"
                                                    viewBox="0 0 11 11" fill="none">
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
                                <div class="p-0 card rounded-3">
                                    <div class="p-0 card-header">
                                        <div class="p-0">
                                            <div>
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('images/bata-banner.png') }}" alt="">
                                            </div>
                                            <div class="px-2 py-2 d-flex align-items-center">
                                                <div>
                                                    <img class="img-fluid" src="{{ asset('images/daraz.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0 deals_title">Free Delivery on order</h6>
                                                </div>
                                            </div>
                                            <div class="px-2 py-2 pt-0">
                                                <p class="mb-0"><small>Daraz's Free Delivery Festival in
                                                        2024</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 card-body" style="border-top: 1px dashed #252525">
                                        <div class="py-2 ticket">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11"
                                                    viewBox="0 0 16 11" fill="none">
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
                                        <div class="py-2 text-center">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11"
                                                    viewBox="0 0 11 11" fill="none">
                                                    <path
                                                        d="M8.95536 0.767857H8.57143V0.383929C8.57143 0.282104 8.53098 0.184451 8.45898 0.11245C8.38698 0.0404495 8.28932 0 8.1875 0C8.08568 0 7.98802 0.0404495 7.91602 0.11245C7.84402 0.184451 7.80357 0.282104 7.80357 0.383929V0.767857H3.19643V0.383929C3.19643 0.282104 3.15598 0.184451 3.08398 0.11245C3.01198 0.0404495 2.91432 0 2.8125 0C2.71068 0 2.61302 0.0404495 2.54102 0.11245C2.46902 0.184451 2.42857 0.282104 2.42857 0.383929V0.767857H2.04464C0.986152 0.767857 0.125 1.62901 0.125 2.6875V8.83036C0.125 9.88885 0.986152 10.75 2.04464 10.75H8.95536C10.0138 10.75 10.875 9.88885 10.875 8.83036V2.6875C10.875 1.62901 10.0138 0.767857 8.95536 0.767857ZM2.04464 1.53571H2.42857V1.91964C2.42857 2.02147 2.46902 2.11912 2.54102 2.19112C2.61302 2.26312 2.71068 2.30357 2.8125 2.30357C2.91432 2.30357 3.01198 2.26312 3.08398 2.19112C3.15598 2.11912 3.19643 2.02147 3.19643 1.91964V1.53571H7.80357V1.91964C7.80357 2.02147 7.84402 2.11912 7.91602 2.19112C7.98802 2.26312 8.08568 2.30357 8.1875 2.30357C8.28932 2.30357 8.38698 2.26312 8.45898 2.19112C8.53098 2.11912 8.57143 2.02147 8.57143 1.91964V1.53571H8.95536C9.59037 1.53571 10.1071 2.05248 10.1071 2.6875V3.83929H0.892857V2.6875C0.892857 2.05248 1.40962 1.53571 2.04464 1.53571ZM8.95536 9.98214H2.04464C1.40962 9.98214 0.892857 9.46537 0.892857 8.83036V4.60714H10.1071V8.83036C10.1071 9.46537 9.59037 9.98214 8.95536 9.98214ZM3.19643 8.83036C3.19643 8.93218 3.15598 9.02984 3.08398 9.10184C3.01198 9.17384 2.91432 9.21429 2.8125 9.21429H2.42857C2.32675 9.21429 2.22909 9.17384 2.15709 9.10184C2.08509 9.02984 2.04464 8.93218 2.04464 8.83036C2.04464 8.72853 2.08509 8.63088 2.15709 8.55888C2.22909 8.48688 2.32675 8.44643 2.42857 8.44643H2.8125C2.91432 8.44643 3.01198 8.48688 3.08398 8.55888C3.15598 8.63088 3.19643 8.72853 3.19643 8.83036ZM5.11607 8.83036C5.11607 8.93218 5.07562 9.02984 5.00362 9.10184C4.93162 9.17384 4.83397 9.21429 4.73214 9.21429H4.34821C4.24639 9.21429 4.14874 9.17384 4.07674 9.10184C4.00474 9.02984 3.96429 8.93218 3.96429 8.83036C3.96429 8.72853 4.00474 8.63088 4.07674 8.55888C4.14874 8.48688 4.24639 8.44643 4.34821 8.44643H4.73214C4.83397 8.44643 4.93162 8.48688 5.00362 8.55888C5.07562 8.63088 5.11607 8.72853 5.11607 8.83036ZM7.03571 8.83036C7.03571 8.93218 6.99527 9.02984 6.92326 9.10184C6.85126 9.17384 6.75361 9.21429 6.65179 9.21429H6.26786C6.16603 9.21429 6.06838 9.17384 5.99638 9.10184C5.92438 9.02984 5.88393 8.93218 5.88393 8.83036C5.88393 8.72853 5.92438 8.63088 5.99638 8.55888C6.06838 8.48688 6.16603 8.44643 6.26786 8.44643H6.65179C6.75361 8.44643 6.85126 8.48688 6.92326 8.55888C6.99527 8.63088 7.03571 8.72853 7.03571 8.83036ZM8.95536 8.83036C8.95536 8.93218 8.91491 9.02984 8.84291 9.10184C8.77091 9.17384 8.67325 9.21429 8.57143 9.21429H8.1875C8.08568 9.21429 7.98802 9.17384 7.91602 9.10184C7.84402 9.02984 7.80357 8.93218 7.80357 8.83036C7.80357 8.72853 7.84402 8.63088 7.91602 8.55888C7.98802 8.48688 8.08568 8.44643 8.1875 8.44643H8.57143C8.67325 8.44643 8.77091 8.48688 8.84291 8.55888C8.91491 8.63088 8.95536 8.72853 8.95536 8.83036ZM3.19643 7.29464C3.19643 7.39647 3.15598 7.49412 3.08398 7.56612C3.01198 7.63812 2.91432 7.67857 2.8125 7.67857H2.42857C2.32675 7.67857 2.22909 7.63812 2.15709 7.56612C2.08509 7.49412 2.04464 7.39647 2.04464 7.29464C2.04464 7.19282 2.08509 7.09516 2.15709 7.02316C2.22909 6.95116 2.32675 6.91071 2.42857 6.91071H2.8125C2.91432 6.91071 3.01198 6.95116 3.08398 7.02316C3.15598 7.09516 3.19643 7.19282 3.19643 7.29464ZM5.11607 7.29464C5.11607 7.39647 5.07562 7.49412 5.00362 7.56612C4.93162 7.63812 4.83397 7.67857 4.73214 7.67857H4.34821C4.24639 7.67857 4.14874 7.63812 4.07674 7.56612C4.00474 7.49412 3.96429 7.39647 3.96429 7.29464C3.96429 7.19282 4.00474 7.09516 4.07674 7.02316C4.14874 6.95116 4.24639 6.91071 4.34821 6.91071H4.73214C4.83397 6.91071 4.93162 6.95116 5.00362 7.02316C5.07562 7.09516 5.11607 7.19282 5.11607 7.29464ZM7.03571 7.29464C7.03571 7.39647 6.99527 7.49412 6.92326 7.56612C6.85126 7.63812 6.75361 7.67857 6.65179 7.67857H6.26786C6.16603 7.67857 6.06838 7.63812 5.99638 7.56612C5.92438 7.49412 5.88393 7.39647 5.88393 7.29464C5.88393 7.19282 5.92438 7.09516 5.99638 7.02316C6.06838 6.95116 6.16603 6.91071 6.26786 6.91071H6.65179C6.75361 6.91071 6.85126 6.95116 6.92326 7.02316C6.99527 7.09516 7.03571 7.19282 7.03571 7.29464ZM8.95536 7.29464C8.95536 7.39647 8.91491 7.49412 8.84291 7.56612C8.77091 7.63812 8.67325 7.67857 8.57143 7.67857H8.1875C8.08568 7.67857 7.98802 7.63812 7.91602 7.56612C7.84402 7.49412 7.80357 7.39647 7.80357 7.29464C7.80357 7.19282 7.84402 7.09516 7.91602 7.02316C7.98802 6.95116 8.08568 6.91071 8.1875 6.91071H8.57143C8.67325 6.91071 8.77091 6.95116 8.84291 7.02316C8.91491 7.09516 8.95536 7.19282 8.95536 7.29464ZM7.03571 5.75893C7.03571 5.86075 6.99527 5.95841 6.92326 6.03041C6.85126 6.10241 6.75361 6.14286 6.65179 6.14286H6.26786C6.16603 6.14286 6.06838 6.10241 5.99638 6.03041C5.92438 5.95841 5.88393 5.86075 5.88393 5.75893C5.88393 5.6571 5.92438 5.55945 5.99638 5.48745C6.06838 5.41545 6.16603 5.375 6.26786 5.375H6.65179C6.75361 5.375 6.85126 5.41545 6.92326 5.48745C6.99527 5.55945 7.03571 5.6571 7.03571 5.75893ZM8.95536 5.75893C8.95536 5.86075 8.91491 5.95841 8.84291 6.03041C8.77091 6.10241 8.67325 6.14286 8.57143 6.14286H8.1875C8.08568 6.14286 7.98802 6.10241 7.91602 6.03041C7.84402 5.95841 7.80357 5.86075 7.80357 5.75893C7.80357 5.6571 7.84402 5.55945 7.91602 5.48745C7.98802 5.41545 8.08568 5.375 8.1875 5.375H8.57143C8.67325 5.375 8.77091 5.41545 8.84291 5.48745C8.91491 5.55945 8.95536 5.6571 8.95536 5.75893Z"
                                                        fill="#F15A2D" />
                                                </svg> Expires
                                            </p>
                                            <p>25 April 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-lg-12">
                                <div class="py-3 mb-0 load-btn-area">
                                    <button class="btn load-more-btn-mobile">See More</button>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                    {{-- <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">...
                    </div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">...
                    </div> --}}

                </div>
            </div>
        </div>



        {{-- Offer Slider Image Start --}}
        <div class="mt-3 row">
            <div class="col-12 ps-0">
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
                                    src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                    alt=""
                                    onerror="this.onerror=null;this.src='http://discountzshop.com/storage/brands/logo/koQPsCroGn1737948806.jpg';">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Brand Section Ens --}}

    </div>
</div>
