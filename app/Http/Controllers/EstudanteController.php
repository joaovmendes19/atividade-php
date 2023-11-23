<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public $estudante;

    public function _construct(Estudante $estudante)
    {
        $this->estudante = $estudante;
    }

    // SINONIMO DE /estudante
    public function index() {
        $estudantes = Estudante::all(); // SELECT * FROM estudantes

        return view("estudante.index", [
            "estudantes" => $estudantes
        ]); // retornar a view estudante/index.blade.php
    }

    public function create() {
        return view("estudante.create"); // retornar a view estudante/create.blade.php
    }

    public function store(Request $request) {
        Estudante::create([
            "nome" => $request->nome,
            "email" => $request->email,
            "idade" => $request->idade,
            "data_nascimento" => $request->data_nascimento
        ]); // INSERT INTO estudantes (nome, email, idade, data_nascimento) VALUES (?,?,?,?)

        $estudantes = Estudante::all(); // SELECT * FROM estudantes
        return view("estudante.index", [
            "estudantes" => $estudantes] 
        ); // retornar a view estudante/index.blade.php
    }

    public function edit(Estudante $estudante) {
        return view("estudante.edit", [
            "estudante" => $estudante
        ]); // retornar a view estudante/edit.blade.php
    }

    public function update(Request $request, Estudante $estudante) {
        Estudante::where("id", $estudante->id)->update([
            "nome" => $request->nome,
            "email" => $request->email,
            "idade" => $request->idade,
            "data_nascimento" => $request->data_nascimento
        ]); // UPDATE estudantes SET nome = ?, email = ?, idade = ?, data_nascimento = ? WHERE id = ?

        $estudantes = Estudante::all(); // SELECT * FROM estudantes
        return view("estudante.index", [
            "estudantes" => $estudantes
        ]); // retornar a view estudante/index.blade.php
    }

    public function destroy(Estudante $estudante) {
        Estudante::where("id", $estudante->id)->delete(); // DELETE FROM estudantes WHERE id = ?

        $estudantes = Estudante::all(); // SELECT * FROM estudantes
        return view("estudante.index", [
            "estudantes" => $estudantes
        ]); // retornar a view estudante/index.blade.php
    }

}
