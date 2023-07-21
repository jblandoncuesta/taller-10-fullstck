<?php
//DECLARACION DE VARIABLES

function hasSecuritylong($pass){
    return strlen($pass) >=8;
}
function hasUpperletter($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if($letter == strtoupper ($letter)){
            return true;
        } 
       
    }
    return false;
}

function hasNumber($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if (is_numeric ($letter)){
            return true; 
        }
        
    }
    return false;
}

//DECLARACION DE VARIABLES
$password = "";

echo "Ingrese la clave a registrar \n";
fscanf(STDIN, "%s", $password);


if ( hasSecuritylong ($password)){
    if (hasUpperletter($password)){
        if (hasNumber($password)){
          echo "contraseña correcta se ha registrado" ; 
        }else{
            echo "Cuidado tu contraseña no es segura: Tu contraseña debe tener al menos un numero";
        }
        
    }else{
        echo "Cuidado tu contraseña no es segura: tu contraseña debe tener al menos una letra mayuscula";
    }
    
}else {
echo "Cuidado tu contraseña no es segura: tu contraseña debe tener minimo 8 caracteres";
}

?>