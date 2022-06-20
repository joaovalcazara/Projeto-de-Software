<?php
session_start();
require_once 'conexao.php';
include('./controllers/validacao-cadastro.controller.php');




if (isset($_POST['bt_cadastrar'])) {

    

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $endereco =  $_POST['endereco'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];


    $erro = validaCadastro($senha, $email, $celular, $nome);

    if(!$erro){
        $query = $pdo->prepare("INSERT INTO usuarios(nome, senha, endereco, celular, email, idade) VALUE (:nome, :senha, :endereco, :celular, :email, :idade)");
        $query->bindParam(':nome', $_POST['nome']);
        $query->bindParam(':senha', $_POST['senha']);
        $query->bindParam(':endereco', $_POST['endereco']);
        $query->bindParam(':celular', $_POST['celular']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':idade', $_POST['idade']);
    
    
        if($query->execute()){
    
            if ($query->rowCount() > 0) {
                $_SESSION['msg'] = "Cadastro realizado com sucesso";
                $_SESSION['status']    = "success";
                header('Location: /perfil');
            }else{
                $_SESSION['msg'] = "Erro ao cadastrar";
                $_SESSION['status']    = "danger";
                header('Location: /login');
            } 
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar";
            $_SESSION['status']    = "danger";
            header('Location: /login');
    
        }
    

    }else{
        header('Location: /cadastrar');

    }

   
 
}
