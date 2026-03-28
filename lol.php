<pre>
<?php
include 'util/autoload.php';

$produto = new Produto();
$produto->id = 2;

$usuario = new Usuario();
$usuario->nome = "Marcio";

$venda =  new Venda();

echo $usuario;

