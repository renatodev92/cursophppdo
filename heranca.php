<?php 
//Herança é algo que permite que as classes compartilhem atributos e metodos, códigos e compotamentos generalizados.

//Abaixo criaremos com exemplo uma classe Carro.
class Veiculo {
    public $model;
    public $color;
    public $year;

    public function Speedup () {
        echo "Acelerar!";
    }
    public function Break () {
        echo "Frear";
    }

}

// Com o extends a classe 'Carro' está herdando como henrança os atributos e methodos da classe Veiculos.
class Carro extends Veiculo{

    //Criando um methodo especifico que não existe na moto.
    public function Openthedor() {
        echo "Abrir a porta";
    }
}

// Com o extends a classe 'Moto' está herdando como henrança os atributos e methodos da classe Veiculos.
class Moto extends Veiculo {
    
    //Criando um methodo especifico que não existe no carro.
    public function Changehandlebars() {
        echo "Trocar guidom da moto";
    }
    
}

//Agora vamos instanciar a classe 'Carro'. Veja que ela herdará os dados da clasee veículo.

$carro = new Carro();
$carro->model    = "Corsa Wind";
$carro->color    = "Cinza";
$carro->year     =  1996;
$carro->Speedup();
var_dump($carro);

//Instanciando a classe 'Carro' com um methodo especifico que não tem em veículos.
$carro->Openthedor();
echo "<br>";

//Agora vamos instanciar a classe 'Moto'. Veja que ela herdará os dados da clasee veículo.

$moto = new Moto();
$moto->model = "Harley Davidson";
$moto->color = "Preta";
$moto->year  =  2008;
$moto->Break();
var_dump($moto);

//Instanciando a classe 'Moto' com um methodo especifico que não tem em veículos.
$moto->Changehandlebars();








?>