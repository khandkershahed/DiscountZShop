<style>
    /* Style for the thumbnail titles */
    .grabThumbs {
        width: 100%;
        max-height: 100%;
        overflow: hidden;
        text-align: center;
    }

    .thumbnail-title {
        color: var(--secondary-color-two);
        border: 1px solid #eee !important;
        padding: 9px;
        padding: 10px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .thumbnail-title:hover {
        background-color: var(--primary-color) !important;
        color: white !important;
        border: 1px solid var(--primary-color) !important;
    }

    /* Active class for the selected title */
    .slick-current .thumbnail-title {
        background-color: var(--primary-color) !important;
        color: white !important;
        border: 1px solid var(--primary-color) !important;
    }

    /* Hide default Slick navigation */
    .slick-prev,
    .slick-next {
        display: none !important;
    }

    .next-thumb,
    .prev-thumb {
        background-color: transparent;
        border: 1px solid transparent;
        color: #f15a2d;
    }

    .next-thumb,
    .prev-thumb:focus {
        background-color: transparent;
        border: 1px solid transparent;
        color: #f15a2d;
        box-shadow: none;
    }


    .next-thumb:hover {
        background-color: transparent;
        border: 1px solid transparent;
        color: #f15a2d !important;
    }

    .prev-thumb:hover {
        background-color: transparent;
        border: 1px solid transparent;
        color: #f15a2d !important;
    }

    .offers-items {
        border: 1px dashed #f15a2d;
    }
</style>

<section style="background: #f9f9f9">
    <div class="container py-5">
        <div class="row">
            <div class="p-0 shadow-sm card rounded-0 grab-card">
                <!-- Header Section -->
                <div class="py-3 pb-4 bg-white border-0 card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 d-flex align-items-center">
                            <h5 class="mb-0 coupon-title pe-3">Grab Your Offer</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="36" viewBox="0 0 17 36"
                                fill="none">
                                <path d="M0.7 0V19.75H5.44V35.91L16.5 14.36H10.18L16.5 0H0.7Z" fill="#F15A2D" />
                            </svg>
                        </div>
                        <div class="col-lg-10 d-none d-lg-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="w-100">
                                    @foreach ($offer_cat_types as $offer_cat_type)
                                        @if ($offer_cat_type->offers->count() > 0)
                                            <a href="javascript:void(0);" class="category-tab"
                                                data-id="{{ $offer_cat_type->id }}">
                                                <span class="mt-2 badge ct-badge">{{ $offer_cat_type->name }}</span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Body Section -->
                <div class="py-0 card-body pe-0">
                    <div class="row grab-box">
                        <div class="py-2 col-lg-2 d-flex flex-column align-items-center bg-light pe-0">
                            <!-- Thumbnail Navigation -->
                            <button class="mb-2 prev-thumb btn btn-primary">
                                <i class="fas fa-chevron-up"></i>
                            </button>

                            <div class="grabThumbs">
                                <div>
                                    <p class="thumbnail-title">All Offers</p>
                                </div>
                                @foreach ($categories as $index => $offercategory)
                                    @if ($offercategory->offers->count() > 0)
                                        <div>
                                            <p class="thumbnail-title">{{ $offercategory->name }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <button class="mt-2 next-thumb btn btn-primary">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="col-lg-10 ps-0">
                            <div class="grabMain grab-offer-tabs-box">
                                {{-- All Offer Box --}}
                                <div class="p-2 content-slide">
                                    <div class="row gx-3">
                                        @foreach ($alloffers as $alloffer)
                                            @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                                <div class="mb-3 col-lg-4">
                                                    <div class="card offers-items">
                                                        <div class="card-body">
                                                            <div class="row align-items-center">
                                                                <div class="col-4">
                                                                    <div class="grab-imgs">
                                                                        <img class="img-fluid rounded-2"
                                                                            src="{{ !empty(optional($alloffer->brand)->logo) ? url('storage/' . optional($alloffer->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($alloffer->brand)->name) }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-8">
                                                                    @if (!empty($alloffer->badge))
                                                                        <h4>{{ $alloffer->badge }}</h4>
                                                                        <a href="{{ route('offer.details', $alloffer->slug) }}"
                                                                            class="pt-3">
                                                                            <small>Check Offers</small>
                                                                            <i class="fas fa-arrow-right-long"></i>
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    {{-- All Offer Box End --}}
                                </div>
                                @foreach ($categories as $offercategory)
                                    @if ($offercategory->offers->count() > 0)
                                        <div class="p-2 content-slide">
                                            <div class="row gx-3">
                                                @foreach ($offercategory->offers as $category_offer)
                                                    @if ($category_offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $category_offer->expiry_date == null)
                                                        <div class="mb-3 col-lg-4">
                                                            <div class="card offers-items">
                                                                <div class="card-body">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4">
                                                                            <div class="grab-imgs">
                                                                                <img class="img-fluid rounded-2"
                                                                                    src="{{ !empty(optional($category_offer->brand)->logo) ? url('storage/' . optional($category_offer->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($category_offer->brand)->name) }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            @if (!empty($category_offer->badge))
                                                                                <h4>{{ $category_offer->badge }}</h4>
                                                                                <a href="{{ route('offer.details', $category_offer->slug) }}"
                                                                                    class="pt-3">
                                                                                    <small>Check Offers</small>
                                                                                    <i
                                                                                        class="fas fa-arrow-right-long"></i>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            {{-- All Offer Box End --}}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let offerBox = document.querySelector(".grab-offer-tabs-box");
        let offerItems = offerBox.querySelectorAll(".offers-items");

        if (offerItems.length <= 6) { // Adjust this number as needed
            offerBox.style.overflowY = "hidden"; // Disable scrollbar if not needed
        }
    });
</script>
    <script>
        $(document).ready(function() {
            $('.grabMain').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.grabThumbs'
            });

            $('.grabThumbs').slick({
                slidesToShow: 7, // Adjust number of titles visible
                slidesToScroll: 1,
                asNavFor: '.grabMain',
                dots: false,
                vertical: true, // Enable vertical sliding
                focusOnSelect: true
            });

            // Custom button navigation
            $('.prev-thumb').click(function() {
                $('.grabThumbs').slick('slickPrev');
            });

            $('.next-thumb').click(function() {
                $('.grabThumbs').slick('slickNext');
            });

            // Scroll main content to top when slide changes
            $('.grabMain').on('afterChange', function(event, slick, currentSlide) {
                $('.grab-offer-tabs-box').animate({
                    scrollTop: 0 // Scroll to the top of the container
                }, 300); // Adjust animation speed as needed
            });
        });
    </script>
@endpush
