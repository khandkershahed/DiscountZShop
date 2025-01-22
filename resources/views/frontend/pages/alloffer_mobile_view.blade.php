<div class="mobile-homepage" style="margin-top: 4.6rem;margin-bottom: 8rem;">
    <div class="row p-3">
        <div class="col-lg-12">
            <div class="d-flex align-items-center">
                <!-- Filter Store -->
                <div class="btn-group pe-2 w-50">
                    <select class="form-select cust-select" id="custom_select3" name="area_id"
                        data-placeholder="Select Area">
                        <option value="">Select Area</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Search Store -->
                <div class="wrapper-store w-50">
                    <div class="search-input-store">
                        <input type="text" id="serviceSearch" name="" style="height:45px;"
                            placeholder="Type to search..." />

                        <div class="icon" style="height: 45px; width: 30px; text-align: center; line-height: 43px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
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
    <div class="row px-3">
        <div class="col-lg-12">
            <div class="row servicesContainer divisionContainer mt-0" id="servicesContainer">
                @foreach ($offers as $offer)
                    <div class="col-6 mb-4 pe-2">
                        <div class="card border-0 shadow-sm offer-boxes" style="background: #FEF5F2;">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                            alt=""
                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                    </div>
                                </div>
                                <div class="px-4">
                                    <div class="col-lg-6">
                                        <div class="shop-heart">
                                            {{-- Wishlist --}}
                                            <a type="submit" class="add_to_wishlist" style="cursor: pointer;"
                                                data-product_id="{{ $offer->id }}" data-tip="Wishlist">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-4 offer_title">
                                        <p class="text-black">{{ $offer->name }}</p>
                                        @if (!empty($offer->badge))
                                            <h4 class="main-color special-font-box">
                                                {{ $offer->badge }}
                                            </h4>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 pt-4 pb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <a href="{{ route('offer.details', $offer->slug) }}"
                                                    class="btn-common-one btn-sm rounded-0 py-1 mfs">
                                                    <small>View</small>
                                                </a>
                                                @if (!empty($offer->coupon_code))
                                                    <a href="javascript:void(0);"
                                                        class="btn-common-three rounded-3 ms-2 mfs"
                                                        onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                        Coupon <i class="fa-solid fa-copy"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <p class="text-end countdown mfs"
                                                data-expire-date="{{ $offer->expiry_date }}">
                                                <span class="main-color"><i class="fa-solid fa-clock"></i></span>
                                                <span class="countdown-timer"> Days</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
