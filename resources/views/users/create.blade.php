<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>

<body>
    <a href="{{ route('user.index') }}">Pagina Inicial</a><br>
    <h2>Cadastrar Usuario</h2>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif
    <form action="{{ route('user-store') }}" method="get">
        @csrf
        @method('get')
        <label for="name">Nome</label><br>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br><br>
        <label for="password">Senha</label><br>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"><br><br>
        <button type="submit">Cadastrar</button>


    </form>
</body>

</html>