<?php
 require_once "conexao.php";
 

function verificaFavorita($id)
{
    
   
    global $pdo;
    $sql = "SELECT * FROM favorito WHERE idUsuario = :idUsuario AND idReceita = :idreceita";
    $sql = $pdo->prepare($sql);
    $sql->bindParam(':idUsuario', $_SESSION['idusuarios']);
    $sql->bindParam(':idreceita', $id);
    $sql->execute();
    if($dado = $sql->fetch()){
        $_SESSION['sit'] = $dado['flag'];

        $sit = $_SESSION['sit'];
     
         if($sit == 0) {
             return true;
         }else{
             return false;
         }
         return true;
    }else{
        return true;
    }


  
}

