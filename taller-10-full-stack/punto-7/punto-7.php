<?php
// declaracion de 

$firstNumber = 0;
$secondNumber = 0;
$opertionType = "";
$result = 0;
// Proceso

echo " ingrese el primer numero a operar ";
fscanf(STDIN, "%d", $firstNumber);
echo " ingrese el segundo numero a operar ";
fscanf(STDIN, "%d", $secondNumber);

echo " elija el tipo de operacion \n";
echo " 1 - Sumar \n";
echo " 2 - Restar \n";
echo " 3 - Multiplicar \n";
echo " 4 - Dividir \n";
fscanf(STDIN, "%d", $operationType);

switch ($operationType){
    case 1:
        $result = $firstNumber + $secondNumber;
        break;
        
    case 2:
        $result = $firstNumber - $secondNumber;
        break;
        
    case 3:
        $result = $firstNumber * $secondNumber;
        break;
        
    case 4:
        $result = $firstNumber / $secondNumber;
        break;
    default;
        echo "no eligio la opcion correcta ";    
        
}
//salida
echo "El resultado es: " . $result;
?>