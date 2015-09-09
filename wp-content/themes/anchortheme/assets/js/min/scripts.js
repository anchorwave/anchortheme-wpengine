var $document = jQuery(document);
$document.ready(function($){
	var slick = $('[data-slick]');

	slick.each(function(i){
		var $this = $(this);
		var settings = {};

		if ( $this.attr('data-slickaccessibility') ){
			settings.accessibility = $this.data('slickaccessibility');
		}
		if ( $this.attr('data-slickadaptiveheight') ){
			settings.adaptiveHeight = $this.data('slickadaptiveheight');
		}
		if ( $this.attr('data-slickautoplay') ){
			settings.autoplay = $this.data('slickautoplay');
		}
		if ( $this.attr('data-slickautoplayspeed') ){
			settings.autoplaySpeed = $this.data('slickautoplayspeed');
		}
		if ( $this.attr('data-slickarrows') ){
			settings.arrows = $this.data('slickarrows');
		}
		if ( $this.attr('data-slickasnavfor') ){
			settings.asNavFor = $this.data('slickasnavfor');
		}
		if ( $this.attr('data-slickappendarrows') ){
			settings.appendArrows = $this.data('slickappendarrows');
		}
		if ( $this.attr('data-slickprevarrow') ){
			settings.prevArrow = $this.data('slickprevarrow');
		}
		if ( $this.attr('data-slicknextarrow') ){
			settings.nextArrow = $this.data('slicknextarrow');
		}
		if ( $this.attr('data-slickcentermode') ){
			settings.centerMode = $this.data('slickcentermode');
		}
		if ( $this.attr('data-slickcenterpadding') ){
			settings.centerPadding = $this.data('slickcenterpadding');
		}
		if ( $this.attr('data-slickcssease') ){
			settings.cssEase = $this.data('slickcssease');
		}
		if ( $this.attr('data-slickcustompaging') ){
			settings.customPaging = $this.data('slickcustompaging');
		}
		if ( $this.attr('data-slickdots') ){
			settings.dots = $this.data('slickdots');
		}
		if ( $this.attr('data-slickdraggable') ){
			settings.draggable = $this.data('slickdraggable');
		}
		if ( $this.attr('data-slickfade') ){
			settings.fade = $this.data('slickfade');
		}
		if ( $this.attr('data-slickfocusonselect') ){
			settings.focusOnSelect = $this.data('slickfocusonselect');
		}
		if ( $this.attr('data-slickeasing') ){
			settings.easing = $this.data('slickeasing');
		}
		if ( $this.attr('data-slickedgefriction') ){
			settings.edgeFriction = $this.data('slickedgefriction');
		}
		if ( $this.attr('data-slickinfinite') ){
			settings.infinite = $this.data('slickinfinite');
		}
		if ( $this.attr('data-slickinitialslide') ){
			settings.initialSlide = $this.data('slickinitialslide');
		}
		if ( $this.attr('data-slicklazyload') ){
			settings.lazyLoad = $this.data('slicklazyload');
		}
		if ( $this.attr('data-slickmobilefirst') ){
			settings.mobileFirst = $this.data('slickmobilefirst');
		}
		if ( $this.attr('data-slickpauseonhover') ){
			settings.pauseOnHover = $this.data('slickpauseonhover');
		}
		if ( $this.attr('data-slickpauseondotshover') ){
			settings.pauseOnDotsHover = $this.data('slickpauseondotshover');
		}
		if ( $this.attr('data-slickrespondto') ){
			settings.respondTo = $this.data('slickrespondto');
		}
		if ( $this.attr('data-slickresponsive') ){
			settings.responsive = $this.data('slickresponsive');
		}
		if ( $this.attr('data-slickrows') ){
			settings.rows = $this.data('slickrows');
		}
		if ( $this.attr('data-slickslide') ){
			settings.slide = $this.data('slickslide');
		}
		if ( $this.attr('data-slickslidesperrow') ){
			settings.slidesPerRow = $this.data('slickslidesperrow');
		}
		if ( $this.attr('data-slickslidestoshow') ){
			settings.slidesToShow = $this.data('slickslidestoshow');
		}
		if ( $this.attr('data-slickslidestoscroll') ){
			settings.slidesToScroll = $this.data('slickslidestoscroll');
		}
		if ( $this.attr('data-slickspeed') ){
			settings.speed = $this.data('slickspeed');
		}
		if ( $this.attr('data-slickswipe') ){
			settings.swipe = $this.data('slickswipe');
		}
		if ( $this.attr('data-slickswipetoslide') ){
			settings.swipeToSlide = $this.data('slickswipetoslide');
		}
		if ( $this.attr('data-slicktouchmove') ){
			settings.touchMove = $this.data('slicktouchmove');
		}
		if ( $this.attr('data-slicktouchthreshold') ){
			settings.touchThreshold = $this.data('slicktouchthreshold');
		}
		if ( $this.attr('data-slickusecss') ){
			settings.useCSS = $this.data('slickusecss');
		}
		if ( $this.attr('data-slickvariablewidth') ){
			settings.variableWidth = $this.data('slickvariablewidth');
		}
		if ( $this.attr('data-slickvertical') ){
			settings.vertical = $this.data('slickvertical');
		}
		if ( $this.attr('data-slickverticalswiping') ){
			settings.verticalSwiping = $this.data('slickverticalswiping');
		}
		if ( $this.attr('data-slickrtl') ){
			settings.rtl = $this.data('slickrtl');
		}

		$this.slick( settings );

	});

});
$document.foundation();