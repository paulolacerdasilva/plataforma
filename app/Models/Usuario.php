<?php
class Usuario{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }//Fim do método construtor
    public function armazenar($dados){
        $this->db->query("INSERT INTO usuarios(nome, email, senha) VALUES (:nome, :email, :senha)");
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("senha", $dados['senha']);
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }// fim da função armazena
    public function checarEmail($email){
        $this->db->query("SELECT email FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);
        if($this->db->resultado):
            return true;
        else:
            return false;
        endif;
    }//fim funcão checaEmail
}// fim da classe Usuario