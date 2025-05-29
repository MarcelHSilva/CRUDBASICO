@extends('layouts.admin')

@section('content')

    <div class="card  mt-2 mb-2 border-light shadow">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="{{ route('user.index') }}" class="btn btn-primary">Home</a>
            </div>
            <div>
                <a href="{{ route('colaboradores.store') }}" class="btn btn-success">Criar Colaborador</a>
            </div>
        </div>

        @if(session('success'))
            <p style="color: green">
                {{ session('success') }}
            </p>
        @endif

        <h2 class="mb-4 text-center mt-2">Lista de Colaboradores</h2>

        <table class="table-secondary table">
            <thead>
                <tr>
                    <th scope="col">NR</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @forelse($colaboradores as $colaborador)
                    <tr>
                        <th scope="row">{{ $colaborador->id }}</th>
                        <td>{{ $colaborador->nome }}</td>
                        <td>{{ $colaborador->email }}</td>
                        <td>{{ $colaborador->cargo }}</td>
                        <td>{{ $colaborador->telefone }}</td>
                        <td>
                            <a href="{{ route('colaboradores.mostrar', $colaborador->id) }}"
                                class="btn btn-primary">Detalhes</a>
                            <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum colaborador cadastrado</td>
                    </tr>
                @endforelse

            </tbody>

        </table>
    </div>


@endsection