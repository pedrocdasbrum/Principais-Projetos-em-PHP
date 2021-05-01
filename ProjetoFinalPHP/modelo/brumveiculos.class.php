<?php
  class BrumVeiculos
  {
    private $name;
    private $age;
    private $cpf;
    private $telephone;
    private $address;
    private $car;

    function __construct()
    {}

    function __destruct()
    {}

    function __get($atribute)
    {
      return $this->$atribute;
    }

    function __set($atribute, $value)
    {
      return $this->$atribute = $value;
    }

    function purchaseDate()
    {
      date_default_timezone_set('America/Sao_Paulo');
      return date("d-M-Y");
    }

    function purchaseTime()
    {
      return date("H-i-s");
    }

    function chooseCar()
    {
      switch ($this->car)
      {
        case 'Fiat Argo':
          return "Fiat Argo - R$ 53.990,00";
          break;
        case 'Ford Ka':
          return "Ford Ka - R$ 45.490,00";
          break;
        case 'Renault Sandero':
          return "Renault Sandero - R$ 55.990,00";
          break;
        default:
          return "Você não selecionou nenhum automóvel!";
          break;
      }
    }

    function promotionalCode()
    {
      $numeros = range(1,100);
		  $letras = range("A","Z");

		  shuffle($numeros);
		  shuffle($letras);

		  return $letras[0]."".$numeros[0].$letras[1]."".$numeros[1].$letras[2]."".$numeros[2];
    }

    function __toString()
    {
      return nl2br("Nome: $this->name
                    Idade: $this->age
                    CPF: $this->cpf
                    Telefone: $this->telephone
                    Endereço: $this->address
                    Preço total da compra do carro: {$this->chooseCar()}
                    Data da compra: {$this->purchaseDate()}
                    Horário da compra: {$this->purchaseTime()}
                    Código promocional: {$this->promotionalCode()}");
    }
  }
 ?>
