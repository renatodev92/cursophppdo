<?php 
//Trabalhando com Polimorfismo
//Os polimorfismos são variações genéticas que aparecem como consequências de mutações.
//Polimorfismo é simplesmente subistituir os reescrever um método herdado. Veja o exemplo abaixo com as classes Animal e Cavalo


class Animal {
    public function Andar() {
        echo "O animal andou!";
    }

    public function Correr() {
        echo "O animal correu!";
    }

}

class Cavalo extends Animal {
    public function Andar() {
        echo "O Cavalo andou!"; //Veja que reescrevemos a classe Andar de um metodo herdado. Isso é polirmosfismo meu caro.
    }
}

//Instanciando a class 'CAVALO'
$cavalo = new Cavalo();

//Chamando o methdo Andar() polimosfismo.

$cavalo->Andar();
echo '<br>';

//Chamando o methodo correr da classe Animal
$cavalo->Correr();

?>