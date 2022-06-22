<?php

include "Validar.php";
include "ValidarBR.php";
include "ValidarUS.php";

$cpf = "10203040323";
$docX = "35513481115224";

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);


echo "Funcionou";
