<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tele Entrega</title>
  </head>
  <body>
    <h1>Brum Supermercados</h1>
    <fieldset>
      <legend>Faça sua compra aqui!</legend>
      <form class="" action="../controller/brumsupermercados.controller.php" method="post">
        <fieldset>
          <legend>Preencha os seus dados</legend>
          <label>Nome: <input type="text" name="nome" required>*</label>
          <label>Telefone: <input type="number" name="telefone" required>*</label>
          <label>Endereço: <input type="text" name="endereço" required>*</label>
        </fieldset>
        <fieldset>
          <legend>Selecione os produtos</legend>
          <select class="" name="selprodutos" id="produtos">
            <option value="Pão">Pão - R$ 01,50</option>
            <option value="Peixe">Peixe - R$ 25,00</option>
            <option value="Picanha">Picanha - R$ 35,00</option>
            <option value="Refrigerante">Refrigerante - R$ 03,50</option>
            <option value="H2O">H2O - R$ 04,50</option>
          </select>
          <legend>Categoria</legend>
          <input type="radio" name="categoria" value="Padaria" checked="checked">Padaria
          <input type="radio" name="categoria" value="Açougue">Açougue
          <input type="radio" name="categoria" value="Peixaria">Peixaria
          <input type="radio" name="categoria" value="Bebidas">Bebidas
          <input type="radio" name="categoria" value="Outros">Outros
          <label>Quantidade: <input type="number" name="quantidade" required>*</label>
        </fieldset>
        <fieldset>
          <legend>Forma de pagamento</legend>
          <input type="radio" name="formapagamento" value="Visa" checked="checked">Visa
          <input type="radio" name="formapagamento" value="Mastercard">Mastercard
          <input type="radio" name="formapagamento" value="Elo Refeição">Elo Refeição
          <input type="radio" name="formapagamento" value="Outros">Outros
        </fieldset>
        <fieldset>
          <legend>Deseja tele entrega?</legend>
          <input type="radio" name="teleentrega" value="Sim" checked="checked">Sim
          <input type="radio" name="teleentrega" value="Não">Não
        </fieldset>
        <fieldset>
          <legend>Confimar</legend>
          <input type="submit" name="btnConfirmar" value="Confimar compra">
          <input type="reset" name="btnLimpar" value="Limpar dados">
        </fieldset>
      </form>
    </fieldset>
  </body>
</html>
