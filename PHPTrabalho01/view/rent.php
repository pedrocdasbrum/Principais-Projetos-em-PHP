<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css"/>
  </head>
  <body class="dtbody">
    <div class="dttitle">
      <h1>Cadastro</h1>
      <h2>Cadastre seus dados</h2>
    </div>
      <fieldset class="info">
        <form name="datavehicle"
              method="post"
              action="../controller/vehicle.controller.php">
            <label>Nome: <input type="text" name="tname" required autofocus> *</label>
            <p><label>CPF: <input type="number" name="tcpf"> *</label></p>
            <p><label>Idade: <input type="number" name="tage"> *</label></p>
            <p><label>Carro: <input type="text" name="tcar"> *</label></p>
            <p><label>Tipo do carro: <input type="text" name="ttypecar"> *</label></p>
            <p><label>Tipo do combustível: <input type="text" name="ttypefuel"> *</label></p>
            <p><label>Valor da locação: <input type="number" name="tvaluerent"> *</label></p>
            <p><label>Data da locação: <input type="date" name="tdaterent"> *</label></p>
            <p><input type="submit" class="btconfirm" value="Confirmar">
               <input type="reset" class="btclear" value="Limpar">
            </p>
        </form>
      </fieldset>
  </body>
</html>
