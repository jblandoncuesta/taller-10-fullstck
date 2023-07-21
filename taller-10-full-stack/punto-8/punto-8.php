<?php
//dado el tipo de afiliación y el número de personas digitados el usuario generar el valor de las entradas a la bolera teniendo en cuenta que si el tipo de afiliación  es ‘A’  tendrá un descuento del  30% del total si es tipo ‘B’ el 25%, si es tipo ‘C’ del 10% y si es tipo ‘D’ del 5%, el valor es de $25.000 por persona.
// declaracion de varables 

const TICKET_D = 25000;

$firstNumber = 0;
$opertionType = "";
$result = 0;
// Proceso
echo "Bienvenido a la bolera \n "; 

echo " ingrese el numero de personas que vienen ";
fscanf(STDIN, "%d", $firstNumber);

echo " elija el tipo de afiliacion \n";
echo " 1 - Afi.A \n";
echo " 2 - Afi.B \n";
echo " 3 - Afi.C \n";
echo " 4 - Afi.D \n";
fscanf(STDIN, "%d", $operationType);

switch ($operationType){
    case 1:
        $result = ($firstNumber * TICKET_D ) - 7500 ;
        break;
        
    case 2:
        $result = ($firstNumber * TICKET_D ) - 6250 ;
        break;
        
    case 3:
        $result = ($firstNumber * TICKET_D ) - 3750 ;
        break;
        
    case 4:
        $result = ($firstNumber * TICKET_D ) - 2500 ;
        break;
        
   
        
    
    default;
        echo "no eligio la opcion correcta ";    
        
}
//salida
echo "El total a pagar es: " . $result;
?>