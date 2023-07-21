<?php
// declaracion de variables de entrada 
const TICKET_PRICE = 25000;

$membershipeType = "";
$personNumber = 0;

//PROCESO

echo "ingresa tu tipo de afiliacion";
fscanf(STDIN, "%s", $membershipetype);

echo "ingresa el numero de personas";
fscanf(STDIN, "%d", $personNumber);

$totalpay = $personNumber * TICKET_PRICE;

if ($membershipeType == "A" || $membershipeType == "B" ){
    $totalpay = $totalpay - ($totalpay * 0.3);
    
} else {
    echo "Usted no cuenta con la membresia valida para obtener un 
    descuento \n";
}

echo "el total a pagar es: " . $totalpay;
?>