<x-frontend-app-layout :title="'DiscountZShop || Offer and Discounts in One Place'">
    <!-- Hero Section -->
    <section>
        <div class="container-fluid px-0" style="overflow: hidden">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row gx-3">
                        <div class="col-lg-7">
                            <div class="slick-slider" style="height: 100%">
                                <div class="hero-slider">
                                    <div class="items">
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner1.png"
                                            alt="" />
                                    </div>
                                    <div class="items">
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner1.png"
                                            alt="" />
                                    </div>
                                    <div class="items">
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner1.png"
                                            alt="" />
                                    </div>
                                    <div class="items">
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner1.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row gx-3">
                                <div class="col-lg-12">
                                    <div>
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner2.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 gx-3">
                                <div class="col-lg-6">
                                    <div>
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner3.png"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img class="img-fluid w-100 responsive-img"
                                            src="{{ asset('frontend') }}/assets/img/banner/banner4.png"
                                            alt="" />
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
    <section>
        <div class="container pt-70 pb-70 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow-sm">
                        <div class="card-header py-3 px-5" style="border-bottom: 1px solid #eee">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center">
                                        <h4 class="coupon-title mb-0 pe-3">
                                            Available Coupon
                                        </h4>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="23"
                                                viewBox="0 0 36 23" fill="none">
                                                <path
                                                    d="M28.6172 14.5408C28.0353 14.5408 27.5625 15.0064 27.5625 15.5794C27.5625 16.1525 28.0353 16.618 28.6172 16.618C29.1991 16.618 29.6719 16.1525 29.6719 15.5794C29.6719 15.0064 29.1991 14.5408 28.6172 14.5408Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M34.9453 0H10.6344V3.11591C10.6344 3.69 10.1627 4.15455 9.57973 4.15455C8.99677 4.15455 8.52504 3.69 8.52504 3.11591V0H1.05469C0.471727 0 0 0.464547 0 1.03864V7.27045C0 7.84454 0.471727 8.30909 1.05469 8.30909C2.79942 8.30909 4.21875 9.70682 4.21875 11.425C4.21875 13.1432 2.79942 14.5409 1.05469 14.5409C0.471727 14.5409 0 15.0055 0 15.5795V21.8114C0 22.3855 0.471727 22.85 1.05469 22.85H8.4375V19.7341C8.4375 19.16 8.90923 18.6955 9.49219 18.6955C10.0751 18.6955 10.5469 19.16 10.5469 19.7341V22.85H34.9453C35.5283 22.85 36 22.3855 36 21.8114V1.03864C36 0.464547 35.5283 0 34.9453 0ZM10.5469 15.5795C10.5469 16.1536 10.0751 16.6182 9.49219 16.6182C8.90923 16.6182 8.4375 16.1536 8.4375 15.5795V13.5023C8.4375 12.9282 8.90923 12.4636 9.49219 12.4636C10.0751 12.4636 10.5469 12.9282 10.5469 13.5023V15.5795ZM10.5469 9.34773C10.5469 9.92182 10.0751 10.3864 9.49219 10.3864C8.90923 10.3864 8.4375 9.92182 8.4375 9.34773V7.27045C8.4375 6.69637 8.90923 6.23182 9.49219 6.23182C10.0751 6.23182 10.5469 6.69637 10.5469 7.27045V9.34773ZM17.0156 7.27045C17.0156 5.55227 18.435 4.15455 20.1797 4.15455C21.9244 4.15455 23.3438 5.55227 23.3438 7.27045C23.3438 8.98864 21.9244 10.3864 20.1797 10.3864C18.435 10.3864 17.0156 8.98864 17.0156 7.27045ZM19.5947 18.521C19.1096 18.2024 18.9787 17.5584 19.3022 17.0807L27.7397 4.61702C28.0621 4.13931 28.7161 4.01149 29.2023 4.32897C29.6873 4.64748 29.8182 5.29151 29.4948 5.76928L21.0573 18.2329C20.7391 18.7036 20.0875 18.8427 19.5947 18.521ZM28.6172 18.6955C26.8725 18.6955 25.4531 17.2977 25.4531 15.5795C25.4531 13.8614 26.8725 12.4636 28.6172 12.4636C30.3619 12.4636 31.7812 13.8614 31.7812 15.5795C31.7812 17.2977 30.3619 18.6955 28.6172 18.6955Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M20.1797 6.23193C19.5978 6.23193 19.125 6.69752 19.125 7.27057C19.125 7.84362 19.5978 8.30921 20.1797 8.30921C20.7616 8.30921 21.2344 7.84362 21.2344 7.27057C21.2344 6.69752 20.7616 6.23193 20.1797 6.23193Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-space-between align-items-center">
                                        <form class="d-flex w-75" role="search">
                                            <div class="d-flex w-100">
                                                <input class="form-control rounded-pill form-control-sm" type="search"
                                                    placeholder="Search Coupon..." aria-label="Search Coupon..." />
                                            </div>
                                            <button class="btn position-relative border-0 bg-transparent coupon-action"
                                                type="submit">
                                                <i class="fa-solid fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        <div class="d-flex justify-content-end align-items-center w-25">
                                            <button type="button" class="custom-prev rounded-circle">
                                                <i class="fas fa-arrow-left-long"></i>
                                            </button>
                                            <button type="button" class="custom-next rounded-circle ms-3">
                                                <i class="fas fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-5" style="background-color: #f8f8f8">
                            <div class="slick-slider">
                                <div class="available-coupon-slider">
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="d-flex coupons-box">
                                            <div class="logo">
                                                <div class="coupon-logo">
                                                    <img src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <div class="content-area"
                                                style="
                        background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');
                        background-repeat: no-repeat;
                      ">
                                                <div class="p-1">
                                                    <p
                                                        class="align-items-center text-start ps-5 coupon-text text-white">
                                                        Get Upto
                                                    </p>
                                                    <h5 class="discount-percentage text-center fw-bold">
                                                        50%
                                                    </h5>
                                                    <p class="text-white text-center ps-5 coupon-text">
                                                        OFF
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-white text-center coupon-text pt-1">
                                                        Code: ”<span id="coupon-code">SAVE50</span>”
                                                        <a href="javascript:void(0);" class="copy-btn"><i
                                                                class="fas fa-copy ps-2"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Coupon End -->
    <!-- App Discount Start -->
    <section class="app-discount-box">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-white">Get 20% on App</h1>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-end">
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
                                        <div class="w-75">
                                            <a href=""><span class="badge mt-2 ct-badge">Super
                                                    Deal</span></a>

                                        </div>
                                        <!-- Grab End -->
                                        <div class="d-flex justify-content-end align-items-center w-25">
                                            <button type="button" class="grab-custom-prev rounded-circle">
                                                <i class="fas fa-arrow-left-long"></i>
                                            </button>
                                            <button type="button" class="grab-custom-next rounded-circle ms-3">
                                                <i class="fas fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pe-0">
                            <div class="row">
                                <div class="col-lg-3 grab-offer-tabs-box">
                                    <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                        <li class="nav-item mb-2" role="presentation">
                                            <button class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab"
                                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                                role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                                Fashion
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="grab-slider">
                                                <div class="row grab-items">
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="coupon-box">
                                                            <div class="coupon-box-content">
                                                                <div class="row align-items-center">
                                                                    <div class="col-4">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('frontend') }}/assets/img/coupon/coupon-logo.png"
                                                                            class="img-fluid" alt="Logo" />
                                                                    </div>
                                                                    <div class="col-8 text-center">
                                                                        <div class="d-flex align-items-center pb-2">
                                                                            <p class="">
                                                                                <span class="para-font">Get</span>
                                                                                <span
                                                                                    class="ps-2 para-font">Upto</span>
                                                                            </p>
                                                                            <h1>50%</h1>
                                                                            <p class="coupon-off">OFF</p>
                                                                        </div>
                                                                        <p class="para-font coupon-extra">
                                                                            Code: EVALY30
                                                                            <a href="javascript:void(0);"
                                                                                class="copy-btn"><i
                                                                                    class="fa-regular fa-copy"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card border-0 shadow-sm bg-light">
                                                            <div class="row p-4 align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div>
                                                                        <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                                                            height="80px" class="rounded-2 bg-white"
                                                                            style="object-fit: cover;" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <span>Upto</span>
                                                                    <h1 class="main-color special-font-box">
                                                                        50% Off
                                                                    </h1>
                                                                </div>
                                                                <div class="col-lg-12 pt-4">
                                                                    <p class="pb-4 text-black">
                                                                        Premium Punjabi collections for men on online
                                                                    </p>
                                                                    <a href="{{ route('store.details','aarong') }}" class="main-color">
                                                                        <small>See all in store</small>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-12 pt-4">
                                                                    <div class="d-flex">
                                                                        <a href="" class="w-100 btn-common-one rounded-3">View</a>
                                                                        <a href=""
                                                                            class="w-100 btn-common-three rounded-3 ms-2">Coupon <i
                                                                                class="fa-solid fa-copy"></i></a>
                                                                    </div>
                                                                    <p class="pt-2 text-center countdown"
                                                                        data-expire-date="August 17, 2024 00:00:00">
                                                                        <span class="main-color">Expire In:</span> <span
                                                                            class="countdown-timer">12 Days</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                            aria-labelledby="profile-tab" tabindex="0">
                                            <div class="row">
                                                <h5 class="text-center">No Offer/Coupon Available</h5>
                                            </div>
                                        </div>
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
    <section>
        <div class="container px-0 pb-70">
            <div class="row gx-4 promotion-container align-items-center">
                <div class="col-lg-12 py-5">
                    <h1 class="promotion-title">Biggest Deals From Oraimo</h1>
                    <p class="text-center">
                        Problems trying to resolve the conflict between <br />
                        the two major realms of Classical physics: Newtonian mechanics
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/product/03.png" class="img-fluid w-100"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pe-2">
                                <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <del>BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                    <div class="pe-4">
                                        <a href="" class="btn-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <circle cx="15" cy="15" r="15" fill="#F15A2D" />
                                                <path
                                                    d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center bg-light py-4 mt-3 product-showcase brand-home-img">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/product/04.png" class="img-fluid w-100"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pe-2">
                                <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <del>BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                    <div class="pe-4">
                                        <a href="" class="btn-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <circle cx="15" cy="15" r="15" fill="#F15A2D" />
                                                <path
                                                    d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-0">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid w-100 middle-banner"
                            src="{{ asset('frontend') }}/assets/img/product/static-banner.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/product/03.png" class="img-fluid w-100"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pe-2">
                                <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <del>BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                    <div class="pe-4">
                                        <a href="" class="btn-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <circle cx="15" cy="15" r="15" fill="#F15A2D" />
                                                <path
                                                    d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center bg-light py-4 mt-3 product-showcase brand-home-img">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/product/04.png" class="img-fluid w-100"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pe-2">
                                <h5>Oraimo Riff 2 Half in-Ear True Wireless Earbuds</h5>
                                <p class="py-4 mb-0 main-color fs-6 fw-bold">Headphone</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <del>BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                    <div class="pe-4">
                                        <a href="" class="btn-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <circle cx="15" cy="15" r="15" fill="#F15A2D" />
                                                <path
                                                    d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                    fill="white" />
                                            </svg>
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
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-space-between align-items-center">
                                        <form class="d-flex w-100" role="search">
                                            <div class="d-flex w-100">
                                                <input class="form-control rounded-pill form-control-sm"
                                                    type="search" placeholder="Search" aria-label="Search" />
                                            </div>
                                            <button class="btn position-relative border-0 bg-transparent coupon-action"
                                                type="submit">
                                                <i class="fa-solid fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
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
        <div class="container pb-70 pt-70 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slick Slider -->
                    <div class="slick-slider-product">
                        <div class="items me-2" style="background-color: #f5f6f8">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-7">
                                    <h4>A community doing good</h4>
                                    <p class="py-3">
                                        Commerce is a global online marketplace, where people
                                    </p>
                                    <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <h6 class="main-color text-center pb-3">25% OFF</h6>
                                        <div class="d-flex justify-content-center text-center">
                                            <img class="img-fluid flat-offer-img"
                                                src="{{ asset('frontend') }}/assets/img/product/sliderproduct1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items me-2" style="background-color: #f5f6f8">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-7">
                                    <h4>A community doing good</h4>
                                    <p class="py-3">
                                        Commerce is a global online marketplace, where people
                                    </p>
                                    <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <h6 class="main-color text-center pb-3">25% OFF</h6>
                                        <div class="d-flex justify-content-center text-center">
                                            <img class="img-fluid flat-offer-img"
                                                src="{{ asset('frontend') }}/assets/img/product/sliderproduct1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items me-2" style="background-color: #f5f6f8">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-7">
                                    <h4>A community doing good</h4>
                                    <p class="py-3">
                                        Commerce is a global online marketplace, where people
                                    </p>
                                    <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <h6 class="main-color text-center pb-3">25% OFF</h6>
                                        <div class="d-flex justify-content-center text-center">
                                            <img class="img-fluid flat-offer-img"
                                                src="{{ asset('frontend') }}/assets/img/product/sliderproduct1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items me-2" style="background-color: #f5f6f8">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-7">
                                    <h4>A community doing good</h4>
                                    <p class="py-3">
                                        Commerce is a global online marketplace, where people
                                    </p>
                                    <a class="btn btn-dark rounded-pill px-5" href="#">See Details</a>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <h6 class="main-color text-center pb-3">25% OFF</h6>
                                        <div class="d-flex justify-content-center text-center">
                                            <img class="img-fluid flat-offer-img"
                                                src="{{ asset('frontend') }}/assets/img/product/sliderproduct1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Slick Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Slider End -->
    <!-- Deal Of The Day -->
    <section>
        <div class="container px-0 pt-70 pb-70">
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
                                <div class="items">
                                    <div class="py-5 d-flex justify-content-center">
                                        <img class="img-fluid rounded-2"
                                            src="{{ asset('frontend') }}/assets/img/deal.png" alt="" />
                                    </div>
                                    <div class="py-3">
                                        <h5 class="text-center">
                                            <span class="fw-bold">২৮%</span> ছাড়ে বই, অতিরিক্ত
                                            ৪% ছাড় অ্যাপ অর্ডারে 'APPUSER' ব্যবহারে (৩০-৩১
                                            মার্চ)
                                        </h5>
                                    </div>
                                    <div class="py-5 d-flex justify-content-center align-items-center">
                                        <a href="" class="btn btn-common-one rounded-pill px-4">See
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
                                            <ul class="countdown-box ps-0 mb-0">
                                                <li>
                                                    <span class="days count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="hours count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="minutes count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="seconds count-items p-2"></span>
                                                </li>
                                            </ul>
                                            <ul class="countdown-box-text ps-0 mb-0">
                                                <li class="pe-1">Day</li>
                                                <li class="pe-2">Hour</li>
                                                <li class="pe-2">Min</li>
                                                <li class="pe-2">Sec</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="py-5 d-flex justify-content-center">
                                        <img class="img-fluid rounded-2"
                                            src="{{ asset('frontend') }}/assets/img/deal.png" alt="" />
                                    </div>
                                    <div class="py-3">
                                        <h5 class="text-center">
                                            <span class="fw-bold">২৮%</span> ছাড়ে বই, অতিরিক্ত
                                            ৪% ছাড় অ্যাপ অর্ডারে 'APPUSER' ব্যবহারে (৩০-৩১
                                            মার্চ)
                                        </h5>
                                    </div>
                                    <div class="py-5 d-flex justify-content-center align-items-center">
                                        <a href="" class="btn btn-common-one rounded-pill px-4">See
                                            Details</a>
                                    </div>
                                    <div class="text-center">
                                        <div>
                                            <h5>
                                                <span class="main-color">Hurry Up!</span> Offers
                                                end in:
                                            </h5>
                                        </div>
                                        <div class="countdown-with-days mt-4">
                                            <ul class="countdown-box ps-0 mb-0">
                                                <li>
                                                    <span class="days count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="hours count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="minutes count-items p-2"></span>
                                                </li>
                                                <li>
                                                    <span class="seconds count-items p-2"></span>
                                                </li>
                                            </ul>
                                            <ul class="countdown-box-text ps-0 mb-0">
                                                <li class="pe-1">Day</li>
                                                <li class="pe-2">Hour</li>
                                                <li class="pe-2">Min</li>
                                                <li class="pe-2">Sec</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Items -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 bg-light product-scroll-show">
                    <!-- Search Box -->
                    <div class="d-flex justify-content-center align-items-center p-3 pb-0">
                        <form class="d-flex w-100" role="search">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-pill p-2" placeholder="Search..."
                                    aria-label="Search..." aria-describedby="basic-addon2" />
                                <div class="input-group-append search-btn">
                                    <button class="btn border-0" type="button">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Search Box -->
                    <div class="row p-3 gx-3 pt-0">
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card deal-card border-0">
                                <div class="card-body border-0 p-4">
                                    <div class="d-flex justify-content-between">
                                        <!-- Counter -->
                                        <div>
                                            <div class="countdown-hms">
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li>
                                                        <span class="hours count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="minutes count-items p-2 me-1"></span>
                                                    </li>
                                                    <li>
                                                        <span class="seconds count-items p-2 me-1"></span>
                                                    </li>
                                                </ul>
                                                <ul class="ps-0 mb-0 d-flex" style="list-style-type: none">
                                                    <li class="ps-1 me-2 pt-0" style="font-size: 12px">
                                                        Hour
                                                    </li>
                                                    <li class="ps-2 me-3 pt-0" style="font-size: 12px">
                                                        Min
                                                    </li>
                                                    <li class="me-3 pt-0" style="font-size: 12px">
                                                        Sec
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Wishlist -->
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Product Image -->
                                    <div class="d-flex justify-content-center align-items-center py-3">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/deal1.png"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="">
                                            <h6 class="mb-0 product-title">
                                                Rovena Riva Series 6 Pcs.
                                            </h6>
                                        </a>
                                        <del class="pt-2">BDT 3350</del>
                                        <h6 class="main-color">BDT 2550</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Of The Day End -->
    <!-- Normal Slider Product Show -->
    <section>
        <div class="container py-5 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slick-slider-normal">
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                        <div class="items">
                            <div>
                                <img src="{{ asset('frontend') }}/assets/img/slider1.png"
                                    class="img-fluid custom-img w-100 rounded-2" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Slider Product Show ENd -->
    <section>
        <div class="container py-5 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1>Big Brands Are Here</h1>
                        <p class="w-lg-50 w-100 pt-3">
                            Problems trying to resolve the conflict between <br />
                            the two major realms of Classical physics: Newtonian
                            mechanics
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid partners">
            <div class="container px-0">
                <div class="slick-slider-partners">
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 20.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 21.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 22.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 23.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 24.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 25.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 26.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 27.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 28.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 29.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 30.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 25.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 26.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 27.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 28.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 29.png"
                            alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 30.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Slider -->
    <section>
        <div class="container px-0 pt-70 pb-70">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slick-slider-footer-slider">
                        <div class="items d-flex justify-content-center align-items-center">
                            <img class="img-fluid w-100"
                                src="{{ asset('frontend') }}/assets/img/Footer Banner (2).png" alt="" />
                        </div>
                        <div class="items d-flex justify-content-center align-items-center">
                            <img class="img-fluid w-100"
                                src="{{ asset('frontend') }}/assets/img/Footer Banner (2).png" alt="" />
                        </div>
                        <div class="items d-flex justify-content-center align-items-center">
                            <img class="img-fluid w-100"
                                src="{{ asset('frontend') }}/assets/img/Footer Banner (2).png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Slider End -->
</x-frontend-app-layout>
