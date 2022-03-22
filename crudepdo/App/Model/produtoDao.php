<?php

//Criando classe Produto

//Definindo o namespace
namespace App\Model;

class ProdutoDao {
    
    public function create(Produto $p ) {
        $sql = 'INSERT INTO produtos(nome, descricao) VALUES (?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1,$p->getNome());
        $cadastrar->bindValue(2,$p->getDescricao());
        $cadastrar->execute();
    }

    public function read() {
        $sql = 'SELECT * FROM produtos'; 
        $ler = Conexao::getConn()->prepare($sql);
        $ler->execute();

        if($ler->rowCount() > 0):
            $resultado = $ler->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else: 
           return []; 
        endif;
    }
    public function update(Produto $p) {
        $sql = 'UPDATE produtos SET  nome = ?, descricao = ? WHERE id = ?';
       
        $atualizar = Conexao::getConn()->prepare($sql);
        $atualizar->bindValue(1, $p->getNome());
        $atualizar->bindValue(2, $p->getDescricao());
        $atualizar->bindValue(3, $p->getId());

        $atualizar->execute();

    }


    public function delete($id) {

        $sql = 'DELETE FROM  produtos WHERE id = ?';
        
        $deletar = Conexao::getConn()->prepare($sql);
        $deletar->bindValue(1, $id);

        $deletar->execute();

        
    

    }

}



?>