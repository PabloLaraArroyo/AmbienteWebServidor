<h2>Insertar dato</h2>
<form action="insert.php" method="post">
Numero: <input type="text" name="num"><br>
Operador: <input type="text" name="ope"><br>
Plan: <input type="text" name="pla"><br>
Marca Celular: <input type="text" name="mar"><br>
Modelo Celular: <input type="text" name="mode"><br>
Fecha de contrato (AAAA-MM-DD): <input type="text" name="fec"><br> 
Plazo meses:<input type="text" name="pla"><br>
<button type="submit">Crear</button>
</form>


<?php
$db=new mysqli("localhost","usuario","1234","Examen");

if(isset($_POST['num'])){
    $num=$_POST['num'];
    $ope=$_POST['ope'];
    $pla=$_POST['pla'];
    $mar=$_POST['mar'];
    $mode=$_POST['mode'];
    $fec=$_POST['fec'];
    $pla=$_POST['pla'];
    
    /* insert into TABLA(COLUNMAS) values(DATOS)*/
    $consulta=$db->prepare("insert into lineastelefonicas (numero, operador, plan, marcacelular, modelocelular,fechafirmacontrato,plazomeses) values(?,?,?,?,?,?,?)");
    $consulta->bind_param('issssss',$num,$ope,$pla,$mar,$mode,$fec,$pla);
    $consulta->execute();
    if($consulta->affected_rows>0){
        echo "<h2>Insercion exitosa</h2>";
        echo "<a href='index.php'>Regresar</a>";
    }
    else{
      echo "<h2>Fallo al insertar</h2>";
        echo "<h3>".$db->error."</h3>";// ver el error en caso de 
        echo "<a href='index.php'>Regresar</a>";  
    }
        
    
    
}else echo "<a href='index.php'>Regresar<a/>";


$db->close();

?>