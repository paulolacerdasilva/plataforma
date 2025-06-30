<?php
class Paginas extends Controller{
    public function index(){
        $dados = ['titulo'=>'Página Inicial', 'descricao'=>'Aula de PHP com MVC Orientada a Objetos.'
        ];

        $this->view('paginas/home', $dados);
    }//fim da funcao index

    public function sobre($id){
        echo $id. '<hr>';
    }//fim do método sobre
}//fim da classe Paginas