<x-frontend-app-layout :title="'Terms and Condition || DiscountZShop'">
    <!-- Hero Section -->
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
                    <h4 class="main-color">Terms and Conditions</h4>
                    <p class="pt-2">
                        Welcome to [Discount Shop Name]! These terms and conditions
                        outline the rules and regulations for the use of [Discount
                        Shop Name]'s Website, located at [Website URL].
                    </p>

                    <h4 class="main-color pt-5">Introduction</h4>
                    <p class="pt-2">
                        By accessing this website, we assume you accept these terms
                        and conditions. Do not continue to use [Discount Shop Name] if
                        you do not agree to all of the terms and conditions stated on
                        this page.
                    </p>

                    <h4 class="main-color pt-5">License</h4>
                    <p class="pt-2">
                        Unless otherwise stated, [Discount Shop Name] and/or its
                        licensors own the intellectual property rights for all
                        material on [Discount Shop Name]. All intellectual property
                        rights are reserved. You may access this from [Discount Shop
                        Name] for your own personal use subjected to restrictions set
                        in these terms and conditions.
                    </p>
                    <p class="pt-2">You must not:</p>
                    <ul>
                        <li>Republish material from [Discount Shop Name]</li>
                        <li>
                            Sell, rent, or sub-license material from [Discount Shop
                            Name]
                        </li>
                        <li>
                            Reproduce, duplicate, or copy material from [Discount Shop
                            Name]
                        </li>
                        <li>Redistribute content from [Discount Shop Name]</li>
                    </ul>

                    <h4 class="main-color pt-5">Discounts and Promotions</h4>
                    <p class="pt-2">
                        All discounts and promotions on this website are subject to
                        the following conditions:
                    </p>
                    <ul>
                        <li>
                            Discounts cannot be combined with other offers unless
                            explicitly stated.
                        </li>
                        <li>
                            Promotional discounts are valid for a limited time only.
                        </li>
                        <li>
                            Discounts apply to selected items as specified in the
                            promotion details.
                        </li>
                        <li>
                            We reserve the right to cancel any promotion at any time
                            without prior notice.
                        </li>
                    </ul>

                    <h4 class="main-color pt-5">Returns and Refunds</h4>
                    <p class="pt-2">Our return and refund policy is as follows:</p>
                    <ul>
                        <li>Items must be returned within 30 days of purchase.</li>
                        <li>
                            Returned items must be in their original condition and
                            packaging.
                        </li>
                        <li>
                            Refunds will be processed within 7-10 business days after
                            receiving the returned items.
                        </li>
                        <li>
                            Shipping costs for returns are the responsibility of the
                            customer unless the return is due to our error.
                        </li>
                    </ul>

                    <h4 class="main-color pt-5">Limitation of Liability</h4>
                    <p class="pt-2">
                        In no event shall [Discount Shop Name], nor any of its
                        officers, directors, and employees, be held liable for
                        anything arising out of or in any way connected with your use
                        of this website.
                    </p>

                    <h4 class="main-color pt-5">Changes to Terms</h4>
                    <p class="pt-2">
                        We reserve the right to amend these terms and conditions at
                        any time. Any changes will be posted on this page, and it is
                        your responsibility to review these terms and conditions
                        regularly.
                    </p>

                    <h4 class="main-color pt-5">Contact Us</h4>
                    <p class="pt-2">
                        If you have any questions about these Terms and Conditions,
                        please contact us at:
                    </p>
                    <p class="pt-2">Email: [Your Email Address]</p>
                    <p class="pt-2">Phone: [Your Phone Number]</p>

                    <p class="pt-2">Effective Date: [Effective Date]</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
