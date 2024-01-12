<?php
//Video dois syntax tutorial
/*
echo 'Hello word';
print ' Ola mundo';

echo print "   Opa mundo";

$name = "-Leonardo";

echo $name;

$x = 1;
$y = &$x;

$x = 3;


echo $y;



$firstname = "Veque";

echo 'hello $firstname ';
echo " hello $firstname";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php
            $x = 10;
            $y = 5;
            echo $x . '.' . $y;
            ?>
    </h1>
    <?php
    $x = 10;
    $y = 5;
    echo '<p>' . $x . ' . ' . $y . '</p>';
    ?>
</body>

</html>
*/

// video 3 constants e variaveis

//constants declaração 1
/*
define('STATUS_PAID', 'paid');

echo  STATUS_PAID;
*/

//constants declaração 2

/*
const STATUS_PAID = 'paid';

echo STATUS_PAID;
*/
// Check se a constaint esta definida

//echo defined('STATUS_PAID');

//Constantes pré-definidas
/*
echo PHP_VERSION;

echo __LINE__;

echo __FILE__;
*/

//Variables Variables

$foo = 'bar';

$$foo = 'baz'; //muda o nome da variavel para bar

echo "$foo, ${$foo}";
