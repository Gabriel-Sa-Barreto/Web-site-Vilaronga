<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Professor;
use App\Curso;
use App\Endereco;
use App\Aluno;
use App\Turma;
use App\Posse;
use App\Nota;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:administrador');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $adm = Auth::guard('administrador')->user()->nome;
        return view('admin', compact('adm'));
    }


    public function telaDeletarAluno(){
        $alunos = Aluno::all();
        return view('adm.deletarAluno', compact('alunos'));
    }

    public function salvarAluno(Request $request){
        $new_aluno = new Aluno();
        $new_aluno->nome     = $request->input('nomeAluno');
        $new_aluno->telefone = $request->input('telefone');
        $new_aluno->email    = $request->input('email');
        $new_aluno->password = Hash::make($request->input('password'));
        $new_aluno->save();

        //colocar verificação de repetição de email (algo que não pode ocorrer)

        //vinculação de endereço ao aluno cadastrado
        $aluno_endereco = new Endereco();
        $aluno_endereco->rua    = $request->input('rua');
        $aluno_endereco->numero = $request->input('numero');
        $aluno_endereco->bairro = $request->input('bairro');
        $aluno_endereco->cidade = $request->input('cidade');
        $aluno_endereco->cep    = $request->input('cep');

        $id_aluno = Aluno::where( [ ['nome',$request->input('nomeAluno')], ['email',$request->input('email')] ])->get()->first();

        $aluno_endereco->aluno_id = $id_aluno->id;
        $aluno_endereco->save();
        return redirect('/adm/gerenciarAlunos');

    }


    public function excluirAluno($id){
        $aluno = Aluno::find($id);
        if(isset($aluno)){
            //deletar o aluno,excluir ele das turmas e apagar as notas

            $aluno->delete();
        }
        return redirect('adm/gerenciarAlunos/deletar');
    }


    public function listagemDeAlunos(){
        $alunosCad = Aluno::all();
        if($alunosCad){
            return view('adm.listaDeAlunos',compact('alunosCad'));
        }
        return redirect('/adm/gerenciarAlunos');
    }

    public function dadosAluno($id){
        //retornar para a view os dados completos de um aluno requisitado, junto com os cursos que está cadastrado e as turmas 
        $userAluno = DB::table('alunos')->join('enderecos', 'id','=','aluno_id')->select('alunos.*', 'enderecos.*')->get(); //variável com campo de aluno e seu endereco
        foreach ($userAluno as $c) {
            if($c->id == $id){
                $userAluno = $c;
                break;
            }
        }
        if(isset($userAluno)){
            return view('adm.dadosCompletosAlunos',compact('userAluno'));
        }
        return redirect('/adm/gerenciarAlunos');

    }

    public function vincularAlunoCurso(){
        $cursos = Curso::all();
        if(isset($cursos)){
            return view('adm.vincularAlunoCurso',compact('cursos'));
        }
        return redirect('/adm/gerenciarCursos');

    }

    public function escolherTurma( Request $request){
        $curso  = Curso::Where('nome', $request->input('nomeCurso'))->get()->first();
        $alunos = Aluno::all(); 
        //buscar todas as turmas disponíveis para este curso
        $turma = Turma::Where('curso_id', $curso->id)->get();

        if( (count($alunos) == 0) && (count($turma) == 0)){//caso não tenha nem aluno, nem turma
             return view('adm.vincularTurma');
        }
        
        if( (count($alunos) > 0) && (count($turma) > 0)){
            return view('adm.vincularTurma',compact('curso','turma', 'alunos'));
        }else if(count($alunos) == 0 ){ 
            //caso não encontre alunos
            return view('adm.vincularTurma', compact('alunos'));
        }else{
            //caso não encontre turmas
             return view('adm.vincularTurma', compact('turma'));
        }
    }


    public function salvarVinculacao(Request $request){
        $aluno = Aluno::Where('id', $request->input('idAluno'))->get()->first();
        $turma = Turma::Where('id', $request->input('nivelTurma'))->get()->first();

        $nota           = new Nota();
        $nota->aluno_id = $aluno->id;
        $nota->id_turma = $turma->id; 
        $nota->save();
        $AlunoPosse = new Posse();
        $AlunoPosse->aluno_id = $aluno->id;
        $AlunoPosse->turma_id = $turma->id;

        //$idNota = Nota::Where('aluno_id',$aluno->id)->get()->first();
        $idNota = DB::table('notas')->select('notas.id')->Where([ ['id_turma', $turma->id], ['aluno_id', $aluno->id] ])->get()->first();
        $AlunoPosse->nota_id  = $idNota;
        $AlunoPosse->save();
        return redirect('/adm/gerenciarAlunos/vincularAlunoCurso');        
    }

    public function listagemDeTurma(){
        $cursos = Curso::all();
        if(count($cursos) > 0){
            //existe curso cadastrado
            $turma = Turma::all();
            if(count($turma) > 0){
                //existe turmas casdastradas
                return view('adm.listagemDeTurmas',compact('cursos','turma'));
            }

            //caso não existam turmas
            return view('adm.gerenciarCursos',compact('cursos'));
        }
        //caso não existam cursos
        return view('adm.gerenciarCursos');       

    }

    public function listagemDeAlunosTurma(Request $request){
        //busca as tuplas com os alunos da turma desejada
        $alunos =  DB::table('posses')->join('alunos', 'aluno_id','=','id')
                                      ->select('alunos.*')->Where('turma_id','=', $request->input('turma'))->get();
                                  
       return view('adm.listagemAlunosTurma',compact('alunos'));

    }


}
