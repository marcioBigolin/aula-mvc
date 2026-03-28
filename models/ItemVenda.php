<?php

class ItemVenda{
    public function __construct(
            Usuario $usuario, 
            Produto $produto){
        echo 'Iniciei item venda' . PHP_EOL;
    }
}