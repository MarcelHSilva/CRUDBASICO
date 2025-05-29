@extends('layouts.admin')

@section('content')

    <div class="card  mt-2 mb-2 border-light shadow">
        <span class="ms-2 me-2">
            <a href="{{ route('user.index') }}" class="btn btn-success">Pagina Inicial</a><br>
        </span>
        <h2 class="mb-3 text-center mt-2">Cadastrar Usuário</h2>



        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">
                    {{ $error }}
                </p>
            @endforeach
        @endif
        <form action="{{ route('user-store') }}" method="post">
            @csrf
            @method('post')
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control form-control-sm" id="name" required placeholder="Nome Completo">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" required placeholder="Digite um email valido">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Senha com pelo menos 6 caracteres">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
        </form>

    </div>
    


    </form>

@endsection