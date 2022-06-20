<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title> Login </title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/tema-site.css" />
  <link rel="stylesheet" href="../css/form-validation.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


  <link rel="stylesheet" href="../controllers/validacao-cadastro.controller.php">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




</head>

<body>
  <div class="container-fluid text-center" id="sobre">
    <div class="goback">
      <a href="/">
        <span class="material-icons ">
          arrow_circle_left
        </span>
        <p>voltar</p>
      </a>
    </div>
    <a href="/"><img src="../img/Logo.png"></img></a>
    <main class="form-signin">
      <div>
        <?php include_once 'escreve-mensagem.php'; ?>
      </div>
      <form action="/login" method="POST">
        <h1 class="bemvindo mb-3 fw-normal">Bem-vindo(a)</h1>

        <div class="col-12">
          <label for="email" class="form-label">E-mail</label>
          <div class="input-group has-validation">
            <input type="email" class="inputs" id="email" name="email" placeholder="email@provedor.com" required>
            <div class="invalid-feedback">
              Digite o seu e-mail.
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <label for="nome" class="form-label">Senha</label>
          <input type="password" class="inputs" id="senha" name="senha" min='5' placeholder="Senha" value="" min="6" required="">
          <div class="invalid-feedback">
            Digite uma senha
          </div>
        </div>
        <button class="bt_logar" type="submit" name="bt_logar">Entrar</button>
        <br>
        <p>Não tem conta?? <a href='/cadastrar'>Registre-se!! </a></p>
      </form>
    </main>

    <p class="footer">Receitas Caseiras © 2022</p>
  </div>


  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/form-validation.js"></script>
</body>

</html>