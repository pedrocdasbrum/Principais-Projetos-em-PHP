<?php
  include "../persistencia/conexaobanco.class.php";

  class BrumVeiculosDAO
  {
    private $conection = null;

    function __construct()
    {
      $this->conection = Conection :: getInstance();
    }

    function confirm($bv)
    {
      try
      {
        $stat = $this->conection->prepare(
          "insert into brumveiculos(idcompra, nome, idade, cpf, telefone, endereco, carro)
                        values(null, ?, ?, ?, ?, ?, ?)"
          );
          $stat->bindValue(1, $bv->name);
          $stat->bindValue(2, $bv->age);
          $stat->bindValue(3, $bv->cpf);
          $stat->bindValue(4, $bv->telephone);
          $stat->bindValue(5, $bv->address);
          $stat->bindValue(6, $bv->car);

          $stat->execute();

          $this->conection = null;
      }
      catch (PDOException $bv)
      {
        echo "Erro ao tentar confirmar a compra!";
      }
    }
  }
 ?>
