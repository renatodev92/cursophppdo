<?php 
//Gerando o alto load utilizando o composer.
 require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();

  /*   $produto->setId(4);
    $produto->setNome('Desodorante Axe');
    $produto->setdescricao('Axe aerosol 48h de proteção.'); */

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->delete(4);
    $produtoDao->read();

    foreach($produtoDao->read() as $produto):
        echo $produto['nome']."<br>".$produto['descricao']."<hr>";
    endforeach;






?>