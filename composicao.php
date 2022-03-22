<?php 
//Composição PHP

/* Composição: Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída, a outra classe também será. Também é uma relação Todo/Parte, ou seja, a classe principal é o todo, e as outras classes nela instanciadas, suas partes. */

class Pessoa {
    public function atribuirNome ($nome){
        return "O nome da pessoa é ".$nome.'!';
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome) {
       $this->pessoa = new Pessoa(); //Intanciando a classe dentro do construct.
       $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("Renato");
$exibe->exibeNome();


?>