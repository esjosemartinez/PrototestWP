<?php 

get_header();

if (is_home() || is_page(2) || is_page(1916))
{
	get_template_part( 'template', 'page-home' );
}
elseif (is_page(12) || is_page(15))
{
	get_template_part( 'template', 'page-bio' );
}
elseif (is_page(1770))
{
	get_template_part( 'template', 'page-my-content' );
}
elseif (is_page(1773))
{
	get_template_part( 'template', 'page-tvguide-live' );
}
elseif (is_page(1775))
{
	get_template_part( 'template', 'page-tvguide-program' );
}
elseif (is_page(1886))
{
	get_template_part( 'template', 'player-test' );
}
get_footer();

?>