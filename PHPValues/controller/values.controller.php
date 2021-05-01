<?php
  include "../model/values.class.php";

  $v = new Values();

  $v->setValue($_POST['tvalue']);

  echo "Valor em Reais: R$ {$v->getValue()}".'.'
      ."<br>Em Dólares Americanos: US$ {$v->dolar()}".'.'
      ."<br>Em Euros: € {$v->euro()}".'.'
      ."<br>Estado do valor: {$v->state()}".'.';
 ?>
