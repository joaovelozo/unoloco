<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class StandartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $totalPage = 10;
    protected $upload = false;

    //Methods

    public function index()
    {

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("{$this->view}.create-edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validar Dados
        //dd($request);

        $this->validate($request, $this->model->rules());


        //Pegar todos os dados
        $dataForm = $request->all();

        //Imagem
        //Verificar se existe imagem
        if ( $this->upload && $request->hasFile($this->upload['name']) ) {

            //Pegar Imagem
            $image = $request->file($this->upload['name']);

            //Definiro nome da imagem
            $nameFile = uniqid(date('YmdHis')) . '.' . $image->getClientOriginalExtension();

            $upload = $image->storeAs($this->upload['path'], $nameFile);

            if ($upload)

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = $this->model->find($id);

       $title = "{$this->name} : {$data->name} ";

       return view("{$this->view}.show", compact('data', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = $this->model->find($id);

        $title = "Editar {$this->name}: {$data->name}";

        return view("{$this->view}.create-edit", compact('data', 'title'));
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

        $this->validate($request, $this->model->rules($id));

        $dataForm = $request->all();

        $data = $this->model->find($id);

        if ($this->upload && $request->hasFile($this->upload['name'])) {

            $image = $request->file($this->upload['name']);


            if ($data->image == '') {
             $nameImage = uniqid(date('YmdHis')) . '.' . $image->getClientOriginalExtension();
             $dataForm[$this->upload['name']] = $nameImage;

            } else {
                $nameImage = $data->image;
                $dataForm[$this->upload['name']] = $data->image;
            }
                $upload = $image->storeAs($this->upload['path'], $nameImage);

                if($upload)
                    $dataForm[$this->upload['name']] = $nameImage;

                    else
                        return redirect()
                            ->route("{$this->route}.edit", ['id' => $id])
                            ->withErrors(['errors' => 'Erro no Upload'])
                            ->whithInput();
        }

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->find($id);

        $delete = $data->delete();

        if($delete)

        return redirect()
            ->route("{$this->route}.index")
            ->with(['success'=> "<b>{$data->name}</b> foi apagado com sucesso"]);

        else

        return redirect()
            ->route("{$this->route}.edit", ['id'=> $id])
            ->withErrors(['errors'=>'Falha ao Apagar'])
            ->withInput();
    }
    public function search(Request $request)
{
    $dataForm = $request->except('_token');

    $data = $this->model
        ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
        ->paginate($this->totalPage);

    return view("{$this->view}.index", compact('data', 'dataForm'));
    }
}


