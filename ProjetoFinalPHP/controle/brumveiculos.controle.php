<?php
  session_start();

  include "../modelo/brumveiculos.class.php";
  include "../dao/brumveiculosdao.class.php";
  include "../util/brumveiculos.validacao.php";

  switch ($_GET['op'])
  {
    case 'confirmar':
      $bv = new BrumVeiculos();

      $bv->name = $_POST['nome'];
      $bv->age = $_POST['idade'];
      $bv->cpf = $_POST['cpf'];
      $bv->telephone = $_POST['telefone'];
      $bv->address = $_POST['endereco'];
      $bv->car = $_POST['carro'];

      $bvDAO = new BrumVeiculosDAO();

      $bvDAO->confirm($bv);

      $_SESSION['confirma'] = serialize($bv);

      header("location:../visao/brumveiculos.resposta.php");
      break;
  }
 ?>
