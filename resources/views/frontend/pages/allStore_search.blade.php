@forelse ($latest_stores as $latest_store)
    <div class="col-lg-3">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-0 rounded-2">
                <!-- Store Banner -->
                <div class="main-store-banner">
                    <img class="img-fluid rounded-2"
                        src="{{ !empty(optional($latest_store->brand)->image) ? url('storage/' . optional($latest_store->brand)->image) : asset('images/no-image(random).png') }}"
                        alt="arong-banner.jpg" />
                </div>
                <!-- Store Logo And Rating -->
                <div class="px-3 pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="store-logo">
                            <img class="img-fluid"
                                src="{{ !empty(optional($latest_store->brand)->logo) ? url('storage/' . optional($latest_store->brand)->logo) : asset('images/no-image(random).png') }}"
                                alt="arong-logo.png" />
                        </div>
                        <div class="store-rating">
                            <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}"
                                class="btn btn-common-one rounded-circle store-btn"><i class="fa-solid fa-store"
                                    aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Store Info -->
                    <div class="pt-4 d-flex justify-content-between store_title">
                        <a href="{{ route('vendor.stores', optional($latest_store->brand)->slug) }}">
                            <div>
                                {{-- <h5 style="width: 98%;margin-bottom: 0.75rem;">{{ $latest_store->title }}</h5> --}}
                                <h6>{{ $latest_store->title }}</h6>
                            </div>
                        </a>
                        <div>
                            <button class="btn border-0 p-0 m-0 ps-2">
                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3" title="Store Location"
                                    data-bs-toggle="modal" data-bs-target="#store-Location" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                <span class="bg-danger badge fw-normal">
                    <i class="fa-solid fa-percent pe-2"></i>OFFER
                </span>
                <small class="text-sm">
                    Get UpTo <span class="main-color">{{ $latest_store->badge }}</span> Off
                </small>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Store available right now.</h5>
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
