<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aluno;
use App\Endereco;
use App\Turma;
use App\Nota;
use App\Curso;
use Auth;

class AlunoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:aluno');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userAluno = Aluno::Where('id',Auth::user()->id)->get()->first();
        $enderecoAluno = Endereco::Where('aluno_id',Auth::user()->id)->get()->first();
        return view('aluno', compact('userAluno','enderecoAluno'));
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $aluno = new Aluno();
        if(Auth::check()){
            $aluno         = Aluno::Where('id',Auth::user()->id)->get()->first();
            $enderecoAluno = Endereco::Where('aluno_id',Auth::user()->id)->get()->first();
            return view('alunos.dados', compact('aluno', 'enderecoAluno'));
        }
       
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::check()){
            $aluno         = Aluno::Where('id',Auth::user()->id)->get()->first();
            $enderecoAluno = Endereco::Where('aluno_id', Auth::user()->id)->get()->first();
            if(isset($aluno) && isset($enderecoAluno)){
                //realiza as modificações
                $aluno->nome             = $request->input('nomeAluno');
                $aluno->telefone         = $request->input('telefone');
                $enderecoAluno->rua      = $request->input('rua');
                $enderecoAluno->bairro   = $request->input('bairro');
                $enderecoAluno->cep      = $request->input('cep');
                $enderecoAluno->cidade   = $request->input('cidade');
                $enderecoAluno->numero   = $request->input('numero');

                $aluno->save(); //salva as alterações de aluno
                $enderecoAluno->save(); //salva as alterações do endereço do aluno
                return redirect('/aluno/dados');
            }
        }
        return redirect('/');
    }

    /**
        Método que exibi a tela para o aluno poder visualizar suas notas de acordo à turma que ele pertence.
    */
    public function telaVisualizarNota(){
        if(Auth::check()){
            $turmasAluno = Nota::Where([ ['aluno_id', Auth::user()->id], ['trimestre',1] ])->get();
            if(count($turmasAluno) > 0){//o aluno está cadastrado em alguma turma
                $cursos  = Curso::all();
                $turmas = Turma::all();
                return view('alunos.visualizarNotas', compact('turmasAluno', 'cursos', 'turmas'));
            }else{
                return view('alunos.visualizarNotas'); //caso o aluno não esteja em nenhuma turma.
            }
        }
        return redirect('/');
    }

    public function mostrarNotas(Request $request){
        $turmaId     = $request->input('idTurma');
        $trimestre   = $request->input('trimestreEscolhido');
        if(Auth::check()){
            /*$class = DB::table('cursos')->join('turmas', 'cursos.id','=','turmas.curso_id')
                                        ->select('cursos.*', 'turmas.*')->Where([['turmas.id',$turmaId], ['turmas.curso_id', 'cursos.id']])->get()->first();*/
            $class = Turma::Where('id',$turmaId)->get()->first();//retorna a turma escolhida
            $class = Curso::Where('id',$class->curso_id)->get()->first();//retorna o curso vinculado à turma encontrada   
            
            
            $notas = DB::table('notas')->Where([ ['aluno_id',Auth::user()->id] , ['id_turma', $turmaId], ['trimestre','=', $trimestre] ])->get()->first();

            $turmasAluno = Nota::Where([ ['aluno_id', Auth::user()->id] , ['trimestre',1] ])->get();
            $cursos  = Curso::all();
            $turmas = Turma::all();
            return view('alunos.visualizarNotas', compact('turmasAluno', 'cursos', 'turmas', 'notas', 'class','teste'));
        }
        return redirect('/');
    }

}
