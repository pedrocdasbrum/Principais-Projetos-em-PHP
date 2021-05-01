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
<section class="mx-auto" style="width: 50%; margin-top: 5%">
<legend>Faça sua reserva: </legend>
<form class="form-text" action="../controle/hotel.controle.php" method="post">

    <label>Nome do Cliente:</label><input class="form-control" type="text" name="txtnome"  required>
    <label>RG:</label><input class="form-control" type="text" name="txtrg"  required>
    <label>Email:</label><input class="form-control" type="text" name="txtemail"  required>
    <label>Telefone:</label><input class="form-control"  type="text" name="telefone"  required>
    <label>Quantidade de Dias:</label><input class="form-control" type="number" name="txtdias"  required>

<br>
    <label><span>Selecione sua acomodação</span>
        <br>
        <select class="custom-select" name="txtquarto">
            <option value="master">Suíte Master – R$ 150,00 a diária</option>
            <option value="familia">Suíte Família – R$ 180,00 a diária</option>
            <option value="single">Suíte Single – R$ 100,00 a diária'</option>
        </select><br>
    </label>

<br>
<br>
    <input class="btn btn-success" type="submit" name="btnEnviar" value="Finalizar Reserva">
    <input class="btn btn-warning" type="reset" name="btnLimpar" value="Limpar dados">
</form>


</section>

</body>

</html>
