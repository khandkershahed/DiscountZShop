@forelse ($offers as $offer)
    @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d'))
        <div class="mb-4 col-lg-4 col-6 pe-2">
            <div class="border-0 shadow-sm card bg-light offer-boxes">
                <div class="p-4 row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if (!empty($offer->badge))
                            <h4 class="main-color special-font-box text-end">
                                {{ $offer->badge }}</h4>
                        @endif
                    </div>
                    <div class="pt-4 col-lg-12 offer_title">
                        <p class="pb-4 text-black">{{ $offer->name }}</p>
                    </div>
                    <div class="pt-4 col-lg-12">
                        <div class="d-flex">
                            <a href="{{ route('offer.details', $offer->slug) }}"
                                class="w-100 btn-common-one rounded-3"><small>View</small></a>
                            @if (!empty($offer->coupon_code))
                                <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                    onclick="copyCouponCode('{{ $offer->coupon_code }}')">Coupon
                                    <i class="fa-solid fa-copy"></i></a>
                            @endif
                        </div>

                        {{-- {{ Carbon\Carbon::parse($offer->expiry_date)->format('D, d F Y') }} --}}

                        {{-- @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d')) --}}
                        <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                            <span class="main-color">Expire In:</span>
                            <span class="countdown-timer"> Days</span>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    @elseif($offer->expiry_date == null)
        <div class="mb-4 col-lg-4 pe-2">
            <div class="border-0 shadow-sm card bg-light offer-boxes">
                <div class="p-4 row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if (!empty($offer->badge))
                            <h4 class="main-color special-font-box text-end">
                                {{ $offer->badge }}</h4>
                        @endif
                    </div>
                    <div class="pt-4 col-lg-12 offer_title">
                        <p class="pb-4 text-black">{{ $offer->name }}</p>
                    </div>
                    <div class="pt-4 col-lg-12">
                        <div class="d-flex">
                            <a href="{{ route('offer.details', $offer->slug) }}"
                                class="w-100 btn-common-one rounded-3"><small>View</small></a>
                            @if (!empty($offer->coupon_code))
                                <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                    onclick="copyCouponCode('{{ $offer->coupon_code }}')">Coupon
                                    <i class="fa-solid fa-copy"></i></a>
                            @endif
                        </div>

                        {{-- {{ Carbon\Carbon::parse($offer->expiry_date)->format('D, d F Y') }} --}}

                        {{-- @if ($offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d')) --}}
                        <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                            <span class="main-color">Expire In:</span>
                            <span class="countdown-timer"> Available</span>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    @else
    @endif
@empty
    <p class="mt-5 text-center text-danger">No Offer Avaiable</p>
@endforelse
