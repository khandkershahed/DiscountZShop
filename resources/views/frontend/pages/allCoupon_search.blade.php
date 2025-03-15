{{-- <div class="py-5 card-body" style="background-color: #f8f8f8">

    <div class="available-coupon-slider servicesContainerCoupon">

        @forelse ($coupons as $coupon)

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
                            <h5 class="pt-2 discount-percentage fw-bold ms-5">
                                {{ $coupon->badge }}</h5>
                            <p class="pt-1 pb-1 text-white ps-1 ms-5 coupon-text">
                                OFF
                            </p>
                        </div>
                        <div>
                            <p class="pt-2 text-white coupon-text coupon-code ms-5">
                                Code:”<span class="couponCode" id="coupon-code">{{ $coupon->coupon_code }}</span>”
                                <a href="javascript:void(0);" class="copy-btn"
                                    data-coupon_id="{{ $coupon->coupon_code }}">
                                    <i class="fas fa-copy ps-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-danger">No Coupon Available </p>
        @endforelse
    </div>
</div> --}}

<div class="px-0 py-3 bg-white card-body">
    <div class="slick-slider">
        <div class="available-coupon-slider row ">
            @forelse ($coupons as $coupon)
                <div class="p-4 shadow-none card rounded-2 col-4">
                    <div class="p-0 card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="shadow-sm coupon-logo">
                                    <img class="img-fluid"
                                        src="{{ !empty($coupon->brand->logo) ? url('storage/' . $coupon->brand->logo) : 'N/A' }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ps-4">
                                    <h3>{{ $coupon->badge }} Off</h3>
                                    <div class="mt-3 bg-white rounded-2 d-flex align-items-center copy-coupon"
                                        data-coupon="{{ $coupon->coupon_code }}" style="cursor: pointer;">
                                        <div class="p-1 border rounded-2">
                                            {{-- <img class="img-fluid" width="25px"
                                                src="{{ asset('images/coupon-icon.png') }}"
                                                alt=""> --}}
                                            <i class="px-2 fas fa-copy main-color"></i>
                                        </div>
                                        <div class="ps-2">
                                            <small>Coupon : <span
                                                    class="main-color">{{ $coupon->coupon_code }}</span></small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
            <p class="text-center text-danger">No Coupon Available </p>
            @endforelse
        </div>
    </div>
</div>
{{-- </div>
</div> --}}

