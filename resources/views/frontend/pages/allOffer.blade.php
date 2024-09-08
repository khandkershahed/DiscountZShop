<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
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
                                <select class="form-select" id="custom_select1" name="division"
                                    data-placeholder="Select Division">
                                    <option value="">Select Division</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->name }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <select class="form-select" id="custom_select2" name="city"
                                    data-placeholder="Select City">
                                    <option value="">Select City</option>
                                    @foreach ($citys as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-group pe-2">
                                <select class="form-select" id="custom_select3" name="area"
                                    data-placeholder="Select Area">
                                    <option value="">Select Area</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->name }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Filter Store -->
                            {{-- <div class="btn-group pe-2">
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
                            </div> --}}
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

                <div class="col-lg-3 border py-2 shadow-sm">
                    <h6 class="fw-bold pb-3">All Categories</h6>

                    <div class="bg-light">

                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item w-100" role="presentation">
                                <button class="nav-link custom-offer-tabs border-0 w-100 text-start active"
                                    id="category-all" data-bs-toggle="tab" data-bs-target="#category-all-pane"
                                    type="button" role="tab" aria-controls="category-all-pane"
                                    aria-selected="true">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>All Offers</span>
                                        <span>({{ $offers->count() }})</span>
                                    </div>

                                </button>
                            </li>
                            @foreach ($categorys as $category)
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link custom-offer-tabs border-0 w-100 text-start"
                                        id="category-{{ $category->id }}" data-bs-toggle="tab"
                                        data-bs-target="#category-{{ $category->id }}-pane" type="button"
                                        role="tab" aria-controls="category-{{ $category->id }}-pane"
                                        aria-selected="false">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>{{ $category->name }}</span>
                                            <span>({{ $category->offers_count }})</span>
                                        </div>
                                    </button>
                                </li>
                            @endforeach

                            {{-- <li class="nav-item w-100" role="presentation">
                                <button class="nav-link custom-offer-tabs border-0 w-100 text-start" id="beauty"
                                    data-bs-toggle="tab" data-bs-target="#beauty-pane" type="button" role="tab"
                                    aria-controls="beauty-pane" aria-selected="false">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Fashion</span>
                                        <span>(1)</span>
                                    </div>
                                </button>
                            </li> --}}

                        </ul>
                    </div>

                    {{-- <h6 class="fw-bold pt-3 pb-2">Discount%</h6>

                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="range" class="form-range" id="customRange1" />
                            </div>
                        </div>
                    </div> --}}

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

                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="beauty-pane" role="tabpanel"
                            aria-labelledby="beauty" tabindex="0">
                            <div class="row">
                                @foreach ($offers as $offer)
                                    <div class="col-lg-4 mt-4">
                                        <div class="card border-0 shadow-sm bg-light">
                                            <div class="row p-4 align-items-center">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                                            width="80px" height="80px" class="rounded-2 bg-white"
                                                            style="object-fit: cover;" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">

                                                    <h1 class="main-color special-font-box">
                                                        {{ $offer->badge }}
                                                    </h1>
                                                </div>
                                                <div class="col-lg-12 pt-4">
                                                    <p class="pb-4 text-black">
                                                        {{ $offer->name }}
                                                    </p>
                                                    <a href="{{ route('offer.details', $offer->slug) }}"
                                                        class="main-color">
                                                        <small>See all</small>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 pt-4">
                                                    <div class="d-flex">
                                                        <a href="{{ route('offer.details', $offer->slug) }}"
                                                            class="main-color">
                                                            <small>View</small>
                                                        </a>
                                                        @if (!empty($offer->coupon_code))
                                                            <a href="{{ $offer->coupon_code }}"
                                                                class="w-100 btn-common-three rounded-3 ms-2">Coupon <i
                                                                    class="fa-solid fa-copy"></i></a>
                                                        @endif
                                                    </div>
                                                    <p class="pt-2 text-center countdown"
                                                        data-expire-date="{{ $offer->expiry_date }}">
                                                        <span class="main-color">Expire In:</span>
                                                        <span class="countdown-timer"> Days</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @foreach ($categorys as $category)
                            <div class="tab-pane fade" id="category-{{ $category->id }}-pane" role="tabpanel"
                                aria-labelledby="category-{{ $category->id }}" tabindex="0">
                                @php
                                    $cateWiseOffers = App\Models\Offer::where('category_id', $category->id)
                                        ->orderBy('name', 'ASC')
                                        ->get();
                                @endphp
                                <div class="row">
                                    @forelse ($cateWiseOffers as $cateWiseOffer)
                                        <div class="col-lg-4 mt-4">
                                            <div class="card border-0 shadow-sm bg-light">
                                                <div class="row p-4 align-items-center">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <img src="{{ !empty($cateWiseOffer->logo) ? url('storage/' . $cateWiseOffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($cateWiseOffer->name) }}"
                                                                width="80px" height="80px"
                                                                class="rounded-2 bg-white" style="object-fit: cover;"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h1 class="main-color special-font-box">
                                                            {{ $cateWiseOffer->badge }}
                                                        </h1>
                                                    </div>
                                                    <div class="col-lg-12 pt-4">
                                                        <p class="pb-4 text-black">
                                                            {{ $cateWiseOffer->name }}
                                                        </p>
                                                        <a href="{{ route('offer.details', $cateWiseOffer->slug) }}"
                                                            class="main-color">
                                                            <small>See all</small>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-12 pt-4">
                                                        <div class="d-flex">
                                                            <a href="{{ route('offer.details', $cateWiseOffer->slug) }}"
                                                                class="w-100 btn-common-one rounded-3">View</a>
                                                            @if (!empty($cateWiseOffer->coupon_code))
                                                                <a href="{{ $cateWiseOffer->coupon_code }}"
                                                                    class="w-100 btn-common-three rounded-3 ms-2">Coupon
                                                                    <i class="fa-solid fa-copy"></i></a>
                                                            @endif
                                                        </div>

                                                        <p class="pt-2 text-center countdown"
                                                            data-expire-date="{{ $cateWiseOffer->expiry_date }}">
                                                            <span class="main-color">Expire In:</span>
                                                            <span class="countdown-timer"> Days</span>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <p>No Offer Avaiable</p>
                                    @endforelse

                                </div>
                            </div>
                        @endforeach
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
