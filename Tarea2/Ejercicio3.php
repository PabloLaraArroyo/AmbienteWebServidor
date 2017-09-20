<?php
 extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario
    $salario;
    $impuesto=9;//porcentaje
   $semanal=$salario*40;
   $bruto=$semanal*4;
   $neto=$bruto-(($bruto/100)*$impuesto);
   $deduccion=$bruto*$impuesto/100;
    echo"ganando $salario por hora el sueldo es <br>";
    echo "Sueldo del trabajador semanal es : $semanal<br>";
    echo "Sueldo del trabajador mensual bruto es : $bruto<br>";
     echo "Sueldo del trabajador mensual neto es : $neto<br>";
    echo "Deduccion mensual por mes es : $deduccion<br>";
?>