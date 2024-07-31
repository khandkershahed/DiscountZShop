<x-frontend-app-layout :title="'Privacy Policy || DiscountZShop'">
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="{{!empty(optional($page_banner)->image) && file_exists(public_path('storage/'.optional($page_banner)->image)) ? asset('storage/'.optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name)}}" />
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="main-color">Privacy Policy</h1>
                    <p class="pt-2">
                        Welcome to [Discount Shop Name]! This privacy policy describes
                        how [Discount Shop Name] ("we", "our", "us") collects, uses,
                        and shares your personal information when you visit or make a
                        purchase from [Website URL] (the "Site").
                    </p>

                    <h4 class="main-color pt-5">Information We Collect</h2>
                        <p class="pt-2">
                            We collect various types of information in connection with the
                            services we provide, including:
                        </p>
                        <ul>
                            <li>
                                <strong>Personal Information:</strong> When you make a
                                purchase, we collect personal information such as your name,
                                email address, shipping address, and payment information.
                            </li>
                            <li>
                                <strong>Device Information:</strong> We automatically
                                collect certain information about your device, including
                                information about your web browser, IP address, time zone,
                                and some of the cookies that are installed on your device.
                            </li>
                            <li>
                                <strong>Order Information:</strong> We collect information
                                related to your purchase history and the items you view on
                                the Site.
                            </li>
                        </ul>

                        <h4 class="main-color pt-5">How We Use Your Information</h2>
                            <p class="pt-2">
                                We use the information we collect for various purposes,
                                including to:
                            </p>
                            <ul>
                                <li>
                                    Process and fulfill your orders, including to send you
                                    emails to confirm your order and to provide you with
                                    invoices and/or order confirmations.
                                </li>
                                <li>
                                    Communicate with you, including to respond to your inquiries
                                    and to provide you with customer support.
                                </li>
                                <li>Screen our orders for potential risk or fraud.</li>
                                <li>
                                    Provide you with information or advertising relating to our
                                    products or services, in accordance with your preferences.
                                </li>
                            </ul>

                            <h4 class="main-color pt-5">Sharing Your Information</h2>
                                <p class="pt-2">
                                    We may share your personal information with third parties to
                                    help us use your information as described above. For example,
                                    we use [Third Party Service Provider] to power our online
                                    store. We also use Google Analytics to help us understand how
                                    our customers use the Site.
                                </p>
                                <p class="pt-2">
                                    We may also share your information to comply with applicable
                                    laws and regulations, to respond to a subpoena, search warrant
                                    or other lawful request for information we receive, or to
                                    otherwise protect our rights.
                                </p>

                                <h4 class="main-color pt-5">Your Rights</h2>
                                    <p class="pt-2">
                                        If you are a resident of the European Economic Area (EEA), you
                                        have certain rights regarding your personal information,
                                        including the right to access, update, or delete your personal
                                        information. If you would like to exercise these rights,
                                        please contact us at the contact information below.
                                    </p>

                                    <h4 class="main-color pt-5">Data Retention</h2>
                                        <p class="pt-2">
                                            We retain your personal information for as long as necessary
                                            to provide our services and fulfill the purposes described in
                                            this policy, unless otherwise required by law.
                                        </p>

                                        <h4 class="main-color pt-5">Changes to This Policy</h2>
                                            <p class="pt-2">
                                                We may update this privacy policy from time to time to reflect
                                                changes to our practices or for other operational, legal, or
                                                regulatory reasons. Any changes will be posted on this page,
                                                and it is your responsibility to review this privacy policy
                                                periodically.
                                            </p>

                                            <h4 class="main-color pt-5">Contact Us</h2>
                                                <p class="pt-2">
                                                    If you have any questions about this Privacy Policy, please
                                                    contact us at:
                                                </p>
                                                <p class="pt-2">Email: [Your Email Address]</p>
                                                <p class="pt-2">Phone: [Your Phone Number]</p>

                                                <p class="pt-2">Effective Date: [Effective Date]</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
