<x-frontend-app-layout :title="'All Store || DiscountZShop'">
    <!-- Hero Section -->
    <section class="container px-0 mt-3">
        <div class="row">
            <div class="">

                <div class="regular-banner">
                    <img class="img-fluid w-100 rounded-2"
                        src="{{ !empty($store->banner_image) ? url('storage/' . $store->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                        alt="" />
                </div>

                {{-- <div class="regular-banner">
                    <img class="img-fluid w-100 rounded-2" src="{{ !empty($store->banner_image) ? url('storage/' . $store->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}" alt="" />
                </div> --}}

            </div>
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="pb-2">{{ $store->name }}</h2>
                            <p>
                                <i class="fa-solid fa-location-dot main-color"></i> {{ $store->headquarter }}
                            </p>

                            {{-- <div class="pt-3">
                                <span class="badge fw-normal" style="background-color: var(--primary-color)"><i
                                        class="fa-solid fa-star pe-2"></i>8.5</span>

                                <span class="ps-3">23 Ratings</span>

                                <span class="ps-2"><i class="fa-solid fa-comment main-color pe-2"></i>91
                                    reviews</span>
                            </div> --}}
                        </div>
                        {{-- <div class="d-flex align-items-center">
                            <a href="javascript:void()" class="pe-3 pt-2">
                                <p>
                                    <i class="fa-solid fa-heart" id="heart"></i>
                                </p>
                            </a>
                            <a href="" class="btn btn-common-one"><i
                                    class="fa-regular fa-bookmark pe-2"></i>Follow</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- store details -->
    <section style="background-color: #f9f9f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="store-single pt-3">
                        <li data-target="about" class="active">About</li>
                        <li data-target="offers">Offers</li>
                        <li data-target="location">Location</li>
                        <li data-target="popular-discount">Description</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- store details End -->
    <section id="about">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="">About</h3>
                    <p class="pt-4" style="text-align: justify">
                        {!! $store->about !!}
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2"
                            src="{{ !empty($store->middle_banner_left) ? url('storage/' . $store->middle_banner_left) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2"
                            src="{{ !empty($store->middle_banner_right) ? url('storage/' . $store->middle_banner_right) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="offers">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Offers Description</h2>
                    <p class="pt-4" style="text-align: justify">
                        {!! $store->offer_description !!}
                    </p>
                </div>
            </div>

            {{-- <div class="row">

                <div class="col-lg-12 py-4">
                    <div class="store-offers">
                        <div class="card border-0 shadow-sm bg-light">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                            height="80px" class="rounded-2 bg-white" style="object-fit: cover;"
                                            alt="" />
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
                                    <a href="{{ route('store.details', 'aarong') }}" class="main-color">
                                        <small>See all in store</small>
                                    </a>
                                </div>
                                <div class="col-lg-12 pt-4">
                                    <div class="d-flex">
                                        <a href="" class="w-100 btn-common-one rounded-3">View</a>
                                        <a href="" class="w-100 btn-common-three rounded-3 ms-2">Coupon <i
                                                class="fa-solid fa-copy"></i></a>
                                    </div>
                                    <p class="pt-2 text-center countdown" data-expire-date="August 17, 2024 00:00:00">
                                        <span class="main-color">Expire In:</span> <span class="countdown-timer">12
                                            Days</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>
    </section>
    <section id="location">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Location</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <p class="pt-4" style="text-align: justify">
                            {!! $store->location !!}
                        </p>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2 px-3">
                            <iframe src="{{ $store->map_url }}" width="100%" height="450" frameborder="0"
                                style="border: 0" allowfullscreen="" class="map-store"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="popular-discount">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Description</h2>
                    <div class="row">
                        <div class="col-lg-12 py-4">
                            <p>{!! $store->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
