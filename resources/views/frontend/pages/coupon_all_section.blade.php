@foreach ($coupons as $coupon)
    <div class="items couponCode" data-coupon-code="{{ strtolower($coupon->coupon_code) }}">
        <div class="d-flex coupons-box align-items-center">
            <div class="logo">
                <div class="coupon-logo">
                    <img src="{{ !empty($coupon->logo) ? url('storage/' . $coupon->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                        class="img-fluid" alt=""
                        onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                </div>
            </div>
            <div class="content-area"
                style="background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');background-repeat: no-repeat;">
                <div class="p-1 ">
                    <h5 class="discount-percentage text-center fw-bold pt-2">
                        {{ $coupon->badge }}</h5>
                    <p class="text-white text-center ps-1 pt-1 pb-1 coupon-text">
                        OFF
                    </p>
                </div>
                <div>
                    <p class="text-white text-center coupon-text coupon-code pt-2">
                        Code:
                        ”<span class="couponCode" id="coupon-code">{{ $coupon->coupon_code }}</span>”
                        <a href="javascript:void(0);" class="copy-btn" data-coupon_id="{{ $coupon->coupon_code }}">
                            <i class="fas fa-copy ps-2"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
