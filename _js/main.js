// Status Indication

var statusIndication = function() {
	var pathName = window.location.pathname;
	var pathArray = pathName.split('/');
	var arrayLength = pathArray.length;
	var href = pathArray[arrayLength-1];
	var directory = pathArray[arrayLength-2];

	var mainMenu = function() {
		var anchor;
		var anchorArray;
		var lengthArray;
		var folder;
		$('.header__nav a').each(function() {
			anchor = $(this).attr('href');
			anchorArray = anchor.split('/');
			lengthArray = anchorArray.length;
			folder = anchorArray[lengthArray-2];
			if (folder == directory) {
				$(this).parent().addClass('active');
			}
		});
	}
	mainMenu();

	var subNavMenu = function() {
		var anchor;
		var anchorArray;
		var lengthArray;
		var link;
		$('.subNav a').each(function() {
			anchor = $(this).attr('href');
			anchorArray = anchor.split('/');
			lengthArray = anchorArray.length;
			link = anchorArray[lengthArray-1];
			if (link == href) {
				$(this).parent().addClass('active');
			}
		});
	}
	subNavMenu();
}
statusIndication();

// Home Page Scroll Arrows

TweenMax.staggerFrom([$('.home__scroll i:first-child'), $('.home__scroll i:nth-of-type(2)')], 0.25, { visibility: 'hidden', repeatDelay: 1.5, repeat: -1 }, 0.35 );

// History Page Scroll Arrows
TweenMax.staggerFrom([$('.history__scroll i:first-child'), $('.history__scroll i:nth-of-type(2)')], 0.25, { visibility: 'hidden', repeatDelay: 1.5, repeat: -1 }, 0.35 );

// "What is Charis?" Accordion

var accordionToggle = function(){

	TweenMax.set( $('.accordion__question.open + .accordion__content'), { display: 'block'});
	TweenMax.set( $('.accordion__question.open .accordion__plus img'), { rotation: 45 });

	$('.accordion__question').on('click', function(){
		var current = $(this);
		var plus = current.children('.accordion__plus').children('img');

		current.siblings().slideToggle('fast');
		
		if (current.hasClass('open')) {
			TweenMax.to(plus, 0.2, { rotation: 0 });
			current.toggleClass('open');
		} else {
			TweenMax.to(plus, 0.2, { rotation: 45 });
			current.toggleClass('open');
		}
	});
};
accordionToggle();

// Members Map

var zoom = function(current, scale, x, y, name, i){
	var $worldMap = $('.worldMap');
	var $labels = $('.map__label');
	var $continent = $('.continent[id=' + current +']');
	var top = coords[i].buttonTop;
	var left = coords[i].buttonLeft;

	var mapInfoLeft = $('.map__info').css('left');
	var mapInfoTop = $('.map__info').css('top');
	var mapInfoWidth = $('.map__info').css('width');

	if ($(window).width() >= 975 || $(window).width() <= 665) {
		var buttonLeft = parseInt(mapInfoLeft.slice(0,3));
		buttonLeft = buttonLeft + parseInt(mapInfoWidth.slice(0,3)) - 17.5;
	} else {
		var buttonLeft = '98%';
	}

	var buttonTop = (parseInt(mapInfoTop.slice(0,3)) - 17.5);
	

	var $button = $('.map__zoom[data-name=' + current + ']')
	console.log($button);	

	if ($('#map').attr('class') === 'zoomed') {

		// Zoom Out
		TweenMax.to([$('.map__info__country'), $('.map__info__list')], 0, { opacity: 0, visibility: "hidden" });
		TweenMax.to($continent, 1, { scale: 1, x: 0, y: 0 });
		TweenMax.to($('.continent'), 1, { opacity: 1, visibility: "visible" });
		TweenMax.to($('.map__zoom').not($button), 1, { opacity: 1, visibility: "visible", delay: 1.25});
		TweenMax.to($('.map__label'), 1, { opacity: 1, visibility: "visible", delay: 1.25});
		TweenMax.to($button, 1, { left: left, top: top })
		TweenMax.to($button, 0.25, { rotation: 0, delay: 1 })
		TweenMax.to($button, 1, { x: 0, y: 0 })
		TweenMax.to($('.map__info'), 1, { opacity: 0, visibility: "hidden" });
		TweenMax.to($('.country.active'), 1, { fill: "#c4c4c4" });
		TweenMax.to([$('.map__info__country'), $('.map__info__list')], 0.25, { opacity: 0, visibility: "hidden" });
		$('.map__info__country').html('');
		$('.map__info__status').html('');
		$('.map__info__delegates').html('');
		$('.map__info__churches').html('');

		$('.country').attr('class', 'country');
		$('.map__heading').text('Choose a Region to Explore:');
		$('#map').attr('class', '');
	} else {
		// Zoom In
		$('.country').attr('class', 'country zoomed');
		$('.country[data-index="0"]').attr('class', 'country zoomed active');
		$('.map__info__country').html(info[current][0].country);
		$('.map__info__status').html(info[current][0].status);
		$('.map__info__delegates').html(info[current][0].delegates);
		$('.map__info__churches').html(info[current][0].churches);

		TweenMax.to($continent, 1, { scale: scale, x: x, y: y });
		TweenMax.to($('.continent').not($continent), 1, { opacity: 0, visibility: "hidden" });
		TweenMax.to($('.map__zoom').not($button), 1, { opacity: 0, visibility: "hidden" });
		TweenMax.to($('.map__label'), 1, { opacity: 0, visibility: "hidden" });
		TweenMax.to($button, 1, { left: buttonLeft, top: buttonTop })
		TweenMax.to($button, 0.25, { rotation: 45, delay: 1 })
		TweenMax.to($('.map__info'), 1, { opacity: 1, visibility: "visible", delay: 1.25});
		TweenMax.to($('.country.active'), 1, { fill: "#097888", delay: 1.25});
		TweenMax.to([$('.map__info__country'), $('.map__info__list')], 1, { opacity: 1, visibility: "visible", delay: 2});
		$('.map__heading').html(name + ' <span>(select a country)</span>');
		$('#map').attr('class', 'zoomed');
	}

	
};

// Trigger Zoom Function when Zoom Button is Clicked
$('.map__zoom, .map__label').on('click', function(){
	var $this = $(this);
	
	$(coords).each(function(i){
		if (coords[i].continent === $this.attr('data-name')) {
			zoom($this.attr('data-name'), coords[i].scale, coords[i].x, coords[i].y, coords[i].name, i);
		}
	})
});

// Toggle selected country

$('.country').on('click', function(){
	if ($('#map').attr('class') === 'zoomed') {
		if ($(this).attr('class') === "country zoomed active") {
			console.log('Active');
		} else {
			console.log('Inactive');

			var i = $(this).attr('data-index');
			var continent = $(this).parent().attr('id');

			console.log(i + ' ' + continent);

			$('.map__info__country', '.map__info__list').css({
				'opacity': "0",
				'visibility': 'hidden'
			});

			TweenMax.to([$('.map__info__country'), $('.map__info__list')], 0, { opacity: 0, visibility: "hidden" });

			$('.map__info__country').html(info[continent][i].country);
			$('.map__info__status').html(info[continent][i].status);
			$('.map__info__delegates').html(info[continent][i].delegates);
			$('.map__info__churches').html(info[continent][i].churches);

			$(this).attr('class', 'country zoomed active');
			$('.country.zoomed').not($(this)).attr('class', 'country zoomed');
			TweenMax.to($('.country.zoomed').not('.country.zoomed.active'), 0, { fill: "#c4c4c4" });
			TweenMax.to($(this), 0.5, { fill: "#097888" });
			TweenMax.to([$('.map__info__country'), $('.map__info__list')], 1.25, { opacity: 1, visibility: "visible", delay: 0.25});
		};
	}
});

// Mobile Hamburger Menu Animation

$('.header__buttons').on('click', function(){

	var animateHamburger = new TimelineMax();

	if ($('.header__buttons').hasClass('active')) {

		$('html, body').css({
		    'overflow-y': 'scroll',
		    'height': 'auto'
		});
		
		$('.header__buttons').removeClass('active');

		TweenMax.to($('.header__nav'), 0.5, { right: -250 });

		setTimeout(function(){ $('.header__nav').hide(); }, 500);

		$('.closeEverything').removeClass('active');

		animateHamburger.to( $('.hamburger__top'), 0.25, { rotation: 0, transformOrigin: 'center center' })
						.to( $('.hamburger__bottom'), 0.25, { rotation: 0, transformOrigin: 'center center' }, "-=0.25" )
						.to( $('.hamburger__middle'), 0, { opacity: 1 })
						.to( $('.hamburger__top'), 0.25, { y: 0, transformOrigin: 'center center' })
						.to( $('.hamburger__bottom'), 0.25, { y: 0, transformOrigin: 'center center' }, '-=0.25' );

	} else {

		$('html, body').css({
		    'overflow-y': 'hidden',
		    'height': '100%'
		});

		$('.header__buttons').addClass('active');

		$('.header__nav').show();

		TweenMax.to($('.header__nav'), 0.5, { right: 0 });

		$('.closeEverything').addClass('active');

		animateHamburger.to( $('.hamburger__top'), 0.25, { y: '+=8px', transformOrigin: 'center center' })
						.to( $('.hamburger__bottom'), 0.25, { y: '-=8px', transformOrigin: 'center center' }, "-=0.25" )
						.to( $('.hamburger__middle'), 0, { opacity: 0 })
						.to( $('.hamburger__top'), 0.25, { rotation: 45, transformOrigin: 'center center' })
						.to( $('.hamburger__bottom'), 0.25, { rotation: -45, transformOrigin: 'center center' }, '-=0.25' );

	}
});

$('.closeEverything').on('click', function(){

		$('.header__buttons').removeClass('active');

		$('html, body').css({
		    'overflow-y': 'scroll',
		    'height': 'auto'
		});

		TweenMax.to($('.header__nav'), 0.5, { right: -250 });

		$('.closeEverything').removeClass('active');
});

// Charis History Page

var controller = new ScrollMagic.Controller();

var mapInitial = function(){
	if ($(window).width() > 768) {
		var mapContTween = TweenMax.to($('.container--historyMap'), 1, { top: '50%' });

		var scene = new ScrollMagic.Scene({
			offset: 0,
			duration: 565
		})
		.setTween(mapContTween)
		.addTo(controller);
	}
};

var tweenIterator = function(){
	
	$('.timeline__event').each(function(){
		var currentBox = this;

		var tweenBox = TweenMax.from(currentBox, 1, { opacity: 0});

		var boxScene = new ScrollMagic.Scene({ triggerElement: currentBox })
			.setTween(tweenBox)
			.addTo(controller);
	});
};

var toggleCountry = function(){

	$('.timeline__dot').each(function(i){
		var currentDot = this;
		var dot = $(this).attr('data-dot');
		var grayTrigger = $(this).offset().top + ( $(this).parent().height() / 2 );

		var tweenCountry = TweenMax.to($('.histCountry[ data-name = ' + dot + ']'), 1, { fill: '#097888' });

		var countryScene = new ScrollMagic.Scene({ triggerElement: currentDot })
		.setTween(tweenCountry)
		.addTo(controller);

		var tweenGray = TweenMax.to($('.histCountry[ data-name = ' + dot + ']'), 1, { fill: '#696969' });

		var countryScene = new ScrollMagic.Scene({ offset: grayTrigger })
		.setTween(tweenGray)
		.addTo(controller);
	});
}


var bottomMap = function(){
	if ($(window).width() > 768) {
		var duration = $('.footer__image').height() + $('footer').height();

		var mapEndTween = TweenMax.to($('.container--historyMap'), 1, { top: '+=' + -duration, ease: Power0.easeNone });

		var lastScene = new ScrollMagic.Scene({
			triggerElement: ".history--last h1",
			duration: duration
		})
		.setTween(mapEndTween)
		.addTo(controller);
	}
};

// Photos.php Slideshow Centering

$('.slideControls').on('click', function(){
	var currentSlide = $('.fancybox-inner .cycle-slide.cycle-slide-active').next();

	if ( currentSlide.height() > currentSlide.width() ) {
		var imageWidth = currentSlide.width();
		var containerWidth = $('.fancybox-inner .slideshow').width();
		var margin = (containerWidth / 2) - ( imageWidth / 2);

		currentSlide.css( 'margin-left', margin );
	}
});