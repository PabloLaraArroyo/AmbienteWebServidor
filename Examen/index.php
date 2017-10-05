<?php 

echo "<h1>Lista numeros de clientes</h1>";
$db=new mysqli("localhost","usuario","1234","Examen");


$sql="select * from lineastelefonicas" ; //where filtro
$consulta=$db->query($sql);
if($consulta===FALSE){
    echo "<h2>Error. ".$db->error."</h2>";
}

//recorremos el conjunto de filas
while($fila=$consulta->fetch_assoc()){
    $link="detalles.php?numero=".$fila['numero'];
    $numero=$fila['numero'];
    echo "numero de telefono <a href='$link'>$numero<a/><br>";
}

$db->close();
    
?>

<h2>Desea crear nuevos elementos</h2>
 <a href='insert.php'>Ir a insertar <a/>
     