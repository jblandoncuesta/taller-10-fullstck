<?php
// declaracion de variables de entrada 

$firstName = "";
$age = 0;

//PROCESO

echo "ingresa tu nombre y apellido: ";
fscanf(STDIN, "%s", $firstName);

echo "ingresa tu edad: ";
fscanf(STDIN, "%d", $age);

echo "$firstName" . "\n";

if ($age < 18){
  echo " eres menor de edad \n";

} else {  
  echo " eres mayor de edad \n";   
}
 
?>