
<div class="content">
	<div class="filters">
		<span class="breadcrumb">Películas: Catálogo, Todos los géneros, Mas relevante (480)</span>

		<div class="filters-area">
			<a href="#" class="filters-button" title="Filtra aquí los contenidos según tus preferencias"><span>Filtrar</span><i class="check-icon">&nbsp;</i></a>
			<div class="filters-dropdown">
				<div class="filters-col">
					<div class="filters-col-tit">Tipo de contenido</div>
					<ul class="filters-col-box">
						<li class="filters-col-li"><a href="#" class="filters-option active" data-type="1"><i class="check-icon">○</i> Catálogo</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option" data-type="2"><i class="check-icon">○</i> Televisión</a></li>
					</ul>
				</div>
				<div class="filters-col filters-col-x2">
					<div class="f ilters-col-tit">Género</div>
					<div class="filters-col-box-scrollarea">
						<ul class="filters-col-box" id="scrollbox">
						<li class="filters-col-li"><a href="#" class="filters-option active"><i class="check-icon">○</i> Todos los géneros</a></li>

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
?>
							<li class="filters-col-li"><a href="#" class="filters-option active" data-genre="<?php echo $filtergenre->ID; ?>"><i class="check-icon">○</i> <?php echo get_the_title($filtergenre->ID); ?></a></a></li>
<?php
endforeach;
wp_reset_postdata();
?>
						</ul>
					</div>
				</div>
				<div class="filters-col">
					<div class="filters-col-tit">Ordenación</div>
					<ul class="filters-col-box filters-col-box-right">
						<li class="filters-col-li"><a href="#" class="filters-option active" data-sort="rel"><i class="check-icon">○</i> Más relevante</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option" data-sort="date"><i class="check-icon">○</i> Más reciente</a></li>
						<li class="filters-col-li"><a href="#" class="filters-option" data-sort="az"><i class="check-icon">○</i> A - Z</a></li>
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
				?>

				<li class="show vod" data-duration="<?php the_field('duration'); ?>">
					<img class="cover" src="<?php echo ''.cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 116, 172, 3); ?>" alt="<?php the_title(); ?>" >
					<div class="info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="duration"><?php the_field('duration'); ?>m</span><br>
						<span class="genres">
							<?php
							if ($genres):
								$c = count($genres) - 1;
								$a = 0;
								foreach ($genres as $genre):
									echo get_the_title($genre->ID);
									if ($a < $c):
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
