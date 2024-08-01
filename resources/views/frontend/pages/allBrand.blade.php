<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="{{!empty(optional($page_banner)->image) && file_exists(public_path('storage/'.optional($page_banner)->image)) ? asset('storage/'.optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name)}}" />
        </div>
    </section>
    <!-- Brands All -->
    <section>
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1>Discover Our Esteemed Brands</h1>
                        <p class="w-lg-50 w-100 pt-3">
                            Exploring solutions to bridge the gap between the
                            established principles of Classical physics: Newtonian
                            mechanics.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row py-5 pb-0">
                <div class="col-lg-12 pe-0 pb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>All Stores</h3>
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
                                    style="position: absolute;inset: 0px auto auto 0px;margin: 0px;transform: translate(0px, 33px);">
                                    <li>
                                        <a class="dropdown-item" href="#">Dhaka</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Syhlet</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Rongpur</a>
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
                                    style="position: absolute;inset: 0px auto auto 0px;margin: 0px;transform: translate(0px, 33px);">
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
                                    <i class="fa-solid fa-filter fs-6" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="position: absolute;inset: 0px auto auto 0px;margin: 0px;transform: translate(0px, 33px);">
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
                                    <a href="#" target="_blank" hidden=""></a>
                                    <input type="text" placeholder="Type to search..." />
                                    <div class="autocom-box">
                                        <!-- here list are inserted from javascript -->
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col">
                    <div class="row bg-light">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <p class="mb-0 py-2 main-color">Foods</p>
                                <span class="store-devider"></span>
                            </div>
                            {{-- <div>
                                <div class="pt-1">
                                    <span class="badge text-end rounded-0 store-tags">
                                        <span>30%</span>
                                    </span>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-12">
                            <h5 class="text-center text-warning">No Brand is available right now.</h5>
                        </div>
                        {{-- <div class="col-lg-4 mb-3 mt-2">
                            <a href="">
                                <div class="card shadow-sm brands-card">
                                    <div class="card-body p-0">
                                        <div class="brands-logo">
                                            <img class="img-fluid rounded-3" src="{{ asset('frontend') }}/assets/img/Brands/logo1.webp"
                                                alt="Brand Logo" title="Brand Logo" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col">
                    <div class="row bg-light">
                        <div class="d-flex align-items-center">
                            <p class="mb-0 py-2 main-color">Fashions</p>
                            <span class="store-devider"></span>
                        </div>
                        <div class="col-lg-4 mb-3 mt-2">
                            <a href="{{ route('brand.details','aarong') }}">
                                <div class="card shadow-sm brands-card">
                                    <div class="card-body p-0">
                                        <div class="brands-logo">
                                            <img class="img-fluid rounded-3" src="{{ asset('frontend') }}/assets/img/Brands/logo4.png"
                                                alt="Brand Logo" title="Brand Logo" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brands All End -->
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
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 20.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 21.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 22.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 23.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 24.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 25.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 26.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 27.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 28.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 29.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 30.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 25.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 26.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 27.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 28.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 29.png" alt="" />
                    </div>
                    <div class="items d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/partner/Rectangle 30.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
