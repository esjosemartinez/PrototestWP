$(document).ready(function(){
	$('.more > a').click(function(e){
		e.stopPropagation();
		e.preventDefault();
		$('.primary-nav').toggleClass('open');
	});
	
	$('.primary-nav').mouseleave(function(e){
		$('.primary-nav').removeClass('open');
		
	});
	$('.tv-guide').mouseenter(function(e){
		$('.primary-nav').removeClass('open');
		
	});
	$('.logo').mouseenter(function(e){
		$('.primary-nav').removeClass('open');
		
	});
	$('.search').click(function(e){
		if($(this).hasClass('open')){
			return;
		} else {
			$(this).addClass('open');
		}
	});
	$('.btn-close').click(function(e){
		e.stopPropagation();
		e.preventDefault();
		$('.search').removeClass('open');
	});
	
});