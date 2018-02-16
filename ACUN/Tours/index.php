<?php
require_once '../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
$r = denc($_SESSION['nuac']);
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
				<a href="#test" onclick="pst(0,'<?php echo $r?>');"><input
					type="button" hidden="" value="$50 - $100" style="color: gray;" /></a>
				<a href="#test" onclick="pst(1,'<?php echo $r?>');"><input
					type="button" value="$100 - $150" style="color: gray;" /></a> <a
					href="#test" onclick="pst(2,'<?php echo $r?>');"><input
					type="button" value="$150 - $200" style="color: gray;" /></a>
			</p>
		</div>
	</section>
	<form action="index.html" method="post">
		<section id="test"></section>
	</form>
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
