<?php
require_once '../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
// var_dump($_SESSION['nuac']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Xcaret</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing">
	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<header id="header" class="alt">
			<h1>Hotel Xcaret</h1>
			<nav id="nav">
				<ul>
					<li class="special"><a href="../" class="menuToggle"><span>Volver</span></a></li>
				</ul>
			</nav>
		</header>
		<!-- Banner -->
		<section id="banner">
			<section>
				<div class="image">
					<h2>
						<img alt="" src="images/Hotel-blanco.png" align="middle">
					</h2>
				</div>
				<a href="#one" class="more scrolly">Descubrelo</a>
			</section>
		</section>
		<!-- One -->
		<section id="one" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h2>¡LO LOGRASTE! BIENVENIDO A PARADISUS CANCÚN, M&Eacute;XICO!</h2>
					<p style="text-align: justify;">Perfectamente ubicado frente a las
						playas de suave arena blanca de Cancún, este exclusivo complejo de
						playa te ofrece el alojamiento perfecto para tus vacaciones.
						Paradisus Cancun te brinda la oportunidad de experimentar la
						impresionante belleza que hace de Cancún un destino internacional
						con las comodidades de un complejo de lujo a la par con los
						niveles de excelencia más elevados. Gracias a este compromiso con
						la calidad, Paradisus Cancún Resort ha recibido desde 2006 los
						cuatro diamantes que otorga la AAA. Habitaciones lujosas,
						espaciosas y elegantemente decoradas frente a una playa única, a
						tan solo 15 minutos del aeropuerto. Estés en la playa, en una de
						las cuatro piscinas estilo laguna, o cenando en cualquiera de
						nuestros nueve restaurantes, nuestro objetivo es tu total
						satisfacción.</p>
					<br>
				</header>
			</div>
		</section>
		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image">
					<img src="images/pic01.png" alt="" />
				</div>
				<div class="content">
					<h2>
						Suites<br />
					</h2>
					<p>
						Las suites del Hotel Xcaret México, son amplias y lujosas, y están
						distribuidas en cinco edificios. Nuestro grupo estar&aacute;
						hospedado en casa viento y casa espiral <a href="CT">Leer
							m&aacute;s</a>
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic02.png" alt="" />
				</div>
				<div class="content">
					<h2>
						Restaurantes y bares<br />
					</h2>
					<p>
						Los 8 Restaurantes y 5 Bares de Hotel Xcaret M&eacute;xico te
						invitan a dar un viaje alrededor de los sabores del mundo donde la
						gastronom&iacute;a mexicana, <a href="RT">Leer m&aacute;s</a>
					
					
					<p style="text-align: justify;"></p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.png" alt="" />
				</div>
				<div class="content">
					<h2>
						&Aacute;reas Comunes<br />
					</h2>
					<p>
						En armon&iacute;a con el entorno Hotel Xcaret M&eacute;xico te
						lleva por el camino de relajamiento <a href="OA">Leer m&aacute;s</a>
					</p>
				</div>
			</section>
		</section>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>
</html>