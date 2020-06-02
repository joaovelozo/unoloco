<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pagina;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Mail;
use App\Mail\SendContact;

class HomeController extends Controller
{
    private $post;
    private $totalPage = 3;

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

        $posts = Post::orderBy('date', 'ASC')->paginate($this->totalPage);

        return view('site.home.index', compact('postsFeatured', 'posts'));

    }

    public function category(Categoria $categoria, $url)

    {
        $categoria =  $categoria
            ->where('url', $url)
            ->get()
            ->first();

            $posts = $categoria->posts()->paginate($this->totalPage);



            return view('site.category.category', compact('categoria', 'posts'));


    }

    public function services($url)
    {
        $page =  Pagina::where('url', $url)->first();

        if($page) {

            return view('site.servicos.index', compact('page'));
        } else {
            redirect()->route('site.home');
        }

    }

    public function sendContact(Request $request)

    {
        $dataForm = $request->all();
        //dd($dataForm);

        Mail::send(new SendContact($dataForm));

        return redirect()->route('site.home')->with('mail', 'mail');
    }
}
