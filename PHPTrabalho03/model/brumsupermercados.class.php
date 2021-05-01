<?php
  class Supermarket
  {
    private $name;
    private $telephone;
    private $address;
    private $product;
    private $value;
    private $amount;
    private $category;
    private $paymentform;
    private $delivery;

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

    function moneyFormatter($number)
    {
        $floatValue = $this->floatFormatter($number);
        $moneyValue = number_format($floatValue, 2, ",", ".");
        return $this->addAddons($moneyValue);
    }

    function floatFormatter($numberToFloat)
    {
        return floatval((float)$numberToFloat);
    }

    function addAddons($string)
    {
        return "R$ ".$string;
    }

    function productValue()
    {
      if ($this->product == "Pão")
      {
        return "R$ 01,50";
      }
      elseif ($this->product == "Peixe")
      {
        return "R$ 25.00";
      }
      elseif ($this->product == "Picanha")
      {
        return "R$ 35.00";
      }
      elseif ($this->product == "Refrigerante")
      {
        return "R$ 03.50";
      }
      elseif ($this->product == "H2O")
      {
        return "R$ 04.50";
      }
      else
      {
        return "Produto não selecionado!";
      }
    }

    function productPrice()
    {
      if ($this->product == "Pão")
      {
        return $this->amount * 01.50;
      }
      elseif ($this->product == "Peixe")
      {
        return $this->amount * 25.00;
      }
      elseif ($this->product == "Picanha")
      {
        return $this->amount * 35.00;
      }
      elseif ($this->product == "Refrigerante")
      {
        return $this->amount * 03.50;
      }
      elseif ($this->product == "H2O")
      {
        return $this->amount * 04.50;
      }
      else
      {
        return "Produto não selecionado!";
      }
    }

    function totalPrice()
    {
      if ($this->delivery = "Sim")
      {
        return $this->moneyFormatter($this->productPrice() + 05.00);
      }
      else
      {
        return $this->moneyFormatter($this->productPrice());
      }
    }

    function purchaseDate()
    {
      return date("d-M-Y");
    }

    function purchaseTime()
    {
      date_default_timezone_set('America/Sao_Paulo');
      return date("H-i-s");
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
      return "<p>Data da compra: ".$this->purchaseDate().";</p>"
            ."<p>Horário da compra: ".$this->purchaseTime().";</p>"
            ."<p>Nome: ".$this->name.";</p>"
            ."<p>Telefone: ".$this->telephone.";</p>"
            ."<p>Endereço: ".$this->address.";</p>"
            ."<p>Produto: ".$this->product.";</p>"
            ."<p>Preço: ".$this->productValue().";</p>"
            ."<p>Quantidade: ".$this->amount.";</p>"
            ."<p>Categoria: ".$this->category.";</p>"
            ."<p>Tele entrega: ".$this->delivery.";</p>"
            ."<p>Preço total a pagar: ".$this->totalPrice().";</p>"
            ."<p>Forma de pagamento: ".$this->paymentform.";</p>"
            ."<p>Código promocional: ".$this->promotionalCode().".</p>";
    }
  }
 ?>
