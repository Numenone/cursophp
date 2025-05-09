<?php

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

echo "<hr>";

use models\Produto as produtoModel;
$produto = new produtoModel();
$produto->mostrarDetalhes();