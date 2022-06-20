<?php

require_once './controllers/verifica-logado.php';
require_once "conexao.php";
if (isset($_POST['bt_atualizar'])) {


    $sql = ("UPDATE usuarios SET nome = :nome, idade = :idade, endereco = :endereco, celular = :celular, email = :email WHERE idusuarios = :idusuarios");


    $query = $pdo->prepare($sql);

    $query->bindParam(':nome',  $_POST['nome']);
    $query->bindParam(':idade', $_POST['idade']);
    $query->bindParam(':endereco',  $_POST['endereco']);
    $query->bindParam(':celular',  $_POST['celular']);
    $query->bindParam(':email',  $_POST['email']);
    $query->bindParam(':idusuarios', $_SESSION['idusuarios']);

    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $_SESSION['msg'] = "[Perfil atualizado com sucesso]";
            $_SESSION['status']    = "success";
            header('Location: /perfil');
        } else {
            $_SESSION['msg'] = "[Erro ao atualizar perfil]";
            $_SESSION['status']    = "danger";
            header('Location: /perfil');
        }
    } else {
        $_SESSION['msg'] = "[Erro ao atualizar]";
        $_SESSION['status']    = "danger";
        header('Location: /perfil');
    }
}
