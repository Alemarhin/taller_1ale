<?php
    $pg = $_GET["partido_ganado"];
    $pe = $_GET["partido_empatado"];
    $pp = $_GET["partido_perdido"];
    $ppg = $pg * 3;
    $ppe = $pe * 1;
    $ppp = $pp * 0;
    $pt = ($ppg + $ppe + $ppp);
    echo $pt;
?>