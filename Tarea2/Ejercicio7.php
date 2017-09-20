<?php
extract($_REQUEST, EXTR_SKIP);
$fecha;


if (($timestamp = strtotime($fecha)) === -1) {
    echo "El formato de la fecha  ($fecha) no es compatible";
} else {
    echo "$fecha = " . date('l dS \o\f F Y', $timestamp);
}
?>