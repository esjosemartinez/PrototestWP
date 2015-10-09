$(document).ready(function() {

	/*  FILTER ORDENATION */
	$('.filters-buttonXXXXXX').on('click', function(){
		$('ul#thematicarea-list>li').fadeOut(300, function() {
			//tinysort('ul#thematicarea-list>li',{attr:'data-duration'});
			$('ul#thematicarea-list>li').fadeIn(200);
		});
	});
	
	/* FILTERS DROPDOWN CHECKBOXES ACTIVATION (only one genre) */
	filterDataElement = $('.filters-dropdown');
	filterDataElementOrigin = $('.filters-option-origin');
	filterDataElementGenre = $('.filters-option-genre');
	filterDataElementSort = $('.filters-option-sort');
	
	filterDataElementOrigin.on('click', function(){
		// change active option
		activate_filter_option($(this),filterDataElementOrigin,'data-origin');
		filterOriginTmp = $(this).attr('data-origin');
		filterOriginElementTmp = $(this);
	});
	filterDataElementGenre.on('click', function(){
		// change active option
		activate_filter_option($(this),filterDataElementGenre,'data-genre');
		filterGenreTmp = $(this).attr('data-genre');
		filterGenreElementTmp = $(this);
	});
	filterDataElementSort.on('click', function(){
		// change active option
		activate_filter_option($(this),filterDataElementSort,'data-sort');
		filterSortTmp = $(this).attr('data-sort');
		filterSortElementTmp = $(this);
	});
	
	function activate_filter_option(element,elementGroup,data){
		elementGroup.removeClass('active');
		elementGroup.children('.check-icon').html('○');
		filterDataElement.attr(data,element.attr(data));
		element.addClass('active');
		element.children('.check-icon').html('●');
	}
	function change_filter_selection(activeElement,elementGroup,dataname){
		elementGroup.removeClass('active');
		activeElement.addClass('active');
	}

	/* FILTERS DROPDOWN */
	var button = $('.filters-button');
	var dropdpown = $('.filters-dropdown');
	var overlayer = $('.overlayer');
	var scrollElement = $('#scrollbox');
	var body = $('body');

	$('.filters-button').on('click', function(event){
		event.preventDefault();
		body.addClass('filters-open');
		overlayer.fadeIn(300);
		dropdpown.fadeIn(300);
		scrollElement.animate({ scrollTop: 0 }, 300);
		// get previous filter or default
		filterOrigin = filterDataElement.attr('data-origin');
		filterGenre = filterDataElement.attr('data-genre');
		filterSort = filterDataElement.attr('data-sort');
		filterOriginTmp = filterOrigin;
		filterGenreTmp = filterGenre;
		filterSortTmp = filterSort;
	});

	$('.filters-submit-reset').on('click', function(event){
		event.preventDefault();
		body.removeClass('filters-open');
		overlayer.fadeOut(300);
		dropdpown.fadeOut(300);
		scrollElement.animate({ scrollTop: 0 }, 300);
		// reset to previous filter
		change_filter_selection($('[data-origin='+filterOrigin+']'),filterDataElementOrigin,'origin');
		change_filter_selection($('[data-genre='+filterGenre+']'),filterDataElementGenre,'genre');
		change_filter_selection($('[data-sort='+filterSort+']'),filterDataElementSort,'sort');
		$('.filters-option').children('.check-icon').html('○');
		$('.filters-option.active').children('.check-icon').html('●');
	});

	$('.filters-submit-send').on('click', function(event){
		event.preventDefault();
		body.removeClass('filters-open');

		if(filterSort == 'rel'){
			$('ul#thematicarea-list>li').fadeOut(300, function() {
				tinysort('ul#thematicarea-list>li',{attr:'data-popularity',order:'desc'});
				$('ul#thematicarea-list>li').fadeIn(200);
			});
		}else if(filterSort == 'date'){
			$('ul#thematicarea-list>li').fadeOut(300, function() {
				tinysort('ul#thematicarea-list>li',{attr:'data-date'});
				$('ul#thematicarea-list>li').fadeIn(200);
			});
		}else if(filterSort == 'az'){
			$('ul#thematicarea-list>li').fadeOut(300, function() {
				tinysort('ul#thematicarea-list>li',{attr:'data-title'});
				$('ul#thematicarea-list>li').fadeIn(200);
			});
		}

		overlayer.fadeOut(300);
		dropdpown.fadeOut(300);
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