<?php
require_once 'fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ASESUISA</title>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/noscript.css" />
</head>
<body>
	<div id="wrapper">
		<p style="text-align: left;">
			<img alt="" src="../images/logoas.png" width="218px" height="78px">
		</p>
		<header id="header">
			<div class="content">
				<nav style="font-weight: bold; text-align: center;">
					<ul>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="Paradisus Cancun">Conoce Paradisus Canc&uacute;n</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="Tours">Conoce las actividades</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en2"
							href="#totravel">Para tu viaje</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="#jbmr">Itinerario</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="#jaam">Recomendaciones</a></li>
					</ul>
				</nav>
				<div class="inner">
					<img alt="Logo" src="images/Logoc.png" width="256" height="318">
					<h3 style="padding-top: 20px;">
						BIENVENIDOS A NUESTRA CONVENCI&oacute;N anual <b>ASESUISA <br>
							-Nos vamos a CANC&uacute;N-
						</b>
					</h3>
					<p style="font-weight: bold;">
						Del 6 al 9 de Marzo disfruta del Hotel Paradisus Canc&uacute;n <br>
						<br>
					</p>
					<br> <br>
				</div>
			</div>
		</header>
		<div id="main" style="background-color: #12b5cd; opacity: 0.76">
			<article id="afi-prk" style="background-color: #24468a;">
				<h2 class="major">Parques y tours</h2>
				<h2 style="font-size: 16pt; font-weight: bold;">Â¡UNA EXPERIENCIA
					INOLVIDABLE!</h2>
				<p>Por tu esfuerzo y dedicaci&oacute;n, mereces conocer y divertirte
					al m&aacute;ximo! Por eso te invitamos a conocer todos los parques
					del hotel Xcaret, al que tendr&aacute;s acceso de forma gratuita,
					en diversos horarios de noche y de d&iacute;a.</p>
				<p>Recuerda que en algunos parques necesitas reserva previa, para
					que planees tu tiempo y lo disfrutes al m&aacute;ximo!</p>
				<p style="text-align: justify;"></p>
				<h3>Parques D&iacute;a</h3>
				<h4>Sin reservac&iacute;on previa</h4>
				<div class="table-wrapper">
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td title="XCaret"><a href="XCaret"><img alt=""
										src="images/X2.png" width="48px" height="48px"></a></td>
								<td><a href="Xplor"><img alt="" src="images/X5.png" width="48px"
										height="48px"></a></td>
								<td><a href="Xenses"><img alt="" src="images/X8.png"
										width="48px" height="48px"></a></td>
							</tr>
							<tr>
								<td style="font-size: 12pt; font-weight: bold;"><a href="XCaret">XCaret</a></td>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xplor">Xplor</a></td>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xenses">Xenses</a></td>
							</tr>
						</tbody>
					</table>
					<h4>Requiere reservaci&oacute;n previa</h4>
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td><a href="Xelha"><img alt="" src="images/X6.png" width="48px"
										height="48px"></a></td>
							</tr>
							<tr>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xelha">Xelha</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-wrapper" id="cntdia"></div>
				<h3>Parques Noche</h3>
				<h4>Requiere reservaci&oacute;n previa</h4>
				<div class="table-wrapper" style="text-align: center;">
					<table style="text-align: center;">
						<tr>
							<td><a href="Xoximilco"><img alt="" src="images/X1.png"
									width="48px" height="48px"></a></td>

							<td><a href="XplorF"><img alt="" src="images/X7.png" width="48px"
									height="48px"></a></td>
						</tr>
						<tr>
							<td style="font-size: 12pt; font-weight: bold;"><a
								href="Xoximilco">Xoximilco</a></td>

							<td style="font-size: 12pt; font-weight: bold;"><a href="XplorF">Xplor
									Fuego</a></td>
						</tr>
						</tbody>
					</table>
				</div>
				<h3>Tours D&iacute;a completo</h3>
				<h4>Requiere reservaci&oacute;n previa</h4>
				<div class="table-wrapper" style="text-align: center;">
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td><a href="Xenotes"><img alt="" src="images/X3.png"
										width="48px" height="48px"></a></td>
							</tr>
							<tr>

								<td style="font-size: 12pt; font-weight: bold;"><a
									href="Xenotes">Xenotes</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>
					* Para los parques que requieren reservaci&oacute;n, deber&aacute;n
					completar el f&oacute;rmulario que se encuentra al final de cada
					parque.<br>

				</p>
				<div>
					<span><iframe class="image main" height="315"
							src="https://www.youtube.com/embed/HBS1A39i3us"> </iframe></span>
				</div>
				<div class="table-wrapper" id="cntnch"></div>
				<!-- <span class="image main"><input type="button"></span> -->
			</article>
			<article id="totravel" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Itinerario
					a&eacute;reo
				</h2>
				<div class="table-wrapper" style="text-align: center;">
					<table>
						<thead>
							<tr>
								<th>Vuelo</th>
								<th>Fecha de salida</th>
								<th>Origen</th>
								<th>Destino</th>
								<th>Hora de salida</th>
								<th>Hora de llegada</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Avianca</td>
								<td>06 de Marzo</td>
								<td>San Salvador</td>
								<td>Canc&uacute;n</td>
								<td>8:40</td>
								<td>11:23</td>
							</tr>
							<tr>
								<td>Avianca</td>
								<td>09 de febrero</td>
								<td>Canc&uacute;n</td>
								<td>San Salvador</td>
								<td>12:48</td>
								<td>13:25</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h2 class="major">
					<img alt="" src="images/pass.png" width="56px" height="62px">&nbsp;REQUISITOS
					MIGRATORIOS
				</h2>
				<p>Estos son los documentos requeridos a todo ciudadano extranjero
					que desee entrar en M&eacute;xico:</p>
				<ul>
					<li>Pasaporte con vigencia m&iacute;nima de 6 meses</li>
					<li>Visa mexicana o americana requerida para salvadore&ntilde;os,
						otras nacionalidades consultar con la agencia de viajes.</li>
					<li>Completar Forma Migratoria M&uacute;ltiple (FMM) (ser&aacute;
						entregada el d&iacute;a del vuelo de salida).</li>
				</ul>
				<h2 class="major">
					<img alt="" src="images/visaame.png" width="56px" height="37px">&nbsp;REQUISITOS
					VISA MEXICANA
				</h2>
				<b>El solicitante deber&aacute; registrarse en <a
					href="https://mexitel.sre.gob.mx/citas.webportal/pages/public/login/login.jsf"
					target=" " style="color: white; font-weight: bold;">Embajada de
						M&eacute;xico </a>, programar su cita y presentarse el d&iacute;a
					y en la hora definida con los siguientes requisitos:
				</b>
				<ol style="text-align: justify;">
					<li>Formulario llenado completamente por ambos lados a mano con
						bol&iacute;grafo azul o negro.</li>
					<li>Pasaporte vigente y copia de la p&aacute;gina principal del
						pasaporte en donde est&aacute;n sus datos con la fotograf&iacute;a</li>
					<li>En su caso, copia de visas y sellos migratorios anteriores</li>
					<li>Una fotograf&iacute;a reciente (m&aacute;ximo dos meses de
						antigüedad) con el rostro visible y sin anteojos, a color,
						tama&ntilde;o c&eacute;dula, con fondo blanco y de frente.
						Solicitudes con otro tipo o tama&ntilde;o de fotograf&iacute;as no
						ser&aacute;n admitidas.</li>
					<li>Carta responsiva ORIGINAL: Original de la carta de una
						organizaci&oacute;n o de una instituci&oacute;n p&uacute;blica o
						privada de reconocida probidad que invite a la persona extranjera
						a participar en alguna actividad no remunerada en territorio
						nacional. La carta deber&aacute; contener, sin excepci&oacute;n,
						los datos especificados en el enlace: <a
						href="https://embamex.sre.gob.mx/elsalvador/index.php/seccion-consular/tipos-de-visa?id=195"
						target=" " style="color: white; font-weight: bold;">Visa mediante
							carta responsiva. </a> En ese mismo enlace se detalla m&aacute;s
						informaci&oacute;n
					</li>
					<li>Impresi&oacute;n del Comprobante de la cita agendada.</li>
					<li>Podras registrarte y agendar tu cita en: <a
						href="https://mexitel.sre.gob.mx/citas.webportal/pages/public/login/login.jsf"
						target=" " style="color: white; font-weight: bold;">Embajada de
							M&eacute;xico. </a></li>

				</ol>
				<h2 class="major">
					<img alt="" src="images/visamex.png" width="56px" height="37px">&nbsp;REQUISITOS
					VISA AMERICANA
				</h2>
				<p>Estos son los requisitos para solicitar la visa de turismo
					americana:</p>
				<ol>
					<li>Determine su categor&iacute;a de visa: turista.</li>
					<li>Pague la tarifa de solicitud (Tarifa MRV).</li>
					<li>Completar formulario DS-160.</li>
					<li>Programe su cita.</li>
					<li>El d&iacute;a de su entrevista, para ingresar a la Embajada a
						la hora programada, deber&aacute; presentar lo siguiente:
						<ul>
							<li>Pasaporte vigente.</li>
							<li>Hoja de Confirmaci&oacute;n de Cita de nuestro Centro de
								Informaci&oacute;n de Visas.</li>
							<li>Hoja de Confirmaci&oacute;n del formulario DS-16.</li>
							<li>Una fotograf&iacute;a tama&ntilde;o 5X5 cm.</li>
						</ul>
					</li>
				</ol>

				<p style="text-align: justify;">
					Los siguientes documentos de soporte no son requisito para ser
					entrevistado pero son com&uacute;nmente solicitados durante la
					entrevista para apoyar su formulario: cartas de su empleador,
					partidas de nacimiento y matrimonio, pasaportes con visas vigentes
					de otros miembros de su n&uacute;cleo familiar, documentos
					bancarios, declaraciones de renta y de IVA y t&iacute;tulos de
					bienes como veh&iacute;culos, casa, terrenos, etc. Esta no es una
					lista exclusiva y tener los documentos durante la entrevista no
					garantiza que sea elegible para recibir visa. <br> Para mayor
					informaci&oacute;n visita el siguiente enlace: <a
						href="http://www.ustraveldocs.com/do_es/do-niv-typeb1b2.asp"
						target=" " style="color: white; font-weight: bold;">Visa de
						turismo </a>
				</p>

				<h2 class="major">
					<img alt="" src="images/ubic.png" width="48px" height="66px">&nbsp;Ubicaci&oacute;n
				</h2>

				<p>Boulevard Kukulcan, km 16.5 Canc&uacute;n 77710 Playa del Carmen,
					Quintana Roo</p>
				<p>Tel&eacute;fono: +52 (998) 8811100</p>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.723472083761!2d-86.77460768543857!3d21.08370398596863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c28370abdd883%3A0x911f472d975d75cf!2sParadisus+Canc%C3%BAn!5e0!3m2!1ses!2ssv!4v1518475416518"
					width="560" height="350"></iframe>
				<br>
				<hr />
				<h2 class="major">
					<img alt="" src="images/clima.png" width="48px" height="48px">&nbsp;Clima
				</h2>
				<div id="cont_f44c7b8a49f48567c420611c61a48647">
					<span style="width: auto;"><script type="text/javascript" async
							src="https://www.meteored.mx/wid_loader/f44c7b8a49f48567c420611c61a48647"></script>
					</span>
				</div>
				<hr />
				<h2 class="major">
					<img alt="" src="images/cambio.png" width="48px" height="48px">&nbsp;Tipo
					de cambio
				</h2>
				<div>
					<form action="index.html" method="post">
						<label>Dolar a Peso</label> <input type="text" value="19.2012"
							readonly="readonly"
							style="font-weight: bold; text-align: center;">
					</form>
				</div>
				<form method="post" action="#">
					<div class="field half first">
						<label for="name">Dolar</label> <input type="number"
							style="font-weight: bold;" min="1" onchange="chngr(this.value);">
					</div>
					<div class="field half">
						<label for="email">Peso</label> <input type="text" name="email"
							id="equ" />
					</div>
				</form>
				<div></div>
				<hr />
				<h2>
					<img alt="" src="images/taxdev.png" width="48px" height="48px">&nbsp;Devoluci&oacute;n
					de impuestos
				</h2>
				<h3 class="major">Tax Free</h3>
				<p>
					<b>¿QUIENES SOMOS?</b><br> Ofrecemos un servicio GRATUITO de
					devoluci&oacute;n de impuestos dise&ntilde;ado para beneficiar
					directamente a los turistas extranjeros, a la vez que brinda una
					experiencia de compra m&aacute;s agradable.  Somos una empresa 100%
					mexicana, fundada en 2006. Autorizada por SAT, una rama del
					gobierno mexicano, para administrar el servicio de
					devoluci&oacute;n de IVA a turistas extranjeros.
				</p>

				<b>COMPRAS</b><br> Realiza tus compras en nuestros establecimientos
				afiliados y elige entre nuestras 12 categor&iacute;as de productos
				participantes en la devoluci&oacute;n de impuestos. Nuestras
				categor&iacute;as son las siguientes:
				<ol style="text-align: justify;">
					<li>Grasas y aceites animales o vegetales, productos de su
						desdoblamiento; grasas alimenticias elaboradas; ceras de origen
						animal o vegetal (cremas hidratantes para el cuerpo, aceites,
						tratamientos de belleza, cosm&eacute;ticos, exfoliantes).</li>
					<li>Pl&aacute;stico y sus manufacturas; caucho y sus manufacturas.</li>
					<li>Pieles, cueros, peleter&iacute;a, art&iacute;culos de viaje,
						bolsos de mano (carteras, billeteras), art&iacute;culos de
						talabarter&iacute;a.</li>
					<li>Bebidas, l&iacute;quidos alcoh&oacute;licos (botellas de vino)
						y vinagre; tabaco y suced&aacute;neos del tabaco elaborados.</li>
					<li>Paraguas, quitasoles, bastones, l&aacute;tigos, fustas, y sus
						partes; flores artificiales; manufacturas de cabello (tintes,
						extensiones, diademas).</li>
					<li>Manufacturas de piedra, cemento, amianto (asbesto), mica o
						materias an&aacute;logas; productos cer&aacute;micos; vidrio y sus
						manufacturas.</li>
					<li>M&aacute;quinas y aparatos, material el&eacute;ctrico y sus
						partes; aparatos de grabaci&oacute;n o de reproducci&oacute;n de
						sonido, aparatos de grabaci&oacute;n o de reproducci&oacute;n de
						imagen y de sonido en televisi&oacute;n, y las partes y accesorios
						de estos aparatos.</li>
					<li>Objetos de arte o de colecci&oacute;n y antigüedades.</li>
					<li>Instrumentos y aparatos de &oacute;ptica (gafas y lentes de
						contacto), fotograf&iacute;a o de cinematograf&iacute;a, de
						medida, de control o de precisi&oacute;n; instrumentos y
						aparatos m&eacute;dico-quir&uacute;rgicos; aparatos de
						relojer&iacute;a; instrumentos musicales; partes y accesorios de
						estos instrumentos o aparatos, discos compactos, DVD'S.</li>
					<li>Materias textiles y sus manufacturas (ropa, calzado, corbatas).</li>
					<li>Perlas naturales o cultivadas, piedras preciosas o
						semipreciosas (collares), metales preciosos, chapados de metal
						precioso (plaqu&eacute;) y manufacturas de estas
						materias; bisuter&iacute;a; monedas.</li>
					<li>Art&iacute;culos varios (perfumes, fragancias,
						bol&iacute;grafos, juguetes, juegos de mesa)</li>
				</ol>

				<p style="text-align: justify;">
					<b>DOCUMENTACI&Oacute;N A PRESENTAR</b><br>Dir&iacute;jase a las
					oficinas de TAX FREE y presente -Vouchers y factura. -Pasaporte, su
					pase de abordar y su forma migratoria (FMM).<br> <br> <b>FACTURAS</b><br>Una
					vez realizada tu compra solamente necesitas solicitar la factura en
					el &aacute;rea de cajas o atenci&oacute;n a clientes del
					establecimiento. Recuerda que es muy importante que conserves cada
					uno de los documentos que avalan el pago, as&iacute; como el ticket
					de compra, nota de venta y vouchers de tarjeta de cr&eacute;dito en
					caso de haber realizado la compra con una tarjeta de cr&eacute;dito
					o d&eacute;bito. Cuando has pagado en efectivo, las facturas
					expedidas deben ser mayores a $1,000.00 M.N. (Mil pesos mexicanos)
					y no deben rebasar los $3,000.00 M.N. (Tres mil pesos mexicanos)
					para poder realizar la devoluci&oacute;n. Para las compras
					realizadas con tarjeta de cr&eacute;dito o d&eacute;bito el monto
					m&iacute;nimo es de $1,200.00 M.N. (Mil doscientos pesos
					mexicanos).<br> <br> <b>ART&Iacute;CULOS EXENTOS</b><br>Consumos y
					servicios (hoteles, restaurantes, taxis, boletos de avi&oacute;n,
					bienes -ra&iacute;ces, etc.) -Productos perecederos. -Libros.
					-Medicinas. -Bebidas alcoh&oacute;licas abiertas Todos los
					documentos deben ser con el mismo nombre del turista.<br> <br> <b>REEMBOLSO</b><br>Se
					depositar&aacute; la cantidad correspondiente despu&eacute;s de 40
					d&iacute;as de haber salido del pa&iacute;s. Se reembolsar&aacute;
					el 65% del IVA por disposici&oacute;n oficial.<br> <br> Para mayor
					informaci&oacute;n puede acceder a: <a
						href="https://taxfree.com.mx/v1/" target=" "
						style="color: white; font-weight: bold;">Tax free</a>
				</p>

				<hr>
				<h2 class="major">MONEY BACK</h2>
				<p style="text-align: justify;">
					Es el proveedor l&iacute;der de servicios de reembolso de impuestos
					(reembolso del impuesto al valor agregado o reembolso del impuesto
					a las ventas) para viajeros internacionales en M&eacute;xico. <br>
					<br> <b>COMPRAS</b><br> Realice sus compras en todos los comercios
					afiliados a MONEY BACK, la mayor&iacute;a de los cuales puede
					identificar a trav&eacute;s de una calcoman&iacute;a o display
					colocado en la entrada de estos o junto a la caja. El monto
					m&iacute;nimo es de $1,200.00 MXN. Las compras realizadas en
					efectivo tienen un limite de $3,000.00 incluyendo IVA por persona.
					Si el pago es realizado en tarjeta de cr&eacute;dito, no hay
					l&iacute;mite m&aacute;ximo. Debe solicitar una factura (RFC
					XEXX010101000), que es el comprobante fiscal oficial por cada
					compra que realice. <br> <br> <b>DOCUMENTACION A PRESENTAR</b><br>
					Vouchers y facturas. - Pasaporte, su pase de abordar y su forma
					migratoria (FMM). Todos los documentos deben ser con el mismo
					nombre del turista.<br> <br> <b>REEMBOLSO</b><br> Se
					depositar&aacute; en su tarjeta de cr&eacute;dito la cantidad
					correspondiente despu&eacute;s de 45 d&iacute;as, se
					reembolsar&aacute; el 8.9% sobre sus compras. <br> <br> Para mayor
					informaci&oacute;n visita el siguiente enlace: <a
						href="http://www.moneyback.mx/" target=" "
						style="color: white; font-weight: bold;">Visa de turismo </a>
				</p>
			</article>

			<article id="jaam" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Recomendaciones
				</h2>

				<h3>Antes del Viaje</h3>
				<ol>
					<li>Recuerda llevar tu pasaporte vigente y a la mano para agilizar
						los tramites migratorios.</li>
					<li>Utiliza ropa c&oacute;moda, ligera y zapatos cerrados para
						viajar, llevando siempre una chaqueta para abrigarte del frio
						durante el vuelo.</li>
					<li>No guardes objetos corto punzantes ni l&iacute;quidos en tu
						maleta de mano, para evitar los decomisos en migraci&oacute;n.</li>
					<li>Se&ntilde;aliza tu maleta adecuadamente con nombre y apellido y
						alg&uacute;n distintivo para evitar perdidas.</li>
					<li>No guardes en tu equipaje laptops, tablets o
						celulares,c&aacute;maras o dem&aacute;s objetos de valor,
						ll&eacute;valos contigo en tu maleta de mano.</li>
					<li>No olvides llevar tu protector solar y repelente para
						mosquitos.</li>
					<li>No ingresar licor ni cremas en tu maleta de mano, para evitar
						decomisos en el aeropuerto.</li>
					<li>Llega 3 horas antes de tu vuelo, para evitar cualquier
						contratiempo.</li>
				</ol>
				<h3>Durante el viaje</h3>
				<ol>
					<li>Trata de estar 10 min antes de la salida a cualquier tour o
						ceremonia, recuerda que la puntualidad te ayudar&aacute; a
						disfrutar mas cada segundo de tu viaje.</li>
					<li>No olvides tus gafas solares, repelentes o protector.</li>
					<li>Recuerda reservar con tiempo los tours para que no te pierdas
						de ninguna experiencia</li>
					<li>Sigue las recomendaciones de los c&oacute;digos de vestimenta
						para que estemos en armon&iacute;a.</li>
					<li>Utiliza sombrero o gorras para protegerte del sol.</li>
					<li>Respeta las reglas y normativas del hotel para evitar cargos
						extras.</li>
					<li>No dejes tus pertenencias como c&aacute;maras, tablets,
						computadoras o celulares sin observaci&oacute;n para evitar
						perdidas o reclamos.</li>
				</ol>
				<h3>Despu&eacute;s del viaje</h3>
				<ol>
					<li>Comparte esta gran experiencia con tus familiares y amigos y
						disfruta de los grandes recuerdos que te deja el viaje!</li>
				</ol>
				<h3>Durante tu estad&iacute;a</h3>
				<ol>
					<li>No se permite fumar dentro de las habitaciones y la persona que
						lo haga pagar&aacute; una multa de 500 USD.</li>
				</ol>
			</article>
			<article id="jbmr" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Itinerario
					de actividades
				</h2>
				<h2 class="major">Mi&eacute;rcoles 28 de Febrero</h2>
				<p style="text-align: justify;">
					Entrega de Kit Convencionistas Los Cebollines Los Pr&oacute;ceres <br>
					Maleta + Boleto
				</p>

				<h2 class="major">Martes 6 de Marzo</h2>
				<p style="text-align: justify;">
					05:00 am&nbsp;&nbsp;&nbsp;Abordaje de transporte Asesuisa -
					Comalapa <br> 06:40 am&nbsp;&nbsp;&nbsp;Recibimiento en aeropuerto
					Comalapa <br> 08:40 am&nbsp;&nbsp;&nbsp;Salida de vuelo a
					Canc&uacute;n <br> 11:23 am&nbsp;&nbsp;&nbsp;Llegada a
					Canc&uacute;n <br> 01:00 pm&nbsp;&nbsp;&nbsp;Llegada al Hotel
					Paradisus Canc&uacute;n <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check
					in Avenue Bar<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Almuerzo
					Restaurante<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Market
					Grill<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarde
					Libre<br> 07:30 pm&nbsp;&nbsp;&nbsp;Cena de Premiaci&oacute;n
					&aacute;rea de piscina (Traje formal)

				</p>
				<h2 class="major">Mi&eacute;rcoles 7 de Marzo</h2>
				<p style="text-align: justify;">
					07:00 am&nbsp;&nbsp;&nbsp;Desayuno Restaurante Naos <br> 08:30
					am&nbsp;&nbsp;&nbsp;Salida hacia Marina <br> 09:00
					am&nbsp;&nbsp;&nbsp;Salida Tour Catamar&aacute;n Sea Passion Isla
					Mujeres <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tour
					de snorkeling guiado <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Almuerzo
					en Ice Bar Isla Mujeres <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiempo
					libre para conocer Isla Mujeres <br> 04:00
					pm&nbsp;&nbsp;&nbsp;Regreso a Marina<br> 04:30
					pm&nbsp;&nbsp;&nbsp;Llegada a Hotel Paradisus Canc&uacute;n<br>
					07:30 pm&nbsp;&nbsp;&nbsp;Cena en Restaurante <br> 09:00
					pm&nbsp;&nbsp;&nbsp;Show
				</p>
				<h2 class="major">Jueves 8 de Marzo</h2>
				<p style="text-align: justify;">
					D&iacute;a libre<br> 09:00 pm&nbsp;&nbsp;&nbsp;Cena de despedida en
					Restaurante Enso (casual blanco)
				</p>


				<h2 class="major">Viernes 9 de Marzo</h2>
				<p style="text-align: justify;">
					07:00 am&nbsp;&nbsp;&nbsp;Desayuno Restaurante Naos <br> 08:30
					am&nbsp;&nbsp;&nbsp;Check out Hotel<br> 09:30
					am&nbsp;&nbsp;&nbsp;Salida hacia aeropuerto Canc&uacute;n<br> 12:48
					pm&nbsp;&nbsp;&nbsp;Salida de vuelo a San Salvador<br> 01:25
					pm&nbsp;&nbsp;&nbsp;Llegada a Comalapa<br> 03:00
					pm&nbsp;&nbsp;&nbsp;Llegada a Asesuisa<br>
				</p>
			</article>

			<!-- Elements -->
			<article id="elements">
				<h2 class="major">Elements</h2>

				<section>
					<h3 class="major">Text</h3>
					<p>
						This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i>
						and this is <em>emphasized</em>. This is <sup>superscript</sup>
						text and this is <sub>subscript</sub> text. This is and this is
						code:
						<code>for (;;) { ... }</code>
						. Finally, <a href="#">this is a link</a>.
					</p>
					<hr />
					<h2>Heading Level 2</h2>
					<h3>Heading Level 3</h3>
					<h4>Heading Level 4</h4>
					<h5>Heading Level 5</h5>
					<h6>Heading Level 6</h6>
					<hr />
					<h4>Blockquote</h4>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis
						tincidunt felis sagittis eget tempus euismod. Vestibulum ante
						ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis
						iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante
						ipsum primis in faucibus lorem ipsum dolor sit amet nullam
						adipiscing eu felis.</blockquote>
					<h4>Preformatted</h4>
					<pre>
						<code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code>
					</pre>
				</section>
			</article>
		</div>
		<footer id="footer">
			<p class="copyright" style="font-weight: bold;">
				Power by<br> <a href="http://amatetravel.com" target=" "><img
					alt="powerby-amatetravel"
					src="images/Amate Travel para fondo gris-01.png" width="291px"
					height="44px"></a>
			</p>
		</footer>
	</div>
	<div id="bg">
		<input type="text" readonly="readonly" id="streg" name="streg">
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/rel.js"></script>
</body>
</html>