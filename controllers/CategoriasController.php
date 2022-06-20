<?php

class categoriasController
{

    public function categorias($categoria){
        return include './models/categorias.models.php';
    }
}

