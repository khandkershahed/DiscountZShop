<x-frontend-app-layout :title="'FAQs || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Hero End -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h2 class="main-color">FAQs</h2>
                        {{-- <p class="w-lg-50 w-100 pt-3">
                            Problems trying to resolve the conflict between <br />
                            the two major realms of Classical physics: Newtonian
                            mechanics
                        </p> --}}
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="accordion">
                        @if ($faqs->count() > 0)
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="false">
                                        <span class="accordion-title">{{$faq->question}}</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            {{$faq->answer}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="accordion-item">
                            <h5 class="text-center">No Item available</h5>
                        </div>
                        @endif
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
