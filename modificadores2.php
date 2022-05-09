<?php 

// Modificadores de acesso
//Com os modificadores de acesso determinamos a visibilidade de um método ou atributo pertencente a uma classe. Ou seja, definimos se ele pode ou não ser acessado fora da classe em que foi declarado.

//PUBLIC- Este é o nível de acesso mais permissivo. Ele indica que o método ou atributo da classe é público, ou seja, pode ser acessado em qualquer outro ponto do código e por outras classes.

//PRIVATE - Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que um atributo ou método foi declarado pode acessá-lo. Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método.

//PROTECTED - Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre com o public.

// Também podemos atribuir os modificadores aos methodos(funções).
//public, private ou protected.


//Herança é algo que permite que as classes compartilhem atributos e metodos, códigos e comportamentos generalizados.

//Abaixo criaremos com exemplo uma classe Carro.

class Veiculo {
   public $modelo;
   public $cor;
   public $ano;

   public function setModelo($m){
       $this->modelo = $m;
   }

   public function setCor($c){
       $this->cor = $c;
   }

   public function setAno($a){
       $this->ano = $a;
   }
    
   public function getModelo(){
       return $this->modelo;
   }

   public function getCor(){
       return $this->cor;
   }

   public function getAno(){
       return $this->ano;
   }

   private function Acelerar(){
       echo "Acelerando";
   }


}

// Com o extends a classe 'Carro' está herdando como henrança os atributos e methodos da classe Veiculos.
class Carro extends Veiculo {
    
    //Criando um methodo especifico que não existe na moto.
    public function abrirPorta() {
        echo "Abrir a porta!";
    }
}

// Com o extends a classe 'Moto' está herdando como henrança os atributos e methodos da classe Veiculos.
class Moto extends Veiculo {
    //Criando um methodo especifico que não existe no carro.
    public function colocarCapacete() {
        echo "Colocar capacete motocicleta!";
    }
    
}

//Acessando o methodo Acelerar() do objeto 'VEICULO' veja que da erro, pois ele só podera ser usado somente no objeto 'VEICULO'. 
//Não poderá ser instanciado. o methodo Acelerar() está como private. E só pode ser acessado dentro da classe pai = 'VEICULO'.
//Executando o retorno abaixo trará um erro.

/* $carro = new Veiculo();
$carro->Acelerar();
 */


$carro1 = new Carro();

$carro1->setModelo("Corsa");
$carro1->setCor("Cinza");
$carro1->setAno(1996);

echo "Modelo: " . $carro1->getModelo() . "<br>";
echo "Cor: "    . $carro1->getCor()    . "<br>";
echo "Ano:"     . $carro1->getAno()    . "<br>";

// Veja que nem fora da classe 'VEICULO' conseguimos acessar o método 'Acelerar', pois ele está como 'PRIVATE' somente a classe '.
//echo $veiculo1->Acelerar();














?>