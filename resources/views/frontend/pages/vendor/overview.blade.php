<x-frontend-app-layout :title="'Overview || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    {{-- Overview Start --}}
    {{-- <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <h2 class="pb-2">{{ $brand->name }}</h2>
                            <p>
                                <i class="fa-solid fa-location-dot main-color"></i> {{ $brand->headquarter }}
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div>
                        <h2 class="">{{ optional($brand)->about_title }}</h2>
                        <p class="py-4">
                            {!! optional($brand)->about !!}
                        </p>
                    </div>
                    <div class="row py-4">
                        <div class="col-lg-6">
                            <div class="vendor-banners overlay-container">
                                <img class="img-fluid rounded-2"
                                    src="{{ !empty(optional($brand)->middle_banner_left) ? url('storage/' . optional($brand)->middle_banner_left) : asset('images/no-banner(1920-330).png') }}"
                                    alt="">
                                <div class="overlay overlay-1"></div>
                                <div class="overlay overlay-2"></div>
                                <div class="overlay overlay-3"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="vendor-banners overlay-container">
                                <img class="img-fluid rounded-2"
                                    src="{{!empty(optional($brand)->middle_banner_right) && file_exists(public_path('storage/' . optional($brand)->middle_banner_right)) ? url('storage/' . optional($brand)->middle_banner_right) : asset('images/no-banner(1920-330).png') }}" alt="">
                                <div class="overlay overlay-1"></div>
                                <div class="overlay overlay-2"></div>
                                <div class="overlay overlay-3"></div>
                            </div>
                        </div>
                    </div>



                    <div class="row py-5">
                        <div class="col-lg-12">
                            <h2 class="pb-4">{{ optional($brand)->offer_description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col-lg-12">
                            <h2 class="pb-4">{{ optional($brand)->description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Overview End --}}
</x-frontend-app-layout>
