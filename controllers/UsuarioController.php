<?php


    class usuarioController{
        
        public function logout(){
            return include './models/logout.php';
        }

        public function logar(){
            return include 'models/login-model.php';
        }

        public function cadastrar(){
            return include 'models/cadastro-usuario.php';
        }

        public function cadastrarreceita(){
            return include './views/cadastro-receita.php';
        }

        public function cadastrareceitaaction(){
            return include 'models/cadastro-receita.php';
        }

        public function config(){
            return include './views/configuracoes.php';
        }

        public function minhas_receitas(){
            return include './views/minhasReceietas.php';
        }

        public function perfil(){
            return include './views/perfil.php';
        }

        public function receitasfavoritas(){
            return include './views/receitas-favoritas.php';
        }

        public function atualizausuario(){
            return include 'models/edita-usuario.php';
        }
        public function favoritar(){
            return include 'models/favoritar.php';
        }


    }