<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public $professor;

    public function _construct(Professor $professor)
    {
        $this->professores = $professor;
    }

    // SINONIMO DE /estudante
    public function index()
    {
        $professores = Professor::all(); // SELECT * FROM estudantes

        return view("professor.index", [
            "professores" => $professores
        ]); // retornar a view estudante/index.blade.php
    }

    public function create()
    {
        return view("professor.create"); // retornar a view estudante/create.blade.php
    }

    public function store(Request $request)
    {
        Professor::create([
            "nome" => $request->nome,
            "email" => $request->email,
            "idade" => $request->idade,
            "data_nascimento" => $request->data_nascimento
        ]); // INSERT INTO estudantes (nome, email, idade, data_nascimento) VALUES (?,?,?,?)

        $professores = Professor::all(); // SELECT * FROM estudantes
        return view(
            "professor.index",
            [
                "professores" => $professores
            ]
        ); // retornar a view estudante/index.blade.php
    }

    public function edit(Professor $professor)
    {
        return view("professor.edit", [
            "professor" => $professor
        ]); // retornar a view estudante/edit.blade.php
    }

    public function update(Request $request, Professor $professor)
    {
        Professor::where("id", $professor->id)->update([
            "nome" => $request->nome,
            "email" => $request->email,
            "idade" => $request->idade,
            "data_nascimento" => $request->data_nascimento
        ]); // UPDATE estudantes SET nome = ?, email = ?, idade = ?, data_nascimento = ? WHERE id = ?

        $professores = Professor::all(); // SELECT * FROM estudantes
        return view("professor.index", [
            "professores" => $professores
        ]); // retornar a view estudante/index.blade.php
    }

    public function destroy(Professor $professor)
    {
        $professor = Professor::find($professor->id);
        $disciplina = Disciplina::where("professor_id", $professor->id)->first();
        $professores = Professor::all(); // SELECT * FROM estudantes
        if ($disciplina) {
            return view("professor.index", [
                "professores" => $professores,
                "erro" => "Professor não pode ser excluído, pois está vinculado a uma disciplina"
            ]); // retornar a view estudante/index.blade.php
        }
        Professor::where("id", $professor->id)->delete(); // DELETE FROM estudantes WHERE id = ?

        return view("professor.index", [
            "professores" => $professores
        ]); // retornar a view estudante/index.blade.php

    }

}
