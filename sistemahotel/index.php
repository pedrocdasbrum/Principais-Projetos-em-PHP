<!DOCTYPE html/>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <title>Trabalho</title>
</head>
<body>
<div class="topo">
    <h1 class="jumbotron bg-info">Funções Básicas</h1>
</div>
<div class="bg-light">

    <h2 class="bg-light">Exemplos:</h2>

    <?php


    echo "<h1>Hotel Escola QI </h1>";

    echo"<br>";

    date_default_timezone_set('America/Sao_Paulo');

    echo date('d/m/Y H:i:s');

    echo"<br>";

    echo "<br><h2>Função Data e Hora:</h2>";

    echo "<p>".date('d/m/y')."</p>";
    echo "<p>".date('D/M/Y')."</p>";//Quarta-Feira 30 de setembro de 2020
    echo "<p>".date('l/m/Y')."</p>";
    echo "<p>".date('H:i:s')."</p>";


    ?>

    <h3>Sistema Hotel</h3>

    <a href="visao/hotel.cadastro.php"><button class="btn btn-success" type="submit">Faça sua reserva</button></a>


</div>

</body>
</html>