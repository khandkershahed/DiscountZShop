    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" style="height: 400px; max-height: 100%;"
                src="https://storage.googleapis.com/takesg/79e523d6-e274-428a-a761-b89524aae0b5.webp"
                alt="Khash Foods Vendor" />
        </div>
    </section>
    <!-- Hero End -->
    <section class="mb-5">
        <div class="container rounded-2 p-0" style="margin-top: -60px; position: relative; z-index: 5;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="vendor-logo p-2 rounded-2" style="background-color: #eee; border: 2px solid #f15a2d;">
                        <img class="img-fluid rounded-2 border" src="{{ asset('images/khassfood.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div
                        class="d-flex align-items-center justify-content-end rounded-2 mb-4 mt-0"style="background-color: #eee;">
                        <a href="{{ route('brand.details', ['id' => 'arong']) }}">
                            <div class="vendor-menus {{ Route::is('brand.details') ? 'active' : '' }} rounded-2">
                                <h6>Overview</h6>
                            </div>
                        </a>
                        <a href="{{ route('vendor.stores', ['id' => 'arong']) }}">
                            <div class="vendor-menus {{ Route::is('vendor.stores') ? 'active' : '' }} rounded-2">
                                <h6>Stores</h6>
                            </div>
                        </a>
                        <a href="{{ route('vendor.offers', ['id' => 'arong']) }}">
                            <div class="vendor-menus {{ Route::is('vendor.offers') ? 'active' : '' }} rounded-2">
                                <h6>Offers</h6>
                            </div>
                        </a>
                        {{-- <a href="{{ route('vendor.stores', ['id' => 'arong']) }}">
                            <div class="vendor-menus {{ Route::is('vendor.stores') ? 'active' : '' }} rounded-2">
                                <h6>Stores</h6>
                            </div>
                        </a>
                        <a href="{{ route('vendor.offers', ['id' => 'arong']) }}">
                            <div class="vendor-menus {{ Route::is('vendor.offers') ? 'active' : '' }} rounded-2">
                                <h6>Offers</h6>
                            </div>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    {{-- Empty Column No Need To Add Content --}}
                </div>
            </div>
        </div>
    </section>
