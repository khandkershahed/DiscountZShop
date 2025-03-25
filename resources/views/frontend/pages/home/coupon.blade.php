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
                                                fill="#F15A2D"></path>
                                            <path
                                                d="M34.9453 0H10.6344V3.11591C10.6344 3.69 10.1627 4.15455 9.57973 4.15455C8.99677 4.15455 8.52504 3.69 8.52504 3.11591V0H1.05469C0.471727 0 0 0.464547 0 1.03864V7.27045C0 7.84454 0.471727 8.30909 1.05469 8.30909C2.79942 8.30909 4.21875 9.70682 4.21875 11.425C4.21875 13.1432 2.79942 14.5409 1.05469 14.5409C0.471727 14.5409 0 15.0055 0 15.5795V21.8114C0 22.3855 0.471727 22.85 1.05469 22.85H8.4375V19.7341C8.4375 19.16 8.90923 18.6955 9.49219 18.6955C10.0751 18.6955 10.5469 19.16 10.5469 19.7341V22.85H34.9453C35.5283 22.85 36 22.3855 36 21.8114V1.03864C36 0.464547 35.5283 0 34.9453 0ZM10.5469 15.5795C10.5469 16.1536 10.0751 16.6182 9.49219 16.6182C8.90923 16.6182 8.4375 16.1536 8.4375 15.5795V13.5023C8.4375 12.9282 8.90923 12.4636 9.49219 12.4636C10.0751 12.4636 10.5469 12.9282 10.5469 13.5023V15.5795ZM10.5469 9.34773C10.5469 9.92182 10.0751 10.3864 9.49219 10.3864C8.90923 10.3864 8.4375 9.92182 8.4375 9.34773V7.27045C8.4375 6.69637 8.90923 6.23182 9.49219 6.23182C10.0751 6.23182 10.5469 6.69637 10.5469 7.27045V9.34773ZM17.0156 7.27045C17.0156 5.55227 18.435 4.15455 20.1797 4.15455C21.9244 4.15455 23.3438 5.55227 23.3438 7.27045C23.3438 8.98864 21.9244 10.3864 20.1797 10.3864C18.435 10.3864 17.0156 8.98864 17.0156 7.27045ZM19.5947 18.521C19.1096 18.2024 18.9787 17.5584 19.3022 17.0807L27.7397 4.61702C28.0621 4.13931 28.7161 4.01149 29.2023 4.32897C29.6873 4.64748 29.8182 5.29151 29.4948 5.76928L21.0573 18.2329C20.7391 18.7036 20.0875 18.8427 19.5947 18.521ZM28.6172 18.6955C26.8725 18.6955 25.4531 17.2977 25.4531 15.5795C25.4531 13.8614 26.8725 12.4636 28.6172 12.4636C30.3619 12.4636 31.7812 13.8614 31.7812 15.5795C31.7812 17.2977 30.3619 18.6955 28.6172 18.6955Z"
                                                fill="#F15A2D"></path>
                                            <path
                                                d="M20.1797 6.23193C19.5978 6.23193 19.125 6.69752 19.125 7.27057C19.125 7.84362 19.5978 8.30921 20.1797 8.30921C20.7616 8.30921 21.2344 7.84362 21.2344 7.27057C21.2344 6.69752 20.7616 6.23193 20.1797 6.23193Z"
                                                fill="#F15A2D"></path>
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
                                    <div class="d-flex justify-content-end align-items-center navigation-slide"
                                        style="width: 11%;">
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
                    <div>
                        <div class="px-0 py-3 bg-white card-body">
                            <div class="available-coupon-slider" id="servicesContainerCoupon">
                                @foreach ($coupons as $coupon)
                                    <div class="p-4 shadow-none col-4 ms-2 me-3 card rounded-2">
                                        <div class="p-0 card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <a
                                                        href="{{ route('brand.details', optional($coupon->brand)->slug) }}">
                                                        <div class="shadow-sm coupon-logo">
                                                            <img class="img-fluid"
                                                                src="{{ !empty($coupon->brand->logo) ? url('storage/' . $coupon->brand->logo) : 'N/A' }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="ps-4">
                                                        <h3>{{ $coupon->badge }} Off</h3>
                                                        <div class="mt-3 bg-white rounded-2 d-flex align-items-center copy-coupon"
                                                            data-coupon="{{ $coupon->coupon_code }}"
                                                            style="cursor: pointer;">
                                                            <div class="p-1 border rounded-2">
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
                                {{-- <div class="available-coupon-slider">
                                </div> --}}
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

                $.ajax({
                    url: "{{ route('coupon.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#servicesContainerCoupon').html(data);

                        // Reinitialize the slick slider after the content is loaded
                        $('.slick-slider').slick('unslick'); // Uninitialize the previous slider
                        $('.slick-slider').slick({ // Reinitialize the slider
                            // Add your existing slick options here
                            dots: false, // Example option
                            arrows: true, // Example option
                            infinite: true, // Example option
                            speed: 300, // Example option
                            slidesToShow: 3, // Example option
                            slidesToScroll: 3 // Example option
                        });
                    }
                });
            });
        });
    </script>
@endpush
