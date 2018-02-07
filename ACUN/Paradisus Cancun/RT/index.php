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
						<span class="image"> <img src="images/13.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Tempo</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						El chef Martín Berasategui con siete estrellas Michelin trae su
						famosa cocina a Cancún gracias al restaurante Tempo de Paradisus
						Cancún. <br> El restaurante está abierto a todo el mundo, incluso
						a los que no se alojan en el hotel, y ofrece un ambiente
						retro-glamuroso perfecto para conversaciones íntimas en largas
						cenas. (Pueden aplicarse cargos adicionales). <br> Tipo de Cocina:
						vasca contemporánea <br> Atmósfera: combinación perfecta entre
						elegancia, vanguardia y los sabores tradicionales de la cocina
						vasca <br> Código de vestir: formal/elegante Sólo Adultos Acceso:
						huéspedes Paradisus, RS, FC y Clientes Externos <br> Horarios:
						18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
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
						Código de vestir: resort casual<br> Familiar <br> Acceso:
						huéspedes Paradisus, RS, FC y Clientes Externos <br> Horarios:
						18:00 – 22:00 todos los días
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
					<p style="text-align: justify;">
						El Mediterráneo sirve de fuente de inspiración a Vento. La animada
						terraza rodeada de palmeras, crea el ambiente ideal para degustar
						un menú ligero y fresco de inspiración mediterránea. Los
						comensales pueden disfrutar de pizza al horno de madera y pasta
						recién hecha. <br>Tipo de Cocina: tapas de la Cuenca <br>Atmósfera:
						íntima y a luz baja, en donde las texturas del mediterráneo
						encantaran tu paladar. <br>Código de vestir: resort casual <br>
						Familiar <br> Acceso: huéspedes Paradisus, RS, FC y Clientes
						Externos <br> Horarios: 18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/03.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Bana</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Este restaurante contemporáneo pan asiático aporta un elemento
						global a la experiencia gastronómica del Paradisus. Situado en una
						hermosa y relajante terraza Zen, es el ideal para todos los que
						quieran estar en el centro de todo. Los menús de fusión asiática
						incluyen sushi servido al estilo occidental y oriental. <br> Tipo
						de Cocina: fusión japonesa Atmósfera: sensorial y armónica, en
						donde los sabores asiáticos son los anfitriones de tu noche. <br>
						Código de vestir: resort casual <br> Familiar <br> Acceso:
						Huéspedes Paradisus, RS, FC y Clientes Externos <br> Horarios:
						18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/04.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Blue Agave</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Tacos y tequila son una pareja formada en la paradisíaca playa de
						Cancún. El establecimiento predilecto del complejo Paradisus
						ofrece especialidades mexicanas y una amplia selección de platos
						auténticos, tequilas y cervezas. Deja que nuestro atento personal
						te lleve en un recorrido por los sabores del país. <br> Tipo de
						Cocina: Tradicional taquería mexicana y una amplia selección de
						platos auténticos combinadas con los mejores mezcales, tequilas y
						cervezas. <br> Atmósfera: típica mexicana, colorida y alegre. <br>
						Código de vestir: pure freedom <br> Familiar <br> Acceso:
						huéspedes Paradisus, RS, FC y Clientes Externos <br> Horarios:
						17:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/05.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Market Grill</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Vive una experiencia culinaria frente al mar donde las brisas
						marinas y la comida recién asada harán de tu comida algo
						inolvidable. Market Grill ofrece un menú de fusión
						italo-argentina. Los favoritos de la casa son los cortes de carne
						fresca de ternera de primera calidad y ensaladas saludables. <br>
						Tipo de Cocina: rodizzio brasileño (Restaurante de Botón) <br>
						Atmósfera: tropical con vista al mar caribe, para os amantes de la
						carne. <br> Código de vestir: resort casual <br> Familiar <br>
						Acceso: Huéspedes Paradisus, RS, FC y Clientes Externos <br>
						Horarios: 18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/14.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Enso</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Degusta el esplendor del océano caribeño en este restaurante
						especializado en marisco. Situado junto a la piscina y con la
						inmensa belleza caribeña a tu alrededor, prueba los sabores más
						frescos, ceviches y otros platos favoritos preparados con nuestro
						toque particular. Magnífica comida, servicio agradable y belleza
						junto al mar, lo convierten en el lugar perfecto para comer. <br>
						Cocina: Asiática Atmosfera: Donde los sentidos se dejan expuestos
						a sabores y texturas orientales. La unión de 4 culturas
						compartiendo mesa: India, China, Coreana y tailandesa <br> Código
						de vestir: Resort Casual <br> Familiar Acceso: Huéspedes
						Paradisus, RS, FC y Clientes Externos <br> Horarios: 18:00 –
						22:00Hrs / Diariamente
					</p>
				</article>
			</section>
			<section id="two" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/06.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Mole</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Seguro que nunca has degustado comida mexicana como esta. Ahora
						puedes disfrutar de los auténticos y fuertes sabores y las
						distintas versiones de la cocina contemporánea mexicana. La comida
						es la estrella de este restaurante, empezando con las quesadillas
						especiales hechas a medida. <br> Lo tradicional combina con lo
						moderno en la decoración y con magníficos azulejos mexicanos que
						revisten la pared. La mejor mesa de la casa se encuentra en la
						esquina, con vistas al Caribe. Puede que esta sea la mejor comida
						mexicana de tu vida. <br> Tipo de Cocina: mexicana contemporánea <br>
						Atmósfera: donde el lujo y tradicionalismo mexicano se fusionan
						para brindar una experiencia a través de la gastronomía mexicana.
						<br> Código de vestir: resort casual/formal Acceso: huéspedes
						Paradisus, RS, FC y Clientes Externos <br> Horarios: 18:00 – 22:00
						todos los días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/07.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Naos</h3>
							<h5>Restaurante</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Si en algún momento tienes hambre, lo más probable es que Naos
						esté abierto. Los huéspedes son siempre bienvenidos para comenzar
						el día con un suntuoso desayuno internacional, pero este
						restaurante también está abierto para el servicio de almuerzo y
						cena. Gracias al estilo bufé, todo el mundo encuentra lo que
						quiere, con una gran variedad de deliciosas opciones. <br> Tipo de
						Cocina: internacional <br> Atmósfera: estilo bufé, un viaje
						gastronómico internacional. <br> Código de vestir: pure freedom
						(No Ropa Mojada) <br> Familiar <br> Acceso: huéspedes Paradisus,
						RS, FC y Clientes Externos <br> Horarios: 06:00 – 11:00Hrs, 12:00
						– 17:00Hrs y 18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/08.jpg" alt="" />
						</span>
						<header class="major">
							<h3>La Palapa</h3>
							<h5>Restaurante y Bar</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Se trata de un detalle exclusivo VIP del Servicio Real donde los
						deliciosos entrantes de la carta y el servicio impecable forman
						parte del menú. Con vistas a las tranquilas aguas del Caribe,
						nuestro personal experto te servirá desde sugerentes ensaladas a
						especialidades que te dejarán una sonrisa en los labios. <br> Tipo
						de Cocina: cocina internacional gourmet <br> Atmósfera: con vistas
						a las tranquilas aguas del Caribe ofrece texturas, sabores
						tradicionales y acentos de nuevas tendencias en gastronomía. <br>
						Código de vestir: pure freedom <br> Sólo  Adultos <br> Acceso:
						exclusivo huéspedes Royal Service <br> Horarios: 07:00 – 11:00Hrs
						y 12:00 – 16:00 todos los días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/09.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Toji Bar</h3>
							<h5>Restaurante y Bar</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Chai, jengibre, cardamomo, tapioca, té verde y lichee son sólo
						algunos de los ingredientes de inspiración asiática que aromatizan
						los cócteles en este paraíso de Cancún. Sake, lámparas de papel y
						toques decorativos se unen para ofrecer una experiencia de
						inspiración asiática. <br> Atmósfera: sake, lámparas de papel y
						toques decorativos se unen para ofrecer una experiencia de
						inspiración asiática. <br> Código de vestir: resort casual Sólo <br>
						Adultos <br> Acceso: huéspedes Paradisus, RS, FC y Clientes
						Externos <br> Horarios: 17:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/15.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Swimp Up Bar</h3>

						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">En este paraíso acuático no hace
						falta salir de la piscina para pedir la siguiente ronda de
						bebidas. Este swim up bar situado en la Piscina Sur es un lugar de
						reunión ideal para beber y socializar bajo el magnífico sol del
						Caribe. <br> Atmósfera: un lugar de reunión ideal para beber y
						socializar bajo el magnífico sol del Caribe. Código de vestir:
						pure freedom <br> Familiar <br> Acceso: huéspedes Paradisus, RS, FC y
						Clientes Externos <br> Horarios: 18:00 – 22:00 todos los días</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/10.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Avenue Bar</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Una magnífica opción para degustar deliciosos cócteles y un menú
						de tentempiés, acompañado de impresionantes vistas a la arena y el
						mar. Con una situación fácil e ideal para disfrutar de las
						hermosas playas y las vistas de Cancún. <br> Atmósfera: deliciosos
						cócteles y un menú de tentempiés, acompañado de impresionantes
						vistas a la arena y el mar. <br> Código de vestir: pure freedom <br>
						Familiar <br> Acceso: huéspedes Paradisus, RS, FC y Clientes
						Externos <br> Horarios: 18:00 – 22:00 todos los días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/11.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Red Lounge</h3>
							<h5>Bar</h5>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Los huéspedes degustan cócteles tropicales mientras disfrutan de
						la música cuidadosamente seleccionada por el DJ en este moderno y
						sugerente salón. Cierra los ojos y casi podrás sentir las cálidas
						de las aguas y escuchar la voz de los clientes que disfrutan de
						este lugar de moda. <br> Atmósfera: cócteles tropicales y un beat
						ecléctico en un moderno y sugerente salón <br> Código de vestir:
						resort casual <br> Sólo Adultos <br> Acceso: huéspedes Paradisus,
						RS, FC y Clientes Externos <br> Horarios: 18:00 – 22:00 todos los
						días
					</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/12.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Coco´s Beach Bar</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">
						Imagínate en la playa, sobre la suave y blanca arena del Caribe y
						las aguas cálidas de color turquesa, con un refrescante cóctel en
						la mano. <br> El Beach Club hace honor a su nombre y está
						convenientemente situado el mejor espacio del resort. <br>
						Atmósfera: caribeña - cocteles orgánicos y mojitos <br> Código de
						vestir: pure freedom <br> Sólo Adultos <br> Acceso: huéspedes
						Paradisus, RS, FC y Clientes Externos <br> Horarios: 10:00 –
						17:00Hrs, 19:00 – 22:00 todos los días
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