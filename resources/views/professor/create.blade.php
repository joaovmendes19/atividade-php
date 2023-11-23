<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar professor</title>
</head>
<body>
    <main>
        <form method="post" action="{{ route('professor.store') }}">
            @csrf
            @method('post')
            <h1>Criar um professor</h1>
             <input name="nome" type="text" placeholder="Digite o seu nome">
             <input name="email" type="text" placeholder="Digite o seu email">
             <input name="idade" type="number" placeholder="Digite a sua idade">
             <input name="data_nascimento" type="date" placeholder="Digite a sua data de nascimento">
             <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #ccc;
        cursor: pointer;
    }
</style>