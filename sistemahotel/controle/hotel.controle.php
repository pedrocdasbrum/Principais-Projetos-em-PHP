<?php

include "../modelo/hotel.class.php";

$hotel = new Hotel; // construtor

$hotel->nome = $_POST['txtnome'];
$hotel->email = $_POST['txtemail'];
$hotel->telefone = $_POST['telefone'];
$hotel->rg = $_POST['txtrg'];
$hotel->quarto = $_POST['txtquarto'];
$hotel->qntDias = $_POST['txtdias'];



header("location:../visao/hotel.resposta.php?nome=$hotel->nome&email=$hotel->email&telefone=$hotel->telefone&rg=$hotel->rg&qntDias=$hotel->qntDias&totalapagar={$hotel->escolherQuarto()}");

$hotel->__destruct();