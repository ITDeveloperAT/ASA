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
<title>Parques y tours</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<!-- Header -->
	<header id="header">
		<h1>
			<img alt="Logo" src="../../images/Logobl.png" width="139px"
				height="56px">
		</h1>
	</header>
	<!-- Intro -->
	<!-- 
	 -->
	<section id="intro" class="main style1 dark fullscreen">
		<div class="content">
			<header>
				<h2>PARQUES Y TOURS</h2>
			</header>
			<p>
				<a href="#test" onclick="pst(0);"><input type="button"
					value="$50 - $100" style="color: gray;" /></a> <a href="#test"
					onclick="pst(1);"><input type="button" value="$100 - $150"
					style="color: gray;" /></a> <a href="#test" onclick="pst(2);"><input
					type="button" value="$150 - $200" style="color: gray;" /></a>
			</p>
		</div>
	</section>

	<form action="index.html" method="post">
		<section id="test"></section>
	</form>

	<!-- One -->
	<!-- <form action="index.html" method="post" enctype="application/x-www-form-urlencoded">
	<section id="one" class="main style2 right dark fullscreen"
		style="background: url('images/overlay.png'), url('images/chichenluz2.jpg'); background-size: 260px 260px, cover; background-position: top left, center center; background-attachment: fixed, fixed;">

		<div class="content box style2" id="cntnd">
			<header>
				<h2>Chichen ITZA</h2>
			</header>
			<table>
				<tr>
					<td>
						<p style="font-size: 12pt; text-align: justify;">Visite
							Chichen Itza y sienta el misticismo de esta hermosa zona
							arqueológica donde podrá conocer la maravillosa Pirámide de
							Kukulcan, el Templo de los Guerreros y el Juego de Pelota que
							fueron diseñados bajo la influencia de la raza Tolteca y que
							formaron la mágica capital del Imperio Maya. Chichén Itzá se ha
							convertido en una de las nuevas Siete Maravillas del Mundo. En
							este tour también visitará un hermoso Cenote.</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>
							Incluye: Transportación, Guía bilingüe, Entradas, Almuerzo
							buffet, Nado en Cenote. <br> Horario: Lunes a Sábado –
							Duración: 10 hrs Aprox.
						</p>
					</td>
				</tr>
			</table>
		</div>
	</section>
	<section id="two" class="main style2 right dark fullscreen"
		style="background: url('images/overlay.png'), url('images/chichenluz.jpg'); background-size: 260px 260px, cover; background-position: top left, center center; background-attachment: fixed, fixed;">
		<div class="content box style2" id="cntnd">
			<header>
				<h2>Chichen ITZA</h2>
			</header>
			<table>
				<tr>
					<td>
						<p style="font-size: 12pt; text-align: justify;">Visite
							Chichen Itza y sienta el misticismo de esta hermosa zona
							arqueológica donde podrá conocer la maravillosa Pirámide de
							Kukulcan, el Templo de los Guerreros y el Juego de Pelota que
							fueron diseñados bajo la influencia de la raza Tolteca y que
							formaron la mágica capital del Imperio Maya. Chichén Itzá se ha
							convertido en una de las nuevas Siete Maravillas del Mundo. En
							este tour también visitará un hermoso Cenote.</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>
							Incluye: Transportación, Guía bilingüe, Entradas, Almuerzo
							buffet, Nado en Cenote. <br> Horario: Lunes a Sábado –
							Duración: 10 hrs Aprox.
						</p>
					</td>
				</tr>
			</table>
		</div>
	</section> -->
	<!-- </form> -->
	<footer id="footer" style="text-align: center;">
		<!-- Menu -->
		<ul>
			<li><a href="amatetravel.com" target=" "><img
					alt="powerby-amatetravel"
					src="../images/Amate Travel para fondo gris-01.png" width="290px"
					height="44px"></a></li>
		</ul>

	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/tours.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
