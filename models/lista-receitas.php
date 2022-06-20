<?php
    require 'conexao.php';
    require 'receita.class.php';

          $r = new receita();

          $r->consultareceita($id);


    
?>