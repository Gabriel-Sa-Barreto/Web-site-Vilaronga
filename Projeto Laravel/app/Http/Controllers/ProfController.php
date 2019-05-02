<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Turma;
use App\Curso;

class ProfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:professor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $professor = Auth::guard('professor')->user()->nome;
        return view('professor', compact('professor'));
    }

    public function gerenciarTurmas(){
        $turmas = Turma::Where('professor_id', Auth::user()->id)->get();//busca todas as turmas que este professor pertence
        $cursos = Curso::all();
        if(count($turmas) > 0 ){
            return view('professor.gerenciarTurmas', compact('turmas', 'cursos')); //está vinculado em alguma turma.
        }else{
            return view('professor.gerenciarTurmas'); //não está vinculado em nenhuma turma.
        }
    } 

    /*Listagem de alunos em uma determinada turma ao qual o professor pertence*/
    public function alunosTurma($id){
        $turmas = Turma::Where('professor_id', Auth::user()->id)->get();//busca todas as turmas que este professor pertence
        $cursos = Curso::all();

        //busca alunos daquela turma em específico
        $alunos =  DB::table('posses')->join('alunos', 'aluno_id','=','id')
                                      ->select('alunos.*')->Where('turma_id','=',$id)->get();
        return view('professor.listagemAlunosTurma',compact('alunos','turmas','cursos'));
    }


}
