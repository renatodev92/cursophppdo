<?php 

//Associação

/* Associação: É uma das relações mais comuns entre dois objetos, acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro. Em outras palavras, é como se eu tivesse duas classes distintas, e fizesse uso de uma delas dentro da outra, ou como parâmetro de outra. */

class Pedido {
    public $chapa;
    public $funcionario;
}


class Funcionario {
    public $nome;
    public $endereço;
    public $pais;
    public $cargo;

}

$funcionario = new Funcionario();
$funcionario->nome = "Renato de Oliveira";
$funcionario->endereco = "Rua: alessandro magnasco n° 156";
$funcionario->pais = "Brasil";
$funcionario->cargo = "Programador assistente III";

$pedido = new Pedido();
$pedido->chapa = '004990';
$pedido->funcionario = $funcionario; //Funcionario está recebendo os dados do objeto funcionario.


//Passando os dados para um array de obejtos.
$dados = array (
    'chapa' => $pedido->chapa, 
    'nome_funcionario' =>$pedido->funcionario->nome,
    'endereço_funcionario' =>$pedido->funcionario->endereco,
    'pais_funcionario' =>$pedido->funcionario->pais,
    'pais_funcionario' =>$pedido->funcionario->cargo
);


//Exibindo os dados na tela com o var_dump.
var_dump($dados);



?>