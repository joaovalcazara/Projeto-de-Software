<?php
session_start();

if ((isset($_SESSION['email']) == false) && (isset($_SESSION['senha']) == false)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: /login');
  return false;
}
$logado = $_SESSION['email'];
$nome_usuario = $_SESSION['nome'];
return true;

?>