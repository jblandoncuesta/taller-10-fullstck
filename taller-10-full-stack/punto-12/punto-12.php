<?php
//Dado un número digitado por el usuario generar la tabla de multiplicar de del 0 hasta el 30 (for)

//DECLARACION DE VARIABLES DE ENTRADA

$number=0;
$result = 0;


//PROCESO
echo "ingrese el numero  multiplicar";
fscanf(STDIN, "%d", $number);

for($x=0; $x<= 30; $x ++){
   $result =  $x * $number;
    echo $number . " x " . $x . " = " . $result . "\n";
    
}

?>