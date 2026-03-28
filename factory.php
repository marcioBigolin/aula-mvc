<?php

require_once 'ControladorUsuario.php';

$acao = $_GET['acao'] ?? 'criar';

$controlador = new ControladorUsuario();
// if($acao == 'criar'){
//     $controlador->criar();
// }else if($acao === 'deletar'){
//     $controlador->deletar();
// }

$controlador->{$acao}();
