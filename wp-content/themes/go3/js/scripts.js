$(document).ready(function() {

	/*  FILTER ORDENATION */
	$('.filters-buttonXXXXXXXXXXXXX').on('click', function(){
		$('ul#thematicarea-list>li').fadeOut(300, function() {
			tinysort('ul#thematicarea-list>li',{attr:'data-duration'});
			$('ul#thematicarea-list>li').fadeIn(200);
		});
	});

	/* FILTERS DROPDOWN */
	var dropdpown = $('.filters-dropdown');
	var overlayer = $('.overlayer');
	var fadeElements = $('.filters-col,.filters-submit-area');
	var scrollElement = $('#scrollbox');
	var body = $('body');
	fadeElements.fadeOut();
	$('.filters-button,.filters-submit-reset').on('click', function(event){
		event.preventDefault();
		body.toggleClass('filters-open');
		overlayer.fadeToggle(300);
		dropdpown.slideToggle(300);
		fadeElements.fadeToggle();
		scrollElement.animate({ scrollTop: 0 }, 300);
	});
	$('#scrollbox').enscroll({
		verticalTrackClass: 'track',
		verticalHandleClass: 'handle',
		minScrollbarLength: 30
	});
	// v4: listener para eventos de scroll y teclas
	//
	// left: 37, up: 38, right: 39, down: 40,
	// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
	scrollElement.scroll(function(){
		var prevScrollElementPos = scrollElementPos;
		var scrollElementPos = scrollElement.scrollTop();
		if(body.hasClass('v4') && body.hasClass('filters-open')){
			disableScroll();
		} else if(body.hasClass('v4') && !body.hasClass('filters-open')){
			enableScroll();
		}
	});
	// left: 37, up: 38, right: 39, down: 40,
	// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	  e = e || window.event;
	  if (e.preventDefault)
		  e.preventDefault();
	  e.returnValue = false;  
	}

	function preventDefaultForScrollKeys(e) {
		if (keys[e.keyCode]) {
			preventDefault(e);
			return false;
		}
	}

	function disableScroll() {
		if (window.addEventListener) // older FF
			window.addEventListener('DOMMouseScroll', preventDefault, false);
		window.onwheel = preventDefault; // modern standard
		window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
		window.ontouchmove  = preventDefault; // mobile
		document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
		if (window.removeEventListener)
			window.removeEventListener('DOMMouseScroll', preventDefault, false);
		window.onmousewheel = document.onmousewheel = null; 
		window.onwheel = null; 
		window.ontouchmove = null;  
		document.onkeydown = null;  
	}

});