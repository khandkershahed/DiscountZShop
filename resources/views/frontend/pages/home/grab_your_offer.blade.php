<section style="background: #f9f9f9">
    <div class="container px-0 py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 shadow-sm card rounded-0 grab-card">
                    <div class="py-3 pb-4 bg-transparent border-0 card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 coupon-title pe-3">
                                        Grab Your Offer
                                    </h4>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="36"
                                            viewBox="0 0 17 36" fill="none">
                                            <path
                                                d="M0.700195 0V19.7492H5.44065V35.9075L16.5017 14.363H10.1811L16.5017 0H0.700195Z"
                                                fill="#F15A2D" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="d-flex justify-content-space-between align-items-center">
                                    <!-- Grab Tags -->
                                    <div class="w-100">

                                        @foreach ($offer_cat_types as $offer_cat_type)
                                            <a href=""><span
                                                    class="mt-2 badge ct-badge">{{ $offer_cat_type->name }}</span></a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body pe-0">

                        {{-- ====ASss===== --}}

                        <div class="row">

                            <div class="col-lg-3 grab-offer-tabs-box">
                                <ul class="border-0 nav nav-tabs flex-column" id="myTab" role="tablist">
                                    <li class="mb-2 nav-item" role="presentation">
                                        <button class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab"
                                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                            role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                            All Offers
                                        </button>
                                    </li>
                                    @if ($categories->count() > 0)
                                        @foreach ($categories as $index => $offercategory)
                                            @if ($offercategory->offers->count() > 0)
                                                <!-- Only show category if there are offers -->
                                                <li class="nav-item mb-2 {{ $index >= 7 ? 'd-none more-tabs' : '' }}"
                                                    role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home-{{ $offercategory->id }}-pane"
                                                        type="button" role="tab"
                                                        aria-controls="home-{{ $offercategory->id }}-pane"
                                                        aria-selected="true">
                                                        {{ $offercategory->name }}
                                                    </button>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>

                                <div class="d-flex justify-content-center">
                                    <button id="show-more-btn" class="arrow-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <button id="show-less-btn" class="arrow-btn d-none">
                                        <i class="fa-solid fa-chevron-up"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-9 grab-offer-tabs-box">
                                <div class="tab-content" id="myTabContent">
                                    <!-- All Offers Tab -->
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="row">
                                            @foreach ($alloffers as $alloffer)
                                                @if ($alloffer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $alloffer->expiry_date == null)
                                                    <div class="mb-4 col-lg-4">
                                                        <div class="coupon-box">
                                                            <div class="coupon-box-content">
                                                                <div class="row align-items-center">
                                                                    <div class="col-4">
                                                                        <a
                                                                            href="{{ route('offer.details', $alloffer->slug) }}">
                                                                            <img class="img-fluid"
                                                                                src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                                                alt="Logo" />
                                                                        </a>
                                                                    </div>

                                                                    <div class="text-center col-8">
                                                                        <a
                                                                            href="{{ route('offer.details', $alloffer->slug) }}">
                                                                            <div
                                                                                class="d-flex justify-content-center align-items-center text-start">
                                                                                @if (!empty($alloffer->badge))
                                                                                    <h5>{{ $alloffer->badge }}
                                                                                    </h5>
                                                                                @endif
                                                                            </div>

                                                                            {{-- @if (!empty($alloffer->coupon_code))
                                                                                <p
                                                                                    class="para-font coupon-extra">
                                                                                    Code:
                                                                                    {{ $alloffer->coupon_code }}
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            @endif --}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Categories -->
                                    @foreach ($categories as $offercategory)
                                        @if ($offercategory->offers->count() > 0)
                                            <!-- Only show category if it has offers -->
                                            <div class="tab-pane fade" id="home-{{ $offercategory->id }}-pane"
                                                role="tabpanel" aria-labelledby="home-{{ $offercategory->id }}-tab"
                                                tabindex="0">
                                                <div class="row">
                                                    @foreach ($offercategory->offers as $category_offer)
                                                        @if ($category_offer->expiry_date >= Carbon\Carbon::now()->format('Y-m-d') || $category_offer->expiry_date == null)
                                                            <div class="mb-4 col-lg-4">
                                                                <div class="coupon-box">
                                                                    <div class="coupon-box-content">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4">
                                                                                <a
                                                                                    href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                        alt="Logo" />
                                                                                </a>
                                                                            </div>

                                                                            <div class="text-center col-8">
                                                                                <a
                                                                                    href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                    <div
                                                                                        class="d-flex justify-content-center align-items-center">
                                                                                        @if (!empty($category_offer->badge))
                                                                                            <h1>{{ substr($category_offer->badge, 0, -4) }}
                                                                                            </h1>
                                                                                        @endif
                                                                                    </div>

                                                                                    {{-- @if (!empty($category_offer->coupon_code))
                                                                                        <p
                                                                                            class="para-font coupon-extra">
                                                                                            Code:
                                                                                            {{ $category_offer->coupon_code }}
                                                                                            <a href="javascript:void(0);"
                                                                                                class="copy-btn"><i
                                                                                                    class="fa-regular fa-copy"></i></a>
                                                                                        </p>
                                                                                    @endif --}}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <!-- No expired offers shown -->
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            {{-- ======================== --}}
                            <div class="col-lg-9 grab-offer-tabs-box">
                                <div class="tab-content" id="myTabContent">

                                    <!-- Categories -->
                                    @foreach ($offer_cat_types as $offer_cat_type)
                                        <!-- Only show category if it has offers -->
                                        <div class="tab-pane fade" id="" role="tabpanel" aria-labelledby="" tabindex="0">

                                            <div class="row">

                                                @foreach ($offer_cat_type->offerItems as $offer)
                                                        <div class="mb-4 col-lg-4">
                                                            <div class="coupon-box">
                                                                <div class="coupon-box-content">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4">
                                                                            <a
                                                                                href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                <img class="img-fluid"
                                                                                    src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                    alt="Logo" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="text-center col-8">
                                                                            <a
                                                                                href="{{ route('offer.details', $category_offer->slug) }}">
                                                                                <div
                                                                                    class="d-flex justify-content-center align-items-center">
                                                                                    @if (!empty($category_offer->badge))
                                                                                        <h1>{{ substr($category_offer->badge, 0, -4) }}
                                                                                        </h1>
                                                                                    @endif
                                                                                </div>

                                                                                {{-- @if (!empty($category_offer->coupon_code))
                                                                                        <p
                                                                                            class="para-font coupon-extra">
                                                                                            Code:
                                                                                            {{ $category_offer->coupon_code }}
                                                                                            <a href="javascript:void(0);"
                                                                                                class="copy-btn"><i
                                                                                                    class="fa-regular fa-copy"></i></a>
                                                                                        </p>
                                                                                    @endif --}}
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        {{-- ====ASss===== --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
