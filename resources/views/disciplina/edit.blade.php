@extends('layout')

@section('content')
    <main>
        <div class="container" style="margin-top: 15rem; width: auto; height: auto; background-color: #fcfcfc; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.45);">
            <h1>Editando disciplina {{ $disciplina->nome }}</h1>
            <form class="row g-3" method="post" action="{{ route('disciplina.update', $disciplina) }}">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" type="text" placeholder="Digite o seu nome" class="form-control" value="{{ $disciplina->nome }}">
                </div>
                <div class="col-6">
                    <label for="carga_horaria" class="form-label">Carga horária</label>
                    <input name="carga_horaria" type="number" placeholder="Digite a carga horária" class="form-control" value="{{ $disciplina->carga_horaria }}">
                </div>
                <div class="col-md-6">
                    <label for="data_inicio" class="form-label">Data Início</label>
                    <input name="data_inicio" type="date" placeholder="Digite a data de início" class="form-control" value="{{ $disciplina->data_inicio }}">
                </div>
                <div class="col-6">
                    <label for="data_fim" class="form-label">Data Fim</label>
                    <input name="data_fim" type="date" placeholder="Digite a data de fim" class="form-control" value="{{ $disciplina->data_fim }}">
                </div>
                <div class="col-md-6">
                    <label for="professor_id" class="form-label">Professor</label>
                    <select name="professor_id" class="form-select">
                        @foreach ($professores as $professor)
                            <option value="{{ $professor->id }}" {{ $disciplina->professor_id == $professor->id ? 'selected' : '' }}>
                                {{ $professor->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="estudante_id" class="form-label">Estudante</label>
                    <select name="estudante_id" class="form-select">
                        @foreach ($estudantes as $estudante)
                            <option value="{{ $estudante->id }}" {{ $disciplina->estudante_id == $estudante->id ? 'selected' : '' }}>
                                {{ $estudante->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </main>
@endsection
