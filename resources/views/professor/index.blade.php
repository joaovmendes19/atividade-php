@extends('layout')

@section('content')
    <main>
        <div class="container" style="margin-top: 15rem;">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Professores</h1>
               
                <a class="btn btn-primary" href="{{ route('professor.create') }}">Criar professor</a>
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
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professores as $professor)
                        <tr>
                            <td>{{ $professor->nome }}</td>
                            <td>{{ $professor->email }}</td>
                            <td>{{ $professor->idade }}</td>
                            <td>{{ $professor->data_nascimento }}</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a class="btn btn-primary" href="{{ route('professor.edit', $professor) }}">Editar</a>
                                <form action="{{ route('professor.destroy', $professor) }}" method="post">
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
