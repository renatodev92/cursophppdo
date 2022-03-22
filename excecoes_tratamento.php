<?php 
//Ocorrencia anormal que afeta o funcionamento da aplicação.
//Excepcion é uma classe base para todas exceções.
//message, code, file, line


class Noticias {

    //Se o email não for válido, exibe uma mensagem que o email é invalido.
    //Tratamos a excessão com o throw new Exception.
    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new  Exception("O email digitado é inválido!", 1); 
        else: 
            echo "Email cadastrado com sucesso!";
        endif;
            
    }
}


//Instanciando a classe. 
$noticias = new Noticias();

//Veja ao exibir o código abaixo na tela da erro, pois o email não é válido.
//$noticias->cadastrarEmail("renato.roliveira92@");


//Agora precisamos tratar a exceção.
try {
$noticias->cadastrarEmail("renato.roliveira92@");
} catch(Exception $e) {
    echo "Mensagem message: " .$e->getMessage()."<br>"; // Exbindo erros
    echo "Mensagem code: " .$e->getCode()."<br>"; // Exbindo erros
    echo "Mensagem file: " .$e->getFile()."<br>"; // Exbindo erros
    echo "Mensagem line: " .$e->getLine()."<br>"; // Exbindo erros
}
?>