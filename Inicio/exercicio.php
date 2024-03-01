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

// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.

function verifi($num){
    if($num > 0){
        echo "Numero positivo";
    }
    elseif ($num < 0){
         echo "Numero negativo";
    }
    elseif ($num == 0){
        echo "Numero zero";
    }
}

$num = -10;
verifi($num);

// Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha

$palavra = "Gato lindo";

echo str_word_count($palavra);
echo '<br>';
echo str_replace(' ',"<br>", $palavra);



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

//// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por ?

for($i = 1; $i <= 20; $i++){
    echo "<br>";
    echo $i % 3 == 0 ? '?': "$i";
}

// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por "Fizz" e múltiplos de 5 por "Buzz".
for($i = 1; $i <= 20; $i++){
  if ($i % 3 == 0){
    echo '<br>';
    echo 'Fizz';
  } elseif ($i % 5 == 0){
    echo '<br>';
    echo 'Buzz';
  }else {
    echo '<br>';
    echo $i;
  } 
}

// Crie uma função que remova os espaços em branco de uma string.
echo "<br>";
echo str_replace(' ',"", $palavra);

// Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.

$num1 = 1;
$num2 = 0;

echo "<br>";
echo $num1;
echo "<br>";
echo $num2;
echo "<br>";

for ($i=0; $i < 8; $i++) {
    $prox = $num1 + $num2;
    $num2 = $num1;
    $num1 = $prox;
    
    echo "<br>";
    echo $prox;
    echo "<br>";
}

// Crie uma função que receba um texto e retorne se é um pangrama

function pangrama($str) { 
      
    $str = strtolower($str); 
    $letras = array_fill(0, 26, false); 
    for ($i = 0; $i < strlen($str); $i++) { 
        $char = $str[$i]; 
        if (ctype_alpha($char)) { 
            $letras[ord($char) - ord('a')] = true; 
        } 
    } 
    return !in_array(false, $letras); 
} 
$str = "abcdefghijklmnopqrstuvwxyz";

if(pangrama($str)){
    echo "<br>";
    echo "É um pangrama";
}
else{
    echo "<br>";
    echo "Num é um pangrama";
}



