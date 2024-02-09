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

//Inverter uma string sem usar a função strrev

$string2 = 'Leonardo';

$invertida = '';

for($i = strlen($string2) -1; $i >= 0; $i -- ){
    $invertida .= $string2[$i];
}

echo '<br>';
echo $invertida . '<br>'; 

//Crie uma função que verifique se uma palavra é um palindromo

function isPalindromo ($palavra){
    $palavraInvertida = strrev($palavra);

    return strtolower($palavra) === strtolower($palavraInvertida);

}


$teste = "radar";

echo '<br>';

if(isPalindromo($teste)){
    echo "$teste é um palindromo";
}else{
    echo "Num é um palindromo";
}