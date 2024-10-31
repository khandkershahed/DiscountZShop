<x-frontend-app-layout :title="'Vendor Overview || DiscountZShop'">
    @include('frontend.pages.vendor.partial.header')
    <section id="location">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3>Location</h3>
                        </div>
                        <div class="pt-1 d-flex justify-content-space-around align-items-center footer-icons">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5">
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                            <button class="nav-link w-100 vendor-store active border-0 text-start" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body p-2 px-3">
                                        <h6 style="text-decoration: underline;" class="text-primary">Head Office</h6>
                                        <p class="pt-2">
                                            Aarong Centre (Head Office) 346 Tejgaon I/A, <br> Tejgaon Link Rd, Tejgaon,
                                            Dhaka
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                            <button class="nav-link vendor-store w-100  text-start" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body p-2 px-3">
                                        <h6 style="text-decoration: underline;" class="text-primary">Sub Head Office</h6>
                                        <p class="pt-2">
                                            Aarong Centre (Head Office) 346 Tejgaon I/A, <br> Tejgaon Link Rd, Tejgaon,
                                            Dhaka
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-100 vendor-store-items mb-2" role="presentation">
                            <button class="nav-link vendor-store w-100  text-start" id="messages-tab1" data-bs-toggle="tab"
                                data-bs-target="#messages1" type="button" role="tab" aria-controls="messages"
                                aria-selected="false">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body p-2 px-3">
                                        <h6 style="text-decoration: underline;" class="text-primary">Sub 1 Office</h6>
                                        <p class="pt-2">
                                            Aarong Centre (Head Office) 346 Tejgaon I/A, <br> Tejgaon Link Rd, Tejgaon,
                                            Dhaka
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-100 vendor-store-items" role="presentation">
                            <button class="nav-link vendor-store w-100  text-start" id="messages-tab" data-bs-toggle="tab"
                                data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                                aria-selected="false">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body p-2 px-3">
                                        <h6 style="text-decoration: underline;" class="text-primary">Sub 2 Office</h6>
                                        <p class="pt-2">
                                            Aarong Centre (Head Office) 346 Tejgaon I/A, <br> Tejgaon Link Rd, Tejgaon,
                                            Dhaka
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card rounded-0 shadow-sm border">
                                <div class="card-body p-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24180.057402570434!2d90.38754648818421!3d23.76665485379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7617928b841%3A0x95e63385ead9376e!2sAarong%20Centre!5e0!3m2!1sen!2sbd!4v1726044668695!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade"
                                        width="100%" height="400" frameborder="0" style="border: 0"
                                        allowfullscreen="" class="map-store"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card rounded-0 shadow-sm border">
                                <div class="card-body p-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24180.057402570434!2d90.38754648818421!3d23.76665485379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7617928b841%3A0x95e63385ead9376e!2sAarong%20Centre!5e0!3m2!1sen!2sbd!4v1726044668695!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade"
                                        width="100%" height="400" frameborder="0" style="border: 0"
                                        allowfullscreen="" class="map-store"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="card rounded-0 shadow-sm border">
                                <div class="card-body p-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24180.057402570434!2d90.38754648818421!3d23.76665485379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7617928b841%3A0x95e63385ead9376e!2sAarong%20Centre!5e0!3m2!1sen!2sbd!4v1726044668695!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade"
                                        width="100%" height="400" frameborder="0" style="border: 0"
                                        allowfullscreen="" class="map-store"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages1" role="tabpanel" aria-labelledby="messages-tab1">
                            <div class="card rounded-0 shadow-sm border">
                                <div class="card-body p-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24180.057402570434!2d90.38754648818421!3d23.76665485379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7617928b841%3A0x95e63385ead9376e!2sAarong%20Centre!5e0!3m2!1sen!2sbd!4v1726044668695!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade"
                                        width="100%" height="400" frameborder="0" style="border: 0"
                                        allowfullscreen="" class="map-store"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
