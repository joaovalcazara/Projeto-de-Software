<?php
    require 'conexao.php';
    require 'receitaADM.class.php';

          $r = new receita();

          $r->consultareceita($id);


    
?>