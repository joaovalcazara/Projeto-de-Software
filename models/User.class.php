<?php

    class Usuario{


        
        public function login($email, $senha){
            global $pdo;
            
            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':senha', $senha);
            $sql->execute();
            

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                $_SESSION['msg']  = "Usuário logado com sucesso!";
                $_SESSION['status']    = "success";
                $_SESSION['email'] = $dado['email'];
                $_SESSION['senha'] = $dado['senha'];
                $_SESSION['nome'] = $dado ['nome'];
                $_SESSION['endereco'] = $dado ['endereco'];
                $_SESSION['celular'] = $dado ['celular'];
                $_SESSION['idade'] = $dado ['idade'];
                $_SESSION['logado'] = true;
                $_SESSION['idusuarios'] = $dado['idusuarios'];
                $_SESSION['adm'] = $dado['adm'];

            
                return true;
            }else{
                return false;
            }

        }
    
           

        
     
    }