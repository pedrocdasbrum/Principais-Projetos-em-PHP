<?php
  class Sorteio
  {
    private $n;

    public function Sorteio ()
    {}

    public function getN ()
    {
      return $this->n;
    }

    public function setN ($n)
    {
      return $this->n = $n;
    }

    public function sorteado ()
    {
      switch ($this->n) {
        case 1:
          $msg = ' Bicicleta!';
          break;
        case 2:
          $msg = ' R$20000 em barras de ouro!';
          break;
        case 3:
          $msg = ' Uma casa!';
          break;
        case 4:
          $msg = ' 1 ano de supermercado!';
          break;
        case 5:
          $msg = ' Um carro zero!';
          break;
        default:
          $msg = '<br>Número inválido :(';
          break;
      }
      echo "<br>Parabéns, você ganhou...".$msg;
    }
  }
 ?>
