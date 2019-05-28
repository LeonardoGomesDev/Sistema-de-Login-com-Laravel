<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $fillable = ['nome', 'curso', 'matricula', 'semestre', 'status'];
    protected $guardar = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
