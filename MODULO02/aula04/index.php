<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';



$c1 = new Cliente('eduardoeko7@gmail.com', '92392105'); //construtor do usuario
$c1-> setNome('EDUARDO');
$c1-> setDataCadastro('01/01/2019');


$g1 = new Gestor('marcos@gmail.com', '123456',6000);//construtor do gestor
$g1->setNome('Marcos');

$gg1 = new GestorGeral('rodolfo@gmail.com','351039' , 9000);

//$us = new Usuario('novousuario@gmail.com', '102899');
var_dump($c1);
var_dump($g1);
var_dump($gg1);