<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Serie de Fibonaci</title>
</head>
<body>
<?php
$aux=$_POST['txtnum'];
$a=1;
$b=1;
$c=$a+$b;
for($i=1;$i<=$aux;$i++)
{
echo "<br>".$c;
$a=$b;
$b=$c;
$c=$a+$b;
}
?>
</body>
</html>