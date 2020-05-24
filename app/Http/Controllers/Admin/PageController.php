<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\StandartController;
use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Pcategoria;

class PageController extends StandartController

    {
        protected $model;
        protected $name = 'Pages';
        protected $view = 'admin.pages';
        protected $route = 'pages';
        protected $upload = ['name' => 'image', 'path' => 'pages'];

        public function __construct(Pagina $pagina)

        {
            $this->model = $pagina;
        }
        public function create()
    {
        $pcategorias = Pcategoria::get()->pluck('name', 'id');

       return view("{$this->view}.create-edit", compact('pcategorias'));
    }

    public function edit($id)
    {
        $data  = $this->model->find($id);

        $title = "Editar {$this->name}: {$data->name}";

        $categorias = Pcategoria::get()->pluck('name', 'id');
       

        return view("{$this->view}.create-edit", compact('data', 'title', 'pcategorias'));
    }



    public function store(Request $request)
    {

        //Validar Dados

        $this->validate($request, $this->model->rules());


        //Pegar todos os dados
        $dataForm = $request->all();

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

    
