document.addEventListener('DOMContentLoaded', function () {
	(function initFun() {
		if (window.innerWidth < 1200) {

		}

		window.addEventListener('winResized', initFun);
	})();

	// init toggle button
	Toggle.init('.js-toggle');

	Toggle.onChange = function (tgl, state) {

	}

	// popup init
	Popup.init('.js-open-popup');
	MediaPopup.init('.js-open-media-popup');

	// menu
	if (window.innerWidth < 1000) {
		Menu.init('.menu__item_has-children', '.menu__sub-menu');
	}

	// mobile nav
	MobNav.init({
		openBtn: '.js-open-menu',
		closeBtn: '.js-close-menu',
		navId: 'header-mob-menu'
	});

	// bubble
	Bubble.init({
		element: '.js-bubble'
	});

	// accord
	Accord.init('.accord__button');

	// more
	More.init('.more__btn');

	// tab
	Tab.init({
		container: '.tab',
		button: '.tab__button',
		item: '.tab__item'
	});

	// video
	Video.init('.video__btn-play');

	// fullscreen scroll
	FsScroll.init({
		container: '.fsscroll',
		screen: '.fsscroll__screen',
		duration: 700
	});

	// anchor
	Anchor.init('.js-anchor', 700, 100);

	// get content via Ajax
	var getCont = new GetContentAjax({
		eventBtn: '.js-get-content-ajax',
		event: 'click',
		outputDiv: '#output-ajax',
		sourceFile: '/get-content-ajax.php'
	});

	getCont.output = function (response) {
		var result = response.match(/\<div id\="source"\>([\s\S]*?)\<\/div\>/);

		return result[1];
	}

	// submit form
	Form.init('.form');

	Form.onSubmit = function (form, callback) {

	}
});