<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="pedidos.css">
<script src="pedidos.js">
</script>

<title>Licious</title>
</head>

<body background="img/fondo.png">
<div id="logo" style="position:absolute; color:#000; width:100%; height:55px; margin-left:0px; margin-top:0px; z-index:0; visibility:visible;>
<table width="50%" align="center">
<tr>
    <td><img src="img/logo.png"></img></td>
</tr>
</table>

</div>
<div id="botones" style="position:absolute; color:#000; width:100%; height:55px; margin-left:0px; margin-top:220px; z-index:0; visibility:visible; background:url(img/fondo_botones.png)">
<table width="50%" align="center">
<tr>
   <td><a href="index.php"><img src="img/btn_inicio.png" height= "75" width= "150">></img></a></td>
   <td><a href="galeria.php"><img src="img/btn_galeria.png" height= "75" width= "150"></img></a></td>
   <td><a href="ingredientes.php"><img src="img/btn_ingredientes.png" height= "75" width= "150"></img></a></td>
   <td><a href="pedidos.php"><img src="img/btn_pedidos.png" height= "75" width= "150"></img></a></td>
   <td><a href="promo.php"><img src="img/btn_promo.png" height= "75" width= "150"></img></a></td>
   <td><a href="opiniones.php"><img src="img/btn_opiniones.png" height= "75" width= "150"></img></a></td>
   <td><a href="menu.php"><img src="img/btn_menu.png" height= "75" width= "150"></img></a></td>
   <td><a href="contacto.php"><img src="img/btn_contactos.jpg" height= "75" width= "150"></img></a></td>
</tr>
</table>
</div>
 </td>
 <div style="position:absolute;width:25%;height:300px;margin-left:0px; margin-top:300px; z-index:0; visibility:visible;">


<p>Complete la siguiente información:<p><br><br>
<p>Nombre:</p>
<input placeholder="Nombre" name="Nombre" type="text"  size="20" maxlength="15"><br>
<p>Dirección de entrega: 
<textarea placeholder="Direccion" name="Direccion" cols="30" rows="6"></textarea></p>
<br>

<p>Fecha de entrega:
<input type="date" name="fecha"><br><br><br>

<p>Hora de entrega:
<input type="time" name="usr_time" step="60"><br><br><br>
<p>Cantidad:
<input type="number" name="cantidad" min="1" max="100"><br><br><br>
<p>Sabor:
 <select name="Sabor" size="3" multiple>
    <option selected>Fresa</option>
    <option>Chocolate</option>
    <option selected>Vainilla</option>
</select><br><br>
Relleno: 
<P><input name="1" type="checkbox" value="Dulce de Leche" checked>Dulce de Leche</P>
<P><input name="2" type="checkbox" value="Crema Chantilly" checked>Crema Chantilly</P><br>
<br>
<p>Tamaño: 
<P><input name="1" type="checkbox" value="12 porciones" checked>12 porciones</P>
<P><input name="2" type="checkbox" value="24 porciones" checked>24 porciones</P><br>
<br>
<button onclick="Imprimir()">Enviar</button>
 <label><p>Gracias por su información</label>
    
      </td>
     
   </tr>
</div>
</body>
</html>
