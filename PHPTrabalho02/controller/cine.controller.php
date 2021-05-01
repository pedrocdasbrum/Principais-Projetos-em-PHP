<?php
  include "../model/cine.class.php";

  $cine = new Cine;

  $cine->movie = $_POST['filme'];
  $cine->sessionTime = $_POST['sessao'];
  $cine->armchairNumber = $_POST['poltrona'];
  $cine->row = $_POST['fileira'];
  $cine->numberOfTickets = $_POST['totaldeingressos'];

  $cine->__destruct();

  header("location:../view/cine.data.php?filme=$cine->movie&sessao={$cine->chooseSession()}&poltrona=$cine->armchairNumber&fileira=$cine->row&totaldeingressos=$cine->numberOfTickets&totalapagar={$cine->chooseMovie()}");
 ?>
