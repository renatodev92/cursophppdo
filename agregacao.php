<?php 

//Agragação

//Acontece quando um objeto precisa de outro objeto para completar a sua ação (Todo/Parte), ou seja, faz a agregação de um objeto externo e o utiliza como parte de si própria. Um exemplo muito falado sobre esse tipo de relação, é quanto o carrinho de compras e seus produtos. A classe carrinho de compras (Todo) precisa da classe produtos (Parte) para executar suas ações.


class Produtos {
    public $nome;
    public $valor;
    public $quantidade;
    public $cod;
    

    function __construct($nome, $valor, $quantidade, $cod) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->cod = $cod;
    }
}


class Carrinho {
    public $produtos;

    //Agregando a classe PRODUTOS ao carrinho
    public function adicionar(Produtos $produto) {
        $this->produtos[] = $produto;
    }
    
    public function exibe() {
        foreach ($this->produtos as $produto) {
        echo 'Nome do Produto: '.$produto->nome.'<br>';
        echo 'Valor R$:'.$produto->valor.'<br>';
        echo 'Quantidade:'.$produto->quantidade.'<br>';
        echo 'Cód Produto'.$produto->cod.'<hr>';
        }
    }
}

$produto1 = new Produtos('Mouse', 15, '10', 'NF456');
$produto2 = new Produtos('Abajur', 20, '15', 'JK1245');
$produto3 = new Produtos('Teclado', 50, '15', 'LB1245');



$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);
$carrinho->adicionar($produto3);


echo "<h3>Lista de produtos adicionados ao carrinho de compra.</h3>";

$carrinho->exibe();
echo "<h3>Fim da compra.</h3>";




?>