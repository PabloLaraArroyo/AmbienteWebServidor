<?php
if(isset($_POST['subtotal'])){
	$subtotal=$_POST['subtotal'];
	$monto=$_POST['monto'];

	$Impuesto= $subtotal*0.13; 
	$Total= $subtotal+$Impuesto;
	$Vuelto= $monto-$Total;
    echo "El impuesto es: $Impuesto <br>";
	echo "El total a pagar es: $Total <br>";
	echo "Su vuelto es: $Vuelto <br>";

  }
  echo "<br><a href='Ejercicio1.html'>Regresar</a>";
?>