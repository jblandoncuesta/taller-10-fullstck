<?php
//

// declaracion de varables 

$firstNumber = 0;
$opertionType = "";
$secondNumber=0;
$result = 0;
// Proceso

function suma($firstNumber, $secondNumber){
 $result=  $firstNumber + $secondNumber;
 return  $result;
} 
function resta($firstNumber, $secondNumber){
 $result=  $firstNumber - $secondNumber;
 return  $result;
} 
function multiplicacion($firstNumber, $secondNumber){
 $result=  $firstNumber * $secondNumber;
 return  $result;
} 
function division($firstNumber, $secondNumber){
 $result=  $firstNumber / $secondNumber;
 return  $result;
} 

echo " ingresa el primer numero a operar ";
fscanf(STDIN, "%d", $firstNumber);
echo " ingresa el segundo numero a operar ";
fscanf(STDIN, "%d", $secondNumber);

echo " elija el tipo de operacion \n";
echo " 1 - Suma \n";
echo " 2 - Resta \n";
echo " 3 - Multiplicacion \n";
echo " 4 - Division \n";
fscanf(STDIN, "%d", $operationType);

switch ($operationType){
    case 1: 
        echo "la suma es: "  .  suma($firstNumber, $secondNumber)  ;
        break;
        
    case 2:
        echo " la resta es:"  .  resta($firstNumber, $secondNumber) ;
        break;
        
    case 3:
        echo "la multiplicacion es: "  .  multiplicacion($firstNumber, $secondNumber) ;
        break;
        
    case 4:
        echo "la division es:"  .  division($firstNumber, $secondNumber) ;
        break;
        
    
    default;
        echo "no eligio la opcion correcta ";    
        
}
//sal
?>