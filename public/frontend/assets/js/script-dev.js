// JavaScript to hide the loader once the page is fully loaded
document.addEventListener("DOMContentLoaded", function() {
  // Hide the loader
  document.getElementById("loader").style.display = "none";
  // Show the content
  document.getElementById("content").style.display = "block";
});

$(document).ready(function () {
  $(".hero-slider").slick({
    autoplay: true,
    slidesToShow: 1,
    dots: true,
    autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
    arrows: false,
    fade: true // Enable fade effect
  });

  $(".available-coupon-slider").slick({
    autoplay: true,
    slidesToShow:4,
    dots: false,
    autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
    arrows: false,
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
  });
});

$(document).ready(function () {
  $(".slick-slider-normal").slick({
    autoplay: true,
    slidesToShow: 2,
    autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
    arrows: true,
    dots: false,
  });
});

$(document).ready(function () {
  $(".slick-slider-partners").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    arrows: false,
    swipe: false,
    slidesToShow: 11,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
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
  });
});

$(document).ready(function () {
  $(".slick-slider-footer-slider").slick({
    autoplay: true,
    slidesToShow: 1,
    autoplaySpeed: 3000, // Adjust autoplay speed in milliseconds
    arrows: false,
    dots: true,
    fade: true,
  });
});

// Copy Coupon Code
$(document).ready(function () {
  $(".copy-btn").click(function () {
    // Get the text inside the span
    var couponCode = $("#coupon-code").text();

    // Create a temporary input element
    var tempInput = $("<input>");
    $("body").append(tempInput);
    tempInput.val(couponCode).select();

    // Copy the text inside the input element
    document.execCommand("copy");

    // Remove the temporary input element
    tempInput.remove();

    // Show an alert
    alert("Copied the code: " + couponCode);
  });
});


class CountdownHMS {
  constructor(element, targetDate) {
    this.element = element;
    this.targetDate = new Date(targetDate).getTime();
    this.initialize();
  }

  initialize() {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60;

    const x = setInterval(() => {
      const now = new Date().getTime();
      const distance = this.targetDate - now;

      this.element.querySelector(".hours").innerText = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / hour
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

document.querySelectorAll(".countdown-hms").forEach((element) => {
  new CountdownHMS(element, "2024-09-30");
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

      this.element.querySelector(".days").innerText = Math.floor(distance / day);
      this.element.querySelector(".hours").innerText = Math.floor((distance % day) / hour);
      this.element.querySelector(".minutes").innerText = Math.floor((distance % hour) / minute);
      this.element.querySelector(".seconds").innerText = Math.floor((distance % minute) / second);

      if (distance < 0) {
        clearInterval(x);
      }
    }, 1000);
  }
}

// Usage example:
document.querySelectorAll('.countdown-with-days').forEach(element => {
  new CountdownWithDays(element, "2024-09-30");
});

(function() {
  const heart = document.getElementById('heart');
  heart.addEventListener('click', function() {
    heart.classList.toggle('red');
  });
})();

// id call

document.querySelectorAll('.store-single li').forEach(item => {
  item.addEventListener('click', function() {
      // Remove active class from all items
      document.querySelectorAll('.store-single li').forEach(li => {
          li.classList.remove('active');
      });
      // Add active class to clicked item
      this.classList.add('active');
      // Scroll to the corresponding section
      const targetId = this.getAttribute('data-target');
      document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
  });
});