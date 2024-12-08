@forelse ($offerDeals as $offerDeal)
    <div class="col-lg-4 mb-3">
        <div class="card deal-card border-0">
            <div class="card-body border-0 p-4">
                <div class="d-flex justify-content-between align-items-center">

                    <!-- Counter -->
                    <div>
                        <div class="countdown-hms">
                            <p class="text-center countdown" data-expire-date="{{ $offerDeal->expiry_date }}">
                                <span class="main-color">Expire In:</span>
                                <span class="countdown-timer"> Days</span>
                            </p>

                        </div>
                    </div>
                    <!-- Wishlist -->
                    <div>
                        <a href="">
                            <i class="fa-regular fa-heart fs-5"></i>
                        </a>
                    </div>
                </div>
                <!-- Product Image -->
                <div class="d-flex justify-content-center align-items-center py-3">
                    <img class="img-fluid"
                        src="{{ !empty($offerDeal->image) ? url('storage/' . $offerDeal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDeal->name) }}"
                        alt=""
                        onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                </div>
                <div>
                    <div>
                        <a href="{{ route('offer.details', $offerDeal->slug) }}">
                            <h6 class="mb-3 product-title">
                                {{ $offerDeal->name }}
                            </h6>
                        </a>
                        @if (!empty($offerDeal->price))
                            <del class="pt-2">BDT {{ $offerDeal->price }}</del>
                        @endif
                        @if (!empty($offerDeal->offer_price))
                            <h6 class="main-color">BDT {{ $offerDeal->offer_price }}</h6>
                        @endif
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('offer.details', $offerDeal->slug) }}"
                            class="btn btn-common-one rounded-pill px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Course available right now.</h5>
@endforelse

@push('scripts')
    <script>
        class Countdown {
            constructor(element, expireDate) {
                this.element = element;
                this.expireDate = new Date(expireDate).getTime();
                this.timerElement = this.element.querySelector(".countdown-timer");
                this.start();
            }

            start() {
                this.update();
                this.interval = setInterval(() => this.update(), 1000);
            }

            update() {
                const now = new Date().getTime();
                const distance = this.expireDate - now;

                if (distance < 0) {
                    clearInterval(this.interval);
                    this.timerElement.innerHTML = "EXPIRED";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                this.timerElement.innerHTML = `${days}d : ${hours}h : ${minutes}m : ${seconds}s`;
            }
        }

        // Initialize countdowns on DOMContentLoaded
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".countdown").forEach((element) => {
                const expireDate = element.getAttribute("data-expire-date");
                if (expireDate) {
                    new Countdown(element, expireDate);
                } else {
                    const timerElement = element.querySelector(".countdown-timer");
                    timerElement.innerHTML = "Still Available";
                }
            });
        });
    </script>
@endpush
