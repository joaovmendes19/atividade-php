<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Estudante;
use App\Models\Professor;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public $disciplina;

    public function _construct(Disciplina $disciplina)
    {
        $this->disciplina = $disciplina;
    }
    // SINONIMO DE /estudante
    public function index() {
        $disciplinas = Disciplina::all();
       
        return view("disciplina.index", [
            "disciplinas" => $disciplinas,
        ]); // retornar a view estudante/index.blade.php
    }

    public function create() {
        $professores = Professor::all();
        $estudantes = Estudante::all();

        return view("disciplina.create", [
            "professores" => $professores,
            "estudantes" => $estudantes
        ]); // retornar a view estudante/create.blade.php
    }
    public function store(Request $request) {
        Disciplina::create([
            "nome" => $request->nome,
            "data_inicio" => $request->data_inicio,
            "data_fim" => $request->data_fim,
            "carga_horaria" => $request->carga_horaria,
            "professor_id" => $request->professor_id,
            "estudante_id" => $request->estudante_id
        ]); // INSERT INTO estudantes (nome, email, idade, data_nascimento) VALUES (?,?,?,?)

        $disciplinas = Disciplina::all(); // SELECT * FROM estudantes
        return view("disciplina.index", [
            "disciplinas" => $disciplinas] 
        ); // retornar a view estudante/index.blade.php
    }

    public function edit(Disciplina $disciplina) {
        $professores = Professor::all();
        $estudantes = Estudante::all();

        return view("disciplina.edit", [
            "disciplina" => $disciplina,
            "professores" => $professores,
            "estudantes" => $estudantes
        ]); // retornar a view estudante/edit.blade.php
    }

    public function update(Request $request, Disciplina $disciplina) {
      
    }

    public function destroy(Disciplina $discplina) {
        Disciplina::where("id", $discplina->id)->delete(); // DELETE FROM estudantes WHERE id = ?

        $disciplinas = Disciplina::all(); // SELECT * FROM estudantes
        return view("discplina.index", [
            "discplinas" => $disciplinas
        ]); // retornar a view estudante/index.blade.php
    }

}
