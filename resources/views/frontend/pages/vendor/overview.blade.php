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
                <div class="pb-5 mb-5 row align-items-center">

                    <div class="col-lg-6">

                        <div>
                            <h5 class="">{{ optional($brand)->about_title }}</h5>
                            <p class="pt-3">
                                {!! optional($brand)->about !!}
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="vendor-banners overlay-container">
                            <img class="img-fluid rounded-2 brand-imges"
                                src="{{ !empty(optional($brand)->middle_banner_left) ? url('storage/' . optional($brand)->middle_banner_left) : asset('images/no-overview.jpg') }}"
                                alt=""
                                onerror="this.onerror=null; this.src='{{ asset('images/no-overview.jpg') }}';">
                            <div class="overlay overlay-1"></div>
                            <div class="overlay overlay-2"></div>
                            <div class="overlay overlay-3"></div>
                        </div>
                    </div>
                </div>

                @if (!empty(optional($brand)->offer_description_title) || !empty(optional($brand)->offer_description))
                    <div class="mt-5 mb-4 row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="vendor-banners overlay-container">
                                <img class="pt-4 img-fluid rounded-2 brand-imges pt-lg-0"
                                    src="{{ !empty(optional($brand)->middle_banner_right) && file_exists(public_path('storage/' . optional($brand)->middle_banner_right)) ? url('storage/' . optional($brand)->middle_banner_right) : asset('images/no-overview.jpg') }}"
                                    alt=""
                                    onerror="this.onerror=null; this.src='{{ asset('images/no-overview.jpg') }}';">
                                <div class="overlay overlay-1"></div>
                                <div class="overlay overlay-2"></div>
                                <div class="overlay overlay-3"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pb-4">{{ optional($brand)->offer_description_title }}</h5>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div>
                        {{-- <div class="col-lg-6">
                            <h5 class="pb-3">{{ optional($brand)->offer_description_title }}</h5>
                            <p style="text-align: justify;">
                                {!! optional($brand)->offer_description !!}
                            </p>
                        </div> --}}
                    </div>
                @endif

                @if (!empty(optional($brand)->description_title) || !empty(optional($brand)->description))
                    <div class="mb-5 row">
                        <div class="col-lg-12">

                            {{-- <h5 class="pb-3">{{ optional($brand)->description_title }}</h5>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
                            </p> --}}

                            <h5 class="pb-4">{{ optional($brand)->description_title }}</h5>
                            <p style="text-align: justify;">
                                {!! optional($brand)->description !!}
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


</x-frontend-app-layout>
