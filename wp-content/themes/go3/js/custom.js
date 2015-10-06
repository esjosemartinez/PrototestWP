$(document).ready(function(){
	$('.more > a').click(function(e){
		e.stopPropagation();
		e.preventDefault();
		$('.primary-nav').toggleClass('open');
	});
	$('.search').click(function(e){
		$(this).toggleClass('open');
	});
});