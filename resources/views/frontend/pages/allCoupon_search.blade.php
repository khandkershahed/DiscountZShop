<div class="card-body py-5" style="background-color: #f8f8f8">

    <div class="available-coupon-slider servicesContainerCoupon">

        @foreach ($coupons as $coupon)
            <div class="items couponCode" data-coupon-code="{{ strtolower($coupon->coupon_code) }}">
                <div class="d-flex coupons-box align-items-center">
                    <div class="logo">
                        <div class="coupon-logo">
                            <img src="{{ !empty($coupon->brand->logo) ? url('storage/' . $coupon->brand->logo) : 'N/A' }}"
                                class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="content-area"
                        style="background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');background-repeat: no-repeat;">
                        <div class="p-1 ">
                            <h5 class="discount-percentage fw-bold pt-2 ms-5">
                                {{ $coupon->badge }}</h5>
                            <p class="text-white ps-1 pt-1 pb-1 ms-5 coupon-text">
                                OFF
                            </p>
                        </div>
                        <div>
                            <p class="text-white coupon-text coupon-code pt-2 ms-5">
                                Code:”<span class="couponCode" id="coupon-code">{{ $coupon->coupon_code }}</span>”
                                {{-- <a href="javascript:void(0);" class="copy-btn"
                                        data-coupon_id="{{ $coupon->coupon_code }}">
                                        <i class="fas fa-copy ps-2"></i>
                                    </a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
