@extends('layouts.admin')

@section('content')
    <h2>Criar Colaborador</h2>

    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf
        <label for="name">Nome</label><br>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br><br>
        <label for="cargo">Cargo</label><br>
        <input type="text" name="cargo" placeholder="Cargo" value="{{ old('cargo') }}"><br><br>
        <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" placeholder="Telefone" value="{{ old('telefone') }}"><br><br>
        <button type="submit">Salvar</button>
    </form>

@endsection
