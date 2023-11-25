<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Título Aqui</title>
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
            width: 400px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<main>
    <form method="post" action="{{ route('disciplina.store') }}">
        @csrf
        @method('post')
        <h1>Criar uma disciplina</h1>
        <input name="nome" type="text" placeholder="Digite o seu nome">
        <input name="data_inicio" type="date" placeholder="Digite a data de início">
        <input name="data_fim" type="date" placeholder="Digite a data de fim">
        <input name="carga_horaria" type="number" placeholder="Digite a carga horária">
        <select name="professor_id">
            @foreach ($professores as $professor)
                <option value="{{$professor->id}}">{{$professor->nome}}</option>
            @endforeach
        </select>
        <input name="estudante_id" type="number" placeholder="Digite o id do estudante">
        <button type="submit">Salvar</button>
    </form>
</main>

</body>
</html>
