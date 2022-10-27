<?php
    $estudiante = $_GET["estudiante"];
    $asignatura = $_GET["asignatura"];
    $nota_1 = $_GET["nota_1"];
    $nota_2 = $_GET["nota_2"];
    $nota_3 = $_GET["nota_3"];
    $promedio = ($nota_1 + $nota_2 + $nota_3) / 3;
    echo $promedio;

?>