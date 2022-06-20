<?php
session_start();
require_once 'conexao.php';


if ($_SESSION['email'] == null) {
    $_SESSION['msg'] = "Para favoritar, entre em sua conta primeiro!";
    $_SESSION['status']    = "danger";
    header('Location: /login');
} else {
    if (isset($_POST['bt_favoritar'])) {

        $flag = "1";
        $query  = $pdo->prepare("INSERT INTO favorito(idUsuario, flag, idReceita) VALUE (:idUser, :flag, :idReceita)");
        $query->bindParam(':idUser', $_SESSION['idusuarios']);
        $query->bindParam(':flag', $flag);
        $query->bindParam(':idReceita', $_POST['idRec']);



        if ($query->execute()) {
            if ($query->rowCount() > 0) {

                $_SESSION['msg'] = "Receita adicionada ao livro de favoritas!";
                $_SESSION['status']    = "success";
                $sql  = $pdo->prepare("SELECT * FROM favorito WHERE idReceita = :idReceita");
                $sql->bindParam(':idReceita', $_POST['idRec']);
                $sql->execute();
                $quantidade = $sql->rowCount();

                
                var_dump($quantidade);
                var_dump( $_POST['idRec']);

              
                $insereFav = $pdo->prepare("UPDATE receitas SET curtidas = :fav WHERE idreceita = :idRec");
                $insereFav->bindParam(':fav',  $quantidade);
                $insereFav->bindParam(':idRec',  $_POST['idRec']);
                $insereFav->execute();


                header('Location: /favoritas');
            } else {
                $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
                $_SESSION['status']    = "danger";
                header('Location: /home');
            }
        } else {
            $_SESSION['msg'] = "Erro ao realizar o cadastro de receita";
            $_SESSION['status']    = "danger";
            header('Location: /home');
        }
    }
    if (isset($_POST['bt_desfavoritar'])) {


        $iduser1 =  $_SESSION['idusuarios'];
        $idRec1 = $_POST['idRec'];

        $sql  = $pdo->prepare("SELECT * FROM favorito WHERE idReceita = :idReceita");
        $sql->bindParam(':idReceita', $_POST['idRec']);
        $sql->execute();
        $quantidade = $sql->rowCount();

        $quantidade = $quantidade -1;

        $removeFav = $pdo->prepare("UPDATE receitas SET curtidas = :fav WHERE idreceita = :idRec");
        $removeFav->bindParam(':fav',  $quantidade);
        $removeFav->bindParam(':idRec',  $_POST['idRec']);
        $removeFav->execute();




        $query  = $pdo->prepare("DELETE FROM favorito WHERE idUsuario = $iduser1 and idReceita =  $idRec1");

        if ($query->execute()) {
            if ($query->rowCount() > 0) {
                $_SESSION['msg'] = "Receita desfavoritada com sucesso";
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
}
