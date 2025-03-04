<x-frontend-app-layout :title="'Offer Details || DiscountZShop'">

    @include('frontend.pages.vendor.partial.header')

    <div class="desktop-homepage">
        <section>
            <div class="container pt-3 mb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
                        <div>
                            <img class="img-fluid w-100 rounded-2"
                                src="{{ !empty($offerDetails->image) ? url('storage/' . $offerDetails->image) : asset('images/demo-product.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/demo-product.png') }}';" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <h1 class="pb-3 main-color">{{ $offerDetails->badge }}</h1>
                            <h4>{{ $offerDetails->name }}</h4>

                            {{-- @if (!empty($offerDetails->price) && $offerDetails->price !== '0')
                                <p>Price:</p>
                                <h6 class="ps-2 main-color">BDT {{ $offerDetails->price }}</h6>
                            @endif --}}

                            @if (!empty($offerDetails->price))
                                <del class="pt-2">BDT {{ $offerDetails->price }}</del>
                            @endif
                            @if (!empty($offerDetails->offer_price))
                                <h6 class="main-color">BDT {{ $offerDetails->offer_price }}</h6>
                            @endif

                            <hr />
                            <p class="pt-2">
                                {!! $offerDetails->short_description !!}
                            </p>
                            
                            {{-- <div class="pt-3 d-flex align-items-center">
                                <p>Available:</p>
                                <h6 class="ps-2 main-color">L'Oreal All Store</h6>
                            </div> --}}

                            <p class="pt-2 countdown" data-expire-date="{{ $offerDetails->expiry_date }}">
                                <span class="text-muted">Expire :</span>
                                <span class="countdown-timer main-color"></span>
                            </p>

                            @if (optional($brand)->offers->count() > 0)
                                <div class="pt-4">
                                    <a target="_blank" href="{{ $offerDetails->source_url }}">
                                        <button class="btn btn-common-one"> See Offers <i
                                                class="fa-solid fa-arrow-right ps-3"></i>
                                        </button>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- mobile View --}}
    <div class="mobile-homepage" style="margin-bottom: 8rem">
        <section>
            <div class="container pt-3 mb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid w-100 rounded-2"
                                src="{{ !empty($offerDetails->image) ? url('storage/' . $offerDetails->image) : asset('images/demo-product.png') }}"
                                alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/demo-product.png') }}';" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="pt-3 main-color">{{ $offerDetails->badge }}</h1>
                            <h4>{{ $offerDetails->name }}</h4>

                            @if (!empty($offerDetails->price))
                                <del class="pt-2">BDT {{ $offerDetails->price }}</del>
                            @endif
                            @if (!empty($offerDetails->offer_price))
                                <h6 class="main-color">BDT {{ $offerDetails->offer_price }}</h6>
                            @endif

                            <hr />
                            <p class="pt-2">
                                {!! $offerDetails->short_description !!}
                            </p>
                            <p class="pt-2 countdown mobile-expire"
                                data-expire-date="{{ $offerDetails->expiry_date }}">
                                <span class="text-muted">Expire :</span>
                                <span class="countdown-timer main-color"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-frontend-app-layout>
