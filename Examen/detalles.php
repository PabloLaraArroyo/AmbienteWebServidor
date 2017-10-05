<h1>Detalles </h1>
<?php
$db=new mysqli("localhost","usuario","1234","Examen");

if(isset($_GET['numero'])){
    $numero=$_GET['numero'];
    $consulta=$db->prepare
        ("select * from lineastelefonicas where numero=?");
    $consulta->bind_param("i",$numero);
    $consulta->execute();
    $filas = $consulta->get_result();
    while($miFila=$filas->fetch_assoc()){
    echo "Numero <h2>".$miFila['numero']."</h2>";
    echo "<br> Operador: ".$miFila['operador'];
    echo "<br> Plan: ".$miFila['plan'];
    echo "<br> Marca celular: ".$miFila['marcacelular'];
    echo "<br> Modelo celular: ".$miFila['modelocelular'];
    echo "<br> Fecha firma de contrato: ".$miFila['fechafirmacontrato'];
    echo "<br> Plazo meses : ".$miFila['plazomeses'];
    echo "<hr> <a href='index.php'>Regresar<a/>";
    }
    
}
else echo "<a href='index.php'>Regresar<a/>";
$db->close();
?>