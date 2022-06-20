<?php
session_start();

if(!($_SESSION['email'] == 'administracao@hotmail.com') && !($_SESSION['senha'] == 'adm123')){

  header('Location: ../../controllers/enderecamento.controller.php?pagina=home');
 
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Avaliação da Receita </title>

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
        <a class="navbar-brand" href="#">Avaliação da Receita</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="/pagina-adm">Voltar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container fluido 100% -->
  <div class="container-fluid bg1 text-center cadcurso" id="sobre">

    <h3>Receitas postadas</h3>

    <?php include_once './views/escreve-mensagem.php';
              unset($_SESSION['msg']); 
              unset($_SESSION['status']); 
            ?>

  </div>

    <?php 
      include 'models/admConsulta.php';
    ?>

  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/form-validation.js"></script>

</body>

</html>