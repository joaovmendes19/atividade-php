@extends('layout')

@section('content')
    <main>
        <div class="container" style="margin-top: 15rem; width: auto; height: 430px; background-color: #fcfcfc; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.45);">
            <form class="row g-3" method="post" action="{{ route('estudante.update', $estudante) }}">
                @csrf
                @method('put')
                <h1>Editando estudante {{ $estudante->nome }}</h1>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" type="text" placeholder="Digite o seu nome" class="form-control" value="{{$estudante->nome}}">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" placeholder="Digite o seu email" class="form-control" value="{{$estudante->email}}">
                </div>
                <div class="col-md-6">
                    <label for="idade" class="form-label">Idade</label>
                    <input name="idade" type="number" placeholder="Digite a sua idade" class="form-control" value="{{$estudante->idade}}">
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input name="data_nascimento" type="date" placeholder="Digite a sua data de nascimento" class="form-control" value="{{$estudante->data_nascimento}}">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </main>
@endsection
