<?php 

//Quando classes tem o mesmo nome podemos atribuir o namespaces para diferenciar a classe a ser chamada.
//Para que o PHP possa interpretar.

//Veja nos arquivos que as classes importadas tem o mesmo nome.

require_once 'classes/produto.php';
require_once 'models/produto.php';




//Se quererermos instaciar a classe produto na dará um erro. Pois existem 2 classes com o mesmo nome.

/* $produto1 = new Produto;
//Fatal error: Uncaught Error: Class 'Produto' not found in C:\wamp64\www\cursophppdo\namespaces.php on line 13 */

//Instanciando a classe Produto da pasta classes/produto.php através do namespaces.
//Agora dará certo pois estamos usando o namespaces.
$produto = new \classes\Produto();
$produto->mostrarDetalhes();
echo '<br>';


//Instanciando a classe Produto da pasta models/produto.php através do namespaces.
//Agora dará certo pois estamos usando o namespaces.
$produto1 = new \models\Produto();
$produto1->mostrarDetalhes();
echo '<br>';

//Também podemos dar um apelido para classe.
use models\Produto as produtoModel;
use classes\Produto as produtoClass;

echo "<hr>";
echo "Usando ALIASES apelidos as nas classe.<br>";
echo "<br>";

//Assim podemos instaciar a classe produto da pasta models diretamente. 
//Veja abaixo.

$produto2 = new produtoModel;
$produto2->mostrarDetalhes();
echo "<br>";

$produto3 = new produtoClass;
$produto3->mostrarDetalhes();
echo "<br>";


?>