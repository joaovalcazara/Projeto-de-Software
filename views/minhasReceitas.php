<?php
require_once '../controllers/verifica-logado.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Minhas Receitas </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/tema-curriculo.css" />

</head>

<body>

  <!-- barra de navegacao -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="paginaHome.php">HOME</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="cadastrar-receitas.php">Cadastrar Receitas</a></li>
          <li><a href="paginaHome.php">Voltar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container fluido 100% -->
  <div class="container-fluid bg2 text-center" id="div-formacoes">
    <h3> <i class="bi bi-easel"></i> Receitas </h3>
    <ul class="list-group lista" style="color:#222;">
      <li class="list-group-item">
        <a href=""><i class="bi bi-pencil-square"></i></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash"></i></a>
        Fazer um cadastro em uma lista
      </li>
      <li class="list-group-item">
        <a href=""><i class="bi bi-pencil-square"></i></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-trash"></i></a>
        Receita 2
      </li>
      <li class="list-group-item">
        <a href=""><i class="bi bi-pencil-square"></i></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="bi bi-trash"></i></a>
        Receita 3
      </li>
    </ul>

    <!-- modal OBS mudar o numero no id para ficar igual id no banco de dados -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Deseja apagar o registro ID ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Apagar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- fim modal -->

    <br>
    <a href="#" class="btn btn-light btn-lg bt">
      <i class="bi bi-arrow-up-circle"></i> Topo
    </a>

  </div>

  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>