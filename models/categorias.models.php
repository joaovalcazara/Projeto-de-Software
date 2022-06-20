<?php
require_once "conexao.php";

global $pdo;

$categ = $categoria;


$sql = "SELECT * FROM receitas where categoriaReceita = :categorias";
$sql = $pdo->prepare($sql);
$sql->bindParam(':categorias', $categ);

$sql->execute();
if ($sql->rowCount() > 0) {
    while ($dados = $sql->fetch()) {

        if ($dados['situacao'] == 1) {
            $nomeReceita  = $dados['nomeReceita'];
            $categoria = $dados['categoriaReceita'];
            $tempoPreparo = $dados['tempoPreparo'];
            $porcaoReceita  = $dados['porcaoReceita'];
            $ingredienteReceita = $dados['ingredienteReceita'];
            $preparo = $dados['preparo'];
            $curtidas = $dados['curtidas'];
            $id = $dados['idreceita'];
            $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita, 0, 15) . '...' : $ingredienteReceita;
            include './views/categorias.php';
        }
    }
} else {

    require './layout/receitasheader.view.php';
    require './views/notfound.view.php';
}
