<style>
    .disabled {
        pointer-events: none;
        opacity: 0.5;
        cursor: not-allowed;
        background-color: #a9a9a9;
    }
</style>

<!-- Hero Section -->
<div class="desktop-homepage">
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" {{-- src="{{ asset('storage/' . $brand->banner_image) }}" --}}
                src="{{ !empty(optional($brand)->banner_image) && file_exists(public_path('storage/' . optional($brand)->banner_image)) ? asset('storage/' . optional($brand)->banner_image) : asset('images/banner-demo.png') }}"
                alt="Khash Foods Vendor" />
        </div>
    </section>
    <!-- Hero End -->
    <section class="mb-5">
        <div class="container p-0 rounded-2" style="margin-top: -55px; position: relative; z-index: 5;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="p-2 vendor-logo rounded-2" style="background-color: #eee; border: 2px solid #f15a2d;">
                        {{-- @if (optional($brand)->offers->count() > 0) --}}
                        <a href="">
                            <img class="p-2 img-fluid rounded-2"
                                src="{{ !empty(optional($brand)->logo) && file_exists(public_path('storage/' . optional($brand)->logo)) ? asset('storage/' . optional($brand)->logo) : asset('images/no_icon.png') }}"
                                alt="">
                        </a>
                        {{-- @endif --}}
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </section>
</div>

<div class="mobile-homepage" style="margin-top: 4.6rem;">
    <section>
        <div class="regular-banner">
            @if (optional($brand)->offers->count() > 0)
                <a href="{{ route('vendor.offers', optional($brand)->slug) }}">
                    <img class="img-fluid w-100" {{-- src="{{ asset('storage/' . $brand->banner_image) }}" --}}
                        src="{{ !empty(optional($brand)->banner_image) && file_exists(public_path('storage/' . optional($brand)->banner_image)) ? asset('storage/' . optional($brand)->banner_image) : asset('images/banner-demo.png') }}"
                        alt="Khash Foods Vendor" />
                </a>
            @endif
        </div>
    </section>
    <!-- Hero End -->
    <section class="mb-5">
        <div class="container p-0 rounded-2" style="margin-top: -55px; position: relative; z-index: 5;">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    @if (optional($brand)->offers->count() > 0)
                        <a href="{{ route('vendor.offers', optional($brand)->slug) }}">
                            <div class="p-2 vendor-logo rounded-2"
                                style="background-color: #eee; border: 2px solid #f15a2d;">
                                <img class="p-2 img-fluid rounded-2"
                                    src="{{ !empty(optional($brand)->logo) && file_exists(public_path('storage/' . optional($brand)->logo)) ? asset('storage/' . optional($brand)->logo) : asset('images/no_icon.png') }}"
                                    alt="">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="mt-0 mb-4 d-flex align-items-center rounded-2 mobile-vendor-box-main"
                    style="background-color: #eee">

                    <a href="{{ route('brand.details', optional($brand)->slug) }}">
                        <div
                            class="vendor-menus mobile-vendor {{ Route::is('brand.details') ? 'active' : '' }} rounded-2">
                            <h6>Overview</h6>
                        </div>
                    </a>

                    @if (optional($brand)->stores->count() > 0)
                        <a href="{{ route('vendor.stores', optional($brand)->slug) }}">
                            <div
                                class="vendor-menus mobile-vendor {{ Route::is('vendor.stores') ? 'active' : '' }} rounded-2">
                                <h6>Stores</h6>
                            </div>
                        </a>
                    @else
                        <div class="vendor-menus mobile-vendor rounded-2 disabled">
                            <h6 class="">Stores</h6>
                        </div>
                    @endif

                    @if (optional($brand)->offers->count() > 0)
                        <a href="{{ route('vendor.offers', optional($brand)->slug) }}">
                            <div
                                class="vendor-menus mobile-vendor {{ Route::is(['vendor.offers', 'offer.details']) ? 'active' : '' }} rounded-2">
                                <h6>Offers</h6>
                            </div>
                        </a>
                    @else
                        <div class="vendor-menus mobile-vendor rounded-2 disabled">
                            <h6>Offers</h6>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-7">
                {{-- Empty Column No Need To Add Content --}}
            </div>
        </div>
    </div>
</section>
