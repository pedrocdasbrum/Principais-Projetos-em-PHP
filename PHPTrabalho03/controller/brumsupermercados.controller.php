<?php
  session_start();

  include "../model/brumsupermercados.class.php";

  if(isset($_POST['nome']) &&
     isset($_POST['telefone']) &&
     isset($_POST['endereço']) &&
     isset($_POST['selprodutos']) &&
     isset($_POST['quantidade']) &&
     isset($_POST['categoria']) &&
     isset($_POST['formapagamento']) &&
     isset($_POST['teleentrega']))
     {
       $super = new Supermarket;

       $super->name = $_POST['nome'];
       $super->telephone = $_POST['telefone'];
       $super->address = $_POST['endereço'];
       $super->product = $_POST['selprodutos'];
       $super->amount = $_POST['quantidade'];
       $super->category = $_POST['categoria'];
       $super->paymentform = $_POST['formapagamento'];
       $super->delivery = $_POST['teleentrega'];

       $_SESSION['msg'] = "Compra bem sucedida!";

       $_SESSION['compra']  = serialize($super);

       header("location:../view/brumsupermercados.purchasedata.php");
       //echo $super;
     }
     else
     {
       echo "Erro!";
     }
 ?>
