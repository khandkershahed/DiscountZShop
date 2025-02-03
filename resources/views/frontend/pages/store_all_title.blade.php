@foreach ($stores as $store)
    <div class="col-lg-3">
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
    </div>
@endforeach
