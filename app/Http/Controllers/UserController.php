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
        return view('users.index', $users);
        
        
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

    
}
