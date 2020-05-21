<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use App\Models\Pagina;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser =  User::count();
        $totalPost = Post::count();
        $totalPagina  = Pagina::count();

        return view('admin.dashboard.index', compact('totalUser','totalPost', 'totalPagina'));
    }
}
