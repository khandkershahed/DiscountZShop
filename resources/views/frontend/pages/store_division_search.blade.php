@forelse ($latest_stores as $store)
    <div class="col-lg-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0 rounded-2">
                <!-- Store Banner -->
                <div class="main-store-banner">
                    <img class="img-fluid rounded-2"
                        src="{{ !empty($store->image) ? url('storage/' . $store->image) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                        alt="arong-banner.jpg" />
                </div>
                <!-- Store Logo And Rating -->
                <div class="px-3 pb-3">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="store-logo">
                            <img class="img-fluid"
                                src="{{ !empty($store->logo) ? url('storage/' . $store->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                                alt="arong-logo.png" />
                        </div>

                        <div class="store-rating">
                            <a href="{{ route('store.details', $store->slug) }}"
                                class="btn btn-common-one rounded-circle store-btn"><i class="fa-solid fa-store"
                                    aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Store Info -->
                    <div class="pt-4 d-flex justify-content-between">
                        <a href="{{ route('store.details', $store->slug) }}">
                            <div>
                                <h5>{{ $store->name }}</h5>
                                <p>{{ $store->headquarter }}</p>
                            </div>
                        </a>
                        <div>
                            <button class="btn border-0 p-0 m-0 pe-2">
                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3" title="Store Location"
                                    data-bs-toggle="modal" data-bs-target="#store-Location" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                        <span class="bg-danger badge fw-normal">
                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                        </span>
                        <small class="text-sm">
                            Get UpTo <span class="main-color">{{ $store->badge }}</span> Off
                        </small>
                    </div>
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
