<?php

spl_autoload_register(function ($classe){
    $arquivo = "models/$classe.php"; //Relativo
    #$arquivo = __DIR__ . "/../models/$classe.php"; //Absoluto
        
    if(file_exists($arquivo)){
        include_once $arquivo;
    }else{
        echo 'arquivo não existe';
    }
});