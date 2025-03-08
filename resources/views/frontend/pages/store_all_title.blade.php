@forelse ($stores as $store)
    <div class="col-lg-3 col-6 mb-3">
        <div class="border-0 shadow-sm card bg-light offer-boxes">
            <div class="p-4 row align-items-center">
                <div class="col-lg-6 col-4">
                    <div>
                        <img src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                            width="80px" height="80px" class="rounded-2 mobile-offers" style="object-fit: contain;"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-8 text-end">
                    {{-- @if (!empty($store->badge))
                    <h4 class="main-color special-font-box text-end">
                        {{ $store->badge }}</h4>
                @endif --}}
                    <a class="add_to_wishlist" style="cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#store_location_{{ $store->id }}">
                        <i class="fa-solid fa-store fs-5 text-danger"></i>
                    </a>
                </div>

                <div class="pt-4 col-lg-12 offer_title">
                    <a href="{{ route('vendor.stores', $store->slug) }}">
                        <div class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                            <p class="text-black">
                                {{ $store->title }}</p>

                            {{-- <a class="add_to_wishlist" style="cursor: pointer;" data-product_id="{{ $store->id }}"
                                data-tip="Wishlist">
                                <i class="fa-regular fa-heart fs-5 text-danger"></i>
                            </a> --}}

                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- Store Location Modal -->
    <div class="modal fade" id="store_location_{{ $store->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-4" style="background-color: #f15a2d">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Store Location
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <iframe src="{{ $store->map_url }}" width="100%" height="450" frameborder="0"
                                style="border: 0" allowfullscreen="" class="map-store"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3">
        <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}">

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-0 rounded-2">
                    <!-- Store Banner -->
                    <div class="main-store-banner">
                        <img class="img-fluid rounded-2"
                            src="{{ !empty(optional($store->brand)->image) ? url('storage/' . optional($store->brand)->image) : asset('images/no-image(random).png') }}"
                            alt="arong-banner.jpg" />
                    </div>
                    <!-- Store Logo And Rating -->
                    <div class="px-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="store-logo">
                                <img class="img-fluid"
                                    src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : asset('images/no-image(random).png') }}"
                                    alt="arong-logo.png" />
                            </div>
                            <div class="store-rating">
                                <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}"
                                    class="btn btn-common-one rounded-circle store-btn"><i class="fa-solid fa-store"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Store Info -->
                        <div class="pt-4 d-flex justify-content-between store_title">
                            <a href="{{ route('vendor.stores', optional($store->brand)->slug ?? '') }}">
                                <div>
                                    <h6>{{ $store->title }}</h6>
                                </div>
                            </a>
                            <div>
                                <div>
                                    <a href="{{ $store->location }}" class="btn border-0 p-0 m-0 ps-2">
                                        <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                            title="Store Location"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </a>
    </div> --}}
@empty
    <p class="text-center text-danger mt-3">No Store Avaiable</p>
@endforelse
