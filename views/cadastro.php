<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastro </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/tema-site.css" />
  <link rel="stylesheet" href="../css/form-validation.css" />

  <link rel="stylesheet" href="../controllers/validacao-cadastro.controller.php">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

  <!-- container fluido 100% -->
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
    

    <main class="form-cadastro">
    <div >
        <?php include_once 'escreve-mensagem.php'; ?>
      </div>
      
      <br>
      <form action="/cadastrar" method="POST" enctype="multipart/form-data" class="needs-validation container" novalidate>

        <div class="row g-12">
          <h3>Informe seus dados</h3>
          <div class="col-sm-12">
            <label for="nome" class="cadlabel">Nome Completo</label>
            <input type="text" class="inputs" id="nome" name="nome" placeholder="Nome Completo" value="" required>
            <div class="invalid-feedback">
              Digite o seu nome completo.
            </div>
          </div>

          <div class="col-sm-12">
            <label for="nome" class="cadlabel">Senha</label>
            <input type="password" class="inputs" id="senha" name="senha"  placeholder="Senha" value="" required="">
            <div class="invalid-feedback">
              Digite uma senha
            </div>
          </div>

          <div class="col-md-12">
            <label for="idade" class="cadlabel">Idade</label>
            <input type="number" class="inputs" id="idade" name="idade" min="10" max="100" step="1" placeholder="10" required>
            <div class="invalid-feedback">
              Informe a sua idade(Minima 10 anos).
            </div>
          </div>

          <div class="col-12">
            <label for="endereco" class="cadlabel">Endereço completo</label>
            <input type="text" class="inputs" id="endereco" name="endereco" placeholder="Seu Endereço" required>
            <div class="invalid-feedback">
              Digite o seu endereço completo, logradouro, nome, número e bairro.
            </div>
          </div>

          <div class="col-md-12">
            <label for="celular" class="cadlabel">Celular</label>
            <input type="text" class="inputs" id="celular" name="celular" placeholder="(99) 99999-9999" onkeypress="$(this).mask('(00)00000-0000')" required>
            <div class="invalid-feedback">
              Digite o número do seu celular com DDD.
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="cadlabel">E-mail</label>
            <input type="email" class="inputs" id="email" name="email" placeholder="email@provedor.com" required>
            <div class="invalid-feedback">
              Digite um e-mail valido.
            </div>
          </div>


        </div>
        <br>
        <button class="bt_logar" type="submit" name="bt_cadastrar">
          Cadastrar
        </button>
        <br>
        <p>Já tem conta?? <a href='/login'>Entre! </a></p>
      </form>

    </main>
    <!-- bootstrap.js -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/form-validation.js"></script>
  </div>
</body>

</html>