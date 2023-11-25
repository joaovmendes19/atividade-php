<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>
<body>
    <main>
        <div>
            <h1>Disciplinas</h1>
            <a href="{{route('disciplina.create')}}">Criar disciplina</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data Início</th>
                    <th>Data Fim</th>
                    <th>Carga Horária</th>
                    <th>Professor</th>
                    <th>Estudante</th>
                </tr>
                @foreach ($disciplinas as $disciplina)
                    <tr>
                        <td>{{ $disciplina->nome }}</td>
                        <td>{{ $disciplina->data_inicio }}</td>
                        <td>{{ $disciplina->data_fim }}</td>
                        <td>{{ $disciplina->carga_horaria }}</td>
                        <td>{{ $disciplina->professor->nome }}</td>
                        <td>{{ $disciplina->estudante->nome }}</td>
                        <td><a href="{{route('disciplina.edit', $disciplina)}}">Editar</a></td>
                        <td>
                            <form action="{{route('disciplina.destroy', $disciplina)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </main>
</body>
</html>

<style>
    main {
        display: flex;
        justify-content: start;
        align-items: center;
        height: 100vh;
        flex-direction: column;

        padding-top: 50px;
    }

    main div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        gap: 15px;
        padding: 10px;
    }

    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
    }

    button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #ccc;
        cursor: pointer;
    }
</style>