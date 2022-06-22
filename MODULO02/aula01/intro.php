<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a = 10;//integer
$b ='dez'; //string

$a1 = new Aluno();//objeto Aluno
$a1 ->nome = 'eduardo';
$a1 ->cpf = '028.639.070-18';

$a1 ->nome = 'Eduardo';


$cursoPHP = new Curso();//objeto curso
$cursoPHP ->nome = 'introdução ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o basico e intermediario de php';


echo "<h1> Aluno: ($a1->nome)</h1>";