<?php
require_once "conexao.php";

global $pdo;

$sql = "SELECT * FROM receitas ORDER BY curtidas DESC LIMIT 5";
$sql = $pdo->prepare($sql);
$sql->execute();

 while($dados = $sql->fetch()){

    if($dados['situacao'] == 0){

    }else{
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
    
        $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita,0,15).'...' : $ingredienteReceita;
        require './views/receitas_populares.php';

    }
   

}