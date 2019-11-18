$(function () {
	let mainMenu = $('#js-main-menu');

	let sandwitch = function () {
		$('#js-sandwitch').on('click', function () {
			if ($(window).width() < 1100) {
				$(this).toggleClass('sandwitch--active');
				mainMenu.toggleClass('active');
				$('body').toggleClass('fixed');
			}
		});
	};
	sandwitch();

	let mainSlider = function () {
		let slider = $('#js-main-slider');
		slider.slick({
			arrows: false,
			dots: true,
			// responsive: [
			// 	{
			// 		breakpoint: 600,
			// 		settings: {
			// 			dots: false
			// 		}
			// 	},
			// ]

		});

		$('.main-slider-arrows .slider-arrow--right').click(function () {
			slider.slick('slickNext');
		});

		$('.main-slider-arrows .slider-arrow--left').click(function () {
			slider.slick('slickPrev');
		});
	};
	mainSlider();


	let ideaSlider = function () {
		$('#js-idea-slider').slick({
			arrows: false,
			// autoplay: true
		});
	};
	ideaSlider();

	let partnersSlider = function () {
		let slider = $('#js-partners-slider');
		slider.slick({
			dots: true,
			arrows: false,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
					breakpoint: 600,
					settings: {
						dots: false,
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}

			]

		});
		$('.partners-slider-wrap .slider-arrow--right').click(function () {
			slider.slick('slickNext');
		});

		$('.partners-slider-wrap .slider-arrow--left').click(function () {
			slider.slick('slickPrev');
		});
	};
	partnersSlider();

	let showLikes = function () {
		let newsLike = $('.news__like svg');

		newsLike.on('click', function () {
			if ($(this).hasClass('active')) {
				return false;
			}
			$(this).addClass('active');
			$('.news__like-number').html('1');
		});
	};
	showLikes();

	let showAddressString = function () {
		let windowHref = $(location).attr('href');
		$('#js-show-address-string').on('click', function (e) {
			e.preventDefault();
			$('#js-modal-link').fadeIn();
			$('#js-modal-link .modal-link__content').html(windowHref);
		});

		$('.modal-link-close').on('click', function () {
			$('#js-modal-link').fadeOut();
		});
		$('.modal-link-copy').on('click', function () {
			$('#js-modal-link .modal-link__content').select();
			document.execCommand("copy");
		});
	};
	showAddressString();

	let scrollToTop = function () {
		let jsUp = $('#js-up');
		$(document).on('scroll', function () {
			if ($(window).width() < 768) {
				if ($(document).scrollTop() > 800) {
					jsUp.fadeIn();
				} else if ($(document).scrollTop() < 800) {
					jsUp.fadeOut();
				}
			}
		});

		$('#js-up').on('click', function (e) {
			e.preventDefault();


			$('html, body').animate({
				scrollTop: 0
			}, 1500);
		});
	};
	scrollToTop();

	let changeMenuClass = function () {
		let url = location.href;
		if (url.indexOf('/ru/') !== -1) {
			$('.main-menu').addClass('ru');
			$('.main-header-bottom .logo').addClass('ru');
		}
	};
	changeMenuClass();

	let partnersHeight = function () {
		let partnersElement = $('#js-partners-slider .partners-slider__item');
		partnersElement.equalHeights();
	};
	partnersHeight();

	let lastPostsHeight = function(){
		$('#js-last-posts .last-posts__text h3').equalHeights();
	};
	lastPostsHeight();

	let mainMenuActiveElemOfSubMenu = function () {
		let url = location.href;
		let news = 'news';

		if(url.includes(news)) {
			$('#js-main-menu li:nth-child(5)').addClass('current-menu-item');
		}
	};
	mainMenuActiveElemOfSubMenu();

	let removeClassActiveOfSecondMenuELem = function () {
		if($('#js-main-menu li:first-child').hasClass('current-menu-item')){
			$('#js-main-menu li:nth-child(2)').removeClass('current-menu-item');
		}
	};
	removeClassActiveOfSecondMenuELem();

	let closeMenuOnClickAbout = function () {
		$('#js-main-menu li a').on('click', function () {
			if($(window).width() < 1100){
				let href = $(this).attr('href');
				if(href.includes('js-offers')){
					$('#js-sandwitch').removeClass('sandwitch--active');
					mainMenu.toggleClass('active');
					$('body').removeClass('fixed');
				}
			}
		});
	};
	closeMenuOnClickAbout();

});
//islands#grayStretchyIcon



