<?php

class Usuario{
    use Magica;

    private $nome;
    private $email;
    private $cpf;
    private $endereco;

    public function __construct(){
        echo 'iniciei usuario' . PHP_EOL;
    }

    public function __tostring(){
        return $this->nome;
    }

   
}