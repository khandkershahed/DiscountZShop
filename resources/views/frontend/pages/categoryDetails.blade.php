<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="{{!empty(optional($page_banner)->image) && file_exists(public_path('storage/'.optional($page_banner)->image)) ? asset('storage/'.optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name)}}" />
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container mb-5">
            <div class="row py-5 pb-2">
                <div class="col-lg-12 pe-0">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>All Offers</h3>
                            <span class="store-devider"></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <select class="form-control select btn-common-three" name="" id="">
                                    <option value="" selected>Dhaka</option>
                                    <option value="">Khulna</option>
                                    <option value="">RajShahi</option>
                                </select>

                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <select class="form-control btn-common-three" name="" id="">
                                    <option value="" selected>No Area Available</option>
                                </select>

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
            <div class="row">
                <div class="col-lg-2 border py-2 shadow-sm">
                    <h6 class="fw-bold pb-3">All Categories</h6>
                    <div class="bg-light">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item w-100" role="presentation">
                                <button class="nav-link custom-offer-tabs border-0 w-100 text-start"
                                    id="all-category" data-bs-toggle="tab" data-bs-target="#all-category-pane"
                                    type="button" role="tab" aria-controls="all-category-pane"
                                    aria-selected="false">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>All Categories</span>
                                        <span>(1)</span>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item w-100" role="presentation">
                                <button class="nav-link custom-offer-tabs border-0 w-100 text-start active" id="beauty"
                                    data-bs-toggle="tab" data-bs-target="#beauty-pane" type="button" role="tab"
                                    aria-controls="beauty-pane" aria-selected="true">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Fashion</span>
                                        <span>(1)</span>
                                    </div>
                                </button>
                            </li>

                        </ul>
                    </div>
                    {{-- <h6 class="fw-bold pt-5 pb-2">Extra Category</h6>
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Accessories
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked2" />
                                    <label class="form-check-label" for="flexCheckChecked2">
                                        Beauty & Fitness
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked3" />
                                    <label class="form-check-label" for="flexCheckChecked3">
                                        Watches
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <h6 class="fw-bold pt-3 pb-2">Discount%</h6>
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="range" class="form-range" id="customRange1" />
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="card overlay-card rounded-2"
                            style="background-image: url(https://htmlbeans.com/html/coupon/images/img39.jpg);">
                            <div class="card-body text-center">
                                <div>
                                    <p>
                                        <i class="fa-solid fa-microphone text-white fw-3"></i>
                                    </p>
                                    <h6 class="pt-3">SUBMIT YOUR COUPON</h6>
                                    <a href="javascript:void(0)" class="btn-common-one mt-2">All Coupon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="all-category-pane" role="tabpanel"
                            aria-labelledby="all-category" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 mt-4">
                                    <div class="card border-0 shadow-sm bg-light">
                                        <div class="row p-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div>
                                                    <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                                        height="80px" class="rounded-2"
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
                                                <a href="" class="main-color">
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
                        <div class="tab-pane fade show active" id="beauty-pane" role="tabpanel" aria-labelledby="beauty"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 mt-4">
                                    <div class="card border-0 shadow-sm bg-light">
                                        <div class="row p-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div>
                                                    <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                                        height="80px" class="rounded-2"
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
                                                <a href="" class="main-color">
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
                                                    <span class="main-color">Expire :</span> <span
                                                        class="countdown-timer"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <!-- <a href="" class="btn-common-three">View More</a> -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</x-frontend-app-layout>
