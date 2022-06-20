<?php
session_start();

if(!($_SESSION['email'] == 'administracao@hotmail.com') && !($_SESSION['senha'] == 'adm123')){

  header('Location: /');
 
}
$logado = $_SESSION['email'];
?>


<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="joao & lucas">
  <title>Receitas caseiras</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/carousel.css" rel="stylesheet">
  <link href="../css/mensagem.css" rel="stylesheet">
  <link href="../css/textos-home.css" rel="stylesheet">
  <link href="../css/navbar.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container-fluid">
        <img class="navbar-brand" href="#" src="../img/Logo.png" width="200" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lista-receitas">Lista de receitas</a>
            </li>
           
           
            
           <!-- <li class="nav-item">
              <a class="nav-link" href="">Remover usuário</a>
            </li> -->
      
            <!-- <li class="nav-item">
                            <a class="nav-link" href="views/categorias/bebidas.php">Doces e sobremesas</a>
                        </li> -->

          </ul>


          <div class="btn-group">
            <button type="button" class="btn btn-Primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo "$logado" ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Sair</a></li>
            </ul>
          </div>



          <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/bolo.jpg" alt="Foto do bolo">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Receitas de bolos</h1>
              <p>Venha conhecer as mais variadas receitas de bolo caseiro.</p>
             
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/carnes.jpg" alt="Foto de carne">

          <div class="container">
            <div class="carousel-caption">
              <h1>Receitas de carnes</h1>
              <p>Venha conhecer as mais variadas receitas de carnes caseiras</p>
           
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/drink.jpg" alt="Foto de drink">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Drinks</h1>
              <p>Venha conhecer as mais variadas receitas de drinks deliciosos</p>
           
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr class="featurette-divider">

    <div>
      <?php include_once './views/escreve-mensagem.php';
              unset($_SESSION['msg']); 
              unset($_SESSION['status']); 
            ?>
    </div>

    <div>
      <h1 class="texto-destaque" id="texto-destaque">Receitas Favoritas da semana
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
        </svg>
      </h1>

    </div>

    <div class="container marketing">

      <hr class="featurette-divider">


    
  
      <?php
      include 'models/receitas-populares.php';
      ?>

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Voltar ao topo</a></p>
      <p>&copy; 2022 Receitas caseira. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
  </main>


  <script src="../js/bootstrap.bundle.min.js"></script>


</body>

</html>