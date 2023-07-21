<?php
//Dado un arreglo numérico de 5 posiciones generar la suma de los numeros (for)
//DECLARACION DE VARIABLES DE ENTRADA

$number=0;
$arrayNumber=0;
$secondNumber=7;
$result=0;

//PROCESO

$arrayNumber = array(4, 7, 8, 10, 3);
foreach($arrayNumber as $number){
    //salida
    $result =  $secondNumber + $number;
    echo $number . " + " . $secondNumber. " = " . $result . "\n";
}
?>