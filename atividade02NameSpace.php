<?php
namespace App\Loja;

class Cliente{
    public function exibirCliente(){
        echo"Cavalo-Triste";
    }
}

class Pedido{
    public function exibirPedido(){
        echo "Placa de video 4090";
    }
}

use App\Loja\Cliente as Clientes;

$cliente = new Cliente();
echo "<br>";
$cliente -> exibirCliente();
echo "<br>";
use App\Loja\Pedido as Pedidos;

$pedido = new Pedidos();
echo "<br>";
$pedido -> exibirPedido();
echo "<br>";

namespace App\Financeiro;


// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.



class Pagamento{
    public function pagamento(){
        echo 5000;
    }
}


use App\Financeiro\Pagamento as Preco;

$preco = new Preco();
echo "<br>";
$preco -> pagamento();
echo "<br>";

?>


