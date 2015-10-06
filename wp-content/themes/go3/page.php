<?php 

get_header();

if (is_home() || is_page(2))
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

get_footer();

?>