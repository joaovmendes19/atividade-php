<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar disciplina</title>
</head>
<body>
    <main>
        <form method="post" action="{{ route('disciplina.update', $disciplina) }}">
            @csrf
            @method('put')
            <h1>Editando disciplina {{ $disciplina->nome }}</h1>
            <input name="nome" type="text" placeholder="Digite o seu nome" value="{{$disciplina->nome}}">
            <input name="data_inicio" type="date" placeholder="Digite a data de início" value="{{$disciplina->data_inicio}}">
            <input name="data_fim" type="date" placeholder="Digite a data de fim" value="{{$disciplina->data_fim}}">
            <input name="carga_horaria" type="number" placeholder="Digite a carga horária" value="{{$disciplina->carga_horaria}}">
            <select name="professor_id">
                @foreach ($professores as $professor)
                    <option value="{{$professor->id}}" {{$disciplina->professor_id == $professor->id ? 'selected' : ''}}
                        >{{$professor->nome}}</option>
                @endforeach
            </select>
         {{--    seguinte, isso é um if ternario, mas é a mesma coisa que um if normal, o que eu to fazendo basicamente é o seguinte,
            eu enviei todos os professores para view tlgd, todos que tem na aplicação, dai eu to dentro desse foreach, pegando cada professor e comparando,
            se o id que vem dos professores é igual ao id que edo professor que eu tenho na minha disciplina, se for, ele vai colocar a propriedade
            select no meu option, ou seja, ele vai vir selecionado tlgd o professor la na pagina, se nao, nao vai vir selecionado. o if normal ficaria assim
            if($disciplina->professor_id == $professor->id) {
                colocar 'selected';
            } else {
                colocar '';
            } --}}

            <input name="estudante_id" type="number" placeholder="Digite o id do estudante">
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