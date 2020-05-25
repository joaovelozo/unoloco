<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getDescriptionCutAttibute($value)

    {
        return Str::limit($value, 100);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categoria $categoria)
    {
        $categorias = $categoria->all();

        $posts = $this->post->orderBy('date','DESC')->paginate(8);

        return view('site.blog.index', compact('categorias', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function categoria(Categoria $categoria, $url)
    {
        $categoria = $categoria->where('url', $url)->get()->first();

        $posts = $categoria->posts()->get();

        return view('site.category.category', compact('categorias', 'posts'));
    }
}
