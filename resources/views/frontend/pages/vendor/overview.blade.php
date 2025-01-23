<x-frontend-app-layout :title="'Overview || DiscountZShop'">

    @include('frontend.pages.vendor.partial.header')
    <div class="desktop-homepage">
        {{-- Overview Start --}}
        <section>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div>
                            <h2 class="">{{ optional($brand)->about_title }}</h2>
                            <p class="pt-3">
                                {!! optional($brand)->about !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-6">
                        <div class="vendor-banners overlay-container">
                            <img class="img-fluid rounded-2 brand-imges"
                                src="{{ !empty(optional($brand)->middle_banner_left) ? url('storage/' . optional($brand)->middle_banner_left) : asset('images/no-banner(1920-330).png') }}"
                                alt="">
                            <div class="overlay overlay-1"></div>
                            <div class="overlay overlay-2"></div>
                            <div class="overlay overlay-3"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vendor-banners overlay-container">
                            <img class="img-fluid rounded-2 brand-imges pt-4 pt-lg-0"
                                src="{{ !empty(optional($brand)->middle_banner_right) && file_exists(public_path('storage/' . optional($brand)->middle_banner_right)) ? url('storage/' . optional($brand)->middle_banner_right) : asset('images/no-banner(1920-330).png') }}"
                                alt="">
                            <div class="overlay overlay-1"></div>
                            <div class="overlay overlay-2"></div>
                            <div class="overlay overlay-3"></div>
                        </div>
                    </div>
                </div>
                @if (!empty(optional($brand)->description_title) || !empty(optional($brand)->description))
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="pb-4">{{ optional($brand)->description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($brand)->offer_description_title) || !empty(optional($brand)->offer_description))
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="pb-4">{{ optional($brand)->offer_description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- Overview End --}}
    </div>
    <div class="mobile-homepage" style="margin-bottom: 8rem">
        {{-- Overview Start --}}
        <section>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div>
                            <h3 class="fw-normal" style="font-size: 20px !important;">{{ optional($brand)->about_title }}</h3>
                            <p class="pt-3">
                                {!! optional($brand)->about !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-6">
                        <div class="vendor-banners">
                            <img class="img-fluid"
                                src="{{ !empty(optional($brand)->middle_banner_left) ? url('storage/' . optional($brand)->middle_banner_left) : asset('images/no-overview-1.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="vendor-banners">
                            <img class="img-fluid"
                                src="{{ !empty(optional($brand)->middle_banner_right) && file_exists(public_path('storage/' . optional($brand)->middle_banner_right)) ? url('storage/' . optional($brand)->middle_banner_right) : asset('images/no-overview-2.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                @if (!empty(optional($brand)->description_title) || !empty(optional($brand)->description))
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="pb-4" style="font-size: 20px !important;">{{ optional($brand)->description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($brand)->offer_description_title) || !empty(optional($brand)->offer_description))
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="pb-4" style="font-size: 20px !important;">{{ optional($brand)->offer_description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- Overview End --}}
    </div>
    {{-- Overview End --}}
</x-frontend-app-layout>
