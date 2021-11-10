$(document).ready(function() {
	// Owl Carousel
	let main_slider = $("#main-slider");
	main_slider.owlCarousel({
		// items: 3,
		items: 1,
		// margin: 10,
		margin: 5,
		loop: true,
		nav: false,
		dots: false,
		// autoplay: true,
		autoplayTimeout: 7000,
		smartSpeed: 500,
	});
});
