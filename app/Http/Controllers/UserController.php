<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //recuperar os registros do banco
        $users = User::all();
        return view('users.index', ['users' => $users]);	
          
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(UserRequest $request)
    {
        //validar o formulario
        $request->validated();

        //Cadastar usuario no banco de dados
        User::create($request->validated());
        //retorna mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuario cadastrado com sucesso');

    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuario atualizado com sucesso');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuario excluido com sucesso');
    }

    
}
