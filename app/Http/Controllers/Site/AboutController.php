<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class AboutController extends Controller
{
    public function index(Categoria $categoria)
    {

        $categorias = $categoria->all();

        return view('site.about.index', compact('categorias'));
    }
}
