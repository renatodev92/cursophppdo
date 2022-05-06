<?php 


/* //AULA 1
//Criando uma classe chamada Pessoa

class Pessoa {

    //Setando os atributos de Pessoa
    public $nome;
    public $idade;
    public $altura;
    public $genero;

    //Setando as funções/métodos da classe Pessoa
    public function descricao() {
        echo "NOME:".$this->nome."<br>"; 
        echo "IDADE:".$this->idade."<br>";
        echo "ALTURA:".$this->altura."<br>";
        echo "GENERO:".$this->genero."<br>";


    }
}

//instanciando uma classe em um objeto.
$pessoa1 = new Pessoa();

//Instanciando os valores dentro do objeto.

$pessoa1->nome = "Renato de Oliveira";
$pessoa1->idade = 29;
$pessoa1->altura = 1.65;
$pessoa1->genero = "Masculino";
$pessoa1->descricao();

//Exibindo o objeto pessoa1.
var_dump($pessoa1) */



/* //AULA 2

class Login {
    public $email;
    public $nome;
    public $senha;

    //Chamando os métodos mágicos construct.
    public function __construct($email, $nome, $senha) {
        $this->setEmail($email);
        $this->setNome($nome);
        $this->setSenha($senha); 

    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($u) {
        $this->nome = $u;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }



    public function logar() {
        if($this->email =="teste@teste.com" and $this->senha =="123456"):
            echo "Logado com Sucesso!<br>";
            echo "EMAIL:".$this->email."<br>";
            echo "NOME:".$this->nome."<br>";
        else:
            echo "Dados Inválidos!";
        endif;
    }

}

$log = new Login("teste@teste.com", "Renato", "123456");
$log->logar();

var_dump($log); */

//AULA 3
//HERANÇA
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Acelerar(){
        echo "Acelerou<br>";

    }

    public function Parar(){
        echo "Parou<br>";
    }


}




//Extendendo a classe Veiculo para classe 'Carro'. Herdando os atributos e metodo da classe veiculo.
class Carro extends Veiculo {
        //Atribuindo um metodo especifico na classe carro.Só vai poder ser usado caso a CLASSE 'Carro' seja instanciada.
        public function abrirPorta() {
        echo "Porta aberta!";
        }

}

//Extendendo a classe Veiculo para classe 'Moto'. Herdando os atributos e metodo da classe veiculo.
Class Moto extends Veiculo{
     //Atribuindo um metodo especifico na classe Moto. Só vai poder ser usado caso a CLASSE 'Moto' seja instanciada.
        public function colocarCapacete() {
        echo "Capacete colocado!";
        }
   

}

//Instanciando a classse Carro
$carro1 = new Carro();
$carro1->modelo = "Gol";
$carro1->cor    = "Vermelho";
$carro1->ano    = 2022;

var_dump($carro1);

$carro1->Acelerar();
$carro1->Parar();
$carro1->abrirPorta(); // Metodo especifico da classe 'Carro'
echo "<hr>";


//Instanciando a classse Moto
$moto1 = new Moto();
$moto1->modelo = "Suzuki";
$moto1->cor    = "Verde";
$moto1->ano    = 2019;
var_dump($moto1);

$moto1->Acelerar();
$moto1->Parar();
$moto1->colocarCapacete(); //// Metodo especifico da classe 'Moto'
echo "<hr>";








?>