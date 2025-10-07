<?php
class Posts extends Controller{
    public function __construc(){
        if(!Sessao::estaLogado()):
            URL::redirecionar('usuarios/login');
    }

}