<?php
    class Posts{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }//fim da função construct
        public function lerPosts(){
            $this->db->query("SELECT * posts.id as postId, posts.criado_em as postDataCadastro, usuarios.id as usuarioId, usuarios.criado_em as usuarioDataCadastro FROM posts INNER JOIN usuarios ON post.usuario_id = usuarios.id ORDER BY posts.id DESC");
            return $this->db->resultados();
        }//fim da função lerPost
        public function lerPostPorId($id){
            $this->db->query("SELECT * FROM posts WHERE id = :id");
            $this->db->bind('id', $id);
            return $this->db->resultado();
        }//fim da função lerPostPorId
        public function armazenar($dados){
            $this->db->query("SELECT INTO posts(usuario_id, titulo, texto) VALUES(:usuario_id, :titulo, :texto)");
            $this->db->bind('usuario_id', $dados['usuario_id']);
            $this->db->bind('titulo', $dados['titulo']);
            $this->db->bind('texto', $dados['texto']);
            if($this->db->execulta()):
                return true;
            else:
                return false;
            endif;
        }
    }//fim da classe posts

?>