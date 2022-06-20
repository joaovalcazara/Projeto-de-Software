<?php
require_once "conexao.php";

global $pdo;

$sql = "SELECT * FROM receitas WHERE idUsuario = :idUsuario  ORDER BY curtidas desc";
$sql = $pdo->prepare($sql);
$sql->bindParam(':idUsuario',$_SESSION['idusuarios']);
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
        $nomeUser = $dados['nomeUser'];
    
        $ingredienteReceita = (strlen($ingredienteReceita) > 15) ? substr($ingredienteReceita,0,15).'...' : $ingredienteReceita;
       require './views/receitas_populares.php';
    }
    
  
}
