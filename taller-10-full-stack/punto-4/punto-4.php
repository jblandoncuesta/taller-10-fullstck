<?php
//Mostrar en consola el nombre y apellido ingresado por el usuario

const PI = 0 ;
define("WELCOME_MESSAGE" , "bienvenido") . "\n";
 
 $firstName = 0;
 $lastName = 0;
 
 echo " Por favor ingresa tu nombre :" ;
 fscanf(STDIN, "%s", $firstName);
 
 echo "Por favor ingresa tu apellido :";
 fscanf(STDIN, "%s", $lastName);
 

 //salida
 echo WELCOME_MESSAGE . "\n";
 echo $firstName . " " . $lastName . "\n";
?>