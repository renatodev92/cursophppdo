<?php 

//Interfaces são modelos a ser usado por outras classes.
//Definindo uma interface ao invés de classe deve ser inscrito interface.
//Uma classe que implementa uma interface em PHP deve, obrigatoriamente utilizar todos os métodos e propriedades da interface. Uma classe Abstrata, diferente de uma Interface, pode fornecer funcionalidades básicas sem a necessidade de que, quem a estende, deva seguir a risca todos os métodos nela definidos.

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}


//Agora a classe noticia é obrigada ter os 4 metodos da interface Crud.
//Nesse caso a lógica para implementar os metodos fica por conta de quem implementou a interface. A classe 'NOTICIAS'.

class Noticias implements Crud{

    public function create(){
       //Lógica para criar uma noticía;
    }

    public function read(){
      //Lógica para ler uma notícia; 
    }

    public function update(){
        //Lógica para atualizar uma notícia;
    }
    public function delete(){
        //Lógica para deletar uma notícia;    
    }


}


?>