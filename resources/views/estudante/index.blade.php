@extends('layout')

@section('content')
    <main>
        <div class="container" style="margin-top: 15rem;">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Estudantes</h1>
                <a class="btn btn-primary" href="{{ route('estudante.create') }}">Criar estudante</a>
            </div>
            @if(isset($erro) && $erro)
            <div class="alert alert-danger" role="alert">
                {{ $erro }}
            </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Data de nascimento</th>
                        <th style="width: 200px;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudantes as $estudante)
                        <tr>
                            <td>{{ $estudante->nome }}</td>
                            <td>{{ $estudante->email }}</td>
                            <td>{{ $estudante->idade }}</td>
                            <td>{{ $estudante->data_nascimento }}</td>
                            <td class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-primary" href="{{ route('estudante.edit', $estudante) }}">Editar</a>
                                <form action="{{ route('estudante.destroy', $estudante) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
