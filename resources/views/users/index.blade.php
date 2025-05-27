
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>

    <a href="{{ route('user.create') }}">Cadastrar</a><br>
    <h2>Usuarios</h2>

    @if(session('success'))
    <p style="color: green">
        {{ session('success') }}
    </p>
    @endif

    {{ dd('users') }}

    

</body>
</html>
