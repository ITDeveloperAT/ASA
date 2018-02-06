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
<title></title>
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
					<h1>Restaurantes y Bares</h1>
				</header>
				<p>Cancún tiene mucho que ofrecer, como sus magníficas playas e
					impresionantes vistas, pero en Paradisus Cancun también ofrecemos
					experiencias gastronómicas inolvidables. El chef Martín Berasategui
					con estrellas Michelin y su restaurante, Tempo, marcan el nivel de
					la excelencia gastronómica. Pero con nueve restaurantes y ocho
					bares, esto es sólo el principio. Una deliciosa y nutritiva
					selección de opciones gastronómicas para todos los gustos, desde
					los amantes de los máximos placeres sibaritas a los apasionados de
					la comida reconfortante o los más concienciados con la salud.
					Gracias a nuestro Servicio de habitaciones 24 horas y nuestra
					oferta de restaurantes, los huéspedes tienen opciones para cada
					hora del día y cuando vean lo que pueden encontrar, seguro
					encontraras lo que buscas.</p>
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
							<h3>Fuego</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Experimenta el calor en el Fuego, donde los sabores de inspiración
						latina están listos para tentarte. El ceviche picante, el marisco
						más fresco y una deliciosa barra de pescado crudo se unen en uno
						de nuestros mejores restaurantes. Tu paladar necesitará un
						pasaporte para este viaje culinario. <br>Tipo de Cocina: cocina
						peruana “Nikkei Style” <br> Atmósfera: donde los frescos sabores
						de inspiración Peruana-japonesa están listos para tentarte. <br>
						Código de vestir: resort casual<br>
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/02.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Vento</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">El Mediterráneo sirve de fuente de
						inspiración a Vento. La animada terraza rodeada de palmeras, crea
						el ambiente ideal para degustar un menú ligero y fresco de
						inspiración mediterránea. Los comensales pueden disfrutar de pizza
						al horno de madera y pasta recién hecha. <br>Tipo de Cocina: tapas de
						la Cuenca <br>Atmósfera: íntima y a luz baja, en donde las texturas
						del mediterráneo encantaran tu paladar. <br>Código de vestir: resort
						casual</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic03.png" alt="" />
						</span>
						<header class="major">
							<h3>El Mercado</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Las diez estaciones temáticas te llevarán por un viaje sensorial
						de 360º. Los productos frescos, de colores y texturas vibrantes,
						se transformarán frente a tus ojos y tus oídos en platillos llenos
						de aromas y sabores auténticos. <br> <br>Buffet: desayuno de 7:00
						a 11:00 h / comida de 12:30 a 16:30 h / cena de 18:00 a 23:00 h
						Edificio principal (Casa Grande)
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic04.png" alt="" />
						</span>
						<header class="major">
							<h3>Trajinera</h3>
							<h5>Restaurante y Bar</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Desde hace ocho siglos, barcas llamadas “trajineras” navegan por
						los canales de la región lacustre de Xochimilco, al sur de la
						Ciudad de México. Evocamos esa experiencia y traemos a la mesa los
						mejores productos de mar y tierra, enriquecidos con el toque
						caribeño de las brasas. <br> <br> Buffet: desayuno de 7:00 a 11:00
						h / comida de 12:30 a 18:00 h / cena de 19:00 a 23:00 h Piscina
						principal
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic05.png" alt="" />
						</span>
						<header class="major">
							<h3>Mexican Steak House</h3>
							<h5>Restaurante y Bar</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						La cantina es para México lo que el bistrot es para Francia: un
						lugar para reunirse y comer como en casa. En la planta baja,
						podrás probar sazones tradicionales reinterpretados con la
						frescura actual, incluyendo cortes de carne terminados a tu gusto.
						Por la noche, un ambiente de fiesta se instala en el mezzanine con
						música para bailar, un menú de snacks, cocteles originales,
						tequilas y mezcales para descubrir. <br> <br>A la carta: cenas de
						18:30 a 23:00 h / After dinner de 23:00 a 2:00 h Edificio
						principal (Casa Grande) Requiere reservación. <br> <br> Horario
						Bar: de 23:00 h a 2:00 h
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/banner.jpg" alt="" />
						</span>
						<header class="major">
							<h3>La Cueva</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Hemos creado para ti una experiencia culinaria única en la Riviera
						Maya. Explora las especialidades mexicanas, mezcladas con las
						tendencias internacionales, en una galería de cuevas excavadas en
						la roca peninsular. Durante la cena, el menú se transforma para
						que descubras el vino mexicano como una experiencia de maridaje. Y
						si solo quieres tomar una copa de vino o fumar un puro, te
						invitamos al Wine Bar y al Cigar Bar. <br> <br> A la carta: Comida
						11:00 a 17:00 h y Cena 18:00 a 23:00 h Requiere reservación
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic07.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Teatro del R&iacute;o</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						En el M&eacute;xico de los años 50, los salones con cena y show
						eran el epicentro de la vida art&iacute;stica y social. Nuestro
						sal&oacute;n retoma ese &iacute;mpetu y propone un espectaculo
						para vivir en pareja, con amigos o en familia. Mientras el show
						transcurre en un impresionante foro frente al r&iacute;o, disfruta
						de una cena degustaci&oacute;n.<br> <br> Horario: Cena
						degustaci&oacute;n de 19:00 h a 22:00 h frente al recinto
						ceremonial (Cerro Espiral) Se requiere reservaci&oacute;n.
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic06.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Pool Bar</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Disfruta de refrescantes opciones en el bar de la piscina, al que
						se accede desde el agua. Su oferta incluye una amplia variedad de
						bebidas donde no podía faltar la coctelería caribeña. Es el lugar
						perfecto para la buena música y para disfrutar de las refrescantes
						bebidas mezcladas del Hotel Xcaret. <br> <br>Horario: Pool Bar
						Viento: 10:00 a 18:00 h Pool Bar Espiral: 10:00 a 18:00 h
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic08.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Lobby Bar</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Para empezar o finalizar tu estancia en Hotel Xcaret México de la
						mejor forma, ponemos a tu disposición un abanico de conceptos y
						estilos de cocteles, vinos, martinis, gin tonics y cervezas,
						brindándote así una experiencia totalmente hecha a la medida. No
						te puedes perder sus happenings de Jazz y Rock en inglés. <br> <br>
						Horario: 22:00 a 2:00 h
					</p>
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
	<script src="assets/js/main.js"></script>

</body>
</html>