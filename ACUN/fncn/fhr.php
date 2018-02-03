<?php
if (! isset($_SESSION)) {
    session_start();
}
$preins = precons();
$_SESSION['uncons'] = preins($preins);

function ncpais()
{
    $file = "pais.txt";
    $fp = fopen($file, "r+");
    $i = 0;
    while (! feof($fp)) {
        $np[$i] = fgets($fp);
        $i ++;
    }
    
    $file = "cod.txt";
    $fp = fopen($file, "r+");
    $i = 0;
    while (! feof($fp)) {
        $cp[$i] = fgets($fp);
        $i ++;
    }
    for ($i = 0; $i < count($np); $i ++) {
        $ncp[$i] = $np[$i] . "#" . $cp[$i];
    }
    sort($ncp);
    return $ncp;
}

function sfr($dts)
{
    $c = "INSERT INTO PAX VALUES ('$dts[6]', '$dts[2]', '$dts[3]', '$dts[4]', $dts[5], '$dts[7]', '$dts[8]', '$dts[9]', '$dts[10]', '$dts[11]', '$dts[12]', '$dts[13]', '$dts[14]', '$dts[15]', '$dts[16]', '$dts[17]', '$dts[18]', '$dts[19]', '$dts[20]', '$dts[0]', $dts[1])";
    mysqli_query($_SESSION['uncons'], $c);
    $c = "INSERT INTO SUBS VALUES ('$dts[6]', '', 0, 0, 0, 0, 0, 0)";
    mysqli_query($_SESSION['uncons'], $c);
}

function obc()
{
    $c = "SELECT NU_PASS FROM PAX ORDER BY PAX.ZONA ASC";
    $xc = mysqli_query($_SESSION['uncons'], $c);
    $num = mysqli_num_rows($xc);
    for ($i = 0; $i < $num; $i ++) {
        $rxc[$i] = mysqli_fetch_array($xc, MYSQLI_NUM)[0];
    }
    for ($i = 0; $i < count($rxc); $i ++) {
        $c = "SELECT PAX.NU_PASS, CONCAT(PAX.NOM_PAX, ' ', PAX.APE_PAX) AS NOMBRE, PAX.ZONA, PAX.EMAIL_PAX, T_VISA, PAX.ZONA FROM PAX WHERE PAX.NU_PASS = '$rxc[$i]' && NOM_PAX!='Nombres según pasaporte'";
        $aux = mysqli_query($_SESSION['uncons'], $c);
        $rx[$i] = mysqli_fetch_array($aux, MYSQLI_NUM);
    }
    return $rx;
}

function obcin()
{
    $c = "SELECT NU_PASS FROM PAX ORDER BY PAX.ZONA ASC";
    $xc = mysqli_query($_SESSION['uncons'], $c);
    $num = mysqli_num_rows($xc);
    $k = 0;
    for ($i = 0; $i < $num; $i ++) {
        $rxc[$i] = mysqli_fetch_array($xc, MYSQLI_NUM)[0];
    }
    for ($i = 0; $i < count($rxc); $i ++) {
        $c = "SELECT PAX.NU_PASS, PAX.EMAIL_PAX, PAX.ZONA FROM PAX WHERE PAX.NU_PASS = '$rxc[$i]' && NOM_PAX='Nombres según pasaporte'";
        $aux = mysqli_query($_SESSION['uncons'], $c);
        $aux2 = mysqli_fetch_array($aux, MYSQLI_NUM);
        if ($aux2 != NULL) {
            $rx[$k] = $aux2;
            $k ++;
        }
    }
    return $rx;
}

function showpsv($src)
{
    if ($src != "") {
        $fc = "../assets/dos/" . $src . '/';
        $fche = scandir($fc);
        echo '<td>';
        for ($i = 0; $i < count($fche); $i ++) {
            if ($fche[$i] != "." && $fche[$i] != "..") {
                $ruta = $fc . $fche[$i];
                $d = scandir($ruta);
                if (count($d > 2)) {
                    for ($j = 0; $j < count($d); $j ++) {
                        if ($d[$j] != "." && $d[$j] != "..") {
                            // echo ;
                            echo '<a href="' . $fc . $fche[$i] . '/' . $d[$j] . '">Pasaporte</a><br>';
                            // echo $fc . $fche[$i] . '/' . $d[$j];
                            echo '<a href="' . $fc . $fche[$i] . '/' . $d[$j] . '">Descargar visa</a><br>';
                        }
                    }
                } else {
                    // echo '<a href="#" target=" ">' . $fche[$i] . '</a>';
                }
            }
        }
        echo '</td>';
    }
    return 0;
}

function inic($a)
{
    $a[1] = strrev(base64_encode(base64_encode(strrev(base64_encode($a[1])))));
    $c = "SELECT COUNT(*), NOM_US, APE_US FROM HOSTS WHERE NU_USH='$a[0]' AND PSS_US='$a[1]'";
    $xc = mysqli_query($_SESSION['uncons'], $c);
    $rxc = mysqli_fetch_array($xc, MYSQLI_NUM);
    if ($rxc[0] != "0") {
        $r = $rxc[1] . " " . $rxc[2];
    } else {
        $r = false;
    }
    return $r;
}

// conexion con usuario de solo consulta
function precons()
{
    $srvr = 'localhost';
    $usdb = 'nosu';
    $psd = '932GypOdYb4UH4mh';
    $ndlb = 'ASA';
    // $srvr = 'localhost';
    // $usdb = 'r8s8q9i4_us2018';
    // $psd = '.(@K6W*6seh}';
    // $ndlb = 'r8s8q9i4_bs2018';
    return $srvr . '#' . $usdb . '#' . $psd . '#' . $ndlb;
}

function preins($supn)
{
    $supn = explode("#", $supn);
    $cnctr = mysqli_connect($supn[0], $supn[1], $supn[2], $supn[3]);
    if ($cnctr) {
        return $cnctr;
    } else {
        return false;
    }
}

function cnus($d)
{
    $c = "SELECT COUNT(*) FROM PAX WHERE NU_PASS='$d'";
    $x = mysqli_query($_SESSION['uncons'], $c);
    $rx = mysqli_fetch_array($x)[0];
    if ((integer) $rx > 0) {
        return true;
    } else {
        return false;
    }
}

function stateman($nu, $pa)
{
    switch ($pa) {
        case 0:
            $_SESSION['nuac'] = $nu;
            $_SESSION['logged'] = 'yes';
            $dir = 'Location:/ACUN/';
            // $dir = 'Location: /XBS/';
            // var_dump($dir);
            echo header($dir);
            break;
        
        case 1:
            if (cnus($nu)) {
                $_SESSION['nuac'] = $nu;
                $_SESSION['logged'] = 'yes';
                // $dir = 'Location:XBS/';
                $dir = 'Location: http://' . $_SERVER['HTTP_HOST'] . '/ASAUT/ACUN/';
                echo header($dir);
            } else {
                echo 'Pasaporte invalido, verifique nuevamente';
            }
            break;
    }
}

function nelentry()
{
    $_SESSION = array();
    session_destroy();
    $dir = 'Location: http://' . $_SERVER['HTTP_HOST'] . '/unidosesmejor2018';
    echo header($dir);
}

?>