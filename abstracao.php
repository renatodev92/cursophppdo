<?php 
/* Abstrato é um tipo de substantivo que indica qualidade, sentimento, estado, ação e conceito.

Essas palavras abstratas não existem por si só, uma vez que dependem de outro ser para se manifestarem, por exemplo: alegria, beleza e felicidade.

A alegria de Ana Paula é contagiante.

Note que no exemplo acima, a "alegria" depende de alguém que esteja alegre para se manifestar e, por isso, é um substantivo abstrato. */

//A class banco é uma classe abstrata e ela serve como modelo para classes que estenderem.
 abstract class Banco {

    //PROTECTED - Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre com o public.
     protected $saldo;
     protected $limiteSaque;
     protected $juros;

     public function setSaldo($s) {
         $this->saldo = $s;

     }

     public function getSaldo() {
         return $this->saldo;
     }
     
     // Fazendo o methodo Sacar e Depositar como abastract para ser usado com outras classes.
     abstract protected function Sacar($saq);
     abstract protected function Depositar($dep); 

    }

 //Classe 'ITAU' vai herdar como herança a classe 'BANCO' caso ela não for uma classe abstract.
 class Itau extends Banco {

    public function Sacar($saq) {
        $this->saldo -= $saq; 
        // $saldo recebe o valor de $saldo - $saq o valor da variavel $saq que será passado como parametro na função.
        echo "<hr> Saque R$: $saq.";
    }
    public function Depositar($dep) {
        $this->saldo += $dep;// $saldo recebe o valor de $saldo + $dep o valor da variavel $dep que será passado como parametro na função.
        echo "<hr> Deposito R$: $dep.";
    }

 }

//Não é possivel instanciar uma classe abstratata. Veja que o código dará erro conforme abaixo.
//$banco = new Banco();
//Fatal error: Uncaught Error: Cannot instantiate abstract class Banco in

//Vejo que instanciando Itau da um erro. Pois a classe e os methodos da classe pai são abstratas.
//$itau = new Itau();

//Agora publicando as classes abstratas 'Sacar' e 'Depositar' do objeto 'Banco' dentro do objeto 'Itau' podemos instaciar a classe 'Itau'.

//Instaciando ITAU
$itau = new Itau();

//Setsaldo
$itau->setSaldo(1000);

//Getsaldo
echo "<hr> Saldo: R$ ". $itau->getSaldo() .".";

//Sacar
$itau->Sacar(250);

//Getsaldo
echo "<hr> Saldo: ".$itau->getSaldo().".";

//Depositar
$itau->Depositar(1000);
echo "<hr> Saldo: ".$itau->getSaldo().".";



?>