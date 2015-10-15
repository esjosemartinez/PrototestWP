
<div class="content">
	<div class="filters">
		<h1 class="page-title"><?php if('pt_films' == get_post_type()): echo'Películas'; elseif('pt_tvseries' == get_post_type()): echo'Series'; endif; ?></h1>
		<span class="breadcrumb">Todos los géneros, Mas relevante (480)</span>

		<div class="filters-area">
			<a href="#" class="filters-button" title="Filtra aquí los contenidos según tus preferencias"><span>Filtrar</span><i class="check-icon">&nbsp;</i></a>
			<div class="filters-dropdown" data-origin="-1" data-genre="-1" data-sort="rel">
				<div class="filters-col">
					<div class="filters-col-tit">Tipo de contenido</div>
					<ul class="filters-col-box">
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-origin active" data-origin="-1"><i class="check-icon">●</i> Todo</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-origin" data-origin="0"><i class="check-icon">○</i> Catálogo</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-origin" data-origin="1"><i class="check-icon">○</i> Televisión</a></li>
					</ul>
				</div>
				<div class="filters-col filters-col-x2">
					<div class="filters-col-tit">Género</div>
					<div class="filters-col-box-scrollarea">
						<ul class="filters-col-box" id="scrollbox">
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre active" data-genre="-1"><i class="check-icon">●</i> Todos los géneros</a></li>

							<?php 
$args = array(
	'posts_per_page' => 100,
	'offset' => 0,
	'orderby' => 'post_title',
	'order' => 'ASC',
	'post_type' => 'pt_genre',
	'post_status' => 'publish',
	'suppress_filters' => 0);
$filtergenres = get_posts($args);
foreach ($filtergenres as $filtergenre) : setup_postdata($filtergenre);
if(count_items_by_genre(get_post_type(),$filtergenre->ID)):
?>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="<?php echo $filtergenre->ID; ?>"><i class="check-icon">○</i> <?php echo get_the_title($filtergenre->ID); ?></a></a></li>
<?php
endif;
endforeach;
wp_reset_postdata();
?>
						</ul>
					</div>
				</div>
				<div class="filters-col">
					<div class="filters-col-tit">Ordenación</div>
					<ul class="filters-col-box filters-col-box-right">
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort active" data-sort="rel"><i class="check-icon">●</i> Más relevante</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort" data-sort="date"><i class="check-icon">○</i> Más reciente</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort" data-sort="az"><i class="check-icon">○</i> A - Z</a></li>
					</ul>
				</div>
				<div class="filters-submit-area">
					<a href="#" class="filters-submit-button filters-submit-reset">Cancelar</a>
					<a href="#" class="filters-submit-button filters-submit-send">Aplicar filtros</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section-container">
		<ul id="thematicarea-list" class="shows">

			<?php
			$args = array(
				'posts_per_page' => 100,
				'offset' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => get_post_type(),
				'post_status' => 'publish',
				'suppress_filters' => 0);

			$myposts = get_posts($args);
			foreach ($myposts as $post) : setup_postdata($post);
				$genres = get_field('genres');
				switch(get_field('origin')){
					case 0:
						$origin = 'vod';
						break;
					case 1:
						$origin = 'live';
						break;
				}
				?>

				<li class="show <?php echo $origin; ?> option-visible <?php echo get_media_genres_class($genres); ?>" 
					data-origin="<?php the_field('origin'); ?>" 
					data-popularity="<?php the_field('popularity'); ?>" 
					data-title="<?php the_title(); ?>" 
					data-genres="<?php echo get_media_genres_ids($genres); ?>" 
					data-date="<?php echo get_the_date("Y-m-d-H-i-s"); ?>" 
					data-duration="<?php the_field('duration'); ?>" 
					>
					<?php if(get_field('origin') == 0): ?>
					<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 116, 172, 3); ?>" alt="<?php the_title(); ?>" >
					<div class="info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="duration"><?php the_field('duration'); ?>min</span><br>
						<span class="genres">
							<?php
							if ($genres):
								$c = count($genres) - 1;
								$a = 0;
								foreach ($genres as $genre):
									echo get_the_title($genre);
									if ($a < $c):
										echo ', ';
									endif;
									$a++;
								endforeach;
							endif;
							?>
						</span>
					</div>
					<?php 
					elseif(get_field('origin') == 1): 
					$image = get_field('live_image');
					if(!empty($image)):
						$imgurl = cached_image($image['url'], 306, 172, 3);
					else:
						$imgurl = cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 306, 172, 3);
					endif;
					?>
					<img class="cover" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" >
					<div class="info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="time">22:00 - 00:45</span>
						<div class="progress-container">
							<div class="progress" style="width: <?php the_field('broadcasted'); ?>%"></div>
						</div>
					</div>
					<?php endif; ?>
				</li>

				<?php
			endforeach;
			wp_reset_postdata();
			?>
		</ul>
	</div>
</div>
