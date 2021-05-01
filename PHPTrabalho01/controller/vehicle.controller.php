<?php
  include "../model/vehicle.class.php";

  $v = new Vehicle;

  $v->setName($_POST['tname']);
  $v->setCpf($_POST['tcpf']);
  $v->setAge($_POST['tage']);
  $v->setCar($_POST['tcar']);
  $v->setTypeCar($_POST['ttypecar']);
  $v->setTypeFuel($_POST['ttypefuel']);
  $v->setValueRent($_POST['tvaluerent']);
  $v->setDateRent($_POST['tdaterent']);

  echo "<p> - Dados do Locatário do Veículo:</p>"
      ."<p>Nome: {$v->getName()}".';'."</p>"
      ."<p>CPF: {$v->getCpf()}".';'."</p>"
      ."<p>Idade: {$v->getAge()} anos".';'."</p>"
      ."<p>Carro: {$v->getCar()}".';'."</p>"
      ."<p>Tipo do carro: {$v->getTypeCar()}".';'."</p>".$v->chooseVehicle()
      ."<p>Tipo do combustível: {$v->getTypeFuel()}".';'."</p>"
      ."<p>Valor da locação: R$ {$v->valueRent()}".';'."</p>"
      ."<p>Data da locação: {$v->getDateRent()}".'.'."</p>";
 ?>
