<?php
// require $_SERVER['HTTP_HOST'].'/ACUN/fncn/fhr.php';
if (isset($_REQUEST['desc'])) {
    $pc = explode("#", $_REQUEST['desc']);
    $ub = $pc[0];
    
    $ar = array(
        'R1',
        'R2',
        'R3'
    );
    $er = array(
        'PYT',
        'PRQ'
    );
    $k = 0;
    for ($h = 0; $h < count($er); $h ++) {
        $prescan = scandir($er[$h] . '/' . $ar[$ub]);
        sort($prescan);
        for ($i = 0; $i < count($prescan); $i ++) {
            if ($prescan[$i] != "." && $prescan[$i] != "..") {
                switch ($h) {
                    case 0:
                        $file = $er[$h] . '/' . $ar[$ub] . '/' . $prescan[$i];
                        $fp = fopen($file, "r+");
                        $cp[$k] = fgets($fp);
                        break;
                    
                    case 1:
                        $dirimg[$k] = $file = $er[$h] . '/' . $ar[$ub] . '/' . $prescan[$i];
                        break;
                }
                $k ++;
            }
        }
        $k = 0;
    }
    for ($i = 0; $i < count($cp); $i ++) {
        $tch = explode("#", $cp[$i]);
        echo '<section class="main style2 right dark fullscreen" 
        style="background: url(' . "images/overlay.png" . '), url(' . $dirimg[$i] . '); background-size: 260px 260px, cover; 
        background-position: top left, center center; background-attachment: fixed, fixed;">';
        echo '<div class="content box style2">';
        echo '<header><h2>' . $tch[0] . ' - ' . $tch[3] . '</h2></header>';
        echo '<table>';
        echo '<tr><td>';
        echo '<p style="font-size: 12pt; text-align: justify;">';
        echo $tch[1];
        echo '</p>';
        echo '</td></tr>';
        echo '<tr><td>';
        echo '<p style="font-size: 12pt; text-align: justify;">';
        echo $tch[2];
        echo '</p>';
        echo '</td></tr>';
        echo '<tr><td>';
        echo '<input type="button" value="Enviar mas informaci&oacute;n a mi correo" onclick="sntml(' . "'$pc[1]'" . ', ' . $i . ', ' . "'$tch[0]'" . ');" style="color: black;">';
        echo '</td></tr>';
        echo '<tr><td>';
        echo '<div id="tt' . $i . '"></div>';
        echo '</td></tr>';
        echo '</table>';
        echo '</div></section>';
    }
}

if (isset($_REQUEST['shwyg'])) {
    $prc = explode("||", $_REQUEST['shwyg']);
    $d = explode("#", base64_decode(strrev($prc[0])));
    $para = 'fher0ppst@gmail.com';
    $titulo = 'Informacion de parques y tours ASESUISA2018';
    $mensaje = 'Hola companeras,' . "\r\n" . 'El cliente ' . $d[1] . ' ' . $d[2] . ' con pasaporte ' . $d[0] . ' Solicita mas informacion sobre: ' . $prc[1] . ' a la siguiente cuenta: ' . $prc[3] . '"';
    $cabeceras = 'From: Fernando Gomez' . "\r\n" . 'Reply-To: desarrollo@amatetravel.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    mail($para, $titulo, $mensaje, $cabeceras);
    echo '<p style="font-size: 12pt;">Un agente de viajes se contactar&aacute; contigo lo m&aacute;s pronto posible para brindarte mayores detalles.</p>';
}
?>