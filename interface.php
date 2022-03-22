<?php 

//Interfaces são modelos a ser usado por outras classes.
//Definindo uma interface ao invés de classe deve ser inscrito interface.
interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();

}



//Agora a classe noticia é obrigada ter os 4 metodos da interface Crud.
//Nesse caso a lógica para implementar os metodos fica por conta de quem implementou a interface. A classe 'NOTICIAS'.

class Noticias implements Crud {
    public function creat() {
        //Lógica para criar uma notícia.
    }

    public function read() {
        //Lógica para ler uma notícia.
    }

    public function update() {
        //Lógica para atualizar uma notícia.
    }

    public function delete() {
        //Lógica para deletar uma notícia.
    }
}


?>