@forelse ($latest_stores as $store_search)
    <div class="col-lg-3 col-6 mb-3">
        <div class="border-0 shadow-sm card bg-light offer-boxes">
            <div class="p-4 row align-items-center">
                <div class="col-lg-6 col-4">
                    <a href="{{ route('brand.details', optional($store_search->brand)->slug) }}">
                        <div>
                            <img src="{{ !empty(optional($store_search->brand)->logo) ? url('storage/' . optional($store_search->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($store_search->name) }}"
                                width="80px" height="80px" class="rounded-2 mobile-offers" style="object-fit: contain;"
                                alt="" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-8 text-end">
                    {{-- @if (!empty($store_search->badge))
                    <h4 class="main-color special-font-box text-end">
                        {{ $store_search->badge }}</h4>
                @endif --}}
                    <a class="add_to_wishlist" style="cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#store_location_{{ $store_search->id }}">
                        <i class="fa-solid fa-store fs-5 text-danger"></i>
                    </a>
                </div>

                <div class="pt-4 col-lg-12 offer_title">
                    <div class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                        <a href="{{ route('vendor.stores', optional($store_search->brand)->slug) }}">
                            {{ $store_search->title }}

                            {{-- <a class="add_to_wishlist" style="cursor: pointer;" data-product_id="{{ $store_search->id }}"
                            data-tip="Wishlist">
                            <i class="fa-regular fa-heart fs-5 text-danger"></i>
                        </a> --}}
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Store Location Modal -->
    <div class="modal fade" id="store_location_{{ $store_search->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-2 px-4" style="background-color: #f15a2d">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Store Location
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            {!! optional($store_search)->url !!}
                            {{-- <iframe src="{{ optional($store_search)->url }}" width="100%" height="400"
                            frameborder="0" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="map-store"></iframe> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Store available right now.</h5>
@endforelse
