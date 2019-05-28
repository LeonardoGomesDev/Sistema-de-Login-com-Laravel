<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        $total = Aluno::all()->count();
        return view('listar-aluno', compact('alunos', 'total'));
    }

    public function create() {
        return view('incluir-aluno');
    }

    public function store(Request $request) {
        $alunos = new Aluno;
        $alunos->nome = $request->nome;
        $alunos->curso = $request->curso;
        $alunos->matricula = $request->matricula;
        $alunos->semestre = $request->semestre;
        $alunos->status = $request->status;
        $alunos->save();
        return redirect()->route('aluno.index')->with('message', 'Informação criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $alunos = Aluno::findOrFail($id);
        return view('alterar-aluno
        ', compact('alunos'));
    }

    public function update(Request $request, $id) {
        $alunos = Aluno::findOrFail($id); 
        $alunos->nome = $request->nome;
        $alunos->curso = $request->curso;
        $alunos->matricula = $request->matricula;
        $alunos->semestre = $request->semestre;
        $alunos->status = $request->status;
        $alunos->save();
        return redirect()->route('aluno.index')->with('message', 'Informação atualizada com sucesso!');
    }

    public function destroy($id) {
        $alunos = Aluno::findOrFail($id);
        $alunos->delete();
        return redirect()->route('aluno.index')->with('message', 'Aluno excluído com sucesso!');
    }


}
