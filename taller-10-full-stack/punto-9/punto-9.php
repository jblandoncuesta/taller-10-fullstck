<?php
// declaracion de varables 
$number=0;
$x=0;

//proces0
echo "escriba el numero a multiplicar: ";
fscanf(STDIN, "%d", $number);

while($x <= 30){
    $result =  $x * $number;
    echo $number . " x " . $x . " = " . $result . "\n";
    $x++;
} 
        

?>