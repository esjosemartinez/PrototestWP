<?php 

get_header();

if (get_post_type() == 'pt_films') 
{
	get_template_part( 'template', 'post-detail-page');
} elseif (get_post_type() == 'pt_tvseries') {
	get_template_part( 'template', 'post-detail-page-series');
}

get_footer();

?>