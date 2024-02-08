<?php
   
//Subistituir todas as vogais por *

$string = 'Manipulação de string';

echo str_replace(["a","e","i","o","u"],"*", $string);

//verificar se um numero primo

function isPrimo ($num){
    for($i =2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}

$numero = 19;

if (isPrimo($numero)){
    echo "<br> $numero O numero é primo";
}
else {
    echo "<br> $numero não é primo";
}