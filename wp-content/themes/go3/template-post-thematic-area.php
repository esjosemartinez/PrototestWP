
<div class="content">
	<div class="filters">
		<h1 class="page-title"><?php if('pt_films' == get_post_type()): echo'Películas'; elseif('pt_tvseries' == get_post_type()): echo'Series'; endif; ?></h1>
		<span class="breadcrumb"><span class="filter-result-genre">Todos los géneros</span>, <span class="filter-result-sort">Mas relevante</span> (<span class="filter-result-counter">0</span>)</span>

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
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre active" data-genre="-1"><i class="check-icon">●</i> <span>Todos los géneros</span></a></li>

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
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="<?php echo $filtergenre->ID; ?>"><i class="check-icon">○</i> <span><?php echo get_the_title($filtergenre->ID); ?></span></a></li>
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
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort active" data-sort="rel"><i class="check-icon">●</i> <span>Más relevante</span></a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort" data-sort="date"><i class="check-icon">○</i> <span>Más reciente</span></a></li>
						<li class="filters-col-li"><a href="#" class="filters-option filters-option-sort" data-sort="az"><i class="check-icon">○</i> <span>A - Z</span></a></li>
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
<?php get_template_part( 'template', 'list-item-card' ); ?>
		</ul>
	</div>
</div>
