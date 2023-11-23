<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes</title>
</head>
<body>
    <main>
        <div>
            <h1>Estudantes</h1>
            <a href="{{route('estudante.create')}}">Criar estudante</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Data de nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudantes as $estudante)
                    <tr>
                        <td>{{ $estudante->nome }}</td>
                        <td>{{ $estudante->email }}</td>
                        <td>{{ $estudante->idade }}</td>
                        <td>{{ $estudante->data_nascimento }}</td>
                        <td><a href="{{route('estudante.edit', $estudante)}}">Editar</a></td>
                        <td>
                            <form action="{{route('estudante.destroy', $estudante)}}" method="post">
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