<?php
extract($_REQUEST, EXTR_SKIP);
$email;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email) es válida.";
}else{
    echo "Esta direccion de correo ($email) no es valida"; 
}

?>