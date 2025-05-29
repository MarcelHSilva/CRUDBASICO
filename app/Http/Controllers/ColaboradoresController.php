<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    public function colaboradores()
    {
        $colaboradores = Colaboradores::all();
        return view('colaboradores.index', ['colaboradores' => $colaboradores]);
    }

    public function mostrarcolaboradores()
    {
        return view('colaboradores.detalhescolaboradores');
    }

    public function create()
    {
        return view('colaboradores.criarcolaborador');
    }
    public function show(Colaboradores $colaborador)
    {
        return view('colaboradores.detalhescolaboradores', ['colaborador' => $colaborador]);
    }

    public function store(Request $request)
    {
        $request->validated();

        //Cadastar usuario no banco de dados
        Colaboradores::create($request->validated());
        //retorna mensagem de sucesso
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador cadastrado com sucesso');
    }

    public function edit(Colaboradores $colaborador)
    {
        return view('colaboradores.edit', $colaborador);
    }

    public function destroy(Colaboradores $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador excluido com sucesso');
    }

    public function update(Colaboradores $colaborador, Request $request)
    {
        $request->validated();
        $colaborador->merge($request->validated());
        $colaborador->save();

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso');
    }

}
   
