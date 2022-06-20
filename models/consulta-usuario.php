<?php

// iniciar sessao no arquivo que chama a consulta
require_once 'controllers/verifica-logado.php';
require 'conexao.php';


global $pdo;
$idusuarios =  $_SESSION['idusuarios'];


$sql = "SELECT * FROM usuarios WHERE idusuarios= :idusuarios";
$sql = $pdo->prepare($sql);
$sql->bindParam(':idusuarios', $idusuarios);
$sql->execute();


if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
    $_SESSION['email'] = $dado['email'];
    $_SESSION['senha'] = $dado['senha'];
    $_SESSION['nome'] = $dado['nome'];
    $_SESSION['endereco'] = $dado['endereco'];
    $_SESSION['celular'] = $dado['celular'];
    $_SESSION['idade'] = $dado['idade'];

    $nome = $_SESSION['nome'];
    $endereco = $_SESSION['endereco'];
    $celular = $_SESSION['celular'];
    $email = $_SESSION['email'];
    $idade =  $_SESSION['idade'];
}

