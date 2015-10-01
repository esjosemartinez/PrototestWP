			<div class="content">

				<div class="filters">
					<span class="breadcrumb">Películas: Catálogo, Todos los géneros, Mas relevante (480)</span>

					<div class="filters-area">
						<a href="#" class="filters-button" title="Filtra aquí los contenidos según tus preferencias"><span>Filtrar</span><i class="material-icons">&nbsp;</i></a>
					</div>
				</div>
				<div class="section-container">
					<ul class="shows">

<?php $args = array(
	'posts_per_page'   => 150,
	'offset'           => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => get_post_type(),
	'post_status'      => 'publish',
	'suppress_filters' => 0 );
 
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );
	$genres = get_field('genres');
?>

						<li class="show vod">
							<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 116, 172, 3); ?>" alt="<?php the_title(); ?>" >
							<div class="info">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<span class="duration"><?php the_field('duration'); ?>m</span><br>
								<span class="genres">
<?php
	if( $genres ):
		$c = count($genres)-1;
		$a = 0;
		foreach( $genres as $genre ):
			echo get_the_title($genre->ID);
			if($a < $c):
				echo ', ';
			endif;
			$a++;
		endforeach;
	endif;
?>
								</span>
							</div>
						</li>

<?php 
endforeach; 
wp_reset_postdata();
?>
					</ul>
				</div>
			</div>
