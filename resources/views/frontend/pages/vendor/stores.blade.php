<x-frontend-app-layout :title="'Brand Stores || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <section id="location">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3>Location</h3>
                        </div>
                        {{-- <div class="pt-1 d-flex justify-content-space-around align-items-center footer-icons">
                            <a href="" class="p-2">
                                <i class="fas fa-globe" style="font-size: 22px" aria-hidden="true" title="Website"></i>
                            </a>
                            <a href="" class="p-2">
                                <i class="fa-brands fa-facebook-f" style="font-size: 22px" aria-hidden="true"
                                    title="Facebook"></i>
                            </a>
                            <a href="" class="p-2">
                                <i class="fa-brands fa-twitter" style="font-size: 22px" aria-hidden="true"
                                    title="Twitter"></i>
                            </a>

                            <a href="" class="p-2">
                                <i class="fa-brands fa-linkedin-in" style="font-size: 22px" aria-hidden="true"
                                    title="Linkedin"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5">
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        @foreach (optional($brand)->stores as $store)
                            <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                                <button
                                    class="nav-link w-100 vendor-store {{ $loop->first ? 'active' : '' }} border-0 text-start"
                                    id="home-{{ optional($store)->id }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-{{ optional($store)->id }}" type="button" role="tab"
                                    aria-controls="home-{{ optional($store)->id }}" aria-selected="true">
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
                <div class="col-lg-7">
                    @foreach (optional($brand)->stores as $store)
                        <div class="tab-content">
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}"
                                id="home-{{ optional($store)->id }}" role="tabpanel"
                                aria-labelledby="home-{{ optional($store)->id }}-tab">
                                <div class="card rounded-0 shadow-sm border">
                                    <div class="card-body p-2">
                                        <iframe src="{{ optional($store)->url }}" width="100%" height="400"
                                            frameborder="0" style="border: 0" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade" class="map-store"></iframe>
                                        {{-- <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.667573975865!2d90.41069157533732!3d23.79484917864015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7110a869885%3A0xe58ef928dd171985!2sSultan&#39;s%20Dine%20Gulshan%20Branch!5e0!3m2!1sen!2sbd!4v1731393645643!5m2!1sen!2sbd"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
