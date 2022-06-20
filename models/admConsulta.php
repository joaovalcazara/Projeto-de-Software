<?php
require_once "./models/conexao.php";

global $pdo;

$sql = "SELECT * FROM receitas ORDER BY dataPost ASC";
$sql = $pdo->prepare($sql);
$sql->execute();

 while($dados = $sql->fetch()){

    if($dados['situacao'] == 0){
        $nomeReceita  = $dados['nomeReceita'];
        $categoria = $dados['categoriaReceita'];
        $tempoPreparo = $dados['tempoPreparo'];
        $porcaoReceita  = $dados['porcaoReceita'];
        $ingredienteReceita = $dados['ingredienteReceita'];
        $preparo = $dados['preparo'];
        $curtidas = $dados['curtidas'];
        $id = $dados['idreceita'];
        $dataPost = $dados['dataPost'];
    
        $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita,0,15).'...' : $ingredienteReceita;
       require './adm/views/receita.php';

    }

}