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

TweenMax.staggerFrom(['.home__scroll i:first-child', '.home__scroll i:nth-of-type(2)'], 0.25, { visibility: 'hidden', repeatDelay: 1.5, repeat: -1 }, 0.35 );

// History Page Scroll Arrows
TweenMax.staggerFrom(['.history__scroll i:first-child', '.history__scroll i:nth-of-type(2)'], 0.25, { visibility: 'hidden', repeatDelay: 1.5, repeat: -1 }, 0.35 );

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

var membersMap = function () {

		// Map Variables
		var $map = $('#map');
		var $worldMap = $('.worldMap');
		var $continent = $('.continent');
		var $country = $('.country');

		// Info Window Variables
		var $mapInfo = $('.map__info');
		var $mapInfoList = $('.map__info__list');
		var $mapInfoCountryContinent = $('.map__info__country-continent');
		var $mapInfoStatusCountries = $('.map__info__status-countries');
		var $mapInfoDelegatesChurches = $('.map__info__delegates-churches');
		var $mapInfoChurches = $('.map__info__churches');

		// Zoom Button Variables
		var $mapZoom = $('.map__zoom');
		var $mapLabel = $('.map__label');
		var $mapHeading = $('.map__heading');



	var zoom = function(current, scale, x, y, name, i){
		var $currentContinent = $('.continent[id=' + current +']');
		var $currentMapZoom = $('.map__zoom[data-name=' + current + ']');

		var top = coords[i].buttonTop;
		var left = coords[i].buttonLeft;

		var mapInfoLeft = $('.map__info').css('left');
		var mapInfoTop = $('.map__info').css('top');
		var buttonTop = (parseInt(mapInfoTop.slice(0,3)) - 17.5);
		var mapInfoWidth = $('.map__info').css('width');

		if ($(window).width() >= 975 || $(window).width() <= 665) {
			var buttonLeft = parseInt(mapInfoLeft.slice(0,3));
			buttonLeft = buttonLeft + parseInt(mapInfoWidth.slice(0,3)) - 17.5;
		} else {
			var buttonLeft = '98%';
		}
		console.log($currentMapZoom);	

		if ($map.attr('class') === 'zoomed') {

			// Zoom Out
			TweenMax.to([$mapInfoCountryContinent, $mapInfoList], 0, { opacity: 0, visibility: "hidden" });
			TweenMax.to($currentContinent, 1, { scale: 1, x: 0, y: 0 });
			TweenMax.to($continent, 1, { opacity: 1, visibility: "visible" });
			TweenMax.to($mapZoom.not($currentMapZoom), 1, { opacity: 1, visibility: "visible", delay: 1.25});
			if ($(window).width() > 870) {
				TweenMax.to($mapLabel, 1, { display: 'block', delay: 1.25});
			}
			TweenMax.to($currentMapZoom, 1, { left: left, top: top })
			TweenMax.to($currentMapZoom, 0.25, { rotation: 0, delay: 1 })
			TweenMax.to($currentMapZoom, 1, { x: 0, y: 0 })
			TweenMax.to($mapInfo, 1, { opacity: 0, visibility: "hidden" });
			TweenMax.to($('.country.active'), 1, { fill: "#c4c4c4" });
			TweenMax.to([$mapInfoCountryContinent, $mapInfoList], 0.25, { opacity: 0, visibility: "hidden" });
			$mapInfoCountryContinent.html('');
			$mapInfoStatusCountries.html('');
			$mapInfoDelegatesChurches.html('');
			$mapInfoChurches.html('');

			$country.attr('class', 'country');
			$mapHeading.text('Choose a Region to Begin:');
			$map.attr('class', '');
		} else {
			// Zoom In
			$country.attr('class', 'country zoomed');
			$mapInfoCountryContinent.html('The Charis Alliance in <br>' + info[current][0].continent);
			$mapInfoStatusCountries.html('Charis Countries: ' + info[current][0].countries);
			$mapInfoDelegatesChurches.html('Charis Churches: ' + info[current][0].churches);

			TweenMax.to($currentContinent, 1, { scale: scale, x: x, y: y });
			TweenMax.to($continent.not($currentContinent), 1, { opacity: 0, visibility: "hidden" });
			TweenMax.to($mapZoom.not($currentMapZoom), 1, { opacity: 0, visibility: "hidden" });
			if ($(window).width() > 870) {
				TweenMax.set($mapLabel, { display: 'none' });
			}
			TweenMax.to($currentMapZoom, 1, { left: buttonLeft, top: buttonTop })
			TweenMax.to($currentMapZoom, 0.25, { rotation: 45, delay: 1, transformOrigin: "17.5px center" })
			TweenMax.to($mapInfo, 1, { opacity: 1, visibility: "visible", delay: 1.25});
			TweenMax.to($('.country.active'), 1, { fill: "#097888", delay: 1.25});
			TweenMax.to([$mapInfoCountryContinent, $mapInfoList], 1, { opacity: 1, visibility: "visible", delay: 2});
			$mapHeading.text('Select a Country:');
			$map.attr('class', 'zoomed');
		}

		
	};

	// Trigger Zoom Function when Zoom Button is Clicked
	$mapZoom.add($mapLabel).on('click', function(){
		var $this = $(this);
		
		$(coords).each(function(i){
			if (coords[i].continent === $this.attr('data-name')) {
				zoom($this.attr('data-name'), coords[i].scale, coords[i].x, coords[i].y, coords[i].name, i);
			}
		})
	});

	// Toggle selected country

	$country.on('click', function(){
		if ($map.attr('class') === 'zoomed') {
			if ($(this).attr('class') === "country zoomed active") {
				console.log('Active');
			} else {
				console.log('Inactive');

				var i = $(this).attr('data-index');
				var continentId = $(this).parent().attr('id');

				console.log(i + ' ' + continentId);

				$mapInfoCountryContinent.add($mapInfoList).css({
					'opacity': "0",
					'visibility': 'hidden'
				});

				TweenMax.to(['.map__info__country-continent', '.map__info__list'], 0, { opacity: 0, visibility: "hidden" });

				$mapInfoCountryContinent.html(info[continentId][i].country);
				$mapInfoStatusCountries.html('Membership Status: ' + info[continentId][i].status);
				$mapInfoDelegatesChurches.html('Charis Delegates: ' + info[continentId][i].delegates);
				$mapInfoChurches.html('Charis Churches: ' + info[continentId][i].churches); 

				$(this).attr('class', 'country zoomed active');
				$('.country.zoomed').not($(this)).attr('class', 'country zoomed');
				TweenMax.to($('.country.zoomed').not('.country.zoomed.active'), 0, { fill: "#c4c4c4" });
				TweenMax.to($(this), 0.5, { fill: "#097888" });
				TweenMax.to(['.map__info__country-continent', '.map__info__list'], 1.25, { opacity: 1, visibility: "visible", delay: 0.25}); 
			};
		}
	});
};
membersMap();

// Mobile Hamburger Menu Animation

var mobileHamburger = function(){
	var $headerButtons = $('.header__buttons');
	var $htmlBody = $('html, body');
	var $headerNav = $('.header__nav');
	var $closeEverything = $('.closeEverything');

	$headerButtons.on('click', function(){

		var animateHamburger = new TimelineMax();

		if ($headerButtons.hasClass('active')) {

			$htmlBody.css({
				'overflow-y': 'scroll',
				'height': 'auto'
			});
			
			$headerButtons.removeClass('active');

			TweenMax.to('.header__nav', 0.5, { right: -250 });

			setTimeout(function(){ $headerNav.hide(); }, 500);

			$closeEverything.removeClass('active');

			animateHamburger.to( '.hamburger__top', 0.25, { rotation: 0, transformOrigin: 'center center' })
							.to( '.hamburger__bottom', 0.25, { rotation: 0, transformOrigin: 'center center' }, "-=0.25" )
							.to( '.hamburger__middle', 0, { opacity: 1 })
							.to( '.hamburger__top', 0.25, { y: 0, transformOrigin: 'center center' })
							.to( '.hamburger__bottom', 0.25, { y: 0, transformOrigin: 'center center' }, '-=0.25' );

		} else {

			$htmlBody.css({
				'overflow-y': 'hidden',
				'height': '100%'
			});

			$headerButtons.addClass('active');

			$headerNav.show();

			TweenMax.to('.header__nav', 0.5, { right: 0 });

			$closeEverything.addClass('active');

			animateHamburger.to( '.hamburger__top', 0.25, { y: '+=8px', transformOrigin: 'center center' })
							.to( '.hamburger__bottom', 0.25, { y: '-=8px', transformOrigin: 'center center' }, "-=0.25" )
							.to( '.hamburger__middle', 0, { opacity: 0 })
							.to( '.hamburger__top', 0.25, { rotation: 45, transformOrigin: 'center center' })
							.to( '.hamburger__bottom', 0.25, { rotation: -45, transformOrigin: 'center center' }, '-=0.25' );

		}
	});

	$closeEverything.on('click', function(){

			$headerButtons.removeClass('active');

			$htmlBody.css({
				'overflow-y': 'scroll',
				'height': 'auto'
			});

			TweenMax.to('.header__nav', 0.5, { right: -250 });

			$closeEverything.removeClass('active');
	});
}
mobileHamburger();

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
	var $timelineEvent = $('.timeline__event');
	
	$timelineEvent.each(function(){
		var currentBox = this;

		var tweenBox = TweenMax.from(currentBox, 1, { opacity: 0});

		var boxScene = new ScrollMagic.Scene({ triggerElement: currentBox })
			.setTween(tweenBox)
			.addTo(controller);
	});
};

var toggleCountry = function(){
	var $timelineDot = $('.timeline__dot');

	$timelineDot.each(function(i){
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
};

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

/* $('.slideControls').on('click', function(){
	var currentSlide = $('.fancybox-inner .cycle-slide.cycle-slide-active').next();

	if ( currentSlide.height() > currentSlide.width() ) {
		var imageWidth = currentSlide.width();
		var containerWidth = $('.fancybox-inner .slideshow').width();
		var margin = (containerWidth / 2) - ( imageWidth / 2);

		currentSlide.css( 'margin-left', margin );
	}
}); */