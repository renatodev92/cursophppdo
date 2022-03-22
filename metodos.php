<?php 

/* O que é static em php?
static é usado para definir que um método ou atributo em uma classe é estático. Isso significa (como alguém que conhece de OO deve saber) que aquele método/atributo pertence à classe e não à uma instância dela e, por isso, pode ser acessado sem instânciar um novo objeto. */

//Quando se trabalha com atributos staticos o this não funciona.
//Sendo assim temos que utilizar o self.


class Login {
    
    public static $user;

    public static function verificarLogin(){
        echo "O usúario " .self::$user. " esta logado!";
    }

    public function sairSistema() {
        echo "O usuario se desligou do sistema!";
    }

}

// Como a propiedade $user e a function verificaLogin da classe 'Login' possuem o atributo static. Não é necessário que a classe ser instaciada.

// Classe instanciada 

//$login = new Login (); 

// Sendo o objeto static podemos acessalo da seguinte forma, sem instanciar uma classe.


Login::$user = "Admin";
Login::verificarLogin();
Login::sairSistema(); //Aqui também podemos acessar um metodo que não é static. Sem instanciar a classe.








?>