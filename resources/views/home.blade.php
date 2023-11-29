@extends('layout')

@section('content')
<main class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
    <div class="card text-center" style="width: 25rem;">
        <div class="card-header">
            <h2>Escolha uma das opções abaixo para acessar:</h2>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="{{ route('disciplina.index') }}" class="btn btn-primary btn-lg w-100">Disciplina</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('estudante.index') }}" class="btn btn-success btn-lg w-100">Estudante</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('professor.index') }}" class="btn btn-info btn-lg w-100">Professor</a>
            </li>
        </ul>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
