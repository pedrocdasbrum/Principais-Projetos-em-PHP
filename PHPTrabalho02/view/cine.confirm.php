<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bilheteria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <section class="mx-auto" style="width: 30%; margin-top: 5%">
      <legend class="text-white bg-dark">Faça sua Reserva</legend>
      <form class="form-text" action="../controller/cine.controller.php" method="post">
        <label>Filme</label><input class="form-control" type="text" name="filme"  required>
        <label>Sessão</label><input class="form-control" type="text" name="sessao" required>
        <label>Poltrona</label><input class="form-control" type="number" name="poltrona"  required>
        <label>Fileira</label><input class="form-control"  type="text" name="fileira"  required>
        <label>Quantidade de ingressos</label><input class="form-control" type="number" name="totaldeingressos"  required>
        <input type="submit" class="btn btn-success" name="confirmar" value="Confirmar" style="margin-top: 10px;">
        <input type="reset" class="btn btn-warning" name="limpar" value="Limpar" style="margin-top: 10px;">
      </form>
    </section>
  </body>
</html>
