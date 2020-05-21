<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Admin\UserFormRequest;

class UserController extends Controller
{
    private $user, $request;
    protected $totalPage = 10;
    public function  __construct(User $user, Request $request)
    {
        
        $this-> user = $user;

        $this-> request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate($this->totalPage);
        
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
        return view('admin.users.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $dataUser = $request->all();

        $dataUser['password'] = bcrypt($dataUser['password']);

        $insert = $this->user->create($dataUser);

        if( $insert)
            return redirect('/admin/users');
            else 
            return 'Falha ao cadastrar';


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('admin.users.create-edit', compact('id', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        //Atualizar Usuário
        //Dados do Usuário
        $dataUser = $request->all();

        //Objeto Usuário
        $user = $this->user->find($id);

        //Criptografia Senha
        $dataUser['password'] = bcrypt($dataUser['password']);

        // Cadastra o novo usuário
        $update = $user->update($dataUser);

        if ($update)

            return redirect('/admin/users');
        else
            return redirect()->route('users.edit', ['id' => $id])
                ->withErrors(['errors' => 'Erro ao atualizar'])
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
        //Apagar usuário

        $user =  $this->user->find($id);

        $delete = $user->delete();

        if ($delete) {
            return redirect()->route('users.index');
        } else {
            return redirect()->route('users.show', ['id' => $id])
                ->withErrors(['errors' => 'Erro ao apagar'])
                ->withInput();
        }
    }
}