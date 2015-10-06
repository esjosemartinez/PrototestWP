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
		<link rel="stylesheet/less" href="/theme/less/style.less">
		<script src="/theme/js/vendor/less.js"></script>
		<script src="/theme/js/vendor/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="/theme/js/vendor/tinysort.min.js" type="text/javascript"></script>
		<script src="/theme/js/vendor/scrollbar.js" type="text/javascript"></script>
		<script src="/theme/js/vendor/tinysort.charorder.min.js" type="text/javascript"></script>
		<script src="/theme/js/scripts.js" type="text/javascript"></script>
		<script src="/theme/js/custom.js" type="text/javascript"></script>
	</head>

<?php if(is_page(1770)): ?>
	<body class="page-my-content">
<?php elseif(get_post_type() == 'pt_films' && is_single() ):?>	
	<body class="detail-page">
<?php endif; ?>
		
	<body>
		<div class="overlayer"></div>
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
							<li class="logo"><a href="http://prototest.jbit.es/">VIVO</a></li>
							<li><a href="/peliculas">Cine</a></li>      
							<li><a href="/series">Series</a></li>
							<li><a href="/peliculas">Deportes</a></li>
							<li><a href="/peliculas">Infantil</a></li>
							<li class="more"><a href="#">&nbsp;</a>
								<ul class="submenu">
									<li><a href="#">Adultos</a></li>
									<li><a href="#">Documentales</a></li>
									<li><a href="#">Música</a></li>
									<li class="renting"><a href="#">Taquilla</a></li>
								</ul>
							</li>
							<li class="search right"><form> <input type="text"  placeholder="Buscar en Vivo"/><span class="btn-close"></span></form></li>
							<li class="my-content right"><a href="/mis-contenidos">My Content</a>
								<ul class="submenu">
									<li><a href="#">Mis alquilados</a></li>
									<li><a href="#">Lo quiero ver</a></li>
									<li><a href="#">Vistos</a></li>
									<li><a href="#">Siguiendo</a></li>
									<li><a href="#">Grab. disponibles</a></li>
									<li><a href="#">Grab. programadas</a></li>
								</ul>
							</li>
							<li class="tv-guide right"><a href="#">Guía TV</a>
								<ul class="submenu">
									<li><a href="#">En Directo</a></li>
									<li><a href="#">Toda la programación</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>


			</header><!--end header-->