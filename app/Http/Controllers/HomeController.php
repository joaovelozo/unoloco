<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use App\Models\Pagina;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUser =  User::count();
        $totalPost = Post::count();
        $totalPagina  = Pagina::count();

        return view('admin.dashboard.index', compact('totalUser','totalPost', 'totalPagina'));
    }
}
