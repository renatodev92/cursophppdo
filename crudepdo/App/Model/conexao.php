<?php 

//Criando a classe para conexão com o banco de dados

//Definindo o namespace
namespace App\Model;

class Conexao {
    private static $instance;

    public static function getConn() {
        //Se não existir uma instancia vai criar uma nova
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
        endif;
            return self::$instance;
      
    }
}




?>