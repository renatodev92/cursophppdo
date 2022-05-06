<?php 

//EXEMPLO 1

/*  //Criando uma classe em PHP
 class Pessoa {
     public $name;
     public $age;
     public $sexo;
     

     public function Falar() {
         echo "Olá eu sou o $this->name e tenho $this->age anos de idade.";
     }
 }

 // Instanciando uma classe

 $rodrigo = new Pessoa();


 //Setando os valores para rodrigo e instaciando o Falar().
 $rodrigo->name = "Rodrigo Santos de Oliveira";
 $rodrigo->sexo = "Masculino";
 $rodrigo->age = 25; 
 $rodrigo->Falar();
 var_dump($rodrigo);
echo "<br> Exibindo o Nome: $rodrigo->name.";
echo "<br> Exibindo a Idade: $rodrigo->age.";
echo "<br> Exibindo o Sexo: $rodrigo->sexo."; */

//EXEMPLO 2

class Login {
    public $email;
    public $senha;
    public $nome;


    //Trabalhando com o __construct. Quando instancia uma classe é instanciada uma classe.
    public function __construct($email, $senha, $nome) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    // Função criada para pegar o nome do usúario. Sempre use o get como padrão.
    public function getNome() {
        return $this->nome;
    }

    // Função criada para setar o nome do usúrio. Sempre use o set como padrão.
    public function setNome($n) {
        $this->nome = $n;
    }

    // Função criada para pegar o email do usúario. Sempre use o get como padrão.
    public function getEmail() {
        return $this->email;
    }

    // Função criada para setar o email do usúrio. Sempre use o set como padrão.
    public function setEmail($e) {
       $email = filter_var($e, FILTER_SANITIZE_EMAIL);
       $this->email = $email;

    }

    // Função criada para pegar a senha do usúario. Sempre use o get como padrão.
    public function getSenha() {
        return $this->senha;
    }

    // Função criada para setar o senha do usúario. Sempre use o set como padrão.
    public function setSenha($s) {
       $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" AND $this->senha == "123456" ):
            echo "Logado com sucesso.";
        else:
            echo "Dados inválidos";
        endif;
    }
}


//Instancinado a classe Login na variavel logar.
$logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira");

$logar->Logar();
echo "<br>";
echo $logar->getNome();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();




?>