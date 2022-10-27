<?php
    $ndevolantes = $_GET["volantes"];
    $ndeposter = $_GET["poster"];
    $ndetarjetas = $_GET["tarjetas"];
    $valvol = $ndevolantes * 2000;
    $valpos = $ndeposter * 5000;
    $valtar = $ndetarjetas * 500;
    $total = $valvol + $valpos + $valtar;
    echo $total;

?>