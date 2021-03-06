// Status Indication

var statusIndication = function() {
	var pathName = window.location.pathname;
	var origin= window.location.origin;
	var pathArray = pathName.split('/');
	var arrayLength = pathArray.length;
	var href = pathArray[arrayLength-1];
	var directory = pathArray[arrayLength-2];
	var enReplace = '';
	var esReplace = '';
	var frReplace = '';
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
		console.log(folder + ', ' + directory)
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

	// Populate Language Links HREF in Header

	if ( $('.header__languages__link--en').hasClass('active') ) {

		if ( directory === 'giving') {

			esReplace = pathName.replace('/en/giving', '/es/ofrendar');
			frReplace = pathName.replace('/en/giving', '/fr/donner');

			$('.header__languages__link--es').attr('href', esReplace);

			$('.header__languages__link--fr').attr('href', frReplace);

		} else if (directory === 'celebration') {

			esReplace = pathName.replace('/en/celebration', '/es/celebracion');
			frReplace = pathName.replace('/en/celebration', '/fr/celebrer');

			$('.header__languages__link--es').attr('href', esReplace);

			$('.header__languages__link--fr').attr('href', frReplace);

		} else if (directory === 'prayer') {
			console.log('prayer');
			esReplace = pathName.replace('/en/celebration', '/es/oracion');
			frReplace = pathName.replace('/en/celebration', '/fr/priere');

			$('.header__languages__link--es').attr('href', esReplace);

			$('.header__languages__link--fr').attr('href', frReplace);
		} else {

			esReplace = pathName.replace('/en/', '/es/');
			frReplace = pathName.replace('/en/', '/fr/');

			$('.header__languages__link--es').attr('href', esReplace);

			$('.header__languages__link--fr').attr('href', frReplace);
		}

	} else if ( $('.header__languages__link--es').hasClass('active')) {

		if ( directory === 'ofrendar') {
			
			enReplace = pathName.replace('/es/ofrendar', '/en/giving');
			frReplace = pathName.replace('/es/ofrendar', '/fr/donner');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--fr').attr('href', frReplace);

		} else if (directory === 'celebracion') {
			
			enReplace = pathName.replace('/es/celebracion', '/en/celebration');
			frReplace = pathName.replace('/es/celebracion', '/fr/celebrer');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--fr').attr('href', frReplace);
		
		} else if (directory === 'oracion') {
			enReplace = pathName.replace('/es/oracion', '/en/prayer');
			frReplace = pathName.replace('/es/oracion', '/fr/priere');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--fr').attr('href', frReplace);

		} else {

			enReplace = pathName.replace('/es/', '/en/');
			frReplace = pathName.replace('/es/', '/fr/');
	
			$('.header__languages__link--en').attr('href', enReplace);
	
			$('.header__languages__link--fr').attr('href', frReplace);
		}

		
	} else if ( $('.header__languages__link--fr').hasClass('active') ) {

		if ( directory === 'donner') {
			
			enReplace = pathName.replace('/fr/donner', '/en/giving');
			esReplace = pathName.replace('/fr/donner', '/es/ofrendar');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--es').attr('href', esReplace);

		} else if (directory === 'celebrer') {
			
			enReplace = pathName.replace('/fr/celebrer', '/en/celebration');
			esReplace = pathName.replace('/fr/celebrer', '/es/celebracion');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--es').attr('href', esReplace);

		} else if (directory === 'priere') {
			enReplace = pathName.replace('/fr/priere', '/en/prayer');
			esReplace = pathName.replace('/fr/priere', '/es/oracion');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--es').attr('href', esReplace);
		
		} else {
		
			enReplace = pathName.replace('/fr/', '/en/');
			esReplace = pathName.replace('/fr/', '/es/');

			$('.header__languages__link--en').attr('href', enReplace);

			$('.header__languages__link--es').attr('href', esReplace);
		}
	}
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
		var $mapInfoTitle = $('.map__info__title');
		var $mapInfoItem1 = $('.map__info__item--1');
		var $mapInfoItem2 = $('.map__info__item--2');
		var $mapInfoItem3 = $('.map__info__item--3');
		var $mapInfoDirections = $('.map__info__directions');

		// Zoom Button Variables
		var $mapZoom = $('.map__zoom');
		var $mapLabel = $('.map__label');
		var $mapHeading = $('.map__heading');

		// Determine Language Folder for Titles and Labels
		var pathName = window.location.pathname;
		var pathArray = pathName.split('/');
		var arrayLength = pathArray.length;
		var language = pathArray[arrayLength-3];



	var zoom = function(current, scale, x, y, name, i){
		var $currentContinent = $('.continent[id=' + current +']');
		var $currentMapZoom = $('.map__zoom[data-name=' + current + ']');

		var top = coords[i].buttonTop;
		var left = coords[i].buttonLeft;
		console.log(top + ', ' + left);

		var mapInfoLeft = $('.map__info').css('left');
		var mapInfoTop = $('.map__info').css('top');
		var buttonTop = (parseInt(mapInfoTop.slice(0,3)) - 17.5);
		var mapInfoWidth = $('.map__info').css('width');

		if ($(window).width() >= 975) {
			var buttonLeft = parseInt(mapInfoLeft.slice(0,3));
			buttonLeft = buttonLeft + parseInt(mapInfoWidth.slice(0,3)) - 17.5;
		} else {
			var buttonLeft = $('.container').width() - 16;
		}


		if ($map.attr('class') === 'zoomed') {

			// Zoom Out
			TweenMax.to([$mapInfoTitle, $mapInfoList], 0, { opacity: 0, visibility: "hidden" });
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
			TweenMax.to([$mapInfoTitle, $mapInfoList], 0.25, { opacity: 0, visibility: "hidden" });
			$mapInfoTitle.html('');
			$mapInfoItem1.html('');
			$mapInfoItem2.html('');
			$mapInfoItem3.html('');

			$country.attr('class', 'country');

			if ( language === "en" ) {
				$mapHeading.text('Choose a Region to Begin:');
			} else if ( language === 'es' ) {
				$mapHeading.text('Elija una region para comenzar:')
			} else if ( language === 'fr') {
				$mapHeading.text('Choisir une région pour commencer :')
			}
			$map.attr('class', '');
		} else {
			// Zoom In

			var totalCountries = info[current].length - 1;
			var totalChurches = 0;
			var totalPointsOfLight = 0;

			for (var i = 1; i < info[current].length; i++){
				totalChurches += info[current][i].churches;
				totalPointsOfLight += info[current][i].pointsOfLight;
			}
			
			$country.attr('class', 'country zoomed');
			
			// Labels in Different Languages
			if ( language === "en") {
				$mapInfoTitle.html('The Charis Alliance in <br><span class="continent">' + info[current][0].continent + '</span>');
				$mapInfoItem1.html('Charis Countries: <span>' + totalCountries + '</span>');
				$mapInfoItem2.html('Charis Churches: <span>' + totalChurches + '</span>');
				if ( totalPointsOfLight !== 0 ){
					$mapInfoItem3.html('Points of Light: <span>' + totalPointsOfLight + '</span>');
				}
				if ( window.orientation === undefined ) {
					$mapInfoDirections.html('(Click on the map for specific country&nbsp;information.)');
				} else {
					$mapInfoDirections.html('(Tap on the map for specific country&nbsp;information.)');
				}
				
				$mapHeading.text('Select a Country:');
			} else if ( language === 'es' ) {
				$mapInfoTitle.html('La Alianza de Charis en <br><span class="continent">' + info[current][0].continente + '</span>');
				$mapInfoItem1.html('Países de Charis: <span>' + totalCountries + '</span>');
				$mapInfoItem2.html('Iglesias de Charis: <span>' + totalChurches + '</span>');
				if ( totalPointsOfLight !== 0 ){
					$mapInfoItem3.html('Puntos de Luz: <span>' + totalPointsOfLight + '</span>');
				}

				if ( window.orientation === undefined ) {
					$mapInfoDirections.html('(Haga clic en el mapa para acceder a información específica de cada&nbsp;país.)');
				} else {
					$mapInfoDirections.html('(Toque en el mapa para acceder a información específica de cada&nbsp;país.)');
				}

				$mapHeading.text('Elija un País:');
			} else if ( language === 'fr' ) {
				$mapInfoTitle.html('L’Alliance Charis ' + info[current][0].continentFr + '</span>');
				$mapInfoItem1.html('Pays Charis : <span>' + totalCountries + '</span>');
				$mapInfoItem2.html('Églises Charis : <span>' + totalChurches + '</span>');
				if ( totalPointsOfLight !== 0 ){
					$mapInfoItem3.html('Points de Lumière : <span>' + totalPointsOfLight + '</span>');
				}

				if ( window.orientation === undefined ) {
					$mapInfoDirections.html('(Cliquez sur la carte pour accéder à des informations spécifiques pour chaque&nbsp;pays.)');
				} else {
					$mapInfoDirections.html('(Appuyez sur la carte pour accéder à des informations spécifiques pour chaque&nbsp;pays.)');
				}

				$mapHeading.text('Choisir un Pays:');
			}

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
			TweenMax.to([$mapInfoTitle, $mapInfoList], 1, { opacity: 1, visibility: "visible", delay: 2});
			$map.attr('class', 'zoomed');
		}

		if (window.orientation === undefined) {

			$(window).on('resize', function(){
				window.scrollTo(0, 0);
				location.reload();
			})
		} else {
			$(window).on('orientationchange', function(){
				window.scrollTo(0, 0);
				location.reload();
			})
		}

		
	};

	// Trigger Zoom Function when Zoom Button is Clicked
	$mapZoom.on('click', function(){
		var $this = $(this);
		
		$(coords).each(function(i){
			if (coords[i].continent === $this.attr('data-name')) {
				zoom($this.attr('data-name'), coords[i].scale, coords[i].x, coords[i].y, coords[i].name, i);
			}
		})
	});

	// Toggle selected country

	$country.on('click', function(){
		// Determine Language Folder for Titles and Labels
		var pathName = window.location.pathname;
		var pathArray = pathName.split('/');
		var arrayLength = pathArray.length;
		var language = pathArray[arrayLength-3];
		
		if ($map.attr('class') === 'zoomed') {
			if ($(this).attr('class') === "country zoomed active") {
				console.log('Active');
			} else {
				console.log('Inactive');

				var i = $(this).attr('data-index');
				var continentId = $(this).parent().attr('id');

				$mapInfoTitle.add($mapInfoList).css({
					'opacity': "0",
					'visibility': 'hidden'
				});

				TweenMax.to(['.map__info__title', '.map__info__list'], 0, { opacity: 0, visibility: "hidden" });

				if ( language === "en") {
					$mapInfoTitle.html('The Charis Alliance in <br><span class="country">' +info[continentId][i].country) + '</span>';
					$mapInfoItem1.html('Membership Status: <br><span>' + info[continentId][i].status + '</span>');
					$mapInfoItem2.html('Charis Churches: <span>' + info[continentId][i].churches + '</span>');
				
					if ( info[continentId][i].pointsOfLight !== 0) {
						$mapInfoItem3.html('Points of Light: <span>' + info[continentId][i].pointsOfLight + '</span>');
					} else {
						$mapInfoItem3.html('');
					}
				} else if ( language === 'es' ) {
					$mapInfoTitle.html('La Alianza de Charis en <br><span class="country">' +info[continentId][i].pais) + '</span>';
					$mapInfoItem1.html('Estado de la Membresía: <br><span>' + info[continentId][i].estado + '</span>');
					$mapInfoItem2.html('Iglesias de Charis: <span>' + info[continentId][i].churches + '</span>');
				
					if ( info[continentId][i].pointsOfLight !== 0) {
						$mapInfoItem3.html('Puntos de Luz: <span>' + info[continentId][i].pointsOfLight + '</span>');
					} else {
						$mapInfoItem3.html('');
					}
				} else if ( language === 'fr' ) {
					$mapInfoTitle.html('L’Alliance Charis ' +info[continentId][i].pays) + '</span>';
					$mapInfoItem1.html('Statut de membre : <br><span>' + info[continentId][i].statut + '</span>');
					$mapInfoItem2.html('Églises Charis : <span>' + info[continentId][i].churches + '</span>');
				
					if ( info[continentId][i].pointsOfLight !== 0) {
						$mapInfoItem3.html('Points de Lumière : <span>' + info[continentId][i].pointsOfLight + '</span>');
					} else {
						$mapInfoItem3.html('');
					}
				}

				$mapInfoDirections.html('');
				$(this).attr('class', 'country zoomed active');
				$('.country.zoomed').not($(this)).attr('class', 'country zoomed');
				TweenMax.to($('.country.zoomed').not('.country.zoomed.active'), 0, { fill: "#c4c4c4" });
				TweenMax.to($(this), 0.5, { fill: "#097888" });
				TweenMax.to(['.map__info__title', '.map__info__list'], 1.25, { opacity: 1, visibility: "visible", delay: 0.25}); 
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
				'overflow-y': 'initial',
				'height': 'auto'
			});
			
			$headerButtons.removeClass('active');
			$('.header__nav').removeClass('active');

			$closeEverything.removeClass('active');

		} else {

			$htmlBody.css({
				'overflow-y': 'hidden',
				'height': '100%'
			});
			$headerButtons.addClass('active');
			$('.header__nav').addClass('active');

			$closeEverything.addClass('active');

		}
	});

	$closeEverything.on('click', function(){

			$headerButtons.removeClass('active');

			$htmlBody.css({
				'overflow-y': 'initial',
				'height': 'auto'
			});
			
			$headerNav.removeClass('active');
			$closeEverything.removeClass('active');
	});

	$(window).on('resize', function(){
		if ($(window).width() > 870) {
			$('.closeEverything').removeClass('active');
			$htmlBody.css({
				'overflow-y': 'initial',
				'height': 'auto'
			});
		} else if ($(window).width() < 870 && $('.header__buttons').hasClass('active')){
			$('.closeEverything').addClass('active');
			window.scrollTo(0, 0);
			$htmlBody.css({
				'overflow-y': 'hidden',
				'height': '100%'
			});
		}
	})
}
mobileHamburger();

// Charis History Page

var controller = new ScrollMagic.Controller();

// Show "Back to Top" Button
var toTopTweenShow = TweenMax.to('.toTop', 0.5, { opacity: 1, visibility: 'visible'});

var toTopShowScene = new ScrollMagic.Scene({
	triggerElement: '.timeline__decade--1',
	triggerHook: 'onLeave'
})
.setTween(toTopTweenShow)
.addTo(controller);

// Hide "Back to Top" Button
var toTopTweenHide = TweenMax.to('.toTop', 0.5, { opacity: 0, visibility: 'hidden'});

var toTopHideScene = new ScrollMagic.Scene({
	triggerElement: '.history--last',
	triggerHook: 'onEnter'
})
.setTween(toTopTweenHide)
.addTo(controller);

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

// Set Pin for Nav

var showHistoryNav = new TimelineMax();

	showHistoryNav.to('.history__nav', 0.5, { opacity: 1, visibility: 'visible'});

var navScene = new ScrollMagic.Scene({
	triggerElement: '.history__nav',
	triggerHook: 'onLeave'
})
.setTween(showHistoryNav)
.setPin('.history__nav')
.addTo(controller);

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
		var $currentDot = this;
		var dot = $(this).attr('data-dot');
		var parentHeight = $(this).parent().height() / 2;

		var grayTrigger = $(this).offset().top + parentHeight;

		var tweenCountry = new TimelineMax({});
		
		tweenCountry.to($('.histCountry[ data-name = ' + dot + ']'), 1, { fill: '#097888' })
					.to($('.histCountry[ data-name = ' + dot + ']'), 1, { fill: '#696969', delay: 0.75 });

		var countryScene = new ScrollMagic.Scene({ triggerElement: $currentDot })
		.setTween(tweenCountry)
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

	// History Nav Functionality

$('.history__nav__button').on('click', function(){
	var dataDecade = $(this).attr('data-decade');
	var scrollPosition = $('.timeline__decade--' + dataDecade).offset().top - 100;
	$('body, html').animate({ scrollTop: scrollPosition });
})

	// Back to Top Functionality

$('.toTop').on('click', function() {
	$('body, html').animate({ scrollTop: 0 });
});

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