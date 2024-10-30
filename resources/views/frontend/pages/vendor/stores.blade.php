<x-frontend-app-layout :title="'Vendor Overview || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="pb-2">Aarong</h2>
                            <p>
                                <i class="fa-solid fa-location-dot main-color"></i> Aarong Centre (Head Office) 346
                                Tejgaon I/A, Tejgaon Link Rd, Tejgaon, Dhaka
                            </p>

                            {{-- <div class="pt-3">
                                <span class="badge fw-normal" style="background-color: var(--primary-color)"><i
                                        class="fa-solid fa-star pe-2"></i>8.5</span>

                                <span class="ps-3">23 Ratings</span>

                                <span class="ps-2"><i class="fa-solid fa-comment main-color pe-2"></i>91
                                    reviews</span>
                            </div> --}}
                        </div>
                        {{-- <div class="d-flex align-items-center">
                            <a href="javascript:void()" class="pe-3 pt-2">
                                <p>
                                    <i class="fa-solid fa-heart" id="heart"></i>
                                </p>
                            </a>
                            <a href="" class="btn btn-common-one"><i
                                    class="fa-regular fa-bookmark pe-2"></i>Follow</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- store details -->
    <section style="background-color: #f9f9f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="store-single pt-3">
                        <li data-target="about" class="active">About</li>
                        <li data-target="offers">Offers</li>
                        <li data-target="location">Location</li>
                        <li data-target="popular-discount">Description</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- store details End -->
    <section id="about">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="">About</h3>
                    <p class="pt-4" style="text-align: justify">
                        From clay pots to diamond jewellery, and silk and cotton fabrics to brass and leather products,
                        Aarong’s vast range of innovative products, backed by a robust supply chain and distribution
                        network, makes Aarong truly a household brand in Bangladesh. Its growing presence outside of
                        Bangladesh – through fair-trade networks and the online shop– continues to broaden the market
                        for Bangladeshi crafts globally, creating more opportunities for artisans to protect their
                        age-old art and livelihoods.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2"
                            src="http://127.0.0.1:8000/storage/store/middle_banner_left/lyMClpcFNh1726118115.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <div>
                        <img class="img-fluid w-100 rounded-2"
                            src="http://127.0.0.1:8000/storage/store/middle_banner_right/f7Jx5ynWW01726118115.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="offers">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="py-3">Offers Description</h2>
                    <p>Aarong is thrilled to announce its ‘Autumn Deal’ campaign starting August 30, 2024 across all
                        Aarong outlets! Customers can spend TK. 3,000 or more on apparel and get a TK. 300 gift voucher
                        free. The gift voucher can be redeemed for any purchases at Aarong outlets excluding Aarong
                        Earth, Aarong Dairy, and other food items.</p>
                    <p>Terms &amp; Conditions:<br>-This offer is not applicable on aarong.com and the Aarong app.
                        &nbsp;&nbsp;<br>-The offer applies to a single transaction of 3,000 BDT, with multiple gift
                        vouchers issued for every 3,000 BDT spent.<br>- The gift voucher is valid for 30 days from the
                        date of issue.<br>- This offer cannot be combined with any other offer<br>- Aarong Staff and
                        corporate discounts cannot be used under this offer.<br>- The purchase amount must be TK. 3000
                        excluding VAT to qualify for the offer.<br>- Payment must be made via credit/debit card, cash,
                        or bKash to avail of the offer.<br>- Payments made through credit notes are not eligible for
                        this offer.<br>- Aarong membership points will not be earned on purchases made during this
                        promotion.<br>- Aarong membership points can be redeemed during the offer period.<br>- Aarong
                        reserves the right to modify any or all terms and conditions of this offer at any time without
                        prior notice.</p>
                </div>
            </div>

            {{-- <div class="row">

                <div class="col-lg-12 py-4">
                    <div class="store-offers">
                        <div class="card border-0 shadow-sm bg-light">
                            <div class="row p-4 align-items-center">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{ asset('frontend') }}/assets/img/Brands/logo4.png" width="80px"
                                            height="80px" class="rounded-2 bg-white" style="object-fit: cover;"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span>Upto</span>
                                    <h1 class="main-color special-font-box">
                                        50% Off
                                    </h1>
                                </div>
                                <div class="col-lg-12 pt-4">
                                    <p class="pb-4 text-black">
                                        Premium Punjabi collections for men on online
                                    </p>
                                    <a href="{{ route('store.details', 'aarong') }}" class="main-color">
                                        <small>See all in store</small>
                                    </a>
                                </div>
                                <div class="col-lg-12 pt-4">
                                    <div class="d-flex">
                                        <a href="" class="w-100 btn-common-one rounded-3">View</a>
                                        <a href="" class="w-100 btn-common-three rounded-3 ms-2">Coupon <i
                                                class="fa-solid fa-copy"></i></a>
                                    </div>
                                    <p class="pt-2 text-center countdown" data-expire-date="August 17, 2024 00:00:00">
                                        <span class="main-color">Expire In:</span> <span class="countdown-timer">12
                                            Days</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>
    </section>
    <section id="location">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Location</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="py-4" style="text-align: justify">
                        Contact us. To learn more about our products, packaging and shipping, payment modes, or
                        minimum order quantity, please contact us:
                        Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon, Dhaka
                    </p>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-2 px-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24180.057402570434!2d90.38754648818421!3d23.76665485379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7617928b841%3A0x95e63385ead9376e!2sAarong%20Centre!5e0!3m2!1sen!2sbd!4v1726044668695!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade"
                                width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen=""
                                class="map-store"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="popular-discount">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Description</h2>
                    <div class="row">
                        <div class="col-lg-12 py-4">
                            <p>
                                Our values align closely with those of BRAC, an organization renowned for its
                                groundbreaking, holistic approach to development. With over 325,000 people nationwide
                                benefiting from Aarong’s initiatives, these values continue to be a source of pride and
                                inspiration. Aarong is made up of a diverse group of skilled artisans, including
                                potters, brass workers, jewelers, jute artisans, basket weavers, handloom and silk
                                weavers, wood carvers, leather workers, and embroiderers, all of whom contribute to
                                making Aarong what it is today.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
