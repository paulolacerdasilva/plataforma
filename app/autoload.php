<?php
//autoload.php
spl_autoload_register(function($classe){
    $diretorios = [
        'Libraries',
        'Helpers'
    ];
    //percorre os diretório em busca das classes
    foreach($diretorios as $diretorio):
        //constante __DIR__ retorna o diretório do arquivo
        $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php');
        if(file_exists($arquivo)):
            require_once $arquivo;
        endif;
    endforeach;
});
?>