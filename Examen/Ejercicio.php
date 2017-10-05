<?php  
$num = 2;  
$n1 = 2;  
$n2 = 3;  
echo "<h3>Serie Fibonacci de los primeros 20 numeros: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 20)  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?>  