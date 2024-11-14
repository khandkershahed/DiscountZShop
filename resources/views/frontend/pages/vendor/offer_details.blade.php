<x-frontend-app-layout :title="'Offer Details || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <section>
        <div class="container py-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty($offerDetails->image) ? url('storage/' . $offerDetails->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDetails->name) }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <h1 class="pb-3 main-color">{{ $offerDetails->badge }}</h1>
                        <h4>{{ $offerDetails->name }}</h4>

                        @if (!empty($offerDetails->price) && $offerDetails->price !== '0')
                            <p>Price:</p>
                            <h6 class="ps-2 main-color">BDT {{ $offerDetails->price }}</h6>
                        @endif


                        <hr />
                        <p class="pt-2">
                            {!! $offerDetails->short_description !!}
                        </p>
                        {{-- <div class="d-flex align-items-center pt-3">
                            <p>Available:</p>
                            <h6 class="ps-2 main-color">L'Oreal All Store</h6>
                        </div> --}}
                        <p class="pt-2 countdown" data-expire-date="{{ $offerDetails->expiry_date }}">
                            <span class="text-muted">Expire :</span>
                            <span class="countdown-timer main-color"></span>
                        </p>
                        {{-- <div class="pt-4">
                            <button href="" class="btn btn-common-one">
                                Add To Wishlist <i class="fa-solid fa-heart ps-3"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
