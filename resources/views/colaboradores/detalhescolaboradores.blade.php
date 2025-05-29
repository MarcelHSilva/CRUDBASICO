@extends('layouts.admin')

@section('content')

    <a href="{{ route('colaboradores.index') }}">Pagina Inicial</a><br>
    <a href="{{ route('colaboradores.edit', ['colaborador' => $colaborador->id]) }}">Editar</a><br>
    <form action="{{ route('colaboradores.destroy', ['colaborador' => $colaborador->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
    </form>
    <h2>Detalhes do Colaborador</h2>
    @if(session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    ID:{{ $colaborador->id }} <br><br> Nome: {{ $colaborador->name }} <br><br> Email: {{ $colaborador->email }} Cadastrado em:
    {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }} <br><br> Editado em:
    {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }} <br><br>
    <hr>

@endsection