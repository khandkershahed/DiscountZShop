<x-frontend-app-layout :title="'Overview || DiscountZShop'">

    <style>
        /* Default margin for larger screens */
        .responsive-section {
            margin-bottom: 0;
            /* Set a default margin for larger screens */
        }

        /* Apply the margin-bottom for small screens */
        @media (max-width: 600px) {

            /* Adjust the width to match your small screen definition */
            .responsive-section {
                margin-bottom: 9rem;
            }
        }
    </style>

    @include('frontend.pages.vendor.partial.header')

    <div class="">
        {{-- Overview Start --}}
        <section class="responsive-section">
            <div class="container">
                <div class="mb-4 row">
                    <div class="col-lg-12">
                        <div>
                            <h5 class="">{{ optional($brand)->about_title }}</h5>
                            <p class="pt-3">
                                {!! optional($brand)->about !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pb-3 my-2 row">
                    <div class="col-lg-6 col-6">
                        <div class="vendor-banners overlay-container">
                            <img class="img-fluid rounded-2 brand-imges"
                                src="{{ !empty(optional($brand)->middle_banner_left) ? url('storage/' . optional($brand)->middle_banner_left) : asset('images/no-banner(1920-330).png') }}"
                                alt="">
                            <div class="overlay overlay-1"></div>
                            <div class="overlay overlay-2"></div>
                            <div class="overlay overlay-3"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="vendor-banners overlay-container">
                            <img class="pt-4 img-fluid rounded-2 brand-imges pt-lg-0"
                                src="{{ !empty(optional($brand)->middle_banner_right) && file_exists(public_path('storage/' . optional($brand)->middle_banner_right)) ? url('storage/' . optional($brand)->middle_banner_right) : asset('images/no-banner(1920-330).png') }}"
                                alt="">
                            <div class="overlay overlay-1"></div>
                            <div class="overlay overlay-2"></div>
                            <div class="overlay overlay-3"></div>
                        </div>
                    </div>
                </div>
                @if (!empty(optional($brand)->description_title) || !empty(optional($brand)->description))
                    <div class="mb-4 row">
                        <div class="col-lg-12">
                            <h2 class="pb-4">{{ optional($brand)->description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($brand)->offer_description_title) || !empty(optional($brand)->offer_description))
                    <div class="mb-5 row">
                        <div class="col-lg-12">
                            <h5 class="pb-3">{{ optional($brand)->offer_description_title }}</h5>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                        <div class="mt-4 col-lg-2">
                            <a target="_blank" href="{{ optional($brand)->url }}" class="btn btn-common-one">
                                View <i class="fa-solid fa-arrow-right ps-3"></i>

                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- Overview End --}}
    </div>

    {{-- For Mobile Only --}}
    {{-- <div class="mobile-homepage" style="margin-bottom: 8rem">

        <section>
            <div class="container">
                <div class="mb-4 row">
                    <div class="col-lg-12">
                        <div>
                            <h3 class="fw-normal" style="font-size: 20px !important;">
                                {{ optional($brand)->about_title }}</h3>
                            <p class="pt-3">
                                {!! optional($brand)->about !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="my-5 row">
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
                    <div class="mb-4 row">
                        <div class="col-lg-12">
                            <h2 class="pb-4" style="font-size: 20px !important;">
                                {{ optional($brand)->description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($brand)->offer_description_title) || !empty(optional($brand)->offer_description))
                    <div class="mb-4 row">
                        <div class="col-lg-12">
                            <h2 class="pb-4" style="font-size: 20px !important;">
                                {{ optional($brand)->offer_description_title }}</h2>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </section>

    </div> --}}
    {{-- Overview End --}}

</x-frontend-app-layout>
