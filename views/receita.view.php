<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="joao & lucas">
    <title>Receitas caseiras</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/textos-home.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link href="/css/ops.css" rel="stylesheet">




</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <img class="navbar-brand" href="#" src="/img/Logo.png" width="200" height="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categorias/bolos">Bolos e tortas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categorias/carnes">Carnes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/categorias/aves">Aves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/categorias/bebidas">Bebidas</a>
                        </li>

                    </ul>

                   
                </div>
            </div>
        </nav>
    </header>
    <body>

    <div class="container marketing">
        <hr class="featurette-divider">
        <br>
    <?php
       require './models/lista-receitas.php';

    ?>

</body>
