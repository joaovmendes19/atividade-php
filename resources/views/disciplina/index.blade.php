@extends('layout')
@section('content')
    <main>
        <div class="container" style="margin-top: 15rem">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Disciplinas</h1>
                <a class="btn btn-primary" href="{{ route('disciplina.create') }}">Criar disciplina</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data Início</th>
                        <th>Data Fim</th>
                        <th>Carga Horária</th>
                        <th>Professor</th>
                        <th>Estudante</th>
                        <th  style="width: 200px;">Ações</th>
                </thead>
                <tbody>
                    @foreach ($disciplinas as $disciplina)
                        <tr>
                            <td scope="row">{{ $disciplina->nome }}</td>
                            <td>{{ $disciplina->data_inicio }}</td>
                            <td>{{ $disciplina->data_fim }}</td>
                            <td>{{ $disciplina->carga_horaria }}</td>
                            <td>{{ $disciplina->professor->nome }}</td>
                            <td>{{ $disciplina->estudante->nome }}</td>
                            <td class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-primary" href="{{ route('disciplina.edit', $disciplina) }}">Editar</a>
                                <form action="{{ route('disciplina.destroy', $disciplina) }}" method="post">
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
