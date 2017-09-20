<?php
if(isset($_POST['diametro'])){
	$diametro=$_POST['diametro'];

	$Pi=3.14;
	$Radio=$diametro/2;
	$Area= $Pi*($Radio*$Radio); 
	$Circunferencia= $Pi*$diametro; 
	echo "El Area del circulo es: $Area <br>";
	echo "La Circunferencia del circulo es: $Circunferencia <br>";
  }
  echo "<br><a href='Ejercicio4.html'>Regresar</a>";
?>