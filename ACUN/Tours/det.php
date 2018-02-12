<?php
if (isset($_REQUEST['desc'])) {
    $ub = $_REQUEST['desc'];
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
        echo '<section class="main style2 right dark fullscreen" >';
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
        echo '</table>';
        echo '</div></section>';
    }
}

?>