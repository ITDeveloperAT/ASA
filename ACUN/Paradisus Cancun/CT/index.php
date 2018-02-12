<?php
require_once '../../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
// var_dump($_SESSION['nuac']);
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Suites</title>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<h1>Suites</h1>
				</header>
				<p>
					Espaciosas, lujosas y elegantes, nuestras suites disponen de
					terraza privada y espectaculares vistas al mar Caribe o la laguna
					Nichupté. <br> Los suelos de mármol y un elegante mobiliario crean
					un ambiente moderno y sofisticado, con lujosas camas y tonos
					cálidos que ofrecen un entorno equilibrado y relajante.
				</p>
			</div>
		</section>
		<header id="header" class="alt style2">
			<nav>
				<a href="../">Volver</a>
			</nav>
		</header>
		<!-- Main -->
		<div id="main">
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/vistalago.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Suite vista al Lago / Océano</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">Adéntrate en tu habitación de 44 m²
						y disfruta de todo el lujo y la elegancia que te está esperando.
						Desde la suite, las naturales e imponentes vistas de Cancún están
						sólo a unos pasos en tu terraza privada. Déjate llevar por los
						hermosos colores y las suaves brisas del Caribe.</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/vistaoceano.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Detalles de las habitaciones</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<table>
						<tr>
							<td>
								<ul>
									<li>Vistas Mar/Lago</li>
									<li>Vistas Jardín</li>
									<li>Vistas Piscina</li>
									<li>Pantalla Plana TV</li>
									<li>Caja fuerte con capacidad para ordenador portátil</li>
									<li>Canales por cable</li>

								</ul>
						
						</tr>
					</table>
				</article>
			</section>
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>
</html>