<?php
require '../fncn/fhr.php';
if (isset($_REQUEST['onlo'])) {
    $d = $_REQUEST['onlo'];
    $d = explode("##", $d);
    $a = inic($d);
    $cnjt = obc();
    $cntdor = 1;
    if ($a) {
        $nom = "";
        echo '<label>Usuario: <b style="color: blue;">' . $a . '</b></label>';
        echo '<div class="table-wrapper">';
        echo '<table class="alt">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>Pasaporte</th>';
        echo '<th>Nombre</th>';
        echo '<th>Zona</th>';
        echo '<th>Correo</th>';
        echo '<th>Posee visa</th>';
        echo '<th>Documentacio&oacute;n</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        for ($i = 0; $i < count($cnjt); $i ++) {
            echo '<tr>';
            for ($j = 0; $j < count($cnjt[$i]); $j ++) {
                switch ($j) {
                    case 0:
                        echo '<td>' . $cntdor . '</td>';
                        $cntdor ++;
                        break;
                    case 1:
                        $temp = $cnjt[$i][$j];
                        echo '<td>' . $cnjt[$i][$j] . '</td>';
                        break;
                    case 2:
                        ucwords(strtolower($cnjt[$i][$j]));
                        echo '<td>' . $cnjt[$i][$j] . '</td>';
                        break;
                    case 3:
                        echo '<td>';
                        if ($cnjt[$i][$j] == "0" || $cnjt[$i][$j] == "1" || $cnjt[$i][$j] == "2" || $cnjt[$i][$j] == "3" || $cnjt[$i][$j] == "4" || $cnjt[$i][$j] == "5" || $cnjt[$i][$j] == "6") {
                            echo $cnjt[$i][$j];
                        } else {
                            switch ($cnjt[$i][$j]) {
                                case 7:
                                    echo 'UGE';
                                    break;
                                case 8:
                                    echo 'FV Especializadda';
                                    break;
                                case 9:
                                    echo 'Invitado Banco Agricola';
                                    break;
                                case 10:
                                    echo 'Invitado ASESUISA';
                                    break;
                                case 11:
                                    echo 'Invitado especial';
                                    break;
                            }
                        }
                        echo '</td>';
                        break;
                    case 4:
                        echo '<td>' . $cnjt[$i][$j] . '</td>';
                        break;
                    case 5:
                        echo '<td>';
                        if ($cnjt[$i][$j] == "N") {
                            echo 'No posee';
                        } else {
                            if ($cnjt[$i][$j] == "VMX") {
                                
                                echo 'Mexicana';
                            } else {
                                echo 'Estadounidense';
                            }
                        }
                        echo '</td>';
                        break;
                    case 6:
                        showpsv($temp);
                        // echo '<td>' . $cnjt[$i][$j] . '</td>';
                        // echo '<td>Descargar</td>';
                        break;
                }
            } 
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        // echo '<br>';
        echo '<label><b>Usuarios inscritos con inconsistencias en datos</b></label>';
        echo '<p>Se encontraron problemas al procesar datos para los siguientes usuarios, esto debido a: </p><ul><li>Configuraciones del navegador utilizado.</li><li>Los archivos adjuntos estan da&ntilde;ados.</li></ul>';
        $cnjtin = obcin();
        if (count($cnjtin) > 0) {
            echo '<div class="table-wrapper">';
            echo '<table class="alt">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Pasaporte</th>';
            echo '<th>Correo</th>';
            echo '<th>Zona</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ($i = 0; $i < count($cnjtin); $i ++) {
                echo '<tr>';
                for ($j = 0; $j < count($cnjtin[$i]); $j ++) {
                    echo '<td>' . $cnjtin[$i][$j] . '</td>';
                }
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo '<label>No se encontraron datos para mostrar</label>';
        }
    } else {
        echo '<label style="color: red;">Credenciales invalidas, verifique si estan correctamente escritas</label>';
    }
    /*
     * No borrar
     */
    // Codificacion
    // $enc = strrev(base64_encode(base64_encode(strrev(base64_encode("Miguel")))));
    // var_dump($enc);
    // Decodificacion
    // $enc = base64_decode(strrev(base64_decode(base64_decode(strrev($enc)))));
    // var_dump($enc);
}

?>