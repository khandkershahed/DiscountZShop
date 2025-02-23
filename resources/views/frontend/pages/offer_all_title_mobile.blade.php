@foreach ($offers as $offer)
    <div class="col-6 mb-4 pe-2">
        <div class="card border-0 shadow-sm bg-light offer-boxes">
            <div class="row p-4 align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    @if (!empty($offer->badge))
                        <h4 class="main-color special-font-box text-end">
                            {{ $offer->badge }}</h4>
                    @endif
                </div>
                <div class="col-lg-12 pt-4 offer_title">
                    <p class="pb-4 text-black">{{ $offer->name }}</p>
                </div>
                <div class="col-lg-12 pt-4">
                    <div class="d-flex">
                        <a href="{{ route('offer.details', $offer->slug) }}"
                            class="w-100 btn-common-one rounded-3"><small>View</small></a>
                        @if (!empty($offer->coupon_code))
                            <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                onclick="copyCouponCode('{{ $offer->coupon_code }}')">Coupon
                                <i class="fa-solid fa-copy"></i></a>
                        @endif
                    </div>
                    <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                        <span class="main-color">Expire In:</span>
                        <span class="countdown-timer"> Days</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
