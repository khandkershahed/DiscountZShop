// JavaScript to hide the loader once the page is fully loaded
// JavaScript to hide the loader once the page is fully loaded

$(document).ready(function () {
    $(".hero-slider").slick({
        autoplay: true,
        slidesToShow: 1,
        dots: true,
        autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
        arrows: false,
        fade: true, // Enable fade effect
    });

    $(".available-coupon-slider").slick({
        autoplay: true,
        slidesToShow: 3, // Default number of slides to show
        dots: false,
        gap: 10,
        autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
        arrows: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });

    // Custom Next button
    $(".custom-next").click(function () {
        $(".available-coupon-slider").slick("slickNext");
    });

    // Custom Previous button
    $(".custom-prev").click(function () {
        $(".available-coupon-slider").slick("slickPrev");
    });

    $(".grab-slider").slick({
        autoplay: true,
        slidesToShow: 1,
        dots: false,
        autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
        arrows: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 1, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });

    // Custom Next button
    $(".grab-custom-next").click(function () {
        $(".grab-slider").slick("slickNext");
    });

    // Custom Previous button
    $(".grab-custom-prev").click(function () {
        $(".grab-slider").slick("slickPrev");
    });

    $(".deal-slider").slick({
        autoplay: true,
        slidesToShow: 1,
        dots: false,
        autoplaySpeed: 3000,
        arrows: false,
    });

    $(".store-hero-slider").slick({
        autoplay: true,
        slidesToShow: 1,
        dots: true,
        autoplaySpeed: 3000,
        arrows: false,
    });

    // Custom Next button
    $(".deal-custom-next").click(function () {
        $(".deal-slider").slick("slickNext");
    });

    // Custom Previous button
    $(".deal-custom-prev").click(function () {
        $(".deal-slider").slick("slickPrev");
    });
});

$(document).ready(function () {
    $(".slick-slider-product").slick({
        autoplay: true,
        slidesToShow: 3,
        autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".slick-slider-normal").slick({
        autoplay: true,
        slidesToShow: 2,
        autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".slick-slider-partners").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        arrows: false,
        swipe: false,
        slidesToShow: 7,
        cssEase: "linear",
        pauseOnFocus: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 3, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 3, // Show 1 slide at a time
                },
            },
        ],
    });
});
$(document).ready(function () {
    $(".store-offers").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        arrows: true,
        swipe: false,
        slidesToShow: 4,
        // cssEase: 'linear',
        pauseOnFocus: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });
});
$(document).ready(function () {
    $(".store-popular-offer").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        arrows: true,
        swipe: false,
        slidesToShow: 4,
        // cssEase: 'linear',
        pauseOnFocus: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".slick-slider-footer-slider").slick({
        autoplay: true,
        slidesToShow: 1,
        autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
        arrows: false,
        dots: true, // Dots for larger screens
        fade: true,
        responsive: [
            {
                breakpoint: 1024, // At screen widths of 1024px and below
                settings: {
                    slidesToShow: 3, // Show 3 slides at a time
                    dots: true, // Keep dots for medium devices
                },
            },
            {
                breakpoint: 768, // At screen widths of 768px and below
                settings: {
                    slidesToShow: 2, // Show 2 slides at a time
                    dots: false, // Remove dots for smaller devices
                },
            },
            {
                breakpoint: 480, // At screen widths of 480px and below
                settings: {
                    slidesToShow: 1, // Show 1 slide at a time
                    dots: false, // Remove dots for very small devices
                },
            },
        ],
    });
});

// Copy Coupon Code

function copyCouponCode(couponCode) {
    // Create a temporary input element to copy the coupon code
    var tempInput = document.createElement("input");
    tempInput.style.position = "absolute";
    tempInput.style.left = "-9999px";
    tempInput.value = couponCode;

    // Append to the document and select the input value
    document.body.appendChild(tempInput);
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Execute the copy command
    document.execCommand("copy");

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Show an alert
    Swal.fire({
        icon: "success",
        title: 'Coupon code "' + couponCode + '" copied to clipboard!',
    });
    // alert('Coupon code "' + couponCode + '" copied to clipboard!');
}
$(document).ready(function () {
    $(".copy-btn").click(function () {
        // Get the text inside the span
        var couponCode = $(this).data("coupon_id");
        // alert(couponCode);
        // Create a temporary input element
        var tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(couponCode).select();

        // Copy the text inside the input element
        document.execCommand("copy");

        // Remove the temporary input element
        tempInput.remove();

        // Show an alert
        Swal.fire({
            icon: "success",
            title: "Copied the code: " + couponCode,
        });
        // alert("Copied the code: " + couponCode);
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".countdown-hms").forEach((element) => {
        new CountdownHMS(element, "2024-09-30");
    });
});

class CountdownWithDays {
    constructor(element, targetDate) {
        this.element = element;
        this.targetDate = new Date(targetDate).getTime();
        this.initialize();
    }

    initialize() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        const x = setInterval(() => {
            const now = new Date().getTime();
            const distance = this.targetDate - now;

            this.element.querySelector(".days").innerText = Math.floor(
                distance / day
            );
            this.element.querySelector(".hours").innerText = Math.floor(
                (distance % day) / hour
            );
            this.element.querySelector(".minutes").innerText = Math.floor(
                (distance % hour) / minute
            );
            this.element.querySelector(".seconds").innerText = Math.floor(
                (distance % minute) / second
            );

            if (distance < 0) {
                clearInterval(x);
            }
        }, 1000);
    }
}

// Usage example:
document.querySelectorAll(".countdown-with-days").forEach((element) => {
    new CountdownWithDays(element, "2024-09-30");
});

(function () {
    const heart = document.getElementById("heart");
    heart.addEventListener("click", function () {
        heart.classList.toggle("red");
    });
})();

// id call

document.querySelectorAll(".store-single li").forEach((item) => {
    item.addEventListener("click", function () {
        // Remove active class from all items
        document.querySelectorAll(".store-single li").forEach((li) => {
            li.classList.remove("active");
        });
        // Add active class to clicked item
        this.classList.add("active");
        // Scroll to the corresponding section
        const targetId = this.getAttribute("data-target");
        document
            .getElementById(targetId)
            .scrollIntoView({ behavior: "smooth" });
    });
});

// Off CSS scroll behavior

document.addEventListener("DOMContentLoaded", () => {
    // Override CSS scroll behavior
    document.documentElement.style.scrollBehavior = "auto";
    document.body.style.scrollBehavior = "auto";

    // Prevent JavaScript-based smooth scrolling
    window.scrollTo = function (x, y) {
        window.scroll({
            top: y,
            left: x,
            behavior: "auto",
        });
    };

    // Handle elements that may have smooth scrolling
    const allElements = document.querySelectorAll("*");
    allElements.forEach((el) => {
        el.style.scrollBehavior = "auto";
    });
});

// Slect Inputs Bootstrap
$(document).ready(function () {
    $("#custom_select1").select2({
        theme: "bootstrap-5",
        placeholder: $(this).data("placeholder"),
    });
    $("#custom_select2").select2({
        theme: "bootstrap-5",
        placeholder: $(this).data("placeholder"),
    });
    $("#custom_select3").select2({
        theme: "bootstrap-5",
        placeholder: $(this).data("placeholder"),
    });
});

// Countdown Timmer For Offers

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
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
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
            timerElement.innerHTML = "Available";
        }
    });
});

// Add item In wishlist
$(".add_to_wishlist").click(function () {
    var product_id = $(this).data("product_id");
    $.ajax({
        type: "POST",
        dataType: "json",
        data: {
            product_id: product_id,
        },
        url: "/add-to-wishlist",
        success: function (data) {
            wishlist();
            // Start Message
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
            });
            if ($.isEmptyObject(data.error)) {
                Toast.fire({
                    type: "success",
                    icon: "success",
                    title: data.success,
                });
            } else {
                Toast.fire({
                    type: "error",
                    icon: "error",
                    title: data.error,
                });
            }
        },
    });
});
// Load Wishlist
function wishlist() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/get-wishlist",
        success: function (response) {
            $("#cartWishlistQty").text(response.cartWishlistQty);
            $("#cartWishlistMobileQty").text(response.cartWishlistMobileQty);
            var tableHtml = "";
            var serialNumber = 1;
            if (response.cartWishlist.length === 0) {
                tableHtml = `
                        <h4 class="my-2 text-center">Wishlist List is Empty</h4>
                    `;

                $("#wishlistLink").hide();
            } else {
                $.each(response.cartWishlist, function (key, value) {
                    //console.log('http://127.0.0.1:8000/', value.options.image);
                    var offerDetailsUrl = "/offer-details/" + value.slug;
                    tableHtml += `<tr class="">

                            <td valign="middle">${serialNumber++}.</td>

                            <td>
                                <img class="img-fluid rounded-2" width="60px"
                                        src="http://www.discountzshop.com/storage/${
                                            value.options.image
                                        }"
                                        alt="">
                            </td>

                            <td valign="middle">
                                <p><a href="${offerDetailsUrl}">${
                        value.name
                    }</a></p>
                            </td>

                            <td valign="middle">
                                <div class="text-center">
                                    <a type="submit" style="cursor:pointer" id="${
                                        value.rowId
                                    }" onclick="wishlistRemove(this.id)">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>

                                </div>
                            </td>

                        </tr>`;
                });

                $("#wishlistLink").show(); // Show the comparison link when list has items
            }
            $("#wishlist").html(tableHtml);
        },
    });
}
wishlist();

// Remove item from wishlist via AJAX request

/* @param {string} rowId - The ID of the wishlist item to remove.*/
function wishlistRemove(rowId) {
    $.ajax({
        type: "GET",
        url: "/wishlist/product/remove/" + rowId,
        dataType: "json",
        success: function (data) {
            // Refresh the wishlist after removal
            wishlist();

            // Configure SweetAlert2 Toast notification
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                icon: "success",
                showConfirmButton: false,
                timer: 3000,
            });

            // Show success or error message
            if ($.isEmptyObject(data.error)) {
                Toast.fire({
                    icon: "success",
                    title: data.success,
                });
            } else {
                Toast.fire({
                    icon: "error",
                    title: data.error,
                });
            }
        },
    });
}
