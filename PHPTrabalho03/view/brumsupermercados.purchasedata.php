<?php
	session_start();
?>
<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dados da Compra</title>
  </head>
  <body>
    <h1>Brum Supermercados</h1>
    <fieldset>
      <legend>Sua Compra</legend>
      <?php
      if(isset($_SESSION['msg']) &&
         isset($_SESSION['compra']))
         {
         include "../model/brumsupermercados.class.php";
         $super = new Supermarket();

         $super = unserialize($_SESSION['compra']);

         echo "</p>".$_SESSION['msg']
             ."</p>Dados: ".$super;
         }
       ?>
    </fieldset>
  </body>
</html>
