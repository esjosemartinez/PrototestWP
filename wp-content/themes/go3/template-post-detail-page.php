<?php
$mainPostID = get_the_ID();
?>
<div class="content">
	<div class="show-details">
		<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 236, 350, 3); ?>" alt="Birdman" />
		<div class="details">
			<h1><?php the_title(); ?></h1>
			<span class="year"><?php the_field('year'); ?></span> <em>|</em> <span><?php if (get_field('viewed') != 0): echo 'Te faltan '.round( (get_field('duration')/100)*get_field('viewed'),0).' de '; endif; echo get_field('duration').' min.'; ?></span> <em>|</em> <span class="age-rating"><?php the_field('age_rating'); ?></span><br/>
			<?php 
			$genres = get_field('genres');
			if ($genres):
				$c = count($genres) - 1;
				$a = 0;
				foreach ($genres as $genre):
					echo '<span class="" data-genre="'.$genre->ID.'">'.get_the_title($genre->ID).'</span>';
					if ($a < $c):
						echo ' <em>|</em> ';
					endif;
					$a++;
				endforeach;
			endif;
			?>

			</span><br/>
			<?php 
			$field = get_field_object('quality');
			$value = $field['value'];
			$choices = $field['choices'];
			if ($value):
			?>
			Calidad: <span>
			<?php
				$c = count($value) - 1;
				$a = 0;
				foreach( $value as $v ):
					echo $choices[ $v ];
					if ($a < $c):
						echo ' <em>|</em> ';
					endif;
					$a++;
				endforeach;
			endif;
			?>
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Valoración: <span><?php echo round(get_field('rating')/2,1); ?>/5</span>

			</span><br/>
			<?php 
			$field = get_field_object('lang');
			$value = $field['value'];
			$choices = $field['choices'];
			if ($value):
			?>
			Idioma: <span>
			<?php
				$c = count($value) - 1;
				$a = 0;
				foreach( $value as $v ):
					echo $choices[ $v ];
					if ($a < $c):
						echo ' <em>|</em> ';
					endif;
					$a++;
				endforeach;
			endif;
			?>
			</span><br/>
			<?php 
			$field = get_field_object('subtitles');
			$value = $field['value'];
			$choices = $field['choices'];
			if ($value):
			?>
			Subtítulos: <span>
			<?php
				$c = count($value) - 1;
				$a = 0;
				foreach( $value as $v ):
					echo $choices[ $v ];
					if ($a < $c):
						echo ' <em>|</em> ';
					endif;
					$a++;
				endforeach;
			endif;
			?>
			</span>
			<div class="stars">
				<?php 
				$directors = get_field('director');
				if ($directors):
				?>
				Dirección: 
				<?php
					foreach ($directors as $director):
						echo '<a class="director" href="#">'.get_the_title($director->ID).'</a>';
					endforeach;
				endif;
				?>
				
				<?php 
				$actors = get_field('actors');
				if ($actors):
				?>
				<br/>Reparto: 
				<?php
				foreach ($actors as $actor):
						echo '<a class="director" href="#">'.get_the_title($actor->ID).'</a>';
					endforeach;
				endif;
				?>
				<br/>
			</div>
			<p class="sinopsis">
				<?php the_field('description'); ?>
			</p>
			<div class="actions">
				<button class="action-button play">Reproducir</button>
				<button class="action-button wishlist">Lo Quiero Ver</button>
				<button class="action-button trailer">Ver Trailer</button>
			</div>
		</div>

	</div>
<?php wp_reset_postdata(); ?>
	</div>
	<div class="section-recommendations">
	<h1>Recomendados</h1>
	<ul class="shows">
<?php
$posts = get_posts(array(
	'numberposts'	=> 6,
	'exclude'		=> $mainPostID,
	'post_type'		=> 'pt_films',
	'meta_key'		=> 'popularity',
	'orderby'		=> 'meta_value_num',
	'order'			=> 'DESC'
));
if( $posts ):
foreach( $posts as $post ): 
setup_postdata( $post )
?>
		
		<li>
			<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 154, 224, 3); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</li>

<?php 
endforeach;
wp_reset_postdata();
endif;
?>
	</ul>
	</div>
