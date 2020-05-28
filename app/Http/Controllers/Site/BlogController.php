<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    private $post;
    private $totalPage = 8;

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
    public function index()
    {

        $posts = $this->post->orderBy('date','DESC')->paginate($this->totalPage);

        return view('site.blog.index', compact( 'posts'));
    }

    public function categoria($url)
    {
        $categoria = Categoria::where('url', $url)->first();

        if($categoria) {

            $posts = $categoria->posts()->paginate($this->totalPage);

            $title = "{$categoria->name} - Unoloco";

            return view('site.category.category', compact('categoria', 'posts', 'title'));
        } else {
            return redirect()->route('site.home');
        }
    }

    public function informativo($url)
    {
        $post = Post::where('url', $url)->first();

        if($post) {
            $title = "{$post->title} - Unoloco";

            return view('site.informativos.informativo', compact('post', 'title'));
        } else {
            return redirect()->route('site.home');
        }
    }
}
