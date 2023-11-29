@extends('layout')
@section('content')
    <main>
        <div class="container" style="margin-top: 15rem; width: auto; height: 430px; background-color: #fcfcfc; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.45);">
            <p class="h2">Criar Disciplina</p>
            <form class="row g-3" method="post" action="{{ route('disciplina.store') }}">
                @csrf
                @method('post')
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" type="text" placeholder="Digite o seu nome" class="form-control">
                </div>
                <div class="col-6">
                    <label for="carga_horaria" class="form-label">Carga horária</label>
                    <input name="carga_horaria" type="number" placeholder="Digite a carga horária" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="data_inicio" class="form-label">Data Início</label>
                    <input name="data_inicio" type="date" placeholder="Digite a data de início" class="form-control">
                </div>
                <div class="col-6">
                    <label for="data_fim" class="form-label">Data Fim</label>
                    <input name="data_fim" type="date" placeholder="Digite a data de fim" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="professor_id" class="form-label">Professor</label>
                    <select name="professor_id" class="form-select">
                        @foreach ($professores as $professor)
                            <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="estudante_id" class="form-label">Estudante</label>
                    <select name="estudante_id" class="form-select">
                        @foreach ($estudantes as $estudente)
                            <option value="{{ $estudente->id }}">{{ $estudente->nome }}</option>
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
