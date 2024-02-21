<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

class Livro{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this ->autor = $autor;
    }

    public function getTitulo(){
        return $this-> titulo;
    }

    public function getAutor(){
        return $this -> autor;
    }
    public function setTiulo($novoTitulo){
        $this-> titulo = $novoTitulo;
    }
    public function setAutor($novoAutor){
        $this-> autor = $novoAutor;
    }


}

$lv = new Livro("Cavalo-Triste", "Leonardo");

echo "Exercicio 2";
echo "<br>";
echo "<br>";
echo $lv -> getAutor();
echo "<br>";
echo $lv -> getTitulo();
echo $lv -> setAutor("PHP");
echo $lv -> setTiulo("O mais troll");
echo "<br>";
echo $lv -> getAutor();
echo "<br>";
echo $lv -> getTitulo();
echo "<br>";

// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.


class Animal{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this ->idade = $idade;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getIdade(){
        return $this -> idade;
    }

    public function setTiulo($novoIdade){
        $this-> titulo = $novoIdade;
    }

}

class Cachorro extends Animal{
    public function setIdade($novoIdade) {
        $this -> idade = ($novoIdade >= 0) ? $novoIdade : 0;
    }
    
    public function latir(){
        echo "Auuuuuuuuuuuuuu";
    }
}

$cachorro = new Cachorro("Sabao", 3);
echo "<br>";
echo "Exercicio 3";
echo "<br>";
echo $cachorro -> getNome();
echo "<br>";
echo $cachorro -> getIdade();
echo $cachorro -> setIdade(4);
echo "<br>";
echo $cachorro -> getNome();
echo "<br>";
echo $cachorro -> getIdade();
echo "<br>";
echo $cachorro -> latir();
echo "<br>";

// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora {
    public static function soma($n1,$n2){
        return $n1 + $n2;
    }
}
echo "<br>";
echo "Exercicio 4";
echo "<br>";
echo "<br>";
echo "A soma é: " .Calculadora::soma(6,10);
echo "<br>";

// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo{
    protected $marca;
    protected $veiculo;

    public function info(){
     echo "A marca é: " . $this -> marca;
     echo "<br>";
     echo "O veiculo é: " . $this-> veiculo;   
    }

}

class Carro extends Veiculo{

    public function __construct ($marca, $veiculo){
        $this->marca = $marca;
        $this->veiculo = $marca;
    }

    public function abrirPorta(){
        echo "Abrir as quatro portas";
    }
}

class Moto extends Veiculo{
    
    public function __construct($marca, $veiculo){
        $this->marca = $marca;
        $this->veiculo = $veiculo;
    }

    public function capatete(){
        echo "Obrigatorio o uso do capatete";
    }
}

$car = new Carro("Chevrolet", "CruzeLT");
$mot = new Moto ("Honda", "Biz");
echo "<br>";
echo "Exercicio 5";
echo "<br>";
echo "<br>";
$car -> info();
echo "<br>";
$mot -> info();
echo "<br>";

// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Log{
    public function enviarMensagem(){
        echo"Cachorro";
    }
}

class Emailsender{
    use Log;
}

class SMSender{
    use Log;
}
echo "<br>";
echo "Exercicio 6";
$email = new Emailsender();
echo"<br>";
$sms = new SMSender();
echo"<br>";
$sms -> enviarMensagem();
echo"<br>";
$email -> enviarMensagem();
echo"<br>";


// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal2{
    public function emitirSom(){}
}

class Cachorro2 extends Animal2{
    public function emitirSom(){
        $som = "w";
        for($i = 0; $i < 100; $i++){
            $som .= "o";
        }
        $som .= "f";
        echo $som;
    }
}

class Gato extends Animal2{
    public function emitirSom() {
        echo "Miauuuuuu";
    }
}

$cac = new Cachorro2();
$gato = new Gato();
echo "<br>";
echo "Exercicio 7";
echo "<br>";
echo "<br>";
$cac -> emitirSom();
echo "<br>";
$gato -> emitirSom();
echo "<br>";

// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro{
   static function registrarLog(){
        echo"Erro";
    }
}

trait LogInfo{
   static function registrarLog() {
        echo "Info";
    }
}

class Registro {
    function logErro() {
        LogErro::registrarLog();
    }

    function logInfo()  {
        LogInfo::registrarLog();
    }
    
}
echo "<br>";
echo "Exercicio 8";
echo "<br>";
$log = new Registro();
echo "<br>";
$log -> logErro();
echo "<br>";
$log -> logInfo();
echo "<br>";
?>