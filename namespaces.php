<?php 

//Quando classes tem o mesmo nome podemos atribuir o namespaces para diferenciar a classe a ser chamada.
//Para que o PHP possa interpretar.

//Veja nos arquivos que as classes importadas tem o mesmo nome.

require 'classes/produto.php';
require 'models/produto.php';


//Instanciando a classe Produto da pasta classes/produto.php através do namespaces.
$produto = new \classes\ Produto();
$produto->mostrarDetalhes();
echo '<br>';


//Instanciando a classe Produto da pasta models/produto.php através do namespaces.
$produt = new \models\ Produto();
$produt->mostrarDetalhes();
echo '<br>';

?>