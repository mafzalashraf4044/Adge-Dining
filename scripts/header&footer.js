//Side Nav Initializatino for Mobile Devices
$(".button-collapse").sideNav();

//Carousel Initialization
$(document).ready(function() {
    $('.carousel').carousel();
});

$('.carousel.carousel-slider').carousel({
    full_width: true
});

//Form Validation for Subscription Form In footer

$('input').on("invalid", function(e) {
    e.preventDefault();
    console.log(e.target);
    $(e.target).next().next().removeClass('hidden');
    $(e.target).next().next().addClass('error');
});
