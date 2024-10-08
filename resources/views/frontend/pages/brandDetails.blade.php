<x-frontend-app-layout :title="'Brand Details || DiscountZShop'">

    <section class="container px-0 mt-3">
        <div class="row">
            <div class="store-hero-slider">
                <div class="regular-banner">
                    <img class="img-fluid w-100 rounded-2" src="{{ asset('storage/' . $brand->banner_image) }}"
                        alt="" />
                </div>
                {{-- <div class="regular-banner">
                    <img class="img-fluid w-100 rounded-2" src="{{ asset('frontend') }}/assets/img/store/aarong2.webp" alt="" />
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <h2 class="pb-2">{{ $brand->name }}</h2>
                            {{-- <h2 class="pb-2">Arrong Exclusive Showroom Store</h2> --}}
                            <p>
                                <i class="fa-solid fa-location-dot main-color"></i> {{ $brand->headquarter }}
                            </p>

                        </div>

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
                    <ul class="brand-single pt-3 d-flex justify-content-center">
                        <li data-target="about">About</li>
                        <li data-target="popular-discount">Brand Products</li>
                        <li data-target="offers">Recent Offers</li>
                        <li data-target="location">Location</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- store details End -->
    <section>
        <div class="container py-4" id="about">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="">About</h3>
                    <p class="pt-4" style="text-align: justify">
                        {!! $brand->about !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="popular-discount">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2" style="height: 300px; object-fit: cover; width: 100%"
                            src="{{ asset('storage/' . $brand->middle_banner_left) }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2" style="height: 300px; object-fit: cover; width: 100%"
                            src="{{ asset('storage/' . $brand->middle_banner_right) }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-4" id="offers">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Recent Offers</h2>
                    <p class="pt-4" style="text-align: justify">
                        {!! $brand->offer_description !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 py-4">
                    <div class="store-offers">
                        <div class="card border-0 shadow-sm bg-light">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                            height="80px" class="rounded-2" style="object-fit: cover;"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span>Upto</span>
                                    <h1 class="main-color special-font-box">
                                        {{ $brand->badge }}
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
            </div>
        </div>
    </section>

    <section>
        <div class="container py-4" id="location">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Location</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <p class="pt-4" style="text-align: justify">
                            {!! $brand->location !!}
                        </p>
                    </div>


                </div>

                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2 px-3">
                            <iframe
                                src="{{ $brand->map_url }}"
                                width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen=""
                                class="map-store"></iframe>
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
                            <p>{!! $brand->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
