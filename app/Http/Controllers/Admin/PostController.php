<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\StandartController;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Http\Request;


class PostController extends StandartController
{

    protected $model;
    protected $name = 'Post';
    protected $view = 'admin.posts';
    protected $route = 'posts';
    protected $upload = ['name' => 'image', 'path' => 'posts'];



    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function create()
    {
        $categorias = Categoria::get()->pluck('name', 'id');

       return view("{$this->view}.create-edit", compact('categorias'));
    }

    public function edit($id)
    {
        $data  = $this->model->find($id);

        $title = "Editar {$this->name}: {$data->name}";

        $categorias = Categoria::get()->pluck('name', 'id');


        return view("{$this->view}.create-edit", compact('data', 'title', 'categorias'));
    }



    public function store(Request $request)
    {

        //Validar Dados

        $this->validate($request, $this->model->rules());


        //Pegar todos os dados
        $dataForm = $request->all();

        $dataForm['featured'] = isset ( $dataForm['featured'] ) ? true : false;

        $dataForm['user_id'] = auth()->user()->id;

        if ($this->upload && $request->hasFile($this->upload['name'])) {

            $image = $request->file($this->upload['name']);

            $nameFile = uniqid(date('YmdHis')) . '.' . $image->getClientOriginalExtension();


                $upload = $image->storeAs($this->upload['path'], $nameFile);

                if($upload)
                    $dataForm[$this->upload['name']] = $nameFile;

                    else
                        return redirect()
                            ->route("{$this->route}.create")
                            ->withErrors(['errors' => 'Erro no Upload'])
                            ->whithInput();
        }



        // Cadastra o novo usuário
        $insert = $this->model->create($dataForm);

        if($insert)
                return redirect()
                        ->route("{$this->route}.index")
                        ->with(['sucess'=> 'Cadastro Realizado com Sucesso']);
                else
                return redirect()
                        ->route("{$this->route}.create")
                        ->withErrors(['errors'=>'Falha ao Cadastrar'])
                        ->withInput();
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, $this->model->rules($id));

        $dataForm = $request->all();

        $data = $this->model->find($id);

        $dataForm['featured'] = isset ( $dataForm['featured'] ) ? true : false;

        // Cadastra o novo usuário
                 $update = $data->update($dataForm);

                if($update)
                return redirect()
                        ->route("{$this->route}.index")
                        ->with(['success'=> 'Alteração Realizada com Sucesso']);
                else
                    return redirect()
                        ->route("{$this->route}.edit", ['id'=> $id])
                        ->withErrors(['errors'=>'Falha ao Cadastrar'])
                        ->withInput();
    }

}
