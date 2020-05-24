<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Pcategoria;
Use App\Http\Requests\Admin\MenuFormRequest;

class MenuController extends Controller
{


    private $menu, $totalPage = 10;

    public function __construct(Pcategoria $pcategoria)
    {
        $this->menu = $pcategoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menus = $this->menu->paginate();

        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $insert = $this->menu->create($dataForm);

        if ($insert)
            return redirect()
                ->route('menu.index')
                ->with(['success' => 'Cadastro Realizado com Sucesso']);

                else
                return redirect()
                    ->route('menu.create')
                    ->withErrors(['errors' => 'Falha ao Cadastrar'])
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
        $menu = $this->menu->find($id);

        $title = "Menu: {$menu->name}";

        return view('admin.menus.show', compact('title', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = $this->menu->find($id);

        $title = "Editar categoria: {$menus->name}";

        return view('admin.menus.create-edit', compact('title','menus'));
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
        $dataForm = $request->all();

        $menu = $this->menu->find($id);

        $update = $menu->update($dataForm);

        if( $update )
            return redirect()
                ->route('menus.index')
                ->whit(['success' => 'Atualização realizada com sucesso']);

                else
                    return redirect()
                             ->route('menus.edit', ['id' => $id])
                             ->whitErrors(['errors' =>'Falha ao Editar'])
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
       $menu = $this->menu->find($id);

       $delete = $menu->delete();

       if( $delete )
            return redirect()
                    ->route('menu.index')
                    ->with(['success' => 'Alterações Realizadas com Sucesso']);
        else
            return redirect()
                    ->route('menus.edit', ['id' => $id])
                    ->withErrors(['errors' => 'Falha ao Apagar'])
                    ->withInput();

    }
}
