<x-frontend-app-layout :title="'Offers || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 pe-0">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>All Offers</h3>
                            <span class="store-devider"></span>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Search Store -->
                            <div class="wrapper-store">
                                <div class="search-input-store">
                                    <input type="text" id="serviceSearch" name=""
                                        placeholder="Type to search...">
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
            <div class="row servicesContainer divisionContainer">
                @foreach (optional($brand)->offers as $offer)
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 shadow-sm bg-light">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                            alt=""
                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if (!empty($offer->badge))
                                        {{-- <span>Upto</span> --}}
                                        <h3 class="main-color special-font-box text-end">{{ $offer->badge }}
                                        </h3>
                                    @endif
                                </div>
                                <div class="col-lg-12 pt-4 offer_title">
                                    <p class="pb-4 text-black">{{ $offer->name }}</p>
                                    {{-- <a href="{{ route('offer.details', $offer->slug) }}"
                                    class="main-color">
                                    <small>See All In Store</small>
                                </a> --}}
                                </div>
                                <div class="col-lg-12 pt-4">
                                    <div class="d-flex">
                                        <a href="{{ route('offer.details', $offer->slug) }}"
                                            class="w-100 btn-common-one rounded-3">
                                            <small>View</small>
                                        </a>
                                        @if (!empty($offer->coupon_code))
                                            <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                                onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                Coupon <i class="fa-solid fa-copy"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                                        <span class="main-color">Expire In:</span>
                                        <span class="countdown-timer"> Days</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Pagination Of The Data --}}
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center pb-4 pt-2">
                        <a href="javascript:void(0)" class="btn-common-one rounded-3 ">
                            <small>Show More</small>
                        </a>
                    </div>
                    {{-- <div id="wrapper" class="pb-4 pt-2 ">
                        <ul id="pagination">
                            <li><a class="" href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
