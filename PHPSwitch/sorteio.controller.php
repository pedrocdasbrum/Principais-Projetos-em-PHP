<?php
  include "sorteio.class.php";

  $s = new Sorteio;

  $s->setN(5);

  echo "<br>Número sorteado: ".$s->getN().'.';
  $s->sorteado();
 ?>
