@forelse ($latest_stores as $store_search)
    <div class="col-lg-3">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-0 rounded-2">
                <!-- Store Banner -->
                <div class="main-store-banner">
                    <img class="img-fluid rounded-2"
                        src="{{ !empty(optional($store_search->brand)->image) ? url('storage/' . optional($store_search->brand)->image) : asset('images/no-image(random).png') }}"
                        alt="arong-banner.jpg" />
                </div>
                <!-- Store Logo And Rating -->
                <div class="px-3 pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="store-logo">
                            <img class="img-fluid"
                                src="{{ !empty(optional($store_search->brand)->logo) ? url('storage/' . optional($store_search->brand)->logo) : asset('images/no-image(random).png') }}"
                                alt="arong-logo.png" />
                        </div>
                        <div class="store-rating">
                            <a href="{{ route('vendor.stores', optional($store_search->brand)->slug) }}"
                                class="btn btn-common-one rounded-circle store-btn"><i class="fa-solid fa-store"
                                    aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Store Info -->
                    <div class="pt-4 d-flex justify-content-between store_title">
                        <a href="{{ route('vendor.stores', optional($store_search->brand)->slug) }}">
                            <div>
                                <h5 style="width: 98%;margin-bottom: 0.75rem;">{{ $store_search->title }}</h5>
                                <p>{{ $store_search->headquarter }}</p>
                            </div>
                        </a>
                        <div>
                            <button class="btn border-0 p-0 m-0 ps-2">
                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3" title="Store Location"
                                    data-bs-toggle="modal" data-bs-target="#store-Location" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                    <span class="bg-danger badge fw-normal">
                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                    </span>
                    <small class="text-sm">
                        Get UpTo <span class="main-color">{{ $store_search->badge }}</span> Off
                    </small>
                </div> --}}
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Store available right now.</h5>
@endforelse
