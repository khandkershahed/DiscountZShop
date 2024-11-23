    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" {{-- src="{{ asset('storage/' . $brand->banner_image) }}" --}}
                src="{{ !empty(optional($brand)->banner_image) && file_exists(public_path('storage/' . optional($brand)->banner_image)) ? asset('storage/' . optional($brand)->banner_image) : asset('images/banner-demo.png') }}"
                alt="Khash Foods Vendor" />
        </div>
    </section>
    <!-- Hero End -->
    <section class="mb-5">
        <div class="container rounded-2 p-0" style="margin-top: -60px; position: relative; z-index: 5;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="vendor-logo p-2 rounded-2" style="background-color: #eee; border: 2px solid #f15a2d;">
                        <img class="img-fluid rounded-2 border"
                            src="{{ !empty(optional($brand)->logo) && file_exists(public_path('storage/' . optional($brand)->logo)) ? asset('storage/' . optional($brand)->logo) : asset('images/no_icon.png') }}"
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
                        class="d-flex align-items-center justify-content-center rounded-2 mb-4 mt-0" style="background-color: #eee;">
                        <a href="{{ route('brand.details', optional($brand)->slug) }}">
                            <div class="vendor-menus {{ Route::is('brand.details') ? 'active' : '' }} rounded-2">
                                <h6>Overview</h6>
                            </div>
                        </a>
                        @if (optional($brand)->stores->count() > 0)
                            <a href="{{ route('vendor.stores', optional($brand)->slug) }}">
                                <div class="vendor-menus {{ Route::is('vendor.stores') ? 'active' : '' }} rounded-2">
                                    <h6>Stores</h6>
                                </div>
                            </a>
                        @endif
                        @if (optional($brand)->offers->count() > 0)
                            <a href="{{ route('vendor.offers', optional($brand)->slug) }}">
                                <div class="vendor-menus {{ Route::is(['vendor.offers','offer.details']) ? 'active' : '' }} rounded-2">
                                    <h6>Offers</h6>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    {{-- Empty Column No Need To Add Content --}}
                </div>
            </div>
        </div>
    </section>
