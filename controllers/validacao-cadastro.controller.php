<?php

function validaCadastro($senha, $email, $celular, $nome)
{
    $erro = true;
 
    if (strlen($senha) < 6) {
        //echo 'A senha precisa ter no minimo 6 caracteres';
        $_SESSION['msg'] = "<div class='alert alert-danger'>A senha precisa ter no minimo 6 caracteres</div>";
        header('Location: /cadastrar');
        return true;
    } else {
        $erro = false;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = false;
    } else {
       // echo 'Formato de e-mail incorreto';
        $_SESSION['msg'] = "<div class='alert alert-danger'>Formato de e-mail incorreto</div>";
        return true;
    }
    if (preg_match('/^\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$/', $celular)) {

        $erro = false;
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger'>Celular invalido (xx)xxxxx-xxxx</div>";
        //echo 'Celular invalido';
        return true;
    }
    if (preg_match('/^[a-zA-Z ]+$/', $nome)) {

        $erro = false;
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger'Nome Inválido</div>";
        //echo ('Nome Inválido' . "<br>");
        return true;

       
    }
    return $erro;
    
}

