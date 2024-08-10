<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Top Stores -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>Top Stores</h3>
                            <span class="store-devider"></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    City
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Dhaka</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Syhlet</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Rajshahi</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Khulna</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Barishal</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    Area
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Gulshan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Mirpur</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Savar</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="fa-solid fa-filter fs-6"></i>
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Top Stores</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Today Flash Discounts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Big Discount</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Search Store -->
                            <div class="wrapper-store">
                                <div class="search-input-store">
                                    <a href="#" target="_blank" hidden></a>
                                    <input type="text" placeholder="Type to search..." />
                                    <div class="autocom-box">
                                        <!-- here list are inserted from javascript -->
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-1">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/arong-banner.jpg"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/arong-logo.png"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="{{ route('store.details', 'aarong') }}"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <a href="{{ route('store.details', 'aarong') }}">
                                        <div>
                                            <h5>AARONG</h5>
                                            <p>Clothing Store</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Stores -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h3>All Stores</h3>
                        <span class="store-devider"></span>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/arong-banner.jpg"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/arong-logo.png"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="{{ route('store.details', 'aarong') }}"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <a href="{{ route('store.details', 'aarong') }}">
                                        <div>
                                            <h5>AARONG</h5>
                                            <p>Clothing Store</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row my-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-common-one">View More Store <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>I will not close if you click outside of me.</div>
        </div>
    </div>
    <!-- Store Location Modal -->
    <!-- Modal -->
    <div class="modal fade" id="store-Location" tabindex="-1" aria-labelledby="store-LocationLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--primary-color)">
                    <h5 class="modal-title text-white" id="store-LocationLabel">
                       Aarong Store Location
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <iframe class="mb-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.21705146686878!2d90.35831624489104!3d23.76617157961525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a568a70445%3A0x89dff0189e12966d!2sNGEN%20IT%20LTD.!5e0!3m2!1sen!2sbd!4v1720612839750!5m2!1sen!2sbd"
                                width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Slider End -->
</x-frontend-app-layout>
