<?php

class Produto{
    use Magica;

    private $id;
    public function __construct(){
        echo 'Iniciei produto';
    }
}