@extends('layouts.admin')

@section('content')

    <a href="{{ route('user.index') }}">Pagina Inicial</a><br>
    <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a><br>
    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
    </form>
    <h2>Detalhes do Usuario</h2>
    @if(session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    ID:{{ $user->id }} <br><br> Nome: {{ $user->name }} <br><br> Email: {{ $user->email }}<br><br> Cadastrado em:
    {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }} <br><br> Editado em:
    {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }} <br><br>
    <hr>

@endsection