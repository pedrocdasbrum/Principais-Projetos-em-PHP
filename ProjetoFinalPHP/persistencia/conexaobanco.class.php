<?php
  class Conection extends PDO
  {
    private static $instance = null;

    function Conection($dsn, $user, $password)
    {
      parent :: __construct($dsn, $user, $password);
    }

    static function getInstance()
    {
      if (!isset(self :: $instance))
      {
        try
        {
          self :: $instance = new Conection("mysql:dbname=brumveiculos;host=localhost", "root", "");
        }
        catch (Exception $e)
        {
          echo "Erro ao tentar conectar com o BD!";
          exit();
        }
      }
      return self :: $instance;
    }
  }
 ?>
