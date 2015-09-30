<?php 

// FUNCIONES 
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'locale_stylesheet');
remove_action('wp_head', 'noindex');
remove_action('wp_head', 'wp_print_styles');
remove_action('wp_head', 'wp_print_head_scripts');
add_theme_support('post-thumbnails');
//add_post_type_support('page','excerpt');

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    $anc = get_post_ancestors( $post->ID );
    foreach($anc as $ancestor) {
        if(is_page() && $ancestor == $pid) {
            return true;
        }
    }
    if(is_page()&&(is_page($pid))) 
    return true;   // we're at the page or at a sub page
    else 
    return false;  // we're elsewhere
}

function themes_dir_add_rewrites() 
{
	global $wp_rewrite;
	$new_non_wp_rules = array(
		'theme/(.*)' => 'wp-content/themes/go3/$1'
	);
	$wp_rewrite->non_wp_rules += $new_non_wp_rules;
}

function custom_get_attachments($ids){
	GLOBAL $wpdb;
	$query = "SELECT * FROM {$wpdb->posts} WHERE post_type = 'attachment' AND ID IN ('".implode("','", $ids)."')";
	$results = $wpdb->get_results($query);
	return $results;
}





?>