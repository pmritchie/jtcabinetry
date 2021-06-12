/**
 * External Dependencies
 */
require("intersection-observer");
import lozad from "lozad";
import retina from "retinajs";

const targets = document.querySelectorAll(".lozad");

const lazyLoad = target => {
  const io = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        const src = img.getAttribute("data-src");
        img.setAttribute("src", src);
        observer.disconnect();
      }
    });
  });

  io.observe(target);
};

// $(window).scroll(function() {
//   if ($(document).scrollTop() == 0) {
//     $("#main-header").removeClass("is-sticky");
//   } else {
//     $("#main-header").addClass("is-sticky");
//   }
// });

$(document).ready(function() {
  // Bootstrap dropdown
  // $(window).resize(function() {
  //   if ($(window).width() < 768) {
  //     $(".dropdown-toggle").attr("data-toggle", "dropdown");
  //   } else {
  //     $(".dropdown-toggle").removeAttr("data-toggle dropdown");
  //   }
  // });

  $('.hero-slider').slick({
    mobileFirst: true,
    dots: false,
    infinite: true,
    fade: true,
    speed: 4000,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: false,
    nextArrow: false,
  })
});

