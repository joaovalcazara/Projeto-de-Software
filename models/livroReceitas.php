<?php
require_once "conexao.php";

global $pdo;
$tam = 0;
$i = 0;


$sql = "SELECT idReceita FROM favorito where idUsuario = :idUsuario";
$sql = $pdo->prepare($sql);
$sql->bindParam(':idUsuario', $_SESSION['idusuarios']);


if ($sql->execute()) {
    while ($buscarId = $sql->fetch()) {


        $numbers[$i] = $buscarId['idReceita'];
        $i++;


        $tam++;
    }
}



for ($a = 0; $a < $tam; $a++) {
    $consulta = "SELECT * FROM receitas where idReceita = :idReceita";
    $consulta  = $pdo->prepare($consulta);
    $consulta->bindParam(':idReceita',  $numbers[$a]);

    if ($consulta->execute()) {
        while ($dados = $consulta->fetch()) {

            $nomeReceita  = $dados['nomeReceita'];
            $categoria = $dados['categoriaReceita'];
            $tempoPreparo = $dados['tempoPreparo'];
            $porcaoReceita  = $dados['porcaoReceita'];
            $ingredienteReceita = $dados['ingredienteReceita'];
            $preparo = $dados['preparo'];
            $curtidas = $dados['curtidas'];
            $id = $dados['idreceita'];
            $situacao = $dados['situacao'];
            $dataPost = $dados['dataPost'];
            $nomeUser = $dados['nomeUser'];

            $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita, 0, 15) . '...' : $ingredienteReceita;
           require './views/receitas_populares.php';
        }
    }
}
