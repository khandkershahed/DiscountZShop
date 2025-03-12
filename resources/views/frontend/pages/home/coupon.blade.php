{{-- Styles for no results message --}}
<style>
    .no-results-message {
        text-align: center;
        font-size: 16px;
        color: #F15A2D;
        padding: 20px;
        font-weight: bold;
    }
</style>

<section>
    <div class="container px-4 py-3 biggest-deals">
        <div class="row">
            <div class="px-0 col-lg-12">
                <div class="border-0 shadow-none card rounded-0">
                    {{-- Card Header --}}
                    <div class="px-0 py-3 bg-white card-header" style="border-bottom: 1px solid #eee">
                        <div class="row align-items-center">

                            {{-- Title and Icon --}}
                            <div class="col-lg-4 col-12">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 coupon-title pe-3">Available Coupon</h4>
                                    <div class="available-cp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="23"
                                            viewBox="0 0 36 23" fill="none">
                                            <path
                                                d="M28.6172 14.5408C28.0353 14.5408 27.5625 15.0064 27.5625 15.5794C27.5625 16.1525 28.0353 16.618 28.6172 16.618C29.1991 16.618 29.6719 16.1525 29.6719 15.5794C29.6719 15.0064 29.1991 14.5408 28.6172 14.5408Z"
                                                fill="#F15A2D" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            {{-- Search Input and Navigation Buttons --}}
                            <div class="col-lg-8 col-sm-8">
                                <div class="d-flex justify-content-between align-items-center mobile-none-sm">
                                    <div class="w-100">
                                        <form>
                                            <input type="text" class="form-control rounded-pill form-control-sm"
                                                placeholder="Search Coupon..." id="serviceSearchCoupon" />
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center navigation-slide" style="width: 11%;">
                                        <button type="button" class="custom-prev rounded-circle">
                                            <i class="fas fa-arrow-left-long"></i>
                                        </button>
                                        <button type="button" class="custom-next rounded-circle ms-3">
                                            <i class="fas fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Coupons List --}}
                    <div id="servicesContainerCoupon">
                        <div class="px-0 py-3 bg-white card-body">
                            <div class="slick-slider">
                                <div class="available-coupon-slider">
                                    @foreach ($coupons as $coupon)
                                        <div class="p-4 shadow-none ms-2 me-3 card rounded-2">
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
                                                                data-coupon="{{ $coupon->coupon_code }}"
                                                                style="cursor: pointer;">
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- JavaScript for Search Functionality --}}
@push('scripts')
    <script>
        $(document).ready(function() {
            $(".copy-coupon").click(function() {
                var couponCode = $(this).attr("data-coupon");

                // Create a temporary input to copy text
                var tempInput = $("<input>");
                $("body").append(tempInput);
                tempInput.val(couponCode).select();
                document.execCommand("copy");
                tempInput.remove();

                // Optional: Show a success message
                alert("Coupon Code Copied: " + couponCode);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#serviceSearchCoupon').on('keyup', function() {
                var query = $(this).val().trim();

                if (query === "") {
                    window.location.href = "{{ route('homePage') }}";
                } else {
                    $.ajax({
                        url: "{{ route('coupon.search') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#servicesContainerCoupon').html(data);
                        }
                    });
                }
            });
        });
    </script>
@endpush
