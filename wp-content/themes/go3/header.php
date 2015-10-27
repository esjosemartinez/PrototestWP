<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<title>Prototest TV</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet/less" href="<?php echo get_site_url(); ?>/wp-content/themes/go3/less/style.less">
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/vendor/less.js"></script>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/vendor/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/vendor/scrollbar.js" type="text/javascript"></script>	
<?php if(('pt_films' == get_post_type() || 'pt_tvseries' == get_post_type() || 'pt_docu' == get_post_type()) && is_archive()): ?>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/vendor/tinysort.min.js" type="text/javascript"></script>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/vendor/tinysort.charorder.min.js" type="text/javascript"></script>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/thematicfilter.js" type="text/javascript"></script>
<?php endif; ?>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/scripts.js" type="text/javascript"></script>
		<script src="<?php echo get_site_url(); ?>/wp-content/themes/go3/js/custom.js" type="text/javascript"></script>

	</head>

<?php if(is_page(1770)): ?>
	<body class="page-my-content">
<?php elseif(get_post_type() == 'pt_films' && is_single() ):?>	
	<body class="detail-page">
<?php elseif(get_post_type() == 'pt_tvseries' && is_single() ):?>	
	<body class="detail-page detail-page-series">
<?php elseif(is_page(1773) || is_page(1775) ):?>	
	<body class="page-tv-guide">
<?php elseif(is_page(1886)) :?>	
	<body class="player-page">
<?php elseif(get_post_type() == 'pt_channels') :?>	
	<body class="channel-page">
<?php endif; ?>
		
	<body>
		<div class="overlayer">
		</div>
		<?php get_template_part( 'template', 'player' ); ?>	
		<div id="container">
			<header>
				<div class="header-container">

					<div class="coorporative-nav nav">
						<ul>
							<li><a href="#">Movistar TV Multidispositivo: Disfruta de la TV en tu ordenador</a></li>      
							<li><a href="#">Ir a Movistar</a></li>
							<li><a href="#">Revista</a></li>
							<li><a href="#">Regístrate</a></li>
							<li class="right"><a href="#">Inicia Sesión</a></li>
						</ul>
					</div>

					<nav class="primary-nav nav">

						<ul>
							<li class="logo"><a href="<?php echo get_site_url(); ?>">VIVO</a></li>
							<li><a href="<?php echo get_site_url(); ?>/peliculas">Cine</a></li>      
							<li><a href="<?php echo get_site_url(); ?>/series">Series</a></li>
							<li><a href="<?php echo get_site_url(); ?>/peliculas">Deportes</a></li>
							<li><a href="<?php echo get_site_url(); ?>/peliculas">Infantil</a></li>
							<li class="more"><a href="#">&nbsp;</a>
								<ul class="submenu">
									<li><a href="#">Adultos</a></li>
									<li><a href="#">Documentales</a></li>
									<li><a href="#">Música</a></li>
									<li class="renting"><a href="#">Taquilla</a></li>
								</ul>
							</li>
							<li class="search right"><form> <input type="text"  placeholder="Buscar en Vivo"/><span class="btn-close"></span></form></li>
							<li class="my-content right"><a href="<?php echo get_site_url(); ?>/mis-contenidos">My Content</a>
								<!--<ul class="submenu">
									<li><a href="#">Mis alquilados</a></li>
									<li><a href="#">Lo quiero ver</a></li>
									<li><a href="#">Vistos</a></li>
									<li><a href="#">Siguiendo</a></li>
									<li><a href="#">Grab. disponibles</a></li>
									<li><a href="#">Grab. programadas</a></li>
								</ul>-->
							</li>
							<li class="tv-guide right"><a href="<?php echo get_site_url(); ?>/guia-tv">Guía TV</a>
								<!-- <ul class="submenu">
									<li><a href="/guia-tv-en-directo">En Directo</a></li>
									<li><a href="/guia-tv-programacion">Toda la programación</a></li>
								</ul> -->
							</li>
						</ul>
					</nav>
				</div>


			</header><!--end header-->