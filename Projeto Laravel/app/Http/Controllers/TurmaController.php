<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Curso;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cursos = Curso::all(); //retorna todos os cursos disponíveis no banco para associação com uma nova turma.
       return view('adm.novaTurma_Cursos', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_turma = new Turma();
        $new_turma->nivel      = $request->input('nivel');
        $new_turma->horario    = $request->input('horario');

        $nomeCurso = $request->input('nomeCurso');

        //busca ID do curso que será vinculado à turma que está sendo criada.
        $cursoID = Curso::Where('nome', $nomeCurso)->get()->first();

        $new_turma->curso_id = $cursoID->id;

        $new_turma->save();
        return redirect('/adm/gerenciarCursos/novaTurma_Curso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
