<?php
session_start();

if ((isset($_SESSION['email']) == false) && (isset($_SESSION['senha']) == false)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  $_SESSION['LOG'] = 'NAO';

}
else{
    $_SESSION['LOG'] = 'SIM';

}

?>