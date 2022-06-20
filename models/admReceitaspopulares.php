<?php
require_once "conexao.php";

global $pdo;

$sql = "SELECT * FROM receitas ";
$sql = $pdo->prepare($sql);
$sql->execute();

 while($dados = $sql->fetch()){

  
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
    
        $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita,0,15).'...' : $ingredienteReceita;
        require './adm/views/receita.php';

    
   

}