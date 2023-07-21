<?php

 
 $firstNumber = 0;
 $secondNumber = 0;
 
 echo "ingresa el primer numero a sumar" ;
 fscanf(STDIN, "%d", $firstNumber);
 
 echo "ingresa el segundo numero a sumar";
 fscanf(STDIN, "%d", $secondNumber);
 
 $add = $firstNumber + $secondNumber;
 
 //salida
 echo "la suma es: " . $add;
?>