<x-frontend-app-layout :title="'FAQs || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="{{!empty(optional($page_banner)->image) && file_exists(public_path('storage/'.optional($page_banner)->image)) ? asset('storage/'.optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name)}}" />
        </div>
    </section>
    <!-- Hero End -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h1>FAQs</h1>
                        <p class="w-lg-50 w-100 pt-3">
                            Problems trying to resolve the conflict between <br />
                            the two major realms of Classical physics: Newtonian
                            mechanics
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                                <span class="accordion-title">Why is the sky blue?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                                <span class="accordion-title">Will we ever discover aliens?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                                <span class="accordion-title">How much does the Earth weigh?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                                <span class="accordion-title">How do airplanes stay up?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            const items = document.querySelectorAll(".accordion button");

            function toggleAccordion() {
                const itemToggle = this.getAttribute("aria-expanded");

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute("aria-expanded", "false");
                }

                if (itemToggle == "false") {
                    this.setAttribute("aria-expanded", "true");
                }
            }
            items.forEach((item) => item.addEventListener("click", toggleAccordion));
        </script>
    @endpush
</x-frontend-app-layout>
