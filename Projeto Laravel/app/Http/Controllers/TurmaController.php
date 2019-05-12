<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Turma;
use App\Curso;
use App\Nota;
use App\Aviso;
use App\Material;

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
        $new_turma->nivel         = $request->input('nivel');
        $new_turma->horario       = $request->input('horario');
        $new_turma->diaDaSemana    = $request->input('dia');

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
        if(Auth::guard('administrador')->check()){ //caso o adm esteja logado
            $turma = Turma::Where('id',$id)->get()->first(); 
            $notas = Nota::Where('id_turma',$id)->get();
            if(count($notas) > 0){//deleta a vinculação dos alunos da turma desejada
                foreach ($notas as $n) {
                    $n->delete(); 
                }
            }

            //agora deleta os avisos vinculados à essa turma
            $aviso = Aviso::Where('turma_id',$id)->get();
            if(count($aviso) > 0){
                foreach ($aviso as $a) {
                    $a->delete();
                }
            }

            $turma->delete();//agora deleta a turma
            return redirect('/adm/gerenciarAlunos/listagemDeTurma');
        }
        return redirect('/');//caso não esteja logado volta para o início do site
    }
}
