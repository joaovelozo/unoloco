<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\StandartController;
use App\Models\Categoria;


class CategoriasController extends StandartController
{

    protected $model;
    protected $name = 'Categoria';
    protected $view = 'admin.categories';
    protected $upload = ['name' =>  'image' , 'path' => 'categorias'];
    protected $route = 'categorias';


    

    public function __construct(Categoria $categoria)
    {
        $this->model =$categoria;
    }
    
}
