<?php
require_once './controllers/verifica-logado.php';
require_once 'models/consulta-usuario.php';
//require './models/User.class.php';


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Perfil </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/tema-site.css" />
  <link href="../css/mensagem.css" rel="stylesheet">
</head>

<body>


  <!-- barra de navegacao -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/home">HOME</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="#Sobre">Sobre</a></li>
          <li><a href="#receitas">SuasReceitas</a></li>
          <li><a href="#contatos">Contatos</a></li>
          <li><a href="/favoritas">Receitas Favoritas</a></li>
          <li><a href="/logout">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- container fluido 100% -->

  <div class="container-fluid bg1 text-center" id="sobre">

    <div>
      <?php include_once 'escreve-mensagem.php'; ?>
    </div>



    <h3>Meu perfil </h3>
    <h4> <?php echo "nome: $nome" ?> </h4>
    <h4> <?php echo "idade: $idade" ?> </h4>
    <h4> <i class="bi bi-phone"></i> <?php echo "telefone: $celular" ?> </i></h4>
    <h4> <i class="bi bi-envelope"></i> <?php echo "Email: $email" ?> </h4>
    <h4><?php echo "Endereço: $endereco" ?> </h4>

    <a class="btn btn-primary" href="/config" class="btn btn-light btn-lg bt">
      Atualizar Perfil
      <i class="bi bi-pencil"></i>
    </a>




  </div>


  <!-- container fluido 100% -->
  <div class="container-fluid bg2 text-center" id="receitas">
    <h3> <i class="bi bi-easel"></i> Suas Receitas</h3>
    <?php
    include_once 'models/consulta-receitas.php';
    unset($_SESSION['msg']);
    unset($_SESSION['status']);
    ?>
    <br>
    <br>
    <a class="btn btn-primary" href="/cadastrar-receitas" class="btn btn-light btn-lg bt">
      <i class="bi bi-arrow-up-circle"></i> Cadastrar Receitas
    </a>

  </div>

  <!-- container fluido 100% -->
  <div class="container-fluid bg3 text-center" id="contatos">
    <h3>Contatos</h3>
    <div class="row" id="contat">
      <div class="col-sm-4">
        <p> <i class="bi bi-geo-alt"></i> <?php echo "Endereco: $endereco" ?> </p>
        <img src="../images/img1.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-4">
        <p> <i class="bi bi-envelope"></i> <?php echo "Email: $email" ?> </a> </p>
        <img src="../images/img2.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-4">
        <p> <i class="bi bi-phone"></i> <?php echo "Telefone: $celular" ?> </p>
        <img src="../images/img3.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
      </div>
    </div>
    <br>

  </div>

  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>