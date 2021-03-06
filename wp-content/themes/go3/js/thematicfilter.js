$(document).ready(function() {

	tinysort('ul#thematicarea-list>li',{attr:'data-popularity',order:'desc'});

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
	button = $('.filters-button');
	dropdpown = $('.filters-dropdown');
	overlayer = $('.overlayer');
	scrollElement = $('#scrollbox');
	body = $('body');

	function open_filters_dropdown(){
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
	}
	function close_filters_dropdown(){
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
	}

	$('.filters-button').on('click', function(event){
		event.preventDefault();
		if($('body').hasClass('filters-open')){
			close_filters_dropdown();
		}
		else{
			open_filters_dropdown()
		}
	});

	$(".filters-submit-reset, .overlayer").on('click', function(event){
		event.preventDefault();
		close_filters_dropdown();
	});
	
	$('.filters-submit-send').on('click', function(event){
		event.preventDefault();
		body.removeClass('filters-open');
		$('ul#thematicarea-list>li').fadeOut(300, function() {
			$('ul.shows li.show').removeClass('option-hidden option-visible');
			$('ul.shows li.show').addClass('option-hidden');
			// ORIGIN & GENRE
			if(filterOriginTmp == '0'){
				// vod
				if(filterGenreTmp != '-1'){
					$('ul.shows li.show.vod.genre_'+filterGenreTmp).addClass('option-visible').removeClass('option-hidden');
				} else {
					$('ul.shows li.show.vod').addClass('option-visible').removeClass('option-hidden');
				}
			}
			else if(filterOriginTmp == '1'){
				// live
				if(filterGenreTmp != '-1'){
					$('ul.shows li.show.live.genre_'+filterGenreTmp).addClass('option-visible').removeClass('option-hidden');
				}
				else {
					$('ul.shows li.show.live').addClass('option-visible').removeClass('option-hidden');
				}
			}
			else {
				if(filterGenreTmp != '-1'){
					$('ul.shows li.show.genre_'+filterGenreTmp).addClass('option-visible').removeClass('option-hidden');
				}
				else {
					$('ul.shows li.show').addClass('option-visible').removeClass('option-hidden');
				}
			}

			// SORT
			if(filterSortTmp == 'rel'){
				tinysort('ul#thematicarea-list>li',{attr:'data-popularity',order:'desc'});
				$('ul#thematicarea-list>li').fadeIn(200);
			}
			else if(filterSortTmp == 'date'){
				tinysort('ul#thematicarea-list>li',{attr:'data-date'});
				$('ul#thematicarea-list>li').fadeIn(200);
			}
			else if(filterSortTmp == 'az'){
				tinysort('ul#thematicarea-list>li',{attr:'data-title'});
				
			}
			resultGenre		= $('.filters-option-genre.active span').text();
			resultSort		= $('.filters-option-sort.active span').text();
			resultCounter	= $('ul.shows li.show.option-visible').length;
			
			console.log(resultGenre);
	
			$('.filter-result-genre').html(resultGenre);
			$('.filter-result-sort').html(resultSort);
			$('.filter-result-counter').html(resultCounter);
			$('ul#thematicarea-list>li').fadeIn(200);
		});

		overlayer.fadeOut(300);
		dropdpown.fadeOut(300);
		scrollElement.animate({ scrollTop: 0 }, 300);
	});
	
	$('.filter-result-counter').html($('ul.shows li.show').length);
	
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