<?php
require_once 'models/verifica-favorita.php';
require_once 'controllers/verficia-logado-categorias.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="joao & lucas">
    <title>Receitas caseiras</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/textos-home.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/ops.css" rel="stylesheet">




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
                        <?php
                        if ($_SESSION['LOG'] == 'NAO') {
                            echo ('<li class="nav-item">
                            
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>');
                        } else {
                            echo ('<li class="nav-item">
                            
                            <a class="nav-link" aria-current="page" href="/home">Home</a>
                        </li>');
                        }



                        ?>

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

    <br />
    <br />
    <br />
    <br />
    <br />




    <div class="container-fluid bg1 text-center" id="sobre">
        <hr class='featurette-divider'>


        <form action="/favoritar" method="POST" class="needs-validation container" novalidate>



                        


            <?php if (verificaFavorita($id)) { ?>

               

                    <input type=hidden name=idRec value=<?php echo $id ?>>
                    <button name="bt_favoritar">Favoritar <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg></button>
                <?php } else { ?>

                   
                    <input type=hidden name=idRec value=<?php echo $id ?>>
                    <button name="bt_desfavoritar">DesFavoritar <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg></button>
                <?php } ?>

                </form>


                <h4> <?php echo "<a class='nav-link' href='/categorias/$categoria/$id'>$nomeReceita</a>" ?> </h4>

                <h4> <?php echo "Tempo de preparo: $tempoPreparo minutos" ?> </h4>
                <h4> <?php echo "Porcao: $porcaoReceita" ?> </i></h4>
                <h4> <?php echo "Ingredientes da Receita: $ingredienteReceita" ?> </h4>
                <h4><?php echo "Modo de preparo: $preparo" ?> </h4>
                <h4><?php echo "Essa receita foii favoritada: $curtidas vezes" ?> </h4>






    </div>




</body>

</html>