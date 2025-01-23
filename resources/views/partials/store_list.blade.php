<!-- partials/store_list.blade.php -->
@foreach ($latest_stores as $latest_store)
    <div class="col-lg-3">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-0 rounded-2">
                <!-- Store Banner -->
                <div class="main-store-banner">
                    <img class="img-fluid rounded-2" src="{{ !empty(optional($latest_store->brand)->image) ? url('storage/' . optional($latest_store->brand)->image) : asset('images/no-image(random).png') }}" alt="store-banner" />
                </div>
                <!-- Store Logo and Rating -->
                <div class="px-3 pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="store-logo">
                            <img class="img-fluid" src="{{ !empty(optional($latest_store->brand)->logo) ? url('storage/' . optional($latest_store->brand)->logo) : asset('images/no-image(random).png') }}" alt="store-logo" />
                        </div>
                        <div class="store-rating">
                            <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}" class="btn btn-common-one rounded-circle store-btn">
                                <i class="fa-solid fa-store"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Store Info -->
                    <div class="pt-4 d-flex justify-content-between store_title">
                        <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}">
                            <h6>{{ $latest_store->title }}</h6>
                        </a>
                        <div>
                            <button class="btn border-0 p-0 m-0 ps-2">
                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3" title="Store Location" data-bs-toggle="modal" data-bs-target="#store-Location"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

