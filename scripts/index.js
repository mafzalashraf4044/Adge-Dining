//Side Nav Initializatino for Mobile Devices
$(".button-collapse").sideNav();

//Full Width slide show
// $("#slideShow > div:gt(0)").hide();

// setInterval(function() { 
//   $('#slideShow > div:first')
//     .fadeOut(400)
//     .next()
//     .fadeIn(400)
//     .end()
//     .appendTo('#slideShow');

// },  5000);

$(document).ready(function () {
  $('.carousel').carousel();
});

$('.carousel.carousel-slider').carousel({ full_width: true });
