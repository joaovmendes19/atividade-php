<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = "disciplinas";

    protected $fillable = [
        'nome',
        'data_inicio',
        'data_fim',
        'carga_horaria',
        'professor_id',
        'estudante_id'
    ];

    public function professor() {
        return $this->belongsTo(Professor::class);
    }

    public function estudante() {
        return $this->belongsTo(Estudante::class);
    }
}
