<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('bonés', 'boné aba reta');
$c2 = new Categoria('camisetas', 'camisetas manga longa');
$c3 = new Categoria('calças', 'calças jeans');


$p1 = new Produto('camiseta rosa', 39, $c2);
$p1->setDescricao('camiseta social');

$p2 = new Produto('calça jeans', 59, $c3);

$p3 = new Produto('boné', 89, $c1);

var_dump($p1);
var_dump($p2);
var_dump($p3);

