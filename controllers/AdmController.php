<?php

    class admController{

        public function admin(){
            return include './adm/pagina-adm.php';
        }

        
        public function avaliarreceita($categoria){
            return include './adm/views/autorizar-receita.php';
        }
        public function listareceita(){
            return include './adm/views/lista-receitas.php';
        }

        public function receitasindvADM($categoria, $id){
           
        
            return include  './views/receitaADM.view.php';

        }

        public function aprovar(){
           
        
            return include  './models/admaprovarReceita.php';

        }


    }


        