<?php
include '../app/configuracao.php';
include '../app/autoload.php';

$db = new Database;
/*
$db->query('SELECT * FROM posts');
foreach($db->resultados() as $post){
    echo $post->titulo.'<br>';
}

$db->query('SELECT * FROM posts ORDER BY id DESC');
$db->resultado();
echo $db->resultado()->titulo;

//apaga a informação do banco
$id = 2;
$db->query('DELETE FROM posts WHERE id = :id');
$db->bind(":id", $id);
$db->executa();
echo '<hr> Total resultados: '.$db->totalResultados();

//atualiza a informação no banco
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usuarioId = 100;
$titulo  = 'Titulo Editado';
$texto = 'Texto Editado';
$criadoEm = date('Y-m-d H:i:s');

$db->query('UPDATE posts SET usuario_id = :usuario_id, titulo= :titulo, texto = :texto, criado_em = :criadoEm WHERE id = :id');
$db->bind(":id", $id);
$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);
$db->bind(":criadoEm", $criadoEm);
$db->executa();
echo '<h1> Total Resultados: '.$db->totalResultados();
//inseri no banco
$usuarioId = 11;
$titulo = "A volta de quem não foi";
$texto = "A volta de quem não foi é um classico da literatura";

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->executa();
echo '<hr>Total de Resultados: '.$db->totalResultados();
echo '<hr>Último Id: '.$db->ultimoIdInserido();
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= APP_NOME ?> </title>
    <link rel="stylesheet" href="<?=URL?>/public/css/estilo.css">
    <link rel="stylesheet" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
    <script src="<?URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/jquery.funcoes.js"></script>
</head>
<body>
   
    <?php
        include '../app/views/header.php';
        $rotas = new Rota();
        include '../app/views/footer.php';
       // $rotas -> url();
    ?>
    
</body>
</html>