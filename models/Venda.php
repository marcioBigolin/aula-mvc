<?php

class Venda{
    private $itens = [];
    public function __construct(){
        $this->itens[] = new ItemVenda(
                                new Usuario(), 
                                new Produto()
                            );
    }
}