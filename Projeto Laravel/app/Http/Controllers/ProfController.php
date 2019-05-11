<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Turma;
use App\Nota;
use App\Curso;
use App\Aluno;

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

        //busca alunos daquela turma em específico (somente do primeiro trimestre para evitar repetição)
        $alunos = DB::table('alunos')->join('notas', 'alunos.id','=','aluno_id')
                                      ->select('alunos.*')->Where([ ['id_turma','=', $id],['trimestre','=',1]])->get();
        return view('professor.listagemAlunosTurma',compact('alunos','turmas','cursos'));
    }

    public function listagemAlunos($id){
        $turmas = Turma::Where('professor_id', Auth::user()->id)->get();//busca todas as turmas que este professor pertence
        $cursos = Curso::all();
        //busca alunos daquela turma em específico
        $alunos =  DB::table('alunos')->join('notas', 'alunos.id','=','aluno_id')
                                      ->select('alunos.*')->Where([ ['id_turma','=', $id],['trimestre','=',1]])->get();
        $id_turma = $id; //id da turma desejada

        //busca a tupla da turma desejada para realizar a busca pelo curso 
        $class = Turma::Where('id', $id)->get()->first();
        //busca o curso ao qual aquela turma pertence.
        $cursoTurma = Curso::Where('id', $class->curso_id)->get()->first();
        if(count($alunos) > 0){
             return view('professor.selecionarAlunoNota', compact('alunos', 'id_turma', 'turmas','cursos', 'cursoTurma'));
        }
        return view('professor.selecionarAlunoNota', compact('turmas','cursos'));
    }

    /**
        Método de exibição de formulário para colocar nota e descrição
    */
    public function formularioNota(Request $request){
        $idTurma = $request->input('idTurma');
        $idAluno = $request->input('idAluno');
        $trimestre    = $request->input('trimestreEscolhido');

        $alunoNome = Aluno::Where('id', $idAluno)->get()->first(); //busca nome do aluno
        $turmaNota = Turma::Where('id', $idTurma)->get()->first(); //busca dados da turma
        $cursoNome = Curso::Where('id', $turmaNota->curso_id)->get()->first(); //busca dados do curso

        $cursos = Curso::all();
        $turmas = Turma::Where('professor_id', Auth::user()->id)->get();//busca todas as turmas que este professor pertence

        //$descricaoNota = null; 
        //$valorNota     = null;
        $aluno         = $this->notaAluno($idTurma,$idAluno,$trimestre);
        /*if($aluno != null){
            if($cursoNome->id == '1' || $cursoNome->id == '2'){//inglês ou espanhol
                switch ($nota) { //passa para a view os valores atuais da nota e da descrição, assim caso o usuário deseje editar, somente faz o complemento necessário.
                    case '1':
                        $valorNota         = $aluno->nota1; 
                        $descricaoNota     = $aluno->descricao1;
                        break;
                    case '2':
                        $valorNota         = $aluno->nota2; 
                        $descricaoNota     = $aluno->descricao2;
                        break;
                    case '3':
                        $valorNota         = $aluno->nota3; 
                        $descricaoNota     = $aluno->descricao3;
                        break;
                }
            }else{
                switch ($nota) { //passa para a view os valores atuais da nota e da descrição, assim caso o usuário deseje editar, somente faz o complemento necessário.
                    case '1':
                        $valorNota         = $aluno->nota1; 
                        $descricaoNota     = $aluno->descricao1;
                        break;
                    case '2':
                        $valorNota         = $aluno->nota2; 
                        $descricaoNota     = $aluno->descricao2;
                        break;
                    case '3':
                        $valorNota         = $aluno->nota3; 
                        $descricaoNota     = $aluno->descricao3;
                        break;
                    case '4':
                        $valorNota         = $aluno->nota4; 
                        $descricaoNota     = $aluno->descricao4;
                        break;
                    case '5':
                        $valorNota         = $aluno->nota5; 
                        $descricaoNota     = $aluno->descricao5;
                        break;
                    }
            }
        }*/
        return view('professor.nota_e_descricao', compact('alunoNome', 'turmaNota', 'nota', 'cursoNome', 'cursos','turmas', 'trimestre'));
    }


    /**
        Método responsável por salvar a nota de um aluno
    */
    public function salvarNota(Request $request){
        $idTurma    = $request->input('idTurma');
        $idAluno    = $request->input('idAluno');
        $trimestre  = $request->input('trimestre'); 
        $valorNota  = (float) $request->input('valor'); //converte de string para float
        $descricao  = $request->input('descricao');
        $nota       = $request->input('notaEscolhida');

        //busca a tupla específica que pertence ao aluno na turma desejada
        $new_nota = Nota::Where([ ['aluno_id',$idAluno], ['id_turma', $idTurma], ['trimestre',$trimestre] ])->get()->first();

        //modifica o campo desejado de nota e descrição
        switch ($nota) {
            case '1':
                $new_nota->nota1      = $valorNota;
                $new_nota->descricao1 = $descricao;
                break;
            case '2':
                $new_nota->nota2      = $valorNota;
                $new_nota->descricao2 = $descricao;
                break;
            case '3':
                $new_nota->nota3      = $valorNota;
                $new_nota->descricao3 = $descricao;
                break;
            case '4':
                $new_nota->nota4      = $valorNota;
                $new_nota->descricao4 = $descricao;
                break;
            case '5':
                $new_nota->nota5      = $valorNota;
                $new_nota->descricao5 = $descricao;
                break;
        }

        $new_nota->save(); //salva a atualização de dados
        return $this->listagemAlunos($idTurma);
    }

    /**
        Método que retorna a tupla com as notas relacionadas a um aluno em uma turma desejada
    */
    public function notaAluno($idTurma, $idAluno, $trimestre){
        $notaAluno = Nota::Where([ ['id_turma',$idTurma], ['aluno_id', $idAluno],['trimestre', $trimestre] ])->get()->first();
        if(isset($notaAluno)){
            return $notaAluno;
        }
        return null;
    }
}
