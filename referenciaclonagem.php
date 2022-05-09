<?php 
//Referência e clonagem de objetos

class Pessoa {
    public $idade;
    //Agora estamos utilizando o clone.
}

$pessoa = new Pessoa();
$pessoa->idade = 25;


$pessoa2 = clone $pessoa; // Fazendo o clone do objeto pessoa em pessoa2.
$pessoa2->idade = 35;

//Note que vai aparecer 25.
echo $pessoa->idade;
echo "<br>";

//Note que vai aparecer 35.
echo $pessoa2->idade;  




?>

