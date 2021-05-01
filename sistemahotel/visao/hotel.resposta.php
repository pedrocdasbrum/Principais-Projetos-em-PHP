<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Resposta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
</head>
<body>

<h1 class="text-primary">Reserva Concluída</h1>

<br>
<h3 class="bg-info">Dados para Conferência....</h3>

<section class="mx-auto" style="width: 50%; margin-top: 5%">
    <?php
    echo "<h2>";
    echo "<br>Nome do Cliente: ".$_GET['nome'];
    echo "<br>RG: ".$_GET['rg'];
    echo "<br>Email: ".$_GET['email'];
    echo "<br>Telefone: ".$_GET['telefone'];
    echo "<br>Quantidade de Dias: ".$_GET['qntDias'];
    echo "<br> Acomodação Escolhida: ".$_GET['totalapagar'];
    echo "</h2>";
    ?>
    </section>
</body>
</html>
