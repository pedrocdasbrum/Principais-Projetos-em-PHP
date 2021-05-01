<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dados do Ingresso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <section class="mx-auto" style="width: 30%; margin-top: 5%">
      <legend class="text-white bg-dark">Sua Reserva</legend>
      <?php
      echo "<p>Filme: ".$_GET['filme']."</p>"
          ."<p>Sessão: ".$_GET['sessao']."</p>"
          ."<p>Poltrona: ".$_GET['poltrona']."</p>"
          ."<p>Fileira: ".$_GET['fileira']."</p>"
          ."<p>Quantidade de ingressos: ".$_GET['totaldeingressos']."</p>"
          ."<p>Valor do ingresso: ".$_GET['totalapagar']."</p>";
      ?>
    </section>
  </body>
</html>
