<?php
session_start();
require_once 'conexao.php';

include('./controllers/validacao-cadastro.controller.php');



if (isset($_POST['bt_cadastrar'])) {

    $nomeReceita = $_POST['nomeReceita'];
    // $categoriaReceita =  $_POST['categoriaReceita'].$_POST['value'];
    $tempoPreparo =  $_POST['tempoPreparo'];
    $porcaoReceita = $_POST['porcaoReceita'];
    $ingredienteReceita = $_POST['ingredienteReceita'];
    $idUsuario = $_SESSION['idusuarios'];
    $preparo = $_POST['preparo'];
    $nomeUser = $_POST['nomeUser'];


    //verificar o user com um if e ai cadastrar


    $query  = $pdo->prepare("INSERT INTO receitas(nomeReceita, categoriaReceita, tempoPreparo, porcaoReceita, ingredienteReceita, idUsuario, preparo, nomeUser) VALUE (:nomeReceita, :categoriaReceita, :tempoPreparo, :porcaoReceita, :ingredienteReceita, :idUsuario, :preparo, :nomeUser)");
    $query->bindParam(':nomeReceita', $_POST['nomeReceita']);
    $query->bindParam(':categoriaReceita', $_POST['categoriaReceita']);
    $query->bindParam(':tempoPreparo', $_POST['tempoPreparo']);
    $query->bindParam(':porcaoReceita', $_POST['porcaoReceita']);
    $query->bindParam(':ingredienteReceita', $_POST['ingredienteReceita']);
    $query->bindParam(':idUsuario', $idUsuario);
    $query->bindParam(':preparo', $_POST['preparo']);
    $query->bindParam(':nomeUser', $_POST['nomeUser']);
    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $_SESSION['msg'] = "Receita enviada com sucesso";
            $_SESSION['status']    = "success";
            header('Location: /perfil');
        } else {
            $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
            $_SESSION['status']    = "danger";
            header('Location: /perfil');
        }
    } else {
        $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
        $_SESSION['status']    = "danger";
        header('Location: /perfil');
    }
}
