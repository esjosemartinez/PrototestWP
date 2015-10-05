/* CHANNEL PAGE - TINYORDER */
$( document ).ready(function() {
	$('.filters-button').on('click', function(){
		$('ul#thematicarea-list>li').fadeOut(300, function() {
			tinysort('ul#thematicarea-list>li',{attr:'data-duration'});
			$('ul#thematicarea-list>li').fadeIn(200);
		});
	});
});
