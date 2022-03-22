<?php 

// Modificadores de acesso
//Com os modificadores de acesso determinamos a visibilidade de um método ou atributo pertencente a uma classe. Ou seja, definimos se ele pode ou não ser acessado fora da classe em que foi declarado.

//PUBLIC- Este é o nível de acesso mais permissivo. Ele indica que o método ou atributo da classe é público, ou seja, pode ser acessado em qualquer outro ponto do código e por outras classes.

//PRIVATE - Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que um atributo ou método foi declarado pode acessá-lo. Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método.

//PROTECTED - Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre com o public.


//Herança é algo que permite que as classes compartilhem atributos e metodos, códigos e comportamentos generalizados.

//Abaixo criaremos com exemplo uma classe Carro.

class Veiculo {
    protected $model; // Aqui chamamos o atributo $model e estamos colocando o protected.
    private $color;
    public $year;

    public function Speedup () {
        echo "Acelerar!";
    }
    public function Break () {
        echo "Frear";
    }

    public function setModel($m) {
        $this->model = $m;
    }

   public function getModel() {
       return $this->model;
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


//Acessando através do modificador'PRIVATE'. Nesse caso temos que criar dentro da classe 'Veiculo' os methodos setModel e getModel. Caso contrario não poderiamos acessar a propiedade model do objeto 'Veiculo', pois ela está protegida 'Protected'.
$veiculo = new Veiculo();
$veiculo->setModel('Vectra');
echo $veiculo->getModel();

//Acessando atrevés do modificador PRIVATE da classse 'VEICULO', nesse caso os dados não serão herdados em outra classe como herança. Mesmo que chamados. Pois está privado somente a classe pai = 'VEICULO'.
// O comando abaixo dará um erro dentro do PHP.
// = $veiculo->color = "Black";













?>