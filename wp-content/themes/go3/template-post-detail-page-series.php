<?php
$mainPostID = get_the_ID();
?>
<div class="content">
	<div class="show-details">
		<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 236, 350, 3); ?>" alt="<?php the_title(); ?>" />
		<div class="details">
			<h1><?php the_title(); ?></h1>
			<span class="year"><?php the_field('year'); ?></span> <em>|</em> <span class="age-rating"><?php the_field('age_rating'); ?></span><br/>
			<?php 
			$genres = get_field('genres');
			if ($genres):
				$c = count($genres) - 1;
				$a = 0;
				foreach ($genres as $genre):
					echo '<span class="" data-genre="'.$genre.'">'.get_the_title($genre).'</span>';
					if ($a < $c):
						echo ' <em>|</em> ';
					endif;
					$a++;
				endforeach;
			endif;
			?>

			</span><br/>
			Valoración: <span><?php echo round(get_field('rating')/2,1); ?>/5</span><br/>

			<div class="stars">
				<?php 
				$actors = get_field('actors');
				if ($actors):
				?>
				<br/>Reparto: 
				<?php
				foreach ($actors as $actor):
						echo '<a class="director" href="#">'.get_the_title($actor).'</a>';
					endforeach;
				endif;
				?>
			</div>
			<p class="sinopsis">
				<?php the_field('description'); ?>
			</p>
			<div class="actions">
				<button class="action-button follow">Siguiendo</button>
				<button class="action-button trailer">Ver Trailer</button>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="section-seasons-selection">
		<img src="/theme/images/placeholder_temporadas.png" alt="temporadas">
		<a href="#" class="series-play-link play" data-youtube="<?php the_field('youtube'); ?>"></a>
	</div>
</section>

<div class="section-recommendations">
	<h1>Recomendados</h1>
	<ul class="shows">
<?php
$posts = get_posts(array(
	'numberposts'	=> 6,
	'exclude'		=> $mainPostID,
	'post_type'		=> 'pt_tvseries',
	'meta_key'		=> 'popularity',
	'orderby'		=> 'meta_value_num',
	'order'			=> 'DESC',
	'meta_query'	=> array(
		'relation'		=> 'OR',
		array(
			'key'	  	=> 'genres',
			'value'	  	=> $genres[0],
			'compare' 	=> 'LIKE',
		),
		array(
			'key'	  	=> 'genres',
			'value'	  	=> $genres[1],
			'compare' 	=> 'LIKE',
		),
	),
));
if( $posts ):
foreach( $posts as $post ): 
setup_postdata( $post )
?>
		
		<li>
			<a href="<?php the_permalink(); ?>">
				<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 154, 224, 3); ?>">
				<h2 class="title"><?php the_title(); ?></h2>
			</a>
		</li>

<?php 
endforeach;
wp_reset_postdata();
endif;
?>
	</ul>
</div>
