<?php 
extract($_REQUEST, EXTR_SKIP);
$variable; 
echo quitar($variable); 

function quitar($variable){ 
$sig[]='.'; 
$sig[]=',';
$sig[]='$';
$sig[]='₡';    
    
return str_replace($sig,'',$variable);} 
?>