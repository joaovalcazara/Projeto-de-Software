<?php

    require './controllers/verifica-receita.php';

    Class receita{
        public function consultareceita($id){
            global $pdo;

            $sql = "SELECT * FROM receitas WHERE idreceita = :idreceita";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("idreceita", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                //Setar variaveis
                $nomeReceita = $dado['nomeReceita'];
                $categoria = $dado['categoriaReceita'];
                $tempoPreparo = $dado['tempoPreparo'];
                $porcaoReceita = $dado['porcaoReceita'];
                $ingredienteReceita = $dado['ingredienteReceita'];
                $preparo = $dado['preparo'];
                $curtidas = $dado['curtidas'];
                $situacao = $dado['situacao'];
                $dataPost = $dado['dataPost'];
                $nomeUser = $dado['nomeUser'];


                
              require_once './views/categoriasADM.php';
                
            }else{
                
               require './views/notfound.view.php';
            }
        }


       
    }
    ?>