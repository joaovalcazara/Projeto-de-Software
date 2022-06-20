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

                        <li class="nav-item">
                            <a class="nav-link " href="/pagina-adm">Voltar</a>
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

        <form action="/aprovar">

            <h4> <?php echo "$nomeReceita" ?> </h4>
            <h4> <?php echo "Tempo de preparo: $tempoPreparo minutos" ?> </h4>
            <h4> <?php echo "Porcao: $porcaoReceita" ?> </i></h4>
            <h4> <?php echo "Ingredientes da Receita: $ingredienteReceita" ?> </h4>
            <h4><?php echo "Modo de preparo: $preparo" ?> </h4>
            <h4><?php echo "Essa receita foii favoritada: $curtidas vezes" ?> </h4>
            <h4><?php echo "id da receita: $id" ?> </h4>


           <button  type="submit" name="bt_aprovarReceita" value=<?php echo $id?> >Aprovar</button>   <button  type="submit" name="bt_reprovar" value=<?php echo $id?> >Reprovar</button>
        </form>







    </div>




</body>

</html>