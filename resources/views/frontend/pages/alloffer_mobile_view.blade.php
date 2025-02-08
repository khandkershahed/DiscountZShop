<div class="mobile-homepage" style="margin-top: 4.6rem;margin-bottom: 8rem;">
    <div class="row py-3 px-3">
        <div class="col-12">
            <div class="text-center mb-4">
                <h2 class="pb-2 site-color">All Offers</h2>
                <p>Here You Found All Offers!</p>
            </div>
        </div>
        <div class="col-4 px-1">
            <select class="form-select cust-select" id="" name="division_id" data-placeholder="Select Division"
                autocomplete="off" onchange="searchStoreByDivision(this.value)">

                <option value="">Select Division</option>

                @foreach ($alldivs as $division)
                    <option value="{{ $division->id }}"
                        {{ request()->get('division') == $division->id ? 'selected' : '' }}>
                        {{ $division->name }}</option>
                @endforeach

            </select>
        </div>
        <div class="col-4 px-1">
            <!-- Filter Store - City -->
            <div class="btn-group">
                <select class="form-select cust-select" id="" name="city_id" data-placeholder="Select City"
                    autocomplete="off" onchange="searchStoreByCity(this.value)">
                    <option value="">Select City</option>

                    @foreach ($allcitys as $allcity)
                        <option value="{{ $allcity->id }}"
                            {{ request()->get('city') == $allcity->id ? 'selected' : '' }}>
                            {{ $allcity->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-4 px-1">
            <!-- Search Store -->
            <div class="wrapper-store">
                <div class="search-input-store">

                    {{-- <form action=""> --}}
                    <input type="text" id="serviceSearchMobile" autocomplete="off" name="search"
                        placeholder="Type to search..." />
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                            </path>
                        </svg>
                    </div>
                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-lg-12">
            <div class="row mt-0" id="servicesContainerMobile">
                @foreach ($offers as $offer)
                    <div class="col-6 mb-4 pe-2">
                        <div class="card border-0 shadow-sm offer-boxes" style="background: #FEF5F2;">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;"
                                            alt=""
                                            onerror="this.onerror=null;this.src='http://discountzshop.com/storage/offer/logo/R3WjCCfzxD1725791711.png';" />
                                    </div>
                                </div>
                                <div class="px-4">
                                    <div class="col-lg-6">
                                        <div class="shop-heart">
                                            {{-- Wishlist --}}
                                            <a type="submit" class="add_to_wishlist" style="cursor: pointer;"
                                                data-product_id="{{ $offer->id }}" data-tip="Wishlist">
                                                <i class="fa-regular fa-heart fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-4 offer_title">
                                        <p class="text-black offers-title-mobile">{{ $offer->name }}</p>
                                        @if (!empty($offer->badge))
                                            <h4 class="main-color special-font-box">
                                                {{ $offer->badge }}
                                            </h4>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 pt-4 pb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <a href="{{ route('offer.details', $offer->slug) }}"
                                                    class="btn-common-one btn-sm rounded-0 py-1 mfs">
                                                    <small>View</small>
                                                </a>
                                                @if (!empty($offer->coupon_code))
                                                    <a href="javascript:void(0);"
                                                        class="btn-common-three rounded-3 ms-2 mfs"
                                                        onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                                        Coupon <i class="fa-solid fa-copy"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <p class="text-end countdown mfs"
                                                data-expire-date="{{ $offer->expiry_date }}">
                                                <span class="main-color"><i class="fa-solid fa-clock"></i></span>
                                                <span class="countdown-timer"> Days</span>
                                            </p>
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

@push('scripts')
        <script>
            $(document).ready(function() {
                $('#serviceSearchMobile').on('keyup', function() {
                    var query = $(this).val();

                    // If the input field is empty, do a search without a query
                    if (query === '') {
                        window.location.href = "{{ route('allOffer') }}";
                    } else {
                        $.ajax({
                            url: "{{ route('offer.search.names.mobile') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#servicesContainerMobile').html(data);
                            }
                        });
                    }
                });
            });
        </script>

    @endpush
