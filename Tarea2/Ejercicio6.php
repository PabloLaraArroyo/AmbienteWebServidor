<?php
if(isset($_POST['altura'])){
	$altura=$_POST['altura'];
	$peso=$_POST['peso'];

	$IMC= $peso/pow($altura,2);
	echo "Su IMC ES $IMC<br>";
	if($IMC<18.5){
	  echo "Usted está Bajo de Peso";
	}else if ($IMC<=24.9){
    echo "Usted tiene Peso Normal";
	}else if ($IMC>=25 && $IMC<30){
    echo "Usted está Sobrepeso";
	}else if ($IMC>=30){
      echo "Usted tiene Obesidad";
	}
  }
  echo "<br><a href='Ejercicio6.html'>Regresar</a>";
?>