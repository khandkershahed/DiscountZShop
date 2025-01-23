<x-frontend-app-layout :title="'Brand Stores || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <style>
        iframe {
            width: 100% !important;
        }
    </style>
    <div class="desktop-homepage">
        <section id="location" class="mb-5">
            <div class="container pt-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Location</h3>
                            </div>
                            <div class="pt-1 d-flex justify-content-space-around align-items-center footer-icons">
                                <a href="" class="p-2">
                                    <i class="fas fa-globe site-color" style="font-size: 22px" aria-hidden="true"
                                        title="Website"></i>
                                </a>
                                <a href="" class="p-2">
                                    <i class="fa-brands fa-facebook-f site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Facebook"></i>
                                </a>
                                <a href="" class="p-2">
                                    <i class="fa-brands fa-twitter site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Twitter"></i>
                                </a>

                                <a href="" class="p-2">
                                    <i class="fa-brands fa-linkedin-in site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $stores = $brand->stores ?? null;
                @endphp
                <div class="row mt-4">
                    <div class="col-lg-5">
                        <div class="brands-stores" style="max-height: 475px;overflow-y: auto;border: 1px solid #eee;">
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                @foreach ($stores as $store)
                                    <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                                        <button
                                            class="nav-link w-100 vendor-store {{ $loop->first ? 'active' : '' }} border-0 text-start"
                                            id="home_{{ optional($store)->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#home_{{ optional($store)->id }}" type="button"
                                            role="tab" aria-controls="home_{{ optional($store)->id }}"
                                            aria-selected="true">
                                            <div class="card border-0 bg-transparent">
                                                <div class="card-body p-2 px-3">
                                                    <h6 style="text-decoration: underline;" class="text-primary">
                                                        {{ optional($store)->title }}</h6>
                                                    <p class="pt-2">
                                                        {{ optional($store)->address_line_one }}
                                                        @if (!empty(optional($store)->address_line_two))
                                                            ,<br>
                                                            {{ optional($store)->address_line_two }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-7">
                        <div class="tab-content">
                            @foreach ($stores as $store)
                                <div class="tab-pane {{ $loop->first ? 'show active' : '' }}"
                                    id="home_{{ optional($store)->id }}" role="tabpanel"
                                    aria-labelledby="home_{{ optional($store)->id }}-tab">
                                    <div class="card rounded-0 shadow-sm border">
                                        <div class="card-body p-2 w-100">
                                            {!! optional($store)->url !!}
                                            {{-- <iframe src="{{ optional($store)->url }}" width="100%" height="400"
                                            frameborder="0" style="border: 0" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade" class="map-store"></iframe> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    {{-- Mobile View --}}
    <div class="mobile-homepage" style="margin-bottom: 8rem">
        <section id="location" class="mb-5">
            <div class="container pt-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Location</h3>
                            </div>
                            <div class="pt-1 d-flex justify-content-space-around align-items-center footer-icons">
                                <a href="" class="p-2">
                                    <i class="fas fa-globe site-color" style="font-size: 22px" aria-hidden="true"
                                        title="Website"></i>
                                </a>
                                <a href="" class="p-2">
                                    <i class="fa-brands fa-facebook-f site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Facebook"></i>
                                </a>
                                <a href="" class="p-2">
                                    <i class="fa-brands fa-twitter site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Twitter"></i>
                                </a>

                                <a href="" class="p-2">
                                    <i class="fa-brands fa-linkedin-in site-color" style="font-size: 22px"
                                        aria-hidden="true" title="Linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $stores = $brand->stores ?? null;
                @endphp
                <div class="row mt-4">
                    <div class="col-lg-5">
                        <div class="brands-stores" style="max-height: 475px;overflow-y: auto;border: 1px solid #eee;">
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                @foreach ($stores as $store)
                                    <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                                        <button
                                            class="nav-link w-100 vendor-store {{ $loop->first ? 'active' : '' }} border-0 text-start"
                                            id="home_{{ optional($store)->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#home_{{ optional($store)->id }}" type="button"
                                            role="tab" aria-controls="home_{{ optional($store)->id }}"
                                            aria-selected="true">
                                            <div class="card border-0 bg-transparent">
                                                <div class="card-body p-2 px-3">
                                                    <h6 style="text-decoration: underline;" class="text-primary">
                                                        {{ optional($store)->title }}</h6>
                                                    <p class="pt-2">
                                                        {{ optional($store)->address_line_one }}
                                                        @if (!empty(optional($store)->address_line_two))
                                                            ,<br>
                                                            {{ optional($store)->address_line_two }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-7">
                        <div class="tab-content">
                            @foreach ($stores as $store)
                                <div class="tab-pane {{ $loop->first ? 'show active' : '' }}"
                                    id="home_{{ optional($store)->id }}" role="tabpanel"
                                    aria-labelledby="home_{{ optional($store)->id }}-tab">
                                    <div class="card rounded-0 shadow-sm border">
                                        <div class="card-body p-2 w-100">
                                            {!! optional($store)->url !!}
                                            {{-- <iframe src="{{ optional($store)->url }}" width="100%" height="400"
                                            frameborder="0" style="border: 0" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade" class="map-store"></iframe> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    {{-- Mobile View End --}}
</x-frontend-app-layout>
