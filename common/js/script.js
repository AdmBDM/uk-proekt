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

	//организация "карусели" на главной странице
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

	$("[href*='/#btn-menu']").each(function () {
		let $id = $(this).attr('href').split('#');
		let $newEl = $("<div class='" + $(this).attr('class') +
			"' id='" + $id[1] + "'>" +
			$(this).html() + "</div>");
		$(this).replaceWith($newEl);
	});

	//фиксация верхнего меню при прокрутке
	$(window).scroll(function () {
		if($(this).scrollTop() > 170){
			// $('.header-nav').addClass('fixed');
			$('#ukp-nav').addClass('fixed');
		}
		else if ($(this).scrollTop() < 170){
			// $('.header-nav').removeClass('fixed');
			$('#ukp-nav').removeClass('fixed');
		}
	});
});

$('#btn-generate-pswd').click(function () {
	$.ajax({
		type: 'post',
		// "url": '../generate-pswd',
		url: 'generate-pswd',
		data: {
			'pswd': $('#pswd').val(),
		},
		success: function (res) {
			if (res.alert) $('#pswd_hash').val(res.pswd); else alert('Пароль не может быть пустым!');
		},
		error: function (request, status, error) {
			alert('Ошибка вышла!');
		},
	})
});

$("[id*='year-']").click(function () {
	let $curYear = $(this).html();
	$("[id*='year-']").each(function (index, element) {
		let $curNews = $("#news-content-" + $(element).html());
		let $curEl = $(element).html();
		if ($curYear === $curEl) {
			$curNews.removeAttr('hidden');
		} else {
			$curNews.attr('hidden', 'hidden');
		}
	});
	// console.log($(this).html());
});

function modeView(group) {
	let gr = `#mode${group}`;
	let ti = `#tinfo${group}`;

	if ($(gr).html() === ' ▼ ') {
		$(gr).html(' ▲ ');
		$(ti).removeClass('not_show');
	}
	else {
		$(gr).html(' ▼ ');
		$(ti).addClass('not_show');
	}
}
