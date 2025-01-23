<x-frontend-app-layout :title="'Offer Details || DiscountZShop'">

    <section>
        <div class="container py-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty($offerDetails->image) ? url('storage/' . $offerDetails->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDetails->name) }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <h1 class="pb-3 main-color">{{ $offerDetails->badge }}</h1>
                        <h4>{{ $offerDetails->name }}</h4>
                        <div class="d-flex align-items-center pt-3">
                            <p>Price:</p>
                            <h6 class="ps-2 main-color">BDT {{ $offerDetails->price }}</h6>
                        </div>
                        <hr />
                        <p class="pt-2">
                            {!! $offerDetails->short_description !!}
                        </p>
                        <p class="pt-2 countdown" data-expire-date="{{ $offerDetails->expiry_date }}">
                            <span class="text-muted">Expire :</span>
                            <span class="countdown-timer main-color"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <h3 class="pb-3">Descriptions</h3>
                        <p>
                            {!! $offerDetails->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (!empty($offerDetails->map_url))
        <section>
            <div class="container">
                <div class="row">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2 px-3">
                            <iframe src="{{ $offerDetails->map_url }}" width="100%" height="450" frameborder="0"
                                style="border: 0" allowfullscreen="" class="map-store"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

</x-frontend-app-layout>
