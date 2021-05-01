<?php
  class Values
  {
    private $value;

    function __construct()
    {}

    function getValue()
    {
      return $this->value;
    }

    function setValue($value)
    {
      return $this->value = $value;
    }

    function dolar()
    {
      return $this->value / 5.58;
    }

    function euro()
    {
      return $this->value / 6.50;
    }

    function state()
    {
      if ($this->value = 0)
      {
        return "Valor Nulo";
      }
      elseif ($this->value < 0)
      {
        return "Valor Negativo";
      }
      else
      {
        return "Valor Positivo";
      }
    }
  }
 ?>
