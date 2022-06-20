<?php
require_once './controllers/verifica-logado.php';
require_once 'models/consulta-usuario.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Configurações </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="../css/tema-site.css" />

</head>

<body>

  <!-- barra de navegacao -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h3 class="navbar-brand" href="">Receitas Caseiras</h3>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="/perfil">Voltar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container fluido 100% -->
  <div class="container-fluid bg1 text-center" id="quem">
    <h3>Configurações</h3>
    <form action="/atualizar-usuario" method="POST" enctype="multipart/form-data" class="needs-validation container" novalidate>
      <div class="col-sm-12">
        <input type="text" class="inputs" id="nome" name="nome" placeholder="" value="<?php echo "$nome" ?>" required>
        <div class="invalid-feedback">
          Digite o seu nome completo.
        </div>
      </div>

      <div class="col-md-12">
        <input type="number" class="inputs" id="idade" name="idade" placeholder="" value="<?php echo "$idade" ?>" required>
        <div class="invalid-feedback">
          Informe a sua idade(Minima 10 anos).
        </div>
      </div>

      <div class="col-12">
        <input type="text" class="inputs" id="endereco" name="endereco" placeholder="" value="<?php echo "$endereco" ?>" required>
        <div class="invalid-feedback">
          Digite o seu endereço completo, logradouro, nome, número e bairro.
        </div>
      </div>

      <div class="col-md-12">
        <input type="text" class="inputs" id="celular" name="celular" placeholder="" value="<?php echo "$celular" ?>" onkeypress="$(this).mask('(00)00000-0000')" required>
        <div class="invalid-feedback">
          Digite o número do seu celular com DDD.
        </div>
      </div>

      <div class="col-12">
        <input type="email" class="inputs" id="email" name="email" placeholder="" value="<?php echo "$logado" ?>" required>
        <div class="invalid-feedback">
          Digite um e-mail valido.
        </div>
      </div>
      <br>

      <button class="btn btn-primary" type="submit" name="bt_atualizar">
        Atualizar Perfil
      </button>


    </form>
  </div>

  <!-- bootstrap.js -->
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>