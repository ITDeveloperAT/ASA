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
<title>&Aacute;reas Comunes</title>
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
					<h1>Instalaciones</h1>
				</header>
				<p>Superar las expectativas de nuestros clientes, esta es nuestra
					definición del éxito. Las emblemáticas pirámides del complejo, la
					elegante decoración, las instalaciones excepcionales, un personal
					atento y cualificado, y las numerosas actividades que se ofrecen in
					situ, son una de las principales razones por las que los huéspedes
					regresan de nuevo y nos recomiendan a sus amigos.</p>
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
						<span class="image"> <img src="images/01.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Piscinas</h3>
						</header>
					</div>
				</article>
				<article>
					<div class="inner">
						<span class="image"> <img src="images/02.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Campo de Golf</h3>
						</header>
					</div>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/04.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Yhin Spa</h3>
						</header>
					</div>
				</article>
				<article>
					<div class="inner">
						<span class="image"> <img src="images/descubrelo.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Descúbrelo</h3>
						</header>
					</div>
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