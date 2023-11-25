<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar professor</title>
</head>
<body>
    <main>
        <form method="post" action="{{ route('professor.update', $professor) }}">
            @csrf
            @method('put')
            <h1>Editando professor {{ $professor->nome }}</h1>
             <input name="nome" type="text" placeholder="Digite o seu nome" value="{{$professor->nome}}">
             <input name="email" type="text" placeholder="Digite o seu email" value="{{$professor->email}}">
             <input name="idade" type="number" placeholder="Digite a sua idade" value="{{$professor->idade}}">
             <input name="data_nascimento" type="date" placeholder="Digite a sua data de nascimento" value="{{$professor->data_nascimento}}">
             <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>

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