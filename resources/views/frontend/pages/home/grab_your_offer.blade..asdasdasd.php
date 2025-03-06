<style>
    /* Set fixed height for thumbnails to align properly */
    .grabThumbs {
        width: 100px;
        /* Adjust width as needed */
        max-height: 300px;
        /* Adjust max height as needed */
        overflow: hidden;
    }

    .grabThumbs .slick-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .grabThumbs img {
        width: 80px;
        /* Adjust thumbnail width */
        height: auto;
        cursor: pointer;
    }

    /* Hide default Slick navigation */
    .slick-prev,
    .slick-next {
        display: none !important;
    }
</style>

<section style="background: #f9f9f9">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <!-- Thumbnail Navigation -->
                <button class="mb-2 prev-thumb btn btn-primary">▲</button>

                <div class="grabThumbs">
                    <div>
                        <p class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">
                            All Offers
                        </p>
                    </div>
                    @foreach ($categories as $index => $offercategory)
                        @if ($offercategory->offers->count() > 0)
                            <div>
                                <p class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                    {{ $offercategory->name }}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <button class="mt-2 next-thumb btn btn-primary">▼</button>
            </div>

            <div class="col-lg-8">
                <div class="grabMain">
                    <div>
                        @foreach ($alloffers as $alloffer)
                            @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                <div class="mb-4 col-lg-4">
                                    <div class="coupon-box">
                                        <div class="text-center coupon-box-content">
                                            <a href="{{ route('offer.details', $alloffer->slug) }}">
                                                <img class="img-fluid"
                                                    src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                    alt="Logo" />
                                                @if (!empty($alloffer->badge))
                                                    <h5>{{ $alloffer->badge }}</h5>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @foreach ($categories as $offercategory)
                        @if ($offercategory->offers->count() > 0)
                            <div><img src="image2.jpg" class="img-fluid" alt="Slide 2"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0 py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 shadow-sm card rounded-0 grab-card">

                    <!-- Header Section -->
                    <div class="py-3 pb-4 bg-transparent border-0 card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-3 d-flex align-items-center">
                                <h4 class="mb-0 coupon-title pe-3">Grab Your Offer</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="36"
                                    viewBox="0 0 17 36" fill="none">
                                    <path d="M0.7 0V19.75H5.44V35.91L16.5 14.36H10.18L16.5 0H0.7Z" fill="#F15A2D" />
                                </svg>
                            </div>
                            <div class="col-lg-9 d-none d-lg-block">
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
                    <div class="card-body pe-0">
                        <div class="row">

                            <!-- Offer Categories Sidebar -->
                            <div class="col-lg-3 grab-offer-tabs-box">
                                <ul class="border-0 nav nav-tabs flex-column" id="myTab" role="tablist">
                                    <li class="mb-2 nav-item" role="presentation">
                                        <button class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab"
                                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                            role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                            All Offers
                                        </button>
                                    </li>
                                    @foreach ($categories as $index => $offercategory)
                                        @if ($offercategory->offers->count() > 0)
                                            <li class="nav-item mb-2 {{ $index >= 7 ? 'd-none more-tabs' : '' }}"
                                                role="presentation">
                                                <button class="nav-link grab-tabs w-100 rounded-0"
                                                    id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home-{{ $offercategory->id }}-pane" type="button"
                                                    role="tab" aria-controls="home-{{ $offercategory->id }}-pane"
                                                    aria-selected="true">
                                                    {{ $offercategory->name }}
                                                </button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <button id="show-more-btn" class="arrow-btn"><i
                                            class="fa-solid fa-chevron-down"></i></button>
                                    <button id="show-less-btn" class="arrow-btn d-none"><i
                                            class="fa-solid fa-chevron-up"></i></button>
                                </div>
                            </div>

                            <!-- Offers Display Section -->
                            <div class="col-lg-9 grab-offer-tabs-box grab-offer-tabs-box-hide">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            @foreach ($alloffers as $alloffer)
                                                @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                                    <div class="mb-4 col-lg-4">
                                                        <div class="coupon-box">
                                                            <div class="text-center coupon-box-content">
                                                                <a
                                                                    href="{{ route('offer.details', $alloffer->slug) }}">
                                                                    <img class="img-fluid"
                                                                        src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                                        alt="Logo" />
                                                                    @if (!empty($alloffer->badge))
                                                                        <h5>{{ $alloffer->badge }}</h5>
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    @foreach ($categories as $offercategory)
                                        @if ($offercategory->offers->count() > 0)
                                            <div class="tab-pane fade" id="home-{{ $offercategory->id }}-pane"
                                                role="tabpanel" aria-labelledby="home-{{ $offercategory->id }}-tab">
                                                <div class="row">
                                                    @foreach ($offercategory->offers as $category_offer)
                                                        @if ($category_offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $category_offer->expiry_date == null)
                                                            <div class="mb-4 col-lg-4">
                                                                <div class="coupon-box">
                                                                    <div class="text-center coupon-box-content">
                                                                        <a
                                                                            href="{{ route('offer.details', $category_offer->slug) }}">
                                                                            <img class="img-fluid"
                                                                                src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                alt="Logo" />
                                                                            @if (!empty($category_offer->badge))
                                                                                <h5>{{ substr($category_offer->badge, 0, -4) }}
                                                                                </h5>
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
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
    </div>
</section>

@push('scripts')
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
                slidesToShow: 3, // Adjust number of thumbnails visible
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
        });
    </script>
@endpush
