<?php
require_once './controllers/verifica-logado.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastrar Receitas </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/tema-site.css" />
  <link rel="stylesheet" href="../css/form-validation.css" />

</head>

<body>

  <!-- barra de navegacao -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">  <?php echo "$nome_usuario" ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="/perfil">Voltar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container fluido 100% -->
  <div class="container-fluid bg1 text-center cadcurso" id="sobre">

    <h3>Cadastro de Receita</h3>
  
      <b>
    <form action="/cadastrar-receitas" method="POST" class="needs-validation container" novalidate>

      <div class="row g-12">
        <div class="col-sm-12">
          <label for="nomeReceita" class="form-label">Nome da receita</label>
          <input type="text" class="form-control" id="nomeReceita" name="nomeReceita" placeholder="" value="" autofocus required>
          <div class="invalid-feedback">
            Digite o nome da receita
          </div>
        </div>

        <div class="col-sm-12">
          <label for="nomeReceita" class="form-label">Autor da receita</label>
          <input type="text" class="form-control" id="nomeUser" name="nomeUser" placeholder="" value="" autofocus required>
          <div class="invalid-feedback">
            Digite o autor da receita
          </div>
        </div>

        <div class="col-sm-12">
          <label for="categoriaReceita" name = "categoriaReceita" class="form-label">Categoria</label>
          <select class="form-select" aria-label="Default select example" name = "categoriaReceita">
            <option selected>Selecione a categoria</option>
            <option value="carnes">Carnes</option>
            <option value="bebidas">Bebidas</option>
            <option value="bolos">Bolos e tortas</option>
            <option value="doces">Doces e sobremesas</option>
            <option value="aves">Aves</option>
          </select>
          <div class="invalid-feedback">
            Informe a categoria.
          </div>
        </div>

        <div class="col-sm-12">
          <label for="tempoPreparo" class="form-label">Tempo de preparo</label>
          <input type="number" class="form-control" id="tempoPreparo" name="tempoPreparo" min="1" step="1" placeholder="Tempo em minutos" required>
          <div class="invalid-feedback">
            Informe o tempo da receita
          </div>
        </div>

        <div class="col-sm-12">
          <label for="porcaoReceita" class="form-label">Porções</label>
          <input type="number" class="form-control" id="porcaoReceita" name="porcaoReceita" min="1" step="1" placeholder="Porções" required>
          <div class="invalid-feedback">
            Informe quantas porções a receita rende.
          </div>
        </div>


        <div class="col-md-12">
          <label for="ingredienteReceita" class="form-label">Ingredientes</label>
         <!-- <input type="text" class="form-control text-control" id="ingredienteReceita" name="ingredienteReceita" required> -->
          <textarea name="ingredienteReceita" id="ingredienteReceita" cols="40" rows="5" class="form-control text-control" required></textarea>
          <div class="invalid-feedback">
            Digite os ingredientes
          </div>

          <div class="col-md-12">
          <label for="preparo" class="form-label">Modo de Preparo</label>
         <!-- <input type="text" class="form-control text-control" id="ingredienteReceita" name="ingredienteReceita" required> -->
          <textarea name="preparo" id="preparo" cols="40" rows="5" class="form-control text-control" required></textarea>
          <div class="invalid-feedback">
            Digite o modo de preparo
          </div>

    <!--      <div class="col-md-12">
          <label for="imagem" class="form-label">Imagem</label>
         
         <input type="file" class="form-control" id="imagem" name="imagem" min="1" step="1" required>  Não implementado completamente
          <div class="invalid-feedback">
            Faça o upload de uma imagem da receita
          </div>
-->
          <br>
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
            Enviar receita
          </button>

    </form>
  </div>

  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/form-validation.js"></script>

</body>

</html>