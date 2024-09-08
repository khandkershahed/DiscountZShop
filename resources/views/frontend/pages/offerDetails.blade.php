<x-frontend-app-layout :title="'Offer Details || DiscountZShop'">

    <section>
        <div class="container py-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty($offerDetails->image) ? url('storage/' . $offerDetails->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDetails->name) }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <h1 class="pb-3 main-color">{{ $offerDetails->badge }}% Off</h1>
                        <h4>{{ $offerDetails->name }}</h4>
                        <div class="d-flex align-items-center pt-3">
                            <p>Price:</p>
                            <h6 class="ps-2 main-color">{{ $offerDetails->price }}</h6>
                        </div>
                        <hr />
                        <p class="pt-2">
                            {!! $offerDetails->short_description !!}
                        </p>
                        {{-- <div class="d-flex align-items-center pt-3">
                            <p>Available:</p>
                            <h6 class="ps-2 main-color">L'Oreal All Store</h6>
                        </div> --}}
                        <p class="pt-2 countdown" data-expire-date="{{ $offerDetails->expiry_date }}">
                            <span class="text-muted">Expire :</span>
                            <span class="countdown-timer main-color"></span>
                        </p>
                        <div class="pt-4">
                            <button href="" class="btn btn-common-one">
                                Add To Wishlist <i class="fa-solid fa-heart ps-3"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="container py-5 pt-0">
            <!-- Share Row -->
            <hr />
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <div>
                            <span class="p-3 text-white me-3" style="background-color: var(--primary-color)"><i
                                    class="fa-solid fa-tag fa-fw"></i></span>
                        </div>
                        <div>
                            <a href=""><span class="main-color">Pants</span></a>,
                            <a href=""><span class="main-color">Women's Clothing</span></a>, <a
                                href=""><span class="main-color">Punjabi</span></a>, <a href=""><span
                                    class="main-color">Shoes</span></a>, <a href=""><span
                                    class="main-color">Watch</span></a>, <a href=""><span
                                    class="main-color">Bag</span></a>, <a href=""><span
                                    class="main-color">Pants</span></a>, <a href=""><span
                                    class="main-color">Pants</span></a>,
                            <a href=""><span class="main-color">Pants</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-common-three me-3 text-white" style="background-color: #4267b2">
                            <i class="fa-brands fa-facebook-f"></i> Facebook
                        </button>
                        <button class="btn btn-common-three me-3 text-white border-0"
                            style="
                        background: linear-gradient(
                            to right,
                            #833ab4,
                            #fd1d1d,
                            #fcaf45,
                            #f7b732
                        );
                    ">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </button>
                        <button class="btn btn-common-three me-3 text-white" style="background-color: #000000">
                            <i class="fa-brands fa-x-twitter"></i>Twitter
                        </button>
                        <button class="btn btn-common-three me-3 text-white"
                            style="
                        background: linear-gradient(to right, #ff0000, #cc0000);
                    ">
                            <i class="fa-brands fa-youtube"></i> YouTube
                        </button>
                    </div>
                </div>
            </div>
            <hr />
            <!-- Share Row End -->
        </div>
    </section> --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <h3 class="pb-3">Descriptions</h3>
                        <p>
                            {!! $offerDetails->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Smiliar Offer  --}}

    {{-- <section>
        <div class="container py-4 pt-0">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Similar Offers</h2>
                    <div class="row">
                        <div class="col-lg-12 py-4">
                            <div class="store-popular-offer">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-0 rounded-2">
                                        <!-- Store Banner -->
                                        <div class="main-store-banner">
                                            <img class="img-fluid rounded-2" src="./assets/img/store/arong-banner.jpg"
                                                alt="arong-banner.jpg" />
                                        </div>
                                        <!-- Store Logo And Rating -->
                                        <div class="px-3 pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="store-logo">
                                                    <img class="img-fluid" src="./assets/img/store/arong-logo.png"
                                                        alt="arong-logo.png" />
                                                </div>
                                                <div class="store-rating">
                                                    <span class="badge fw-normal"><i
                                                            class="fa-solid fa-star pe-2"></i>8.5</span>
                                                </div>
                                            </div>
                                            <!-- Store Info -->
                                            <div class="pt-4 d-flex justify-content-between">
                                                <div>
                                                    <h5>AARONG</h5>
                                                    <p>Clothing Store</p>
                                                </div>
                                                <div>
                                                    <a href="store-single.html"
                                                        class="btn btn-common-one rounded-circle store-btn"><i
                                                            class="fa-solid fa-store"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                                <span class="bg-danger badge fw-normal">
                                                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                                                </span>
                                                <small class="text-sm">
                                                    Get UpTo
                                                    <span class="main-color">50%</span> Off<a href=""><i
                                                            class="fa-solid fa-location-dot ps-1 main-color"></i></a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-0 rounded-2">
                                        <!-- Store Banner -->
                                        <div class="main-store-banner">
                                            <img class="img-fluid rounded-2" src="./assets/img/store/arong-banner.jpg"
                                                alt="arong-banner.jpg" />
                                        </div>
                                        <!-- Store Logo And Rating -->
                                        <div class="px-3 pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="store-logo">
                                                    <img class="img-fluid" src="./assets/img/store/arong-logo.png"
                                                        alt="arong-logo.png" />
                                                </div>
                                                <div class="store-rating">
                                                    <span class="badge fw-normal"><i
                                                            class="fa-solid fa-star pe-2"></i>8.5</span>
                                                </div>
                                            </div>
                                            <!-- Store Info -->
                                            <div class="pt-4 d-flex justify-content-between">
                                                <div>
                                                    <h5>AARONG</h5>
                                                    <p>Clothing Store</p>
                                                </div>
                                                <div>
                                                    <a href="store-single.html"
                                                        class="btn btn-common-one rounded-circle store-btn"><i
                                                            class="fa-solid fa-store"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                                <span class="bg-danger badge fw-normal">
                                                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                                                </span>
                                                <small class="text-sm">
                                                    Get UpTo
                                                    <span class="main-color">50%</span> Off<a href=""><i
                                                            class="fa-solid fa-location-dot ps-1 main-color"></i></a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-0 rounded-2">
                                        <!-- Store Banner -->
                                        <div class="main-store-banner">
                                            <img class="img-fluid rounded-2" src="./assets/img/store/arong-banner.jpg"
                                                alt="arong-banner.jpg" />
                                        </div>
                                        <!-- Store Logo And Rating -->
                                        <div class="px-3 pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="store-logo">
                                                    <img class="img-fluid" src="./assets/img/store/arong-logo.png"
                                                        alt="arong-logo.png" />
                                                </div>
                                                <div class="store-rating">
                                                    <span class="badge fw-normal"><i
                                                            class="fa-solid fa-star pe-2"></i>8.5</span>
                                                </div>
                                            </div>
                                            <!-- Store Info -->
                                            <div class="pt-4 d-flex justify-content-between">
                                                <div>
                                                    <h5>AARONG</h5>
                                                    <p>Clothing Store</p>
                                                </div>
                                                <div>
                                                    <a href="store-single.html"
                                                        class="btn btn-common-one rounded-circle store-btn"><i
                                                            class="fa-solid fa-store"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                                <span class="bg-danger badge fw-normal">
                                                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                                                </span>
                                                <small class="text-sm">
                                                    Get UpTo
                                                    <span class="main-color">50%</span> Off<a href=""><i
                                                            class="fa-solid fa-location-dot ps-1 main-color"></i></a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-0 rounded-2">
                                        <!-- Store Banner -->
                                        <div class="main-store-banner">
                                            <img class="img-fluid rounded-2" src="./assets/img/store/arong-banner.jpg"
                                                alt="arong-banner.jpg" />
                                        </div>
                                        <!-- Store Logo And Rating -->
                                        <div class="px-3 pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="store-logo">
                                                    <img class="img-fluid" src="./assets/img/store/arong-logo.png"
                                                        alt="arong-logo.png" />
                                                </div>
                                                <div class="store-rating">
                                                    <span class="badge fw-normal"><i
                                                            class="fa-solid fa-star pe-2"></i>8.5</span>
                                                </div>
                                            </div>
                                            <!-- Store Info -->
                                            <div class="pt-4 d-flex justify-content-between">
                                                <div>
                                                    <h5>AARONG</h5>
                                                    <p>Clothing Store</p>
                                                </div>
                                                <div>
                                                    <a href="store-single.html"
                                                        class="btn btn-common-one rounded-circle store-btn"><i
                                                            class="fa-solid fa-store"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                                <span class="bg-danger badge fw-normal">
                                                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                                                </span>
                                                <small class="text-sm">
                                                    Get UpTo
                                                    <span class="main-color">50%</span> Off<a href=""><i
                                                            class="fa-solid fa-location-dot ps-1 main-color"></i></a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-0 rounded-2">
                                        <!-- Store Banner -->
                                        <div class="main-store-banner">
                                            <img class="img-fluid rounded-2" src="./assets/img/store/arong-banner.jpg"
                                                alt="arong-banner.jpg" />
                                        </div>
                                        <!-- Store Logo And Rating -->
                                        <div class="px-3 pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="store-logo">
                                                    <img class="img-fluid" src="./assets/img/store/arong-logo.png"
                                                        alt="arong-logo.png" />
                                                </div>
                                                <div class="store-rating">
                                                    <span class="badge fw-normal"><i
                                                            class="fa-solid fa-star pe-2"></i>8.5</span>
                                                </div>
                                            </div>
                                            <!-- Store Info -->
                                            <div class="pt-4 d-flex justify-content-between">
                                                <div>
                                                    <h5>AARONG</h5>
                                                    <p>Clothing Store</p>
                                                </div>
                                                <div>
                                                    <a href="store-single.html"
                                                        class="btn btn-common-one rounded-circle store-btn"><i
                                                            class="fa-solid fa-store"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                                <span class="bg-danger badge fw-normal">
                                                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                                                </span>
                                                <small class="text-sm">
                                                    Get UpTo
                                                    <span class="main-color">50%</span> Off<a href=""><i
                                                            class="fa-solid fa-location-dot ps-1 main-color"></i></a>
                                                </small>
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
    </section> --}}

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-3">Add a review</h3>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Jhone Doue">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-common-one" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</x-frontend-app-layout>
