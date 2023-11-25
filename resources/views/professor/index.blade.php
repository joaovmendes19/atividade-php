<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        main {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px; /* Ajuste conforme necessário */
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        a.edit {
            text-decoration: none;
            margin-right: 10px;
        }

        a.delete {
            color: #e74c3c;
            text-decoration: none;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<main>
    <div>
        <h1>Professores</h1>
        <a href="{{route('professor.create')}}">Criar professor</a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Data de nascimento</th>
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
                    <td style="display: flex; justify-content: center; align-items: center;">
                        <a class="edit" href="{{route('professor.edit', $professor)}}">Editar</a>
                        <form style="display: inline-block;" action="{{route('professor.destroy', $professor)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>

</body>
</html>
