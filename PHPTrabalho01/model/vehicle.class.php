<?php
  class Vehicle
  {
    private $name;
    private $cpf;
    private $age;
    private $car;
    private $typeCar;
    private $typeFuel;
    private $valueRent;
    private $dateRent;

    function __construct()
    {}

    function getName()
    {
      return $this->name;
    }

    function setName($name)
    {
      return $this->name = $name;
    }

    function getCpf()
    {
      return $this->cpf;
    }

    function setCpf($cpf)
    {
      return $this->cpf = $cpf;
    }

    function getAge()
    {
      return $this->age;
    }

    function setAge($age)
    {
      return $this->age = $age;
    }

    function getCar()
    {
      return $this->car;
    }

    function setCar($car)
    {
      return $this->car = $car;
    }

    function getTypeCar()
    {
      return $this->typeCar;
    }

    function setTypeCar($typeCar)
    {
      return $this->typeCar = $typeCar;
    }

    function getTypeFuel()
    {
      return $this->typeFuel;
    }

    function setTypeFuel($typeFuel)
    {
      return $this->typeFuel = $typeFuel;
    }

    function getValueRent()
    {
      return $this->valueRent;
    }

    function setValueRent($valueRent)
    {
      return $this->valueRent = $valueRent;
    }

    function getDateRent()
    {
      return $this->dateRent;
    }

    function setDateRent($dateRent)
    {
      return $this->dateRent = $dateRent;
    }

    function chooseVehicle()
    {
      switch ($this->typeCar) {
        case 'Passeio':
          $msg = 'passeio';
          break;
        case 'Executivo':
          $msg = 'executivo';
          break;
        default:
          $msg = 'Você não selecionou um tipo de veículo!';
          break;
      }
      echo "Você escolheu o carro tipo ".$msg;
    }

    function valueRent()
    {
      if ($this->typeFuel == "GNV")
      {
        return $this->valueRent + 50;
      }
      else if ($this->typeFuel == "Gasolina")
      {
        return $this->valueRent + 100;
      }
      else
      {
        return "Você não escolheu o tipo do combustível!";
      }
    }
  }
 ?>
