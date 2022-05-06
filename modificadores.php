<?php 

// Modificadores de acesso
//Com os modificadores de acesso determinamos a visibilidade de um método ou atributo pertencente a uma classe. Ou seja, definimos se ele pode ou não ser acessado fora da classe em que foi declarado.

//PUBLIC- Este é o nível de acesso mais permissivo. Ele indica que o método ou atributo da classe é público, ou seja, pode ser acessado em qualquer outro ponto do código e por outras classes.

//PRIVATE - Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que um atributo ou método foi declarado pode acessá-lo. Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método.

//PROTECTED - Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre com o public.


//Herança é algo que permite que as classes compartilhem atributos e metodos, códigos e comportamentos generalizados.

//Abaixo criaremos com exemplo uma classe Carro.

class Veiculo {
    public $ano;// Aqui chamamos o atributo $ano e estamos colocando o public.
    private $cor; // Aqui chamamos o atributo $cor e estamos colocando o private.
    protected $modelo; // Aqui chamamos o atributo $modelo e estamos colocando o protected.
   
    public function Acelerar() {
        echo "Acelerar!";
    }
    public function Frear() {
        echo "Frear";
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setCor($c){
        $this->cor = $c;
    }

    public function getCor(){
       return $this->cor;
    }

    public function setAno($a){
        $this->ano = $a;
    }

    public function getAno(){
        return $this->ano;
    }



}

// Com o extends a classe 'Carro' está herdando como henrança os atributos e methodos da classe Veiculos.
class Carro extends Veiculo{

    //Criando um methodo especifico que não existe na moto.
    public function abrirPorta() {
        echo "Abrir a porta";
    }
}

// Com o extends a classe 'Moto' está herdando como henrança os atributos e methodos da classe Veiculos.
class Moto extends Veiculo{
    
    //Criando um methodo especifico que não existe no carro.
    public function colocarCapacete() {
        echo "Colocar capacete!";
    }
    
}


//Acessando através do modificador'PRIVATE'. Nesse caso temos que criar dentro da classe 'Veiculo' os methodos setmodelo e getmodelo. Caso contrario não poderiamos acessar a propiedade modelo do objeto 'Veiculo', pois ela está protegida 'Protected'.

/* //Exemplo1: Não conseguimos acessar o modelo diretamente.
$carro1 = new Carro();
echo $carro1->modelo = "Vectra"; */

/* //Exemplo2: Agora acessando os a propiedade 'modelo' através do métodos puclics setModel e getModel.
$carro2 = new Carro();
$carro2->setModelo('Corsa Wind');
echo $carro2->getModelo(); */


//PRIVATE - Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que um atributo ou método foi declarado pode acessá-lo. Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método.


/* //Exemplo1: Não foi possivel acessar o método cor, pois ele está private e só pode ser acessado pela classe pai 'VEICULO'.
$moto1 = new Moto();
echo $moto1->cor = "Red";
var_dump($moto1); */


/* //opens naruto shippudenshExemplo2: Agora acessando os a propiedade 'cor' através do métodos puclics setCor e getModel.
$moto2 = new Moto();
$moto2->setCor("Amarelo");
echo $moto2->getCor();

var_dump($moto2);
















?>