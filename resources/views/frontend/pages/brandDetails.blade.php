<x-frontend-app-layout :title="'Brand Details || DiscountZShop'">

    <section class="container px-0 mt-3">
        <div class="row">
            <div class="store-hero-slider">
                <div class="regular-banner">
                    <img class="img-fluid w-100 rounded-2" src="{{ asset('storage/'.$brand->banner_image) }}" alt="" />
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
                                <i class="fa-solid fa-location-dot main-color"></i> Shop
                                No 16A Shastri Nagar Main Road Opposite BCM School, Ab
                                Kettleby.
                            </p>
                            <div class="pt-3">
                                <span class="badge fw-normal" style="background-color: var(--primary-color)"><i
                                        class="fa-solid fa-star pe-2"></i>8.5</span>
                                <span class="ps-3">23 Ratings</span>
                                <span class="ps-2"><i class="fa-solid fa-comment main-color pe-2"></i>91
                                    reviews</span>
                            </div>
                        </div>
                        <!-- <div class="d-flex align-items-center">
                        <a href="javascript:void()" class="pe-3 pt-2">
                            <p>
                            <i class="fa-solid fa-heart" id="heart"></i>
                            </p>
                        </a>
                        <a href="" class="btn btn-common-one"
                            ><i class="fa-regular fa-bookmark pe-2"></i>Follow</a
                        >
                        </div> -->
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
                        Cashback from Osahan Deelcoin is REAL cash that you can a)
                        transfer to your Bank A/c or PayTM wallet, or b) use to do a
                        mobile or DTH recharge, or c) redeem as Flipkart/Amazon
                        Vouchers.Cashback from Osahan Deelcoin is REAL cash that you
                        can a) transfer to your Bank A/c or PayTM wallet, or b) use to
                        do a mobile or DTH recharge, or c) redeem as Flipkart/Amazon
                        Vouchers
                    </p>
                    <ul class="pt-3 ps-3 store-about">
                        <li>
                            Upto 30-70% Off on Clothing, Footwear, Accessories & More
                        </li>
                        <li>
                            Valid till<a href="#" class="main-color"> 31st March</a>
                        </li>
                        <li>
                            Upto 30-70% Off on Clothing, Footwear, Accessories & More
                        </li>
                        <li>
                            Valid till<a href="#" class="main-color"> 31st March</a>
                        </li>
                    </ul>
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
                            src="https://img.freepik.com/free-vector/modern-website-banner-with-abstract-orange-shapes_1361-3332.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1722038400&semt=ais_user"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2" style="height: 300px; object-fit: cover; width: 100%"
                            src="https://graphicsfamily.com/wp-content/uploads/edd/2021/01/Furniture-Business-Web-Banner-Template-Free-PSD-scaled.jpg"
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
                        Cashback from Osahan Deelcoin is REAL cash that you can a)
                        transfer to your Bank A/c or PayTM wallet, or b) use to do a
                        mobile or DTH recharge, or c) redeem as Flipkart/Amazon
                        Vouchers.Cashback from Osahan Deelcoin is REAL cash that you
                        can a) transfer to your Bank A/c or PayTM wallet, or b) use to
                        do a mobile or DTH recharge, or c) redeem as Flipkart/Amazon
                        Vouchers
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
                            Cashback from Osahan Deelcoin is REAL cash that you can a)
                            transfer to your Bank A/c or PayTM wallet, or b) use to do a
                            mobile or DTH recharge, or c) redeem as Flipkart/Amazon
                            Vouchers.Cashback from Osahan Deelcoin is REAL cash that you
                            can a) transfer to your Bank A/c or PayTM wallet, or b) use
                            to do a mobile or DTH recharge, or c) redeem as
                            Flipkart/Amazon Vouchers
                        </p>
                    </div>
                    <div class="pt-4">
                        <h6>Our All Store Location</h6>
                        <ul class="pt-3">
                            <li>Ashadgate</li>
                            <li>Mohammadpur</li>
                            <li>Agargaon</li>
                        </ul>
                    </div>
                    <div class="py-2 pt-3">
                        <span><i class="fa-solid fa-phone pe-2 main-color"></i>(+880)
                            1576 614 451</span>
                        <br />
                        <span><i
                                class="fa-solid fa-globe pe-2 main-color"></i>http://127.0.0.1:5500/store-single.html</span>
                        <br />
                        <span><i class="fa-solid fa-envelope pe-2 main-color"></i>info@discountzshop.com</span>
                        <br />
                        <span><i class="fa-solid fa-location-dot pe-2 main-color"></i>Shop No 16A Shastri Nagar Main
                            Road.</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2 px-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.21705146686878!2d90.35831624489104!3d23.76617157961525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a568a70445%3A0x89dff0189e12966d!2sNGEN%20IT%20LTD.!5e0!3m2!1sen!2sbd!4v1720612839750!5m2!1sen!2sbd"
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
                    <h2>Brand Products</h2>
                    <div class="row">
                        <div class="col-lg-12 py-4">
                            <div class="store-popular-offer">
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
            </div>
        </div>
    </section>
</x-frontend-app-layout>
