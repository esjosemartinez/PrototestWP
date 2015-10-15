<?php

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.


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
    foreach($anc as $ancestor):
        if(is_page() && $ancestor == $pid):
            return true;
        endif;
    endforeach;
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
function cached_image($imgurl,$width,$height,$zc){
	$p = parse_url($imgurl);
	$e = explode('/',$p["path"]);
	$c = count($e)-1;
	$a = 0;
	$v = 3;
	while($a <= $c):
		if($a >= $v):
			$t .= $e[$a];
		endif;
		$a++;
		if($a > $v && $a <= $c):
			$t .= '/';
		endif;
	endwhile;
	$str = split_image_url($t);
	return '/images/'.$str[0].'_'.$width.'_'.$height.'_'.$zc.'.'.$str[1];
}
function split_image_url($imgurl){
	$s = explode('.',$imgurl);
	$c = count($s)-1;
	$a = 0;
	while($a < $c):
		$t .= $s[$a];
		$a++;
		if($a < $c):
			$t .= '.';
		endif;
	endwhile;
	$str = Array($t,$s[$a]);
	return $str;
}
function count_items_by_genre($ptype,$genre){
	$posts = get_posts(array(
		'numberposts'	=> -1,
		'post_type'		=> $ptype,
		'meta_query' => array(
			array(
				'key' => 'genres',
				'value' => '"'.$genre.'"',
				'compare' => 'LIKE'
			)
		)
	));
	return count($posts);
}
function get_media_genres_ids($genres) {
	$c = count($genres) - 1;
	$a = 0;
	foreach ($genres as $genre):
		$str .= $genre;
		if ($a < $c):
			$str .= ' ';
		endif;
		$a++;
	endforeach;
	return $str;
}
function get_media_genres_class($genres) {
	$c = count($genres) - 1;
	$a = 0;
	foreach ($genres as $genre):
		$str .= 'genre_'.$genre;
		if ($a < $c):
			$str .= ' ';
		endif;
		$a++;
	endforeach;
	return $str;
}
?>