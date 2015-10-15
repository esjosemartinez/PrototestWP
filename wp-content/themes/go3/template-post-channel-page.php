<?php
$mainPostID = get_the_ID();
?>
<div class="content channel-page-content">
	<div class="header">
		<img class="channel-logo" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 180, 100, 3); ?>" alt="<?php the_title(); ?>" />
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="filters">
		<h1 class="page-title">Películas</h1>
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
						<ul class="filters-col-box" id="scrollbox" style="width: 357px; padding-right: 3px; outline: none; overflow: hidden;" tabindex="0">
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre active" data-genre="-1"><i class="check-icon">●</i> Todos los géneros</a></li>

							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="64"><i class="check-icon">○</i> Acción</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="66"><i class="check-icon">○</i> Animación</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="65"><i class="check-icon">○</i> Aventuras</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="87"><i class="check-icon">○</i> Bélico</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="67"><i class="check-icon">○</i> Biográfico</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="82"><i class="check-icon">○</i> Ciencia ficción</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="68"><i class="check-icon">○</i> Comedia</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="69"><i class="check-icon">○</i> Crimen</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="71"><i class="check-icon">○</i> Drama</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="73"><i class="check-icon">○</i> Fantasía</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="75"><i class="check-icon">○</i> Histórico</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="79"><i class="check-icon">○</i> Misterio</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="80"><i class="check-icon">○</i> Romance</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="76"><i class="check-icon">○</i> Terror</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="85"><i class="check-icon">○</i> Thriller</a></li>
							<li class="filters-col-li"><a href="#" class="filters-option filters-option-genre" data-genre="88"><i class="check-icon">○</i> Western</a></li>
						</ul><div style="position: absolute; z-index: 1; margin: 0px; padding: 0px; display: none; left: 357px; top: 0px;"><div class="enscroll-track track" style="position: relative;"><a href="" class="handle" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div>
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
			<li class="show vod option-visible genre_68 genre_71" data-origin="0" data-popularity="88" data-title="Birdman" data-genres="68 71" data-date="2015-09-28-19-07-28" data-duration="99">
				<img class="cover" src="/images/2015/09/Birdman_116_172_3.jpg" alt="Birdman">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/birdman">Birdman</a></h1>
					<span class="duration">99m</span><br>
					<span class="genres">
						Comedia, Drama						</span>
				</div>
			</li>
			<li class="show vod option-visible genre_64 genre_65 genre_66" data-origin="0" data-popularity="83" data-title="The Lego Movie" data-genres="64 65 66" data-date="2015-09-28-19-07-33" data-duration="100">
				<img class="cover" src="/images/2015/09/TheLegoMovie_116_172_3.jpg" alt="The Lego Movie">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/the-lego-movie">The Lego Movie</a></h1>
					<span class="duration">100m</span><br>
					<span class="genres">
						Acción, Aventuras, Animación						</span>
				</div>
			</li>
			<li class="show vod option-visible genre_64 genre_71 genre_82" data-origin="0" data-popularity="79" data-title="Dawn of the Planet of the Ape" data-genres="64 71 82" data-date="2015-09-28-19-07-32" data-duration="121">
				<img class="cover" src="/images/2015/09/DawnOfThePlanetOfTheApe_116_172_3.jpg" alt="Dawn of the Planet of the Ape">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/dawn-of-the-planet-of-the-ape">Dawn of the Planet of the Ape</a></h1>
					<span class="duration">121m</span><br>
					<span class="genres">
						Acción, Drama, Ciencia ficción						</span>
				</div>
			</li>
			<li class="show vod option-visible genre_64 genre_67 genre_71" data-origin="0" data-popularity="75" data-title="Rush" data-genres="64 67 71" data-date="2015-09-28-19-07-35" data-duration="123">
				<img class="cover" src="/images/2015/09/Rush_116_172_3.jpg" alt="Rush">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/rush">Rush</a></h1>
					<span class="duration">123m</span><br>
					<span class="genres">
						Acción, Biográfico, Drama						</span>
				</div>
			</li><li class="show live option-visible genre_64 genre_67 genre_71" data-origin="1" data-popularity="72" data-title="American Sniper" data-genres="64 67 71" data-date="2015-09-28-19-07-28" data-duration="133">
				<img class="cover" src="/images/2015/09/AmericanSniper_306_172_3.jpg" alt="American Sniper">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/american-sniper">American Sniper</a></h1>
					<span class="time">22:00 - 00:45</span>
					<div class="progress-container">
						<div class="progress" style="width: 55%"></div>
					</div>
				</div>
			</li>
			<li class="show vod option-visible genre_65 genre_73" data-origin="0" data-popularity="66" data-title="The Hobbit: The Desolation of Smaug" data-genres="65 73" data-date="2015-09-28-19-07-32" data-duration="98">
				<img class="cover" src="/images/2015/09/TheHobbitTheDesolationOfSmaug_116_172_3.jpg" alt="The Hobbit: The Desolation of Smaug">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/the-hobbit-the-desolation-of-smaug">The Hobbit: The Desolation of Smaug</a></h1>
					<span class="duration">98m</span><br>
					<span class="genres">
						Aventuras, Fantasía						</span>
				</div>
			</li><li class="show vod option-visible genre_66 genre_65 genre_73" data-origin="0" data-popularity="63" data-title="The Lord of the Rings" data-genres="66 65 73" data-date="2015-09-28-19-07-26" data-duration="117">
				<img class="cover" src="/images/2015/09/LordOfTheRings01_116_172_3.jpg" alt="The Lord of the Rings">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/the-lord-of-the-rings">The Lord of the Rings</a></h1>
					<span class="duration">117m</span><br>
					<span class="genres">
						Animación, Aventuras, Fantasía						</span>
				</div>
			</li>
			<li class="show vod option-visible genre_64 genre_79 genre_82" data-origin="0" data-popularity="56" data-title="The Maze Runner" data-genres="64 79 82" data-date="2015-09-28-19-07-32" data-duration="105">
				<img class="cover" src="/images/2015/09/TheMazeRunner_116_172_3.jpg" alt="The Maze Runner">
				<div class="info">
					<h1><a href="http://prototest.jbit.es/peliculas/the-maze-runner">The Maze Runner</a></h1>
					<span class="duration">105m</span><br>
					<span class="genres">
						Acción, Misterio, Ciencia ficción						</span>
				</div>
			</li>
		</ul>
	</div>
</div>