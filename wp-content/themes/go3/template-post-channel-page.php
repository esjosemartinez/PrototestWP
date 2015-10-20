<?php
$mainPostID = get_the_ID();
?>
<div class="content channel-page-content">
	<div class="header">
		<img class="channel-logo" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 180, 100, 3); ?>" alt="<?php the_title(); ?>" />
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="bg-box"></div>
		<input id="tabWatched" type="radio" name="tabs" checked>
		<label for="tabWatched">Resumen</label>

		<input id="tabWishlist" type="radio" name="tabs">
		<label for="tabWishlist">Catálogo</label>

		<input id="tabFollowing" type="radio" name="tabs">
		<label for="tabFollowing">Programación</label>	

		
	<section id="contentWatched" class="content-section">
		<div class="resumen-catchup">
			<div class="header-catchup">
				<h1 class="title">Vídeos de <?php the_title(); ?><a class="show-more">ver más vídeos</a></h1>
			</div>
			<img class="cover" src="/theme/images/placeholder_channel_resumen_catchup.png" alt="catchup" >
		</div>
		<div class="resumen-progam">
			<div class="header-program">
				<h1 class="title">Ahora en <?php the_title(); ?><a class="show-more">ver toda la programación</a></h1>
			</div>
			<img class="cover" src="/theme/images/placeholder_channel_resumen_programacion.png" alt="programación" >
		</div>
	</section>

	<section id="contentWishlist" class="content-section no-bg-color">
		<div class="filters">
			<div class="filters-area">
				<a href="#" class="filters-button" title="Filtra aquí los contenidos según tus preferencias"><span>Filtrar</span><i class="check-icon">&nbsp;</i></a>
			</div>
		</div>
		
		<span class="breadcrumb">Todos los géneros, Mas relevante (480)</span>
		<img class="cover" src="/theme/images/placeholder_channel_catchup.png" alt="catchup" >
	</section>

	<section id="contentFollowing" class="content-section content-program">
		<img class="cover" src="/theme/images/placeholder_channel_programacion.png" alt="programación" >
	</section>
	
</div>