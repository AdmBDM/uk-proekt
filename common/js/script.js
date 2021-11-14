$(document).ready(function() {
	let $url = '#';
	let $sc_main = $('#section-main');
	let $sc_about = $('#section-about');
	let $sc_info = $('#section-info');
	let $sc_license = $('#section-license');
	let $sc_open_data = $('#section-open_data');
	let $sc_news = $('#section-news');
	let $sc_contact = $('#section-contact');

	//Начальное включение блоков
	$sc_main.show();
	$sc_about.show();
	$sc_info.show();
	$sc_license.show();
	$sc_open_data.hide();
	$sc_news.hide();
	$sc_contact.hide();

	// Owl Carousel
	let main_slider = $("#main-slider");
	main_slider.owlCarousel({
		// items: 3,
		items: 1,
		// margin: 10,
		margin: 3,
		loop: true,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayTimeout: 7000,
		smartSpeed: 500,
	});

	//включение выключение блоков согласно нажатой кнопке меню
	$("[id*='btn-menu-']").click(function() {
		$sc_main.hide();
		$sc_about.hide();
		$sc_info.hide();
		$sc_license.hide();
		$sc_open_data.hide();
		$sc_news.hide();
		$sc_contact.hide();

		if ($(this).attr('id') === 'btn-menu-main' || $(this).attr('id') === 'btn-menu-f-main') {
			$sc_main.show();
			$sc_about.show();
			$sc_info.show();
			$sc_license.show();
			window.location.href = '/#section-about';
		}

		// if ($(this).attr('id') === 'btn-menu-main' || $(this).attr('id') === 'btn-menu-f-main') {
		// 	$sc_main.show();
		// 	$sc_about.show();
		// 	$sc_info.show();
		// 	$sc_license.show();
		// }

		if ($(this).attr('id') === 'btn-menu-open_data' || $(this).attr('id') === 'btn-menu-f-open_data') {
			$sc_open_data.show();
			window.location.href = '#';
		}

		if ($(this).attr('id') === 'btn-menu-news' || $(this).attr('id') === 'btn-menu-f-news') {
			$sc_news.show();
			window.location.href = '#';
		}

		if ($(this).attr('id') === 'btn-menu-contact' || $(this).attr('id') === 'btn-menu-f-contact') {
			$sc_contact.show();
			window.location.href = '#';
		}
	});
});
