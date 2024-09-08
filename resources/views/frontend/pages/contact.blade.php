<x-frontend-app-layout :title="'Contact Us || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container py-5">
            <div class="row py-5 gx-5">
                <div class="d-flex justify-content-center align-items-center pb-lg-4 pb-3">
                    <h3 class="text-center">Your Query</h3>
                    <span class="store-devider"></span>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-6 mt-lg-4 mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="p-4 shadow-sm contact-icons">
                                        <i class="fa-solid fa-phone fs-3 main-color"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5>Call Now</h5>
                                        <p class="pt-2">{{ $setting->primary_phone }}</p>
                                        <p>{{ $setting->alternative_phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-lg-4 mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="p-4 shadow-sm contact-icons">
                                        <i class="fa-solid fa-envelope fs-3 main-color"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5>Contact Email</h5>
                                        <p class="pt-2">{{ $setting->contact_email }}</p>
                                        <p>{{ $setting->support_email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-lg-4 mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="p-4 shadow-sm contact-icons">
                                        <i class="fa-solid fa-location-dot fs-3 main-color"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5>Our Location</h5>
                                        <p class="pt-2">
                                            {{ $setting->address_line_one }}
                                        </p>
                                        <p class="pt-2">
                                            {{ $setting->address_line_two }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pt-5">
                                    <div class="d-flex justify-content-center align-items-center pb-lg-4 pb-3">
                                        <span class="main-color pt-2">Tell us about</span>
                                        <h3 class="ps-2">yourself!</h3>
                                        <span class="store-devider"></span>
                                    </div>
                                    <form action="{{ route('contact.add') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-lg-4 mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="exampleFormControlInput1" placeholder="John Doe" required/>
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-lg-4 mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="exampleFormControlInput1" placeholder="name@example.com" required/>
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-lg-4 mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Message <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-common-one">Submit <i
                                                        class="fa-solid fa-paper-plane ps-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
