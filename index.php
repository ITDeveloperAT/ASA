<?php
/*require 'ACUN/fncn/fhr.php';
$ncp = ncpais();
if (! isset($_SESSION)) {
    session_start();
}
$target_path = "XBS/assets/dos/";
if (isset($_POST['Send'])) {
    mkdir($target_path . $_POST['c7']);
    for ($i = 0; $i < 2; $i ++) {
        switch ($i) {
            case 0:
                $target_path = $target_path . $_POST['c7'] . '/' . basename($_FILES['f1']['name']);
                if (move_uploaded_file($_FILES['f1']['tmp_name'], $target_path)) {
                    // echo "<span style='color:green;'>El archivo " . basename($_FILES['f1']['name']) . " ha sido subido</span><br>";
                } else {
                    // echo "Ha ocurrido un error, trate de nuevo!";
                }
                $dir = 'Location:XBS/';
                echo header($dir);
                break;
            
            case 1:
                if ($_POST['c11'] != "E" || $_POST['c11'] != "N") {
                    mkdir($target_path . $_POST['c12']);
                    $target_path = $target_path . $_POST['c12'] . '/' . basename($_FILES['f2']['name']);
                    if (move_uploaded_file($_FILES['f2']['tmp_name'], $target_path)) {
                        // echo "<span style='color:green;'>El archivo " . basename($_FILES['f2']['name']) . " ha sido subido</span><br>";
                    } else {
                        // echo "Ha ocurrido un error, trate de nuevo!";
                    }
                    break;
                }
        }
    }
    stateman($_POST['c7'], 0);
}
if (isset($_POST['acepto'])) {
    stateman($_POST['pssr'], 1);
}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Registro</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body onload="ini();">
<<<<<<< HEAD
	<form method="post" action="index.php" enctype="multipart/form-data">
		<div id="page-wrapper">
			<header id="header">
				<h1>
					<img alt="" src="images/Logobl.png" width="118px" height="48px">
					<!-- 				<img alt="" src="images/Logob.png" width="200px" height="48px"> -->
				</h1>
=======
			<form method="post" action="index.php" enctype="multipart/form-data">
	<div id="page-wrapper">
		<header id="header">
			<h1>
				<img alt="" src="images/Logob.png" width="200px" height="48px">
				<!-- logo de Asesuisa -->
			</h1>
		</header>
		<article id="main">
			<header>
				<h2>
					<img alt="" src="XBS/images/Logob.png" width="250" height="250">
					<!-- Logo de Convencion -->
				</h2>
				<p>Forma parte de esta experiencia sin igual</p>
				<ul class="actions" id="butones" style="text-align: center;">
								<li><input type="button" value="Registrarme" class="special"
									onclick="shw(0);" /></li>
								<li><input type="button" value="Ya estoy registrado"
									class="special" onclick="shw(1);" /></li>
							</ul>
							<a href="#ff" class="more scrolly" id="gonow" hidden="">Pulsa aqu&iacute; para iniciar la experiencia</a>
>>>>>>> branch 'master' of https://github.com/ITDeveloperAT/ASA.git
			</header>
			<article id="main">
				<header>
					<h2>
						<img alt="" src="XBS/images/Logob.png" width="256" height="318">
					</h2>
					<p></p>
					<ul class="actions" id="butones" style="text-align: center;">
						<li><input type="button" value="Registrarme" class="special"
							onclick="shw(0);" /></li>
						<li><input type="button" value="Ya estoy registrado"
							class="special" onclick="shw(1);" /></li>
					</ul>
					<a href="#ff" class="more scrolly" id="gonow" hidden="">Pulsa
						aqu&iacute; para iniciar la experiencia</a>
				</header>

				<section class="wrapper style5">
					<div class="inner">
						<div id="mm"></div>
						<section>
							<div id="ff" hidden="">
								<div class="row uniform">
									<div class="12u$">
										<label for="demo-priority-low">Convencionistas bancaseguros y
											medios de pago</label> <select id="c1" name="c1"
											style="background-color: white;">
											<option value="E">Elegir</option>
											<option value="1">Zona 1</option>
											<option value="2">Zona 2</option>
											<option value="3">Zona 3</option>
											<option value="4">Zona 4</option>
											<option value="5">Zona 5</option>
											<option value="6">Zona 6</option>
											<option value="7">UGE</option>
											<option value="8">FV Especializada</option>
											<option value="9">Invitado Banco Agricola</option>
											<option value="10">Invitado ASESUISA</option>
											<option value="11">Invitado especial</option>
										</select>
									</div>
									<div class="6u 12u$(xsmall)" hidden="">
										<label for="demo-priority-low">Invitado</label> <select
											id="c2" name="c2" style="background-color: white;">
											<option value="0">Elegir</option>
										</select>

									</div>

									<div class="6u 12u$(xsmall)">
										<input type="text" name="c3" id="c3"
											placeholder="Nombres seg&uacute;n pasaporte"
											style="background-color: white;" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="c4" id="c4"
											placeholder="Apellidos seg&uacute;n pasaporte"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Fecha de nacimiento
											(dd/mm/aaaa)</label> <input type="date" name="c5" id="c5"
											placeholder="Fecha de nacimiento"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Genero</label><select id="c6"
											name="c6" style="background-color: white;">
											<option value="E">Elegir</option>
											<option value="0">Femenino</option>
											<option value="1">Masculino</option>
										</select>
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Pasaporte</label> <input
											type="text" name="c7" id="c7"
											placeholder="Numero de pasaporte"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Emisi&oacute;n de pasaporte
											(dd/mm/aaaa)</label> <input type="date" name="c8" id="c8"
											placeholder="Fecha de emision"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Expiraci&oacute;n de pasaporte
											(dd/mm/aaaa) </label> <input type="date" name="c9" id="c9"
											placeholder="Fecha de expiraci&oacute;n"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Nacionalidad</label> <select
											id="c10" name="c10" onchange="au();"
											style="background-color: white;">
											<option value="E">Elegir</option>
										<?php
        for ($i = 1; $i < count($ncp); $i ++) {
            $cnp = explode("#", $ncp[$i]);
            if ($i == 59) {
                echo '<option value="' . $cnp[1] . '" selected>' . $cnp[0] . '</option>';
            } else {
                echo '<option value="' . $cnp[1] . '">' . $cnp[0] . '</option>';
            }
        }
        ?>
									</select>
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Imagen principal de pasaporte</label>
										<input type="file" name="f1" id="f1" placeholder="Pasaporte"
											onchange="rl(this.id);" style="background-color: white;" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Formatos de archivo
											compatibles: PNG, JPEG, JPG, PDF</label>
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Tipo de visa</label> <select
											id="c11" name="c11" onchange="au();"
											style="background-color: white;">
											<option value="E">Elegir</option>
											<option value="N">Ninguna</option>
											<option value="VMX">Visa Mexicana</option>
											<option value="VUS">Visa Americana</option>
										</select>
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">N&uacute;mero de visa</label> <input
											type="text" name="c12" id="c12" placeholder="Numero de visa"
											disabled="disabled" style="background-color: white;">
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Emisi&oacute;n VISA
											(dd/mm/aaaa)</label> <input type="date" name="c13" id="c13"
											placeholder="Fecha de emision" disabled="disabled"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Expiraci&oacute;n VISA
											(dd/mm/aaaa)</label> <input type="date" name="c14" id="c14"
											placeholder="Fecha de expiraci&oacute;n" disabled="disabled"
											style="background-color: white;" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Imagen principal de visa</label>
										<input type="file" name="f2" id="f2" placeholder="Visa"
											onchange="rl(this.id);" disabled="disabled"
											style="background-color: white;" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Formatos de archivo
											compatibles: PNG, JPEG, JPG, PDF</label>
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Correo electronico</label> <input
											type="text" name="c15" id="c15" placeholder="Email"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Domicilio</label> <input
											type="text" name="c16" id="c16" placeholder="Residencia"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="c17" id="c17" placeholder="Telefono"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="c18" id="c18" placeholder="Celular"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Contacto de emergencia</label>
										<input type="text" name="c19" id="c19" placeholder="Nombre"
											style="background-color: white;" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Tel&eacute;fono de emergencia</label>
										<input type="text" name="c20" id="c20"
											placeholder="Tel&eacute;fono de contacto"
											style="background-color: white;" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Padecimientos al&eacute;rgicos</label>
										<textarea name="c21" id="c21" rows="4"
											placeholder="Se le solicita sea especifico"
											style="background-color: white;"></textarea>
									</div>
									<ul class="actions" style="text-align: center;">
										<li><input type="button" value="Aceptar" class="special"
											onclick="vldfrm();" id="Send" name="Send" /></li>
										<li><input type="button" value="Ya estoy registrado"
											class="special" onclick="shw(1);" /></li>
									</ul>
								</div>
							</div>
							<div id="ov" hidden="" style="text-align: center;">
								<input type="text" name="pssr" id="pssr"
									placeholder="Ingrese su numero de pasaporte" /> <br>
								<ul class="actions" style="text-align: center;">
									<li><input type="button" value="Aceptar" class="special"
										onclick="vrf();" id="acepto" name="acepto" /></li>
									<li><input type="button" value="Volver a registro"
										class="special" onclick="shw(0);" /></li>
								</ul>
							</div>
							<div id="rel"></div>
						</section>
					</div>
				</section>

			</article>
			<footer id="footer">
				Power By:<br> <a href="http://amatetravel.com" target=" "> <img
					alt="powerby-amatetravel"
					src="XBS/images/Amate Travel para fondo gris-01.png" width="291px"
					height="44px"></a>
			</footer>

		</div>
		<script>
	window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/jquery.scrollex.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/jquery.scrolly.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/skel.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/util.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/relf.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/main.js"><\/script>');
	</script>
	</form>
</body>
</html>
