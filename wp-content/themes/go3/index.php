<?php 

get_header();

if(('pt_films' == get_post_type() || 'pt_tvseries' == get_post_type() || 'pt_docu' == get_post_type()) && is_single())
{
	get_template_part( 'template', 'post-detail-page' );
}
elseif(('pt_films' == get_post_type() || 'pt_tvseries' == get_post_type() || 'pt_docu' == get_post_type()) && is_archive())
{
	get_template_part( 'template', 'post-thematic-area' );
}
elseif('pt_channels' == get_post_type() && is_archive())
{
	get_template_part( 'template', 'post-channel-page' );
}

get_footer();

?>