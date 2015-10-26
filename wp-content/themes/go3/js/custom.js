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
	$('.action-button.follow, .action-button.wishlist').click(function(){
		$(this).toggleClass('checked');
	});
	
	$('.thematic-info').click(function(){
		var link = $(this).find('> a').attr('href');
		window.location.href = link;
	});


$('.show-more.show-catchup').on('click',function()
{
	var checkBox = $("#tabCatchup");
	var body = $("body");
	body.animate({scrollTop:0}, '500', function() {
		// Animation complete.
		checkBox.trigger('click');
	});
}); 
$('.show-more.show-program').on('click',function()
{
	var checkBox = $("#tabProgram");
    var body = $("body");
	body.animate({scrollTop:0}, '500', function() {
		// Animation complete.
		checkBox.trigger('click');
	});
}); 






});