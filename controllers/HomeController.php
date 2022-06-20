<?php

    class CasosController{

        public function cadastro(){
            return include './views/cadastro.php';
        }

        public function login(){
            
            return include './views/login.php';
        }

        public function index(){
          
            return include './views/paginaHomeSemLogin.php';
        }

        public function indexlogado(){
            return include './views/paginaHome.php';
        }

    
        public function receitasindv($categoria, $id){
           
        
            return include  './views/receita.view.php';

        }

    


     

        
    }
    