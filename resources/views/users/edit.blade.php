@extends('layouts.admin')

@section('content')

    <a href="{{ route('user.index') }}">Pagina Inicial</a><br>
    <a href="{{ route('user.show', ['user' => $user->id]) }}">Detalhes</a><br>
    <h2>Editar Usuário</h2>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('put')
        <label for="name">Nome</label><br>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"><br><br>
        <label for="password">Senha</label><br>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"><br><br>
        <button type="submit">Salvar</button>


    </form>

@endsection