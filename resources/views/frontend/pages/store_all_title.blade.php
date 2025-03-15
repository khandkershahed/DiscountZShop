@forelse ($stores as $store)
    <div class="col-lg-3 col-6 mb-3">
        <div class="border-0 shadow-sm card bg-light offer-boxes">
            <div class="p-4 row align-items-center">
                <div class="col-lg-6 col-4">
                    <a href="{{ route('brand.details', optional($store->brand)->slug) }}">
                        <div>
                            <img src="{{ !empty(optional($store->brand)->logo) ? url('storage/' . optional($store->brand)->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($store->name) }}"
                                 class="rounded-2 mobile-offers" style="object-fit: contain;"
                                alt="" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-8 text-end">

                    <a class="add_to_wishlist" style="cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#store_location_{{ $store->id }}">
                        <i class="fa-solid fa-store fs-5 text-danger"></i>
                    </a>
                </div>

                <div class="pt-4 col-lg-12 offer_title">
                    <div class="pb-4 pb-lg-0 d-flex justify-content-between align-items-center">
                        <a href="{{ route('vendor.stores', optional($store->brand)->slug) }}">
                            {{ $store->title }}
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Store Location Modal -->
    <div class="modal fade" id="store_location_{{ $store->id }}" tabindex="-1" data-bs-backdrop="static"
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
                            {!! optional($store)->url !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <p class="text-center text-danger mt-3">No Store Available </p>
@endforelse
