<?php

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

$palavra = "Gato lindo";

echo str_word_count($palavra);
echo '<br>';
echo str_replace(' ',"<br>", $palavra);

for($i = 1; $i <= 20; $i++){
    echo "<br>";
    echo $i % 3 == 0 ? '?': "$i";
}

// Crie uma função que remova os espaços em branco de uma string.
echo "<br>";
echo str_replace(' ',"", $palavra);

//
