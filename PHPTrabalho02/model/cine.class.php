<?php
  class Cine
  {
    private $valueTicket;
    private $sessionTime;
    private $movie;
    private $armchairNumber;
    private $row;
    private $numberOfTickets;

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

    function chooseMovie()
    {
      $stringDefault = "<p></p>Valor total a pagar: ";
        switch ($this->movie)
        {
            case 'Mulan':
                return "R$ 30,00".$stringDefault.''.$this->moneyFormatter(($this->valueTicket = ($this->numberOfTickets * 30)));
                break;
            case '007 - Sem Tempo para Morrer':
                return "R$ 25,00".$stringDefault.''.$this->moneyFormatter(($this->valueTicket = ($this->numberOfTickets * 25)));
                break;
            case 'A Jornada':
                return "R$ 20,00".$stringDefault.''.$this->moneyFormatter(($this->valueTicket = ($this->numberOfTickets * 20)));
                break;
            default:
                return "Filme não selecionado, escolha um!";
                break;
        }
    }

    function chooseSession()
    {
      switch ($this->sessionTime) {
        case 'Noite':
          return "Das 21:00, noite";
          break;
        case 'Tarde':
          return "Das 15:30, tarde";
          break;
        case 'Noite':
          return "Das 19:00, noite";
          break;
        default:
          return "Filme não selecionado, escolha um!";
          break;
      }
    }
  }
 ?>
