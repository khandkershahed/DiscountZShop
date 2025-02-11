@forelse ($offers as $offer)
    <div class="mb-4 col-lg-4 col-6 pe-2">
        <div class="border-0 shadow-sm card bg-light">
            <div class="p-4 row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                            width="80px" height="80px" class="rounded-2" style="object-fit: contain;" alt=""
                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-heart">
                        {{-- Wishlist button --}}
                        <a type="submit" class="add_to_wishlist" style="cursor: pointer;"
                            data-product_id="{{ $offer->id }}" data-tip="Wishlist">
                            <i class="fa-regular fa-heart fs-5"></i>
                        </a>
                    </div>
                    @if (!empty($offer->badge))
                        <h4 class="main-color special-font-box text-end">
                            {{ $offer->badge }}
                        </h4>
                    @endif
                </div>

                <div class="pt-4 col-lg-12 offer_title">
                    <p class="pb-4 text-black">{{ $offer->name }}</p>
                </div>

                <div class="pt-4 col-lg-12">
                    <div class="d-flex">
                        <a href="{{ route('offer.details', $offer->slug) }}" class="w-100 btn-common-one rounded-3">
                            <small>View</small>
                        </a>
                        @if (!empty($offer->coupon_code))
                            <a href="javascript:void(0);" class="w-100 btn-common-three rounded-3 ms-2"
                                onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                                Coupon <i class="fa-solid fa-copy"></i>
                            </a>
                        @endif
                    </div>
                    <!-- Countdown timer -->
                    <p class="pt-2 text-center countdown" data-expire-date="{{ $offer->expiry_date }}">
                        <span class="main-color">Expire In:</span>
                        <span class="countdown-timer"> Days</span>
                    </p>


                </div>
            </div>
        </div>
    </div>
@empty
    <div class="py-3 text-center">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Offer available right now.</h5>
@endforelse


<script>
    // Countdown class to handle the countdown functionality
    class Countdown {
        constructor(element, expireDate) {
            this.element = element;
            this.expireDate = new Date(expireDate).getTime(); // Convert the expiry date to milliseconds
            this.timerElement = this.element.querySelector(".countdown-timer");

            // Debugging: log the expireDate to make sure it is correct
            console.log("Expire Date:", this.expireDate);

            // Check if the expiry date is valid
            if (isNaN(this.expireDate)) {
                console.error("Invalid expire date format.");
                this.timerElement.innerHTML = "Invalid Date";
                return;
            }

            this.start();
        }

        // Start the countdown
        start() {
            this.update();
            this.interval = setInterval(() => this.update(), 1000); // Update every second
        }

        // Update the countdown every second
        update() {
            const now = new Date().getTime(); // Current time in milliseconds
            const distance = this.expireDate - now; // Time remaining

            // If the countdown reaches zero, stop and show "EXPIRED"
            if (distance < 0) {
                clearInterval(this.interval); // Stop the interval
                this.timerElement.innerHTML = "EXPIRED"; // Display "EXPIRED"
                return;
            }

            // Calculate remaining time (days, hours, minutes, seconds)
            const days = Math.floor(distance / (1000 * 60 * 60 * 24)); // Days remaining
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); // Hours remaining
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)); // Minutes remaining
            const seconds = Math.floor((distance % (1000 * 60)) / 1000); // Seconds remaining

            // Update the countdown display with dynamic values
            this.timerElement.innerHTML = `${days}d : ${hours}h : ${minutes}m : ${seconds}s`;
        }
    }

    // Initialize the countdown timers
    function initializeCountdowns() {
        document.querySelectorAll(".countdown").forEach((element) => {
            const expireDate = element.getAttribute(
                "data-expire-date"); // Get the expiry date from the data attribute

            // Check for expiry date and make sure it's in the correct format
            if (expireDate) {
                console.log("Initializing countdown for:", expireDate);
                new Countdown(element, expireDate); // Initialize countdown for each element
            } else {
                const timerElement = element.querySelector(".countdown-timer");
                timerElement.innerHTML = "No Expiry Date"; // Display if no expiry date is set
            }
        });
    }

    // Wait until the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", () => {
        initializeCountdowns(); // Initialize countdowns when DOM is ready
    });

    // If you're adding content dynamically (like via AJAX), call this function again to initialize new countdowns
    document.addEventListener("offersUpdated", () => {
        initializeCountdowns();
    });
</script>
