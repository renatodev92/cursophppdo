<?php 

class Pessoa {
    const nome = "Renato";

    public function exibirNome() {
        echo self::nome; // Exibindo o nome de uma constante em uma função. 
    }
}

//Agora estamos instanciando uma classe.
$pessoa = new Pessoa();

//Chamando o método exibir nome da class 'PESSOA'.
//$pessoa->exibirNome();

//Usando o extends para estender a class 'PESSO' para nova classe 'Rodrigo'.
class Rodrigo extends Pessoa {
    const nome = "Oliveira";
    public function exibirNome() {
        echo self::nome; // Exibindo o nome de uma constante em uma função. 
    }
}

//Agora estamos instanciando uma classe.
$rodrigo = new Rodrigo();
$rodrigo->exibirNome();

?>

