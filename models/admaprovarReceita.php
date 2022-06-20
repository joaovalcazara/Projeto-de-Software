<?php
session_start();
require_once 'conexao.php';

include('./controllers/validacao-cadastro.controller.php');

if (isset($_GET['bt_aprovarReceita'])) {

    $var = '1';
    $v2 = $_GET['bt_aprovarReceita'];


    $query  = $pdo->prepare("UPDATE receitas set situacao = :situacao where idreceita = :idreceita");
    $query->bindParam(':situacao',$var);
    $query->bindParam(':idreceita',$v2 );

    
    

    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $_SESSION['msg'] = "Cadastro de receita realizado com sucesso";
            $_SESSION['status']    = "success";
            header('Location: /lista-receitas');
        } else {
            $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
            $_SESSION['status']    = "danger";
            header('Location: /pagina-adm');
        }
    } else {
        $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
        $_SESSION['status']    = "danger";
        header('Location: /lista-receitas');
    }
}
else if (isset($_GET['bt_reprovar'])){


    $v22 = $_GET['bt_reprovar'];


    $query  = $pdo->prepare("DELETE from receitas where idreceita = :idreceita");
    $query->bindParam(':idreceita',$v22 );

    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $_SESSION['msg'] = "Receita rejeitada com sucesso";
            $_SESSION['status']    = "success";
            header('Location: /lista-receitas');
        } else {
            $_SESSION['msg'] = "Erro ao rejeitar";
            $_SESSION['status']    = "danger";
            header('Location: /pagina-adm');
        }
    } else {
        $_SESSION['msg'] = "Erro ao rejeitar";
        $_SESSION['status']    = "danger";
        header('Location: /lista-receitas');
    }
   
}
