<?php
    session_start();
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
   
        require 'conexao.php';
        require 'User.class.php';

        $u = new Usuario();
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$u->login($email, $senha);
        if($u->login($email, $senha)){
            if($_SESSION['adm'] != null){
                header("Location: /pagina-adm");
            }else{
                header("Location: /perfil");
            }
       
  
        }
        else{
       
            $_SESSION['msg'] = "Erro no login! E-mail ou senha incorretos";
            $_SESSION['status'] = "danger";
            header("Location: /login");
        }
    }else{
       
        $_SESSION['msg'] = "Erro no login! E-mail ou senha incorretos";
        $_SESSION['status'] = "danger";
        header("Location: /login");
    }

