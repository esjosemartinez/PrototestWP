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
<<<<<<< HEAD
elseif (is_page(1773))
{
	get_template_part( 'template', 'page-tvguide-live' );
}
elseif (is_page(1775))
{
	get_template_part( 'template', 'page-tvguide-program' );
}
=======

>>>>>>> ca56d1edad95d90fc3bc1e68c6201c132f8ec2e4
get_footer();

?>