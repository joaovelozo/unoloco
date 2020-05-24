<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Mail;
use App\Mail\SendContact;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $postsFeatured = Post::where('featured', true)
            ->limit(3)
            ->get();
            
            $categorias = Categoria::all();

            return view('site.home.index', compact('postsFeatured', 'categorias'));

  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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

    public function category(Categoria $categoria, $url)

    {
        $categoria =  $categoria
            ->where('url', $url)
            ->get()
            ->first();

            $posts = $categoria->posts()->get();

            return view('site.category.category', compact('categoria', 'posts'));

        
    }

    public function sendContact(Request $request)

    {
        $dataForm = $request->all();

        $mail = Mail::send(new SendContact($dataForm));

        dd($mail);
    }
}
