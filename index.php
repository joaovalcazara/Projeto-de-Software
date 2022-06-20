<?php
    require 'vendor/autoload.php';
    
    use Pecee\SimpleRouter\SimpleRouter as Router;

    Router::get('/', 'CasosController@index');
    Router::get('/home', 'CasosController@indexlogado');
    Router::get('/cadastrar', 'CasosController@cadastro');
    Router::post('/cadastrar', 'usuarioController@cadastrar'); #post
    Router::get('/login', 'CasosController@login');
    Router::post('/login', 'usuarioController@logar'); #post
    Router::get('/entrar', 'CasosController@login');

    Router::post('/aprovar', 'admController@aprovar'); #postADM
    Router::get('/aprovar', 'admController@aprovar'); #postADM



    Router::post('/favoritar', 'usuarioController@favoritar'); #post


    Router::get('/pagina-adm', 'admController@admin');#ADM




    Router::get('/categoriasADM/{categoria}/{id}', 'admController@receitasindvADM');#ADM

    Router::get('/categorias/{categoria}/{id}', 'CasosController@receitasindv');
    Router::get('/categorias/{categoria}', 'categoriasController@categorias');
    
    //logado:
    Router::post('/atualizar-usuario', 'usuarioController@atualizausuario'); #post
    Router::get('/config', 'usuarioController@config');
    Router::get('/minhas-receitas', 'usuarioController@minhas_receitas');
    Router::get('/perfil', 'usuarioController@perfil');
    Router::get('/favoritas', 'usuarioController@receitasfavoritas');
    Router::get('/cadastrar-receitas', 'usuarioController@cadastrarreceita');
    Router::post('/cadastrar-receitas', 'usuarioController@cadastrareceitaaction'); #post
    Router::get('/logout', 'usuarioController@logout');
    Router::get('/avaliar-receitas', 'admController@avaliarreceita'); #ADMIN
    Router::get('/lista-receitas', 'admController@listareceita'); #ADMIN
    
    Router::start();

  //  require 'layout/header.view.php';
  
?>
