<?php 

get_header();

if (get_post_type() == 'pt_films') 
{
	get_template_part( 'template', 'post-detail-page');
} elseif (get_post_type() == 'pt_tvseries') {
	get_template_part( 'template', 'post-detail-page-series');
}
elseif('pt_channels' == get_post_type())
{
	get_template_part( 'template', 'post-channel-page' );
}

get_footer();

?>