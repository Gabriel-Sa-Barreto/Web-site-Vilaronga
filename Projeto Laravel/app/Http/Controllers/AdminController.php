<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Professor;
use App\Curso;
use App\Endereco;
use App\Aluno;

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
        return view('admin');
    }

    public function telaCriarProfessor(){
        $cursos = Curso::all();
        return view('novoProfessor', compact('cursos')); //exibi formulário para criação de um novo professor
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfessor(Request $request)
    {
        $new_professor = new Professor();
        $new_professor->nome = $request->input('nomeProfessor');
        $new_professor->telefone = $request->input('telefone');
        $new_professor->email = $request->input('email');
        $new_professor->password = Hash::make($request->input('senha'));

        $nomeCurso = $request->input('nomeCurso');
        //busca ID do curso que será vinculado à turma que está sendo criada.
        $cursoID = Curso::Where('nome', $nomeCurso)->get()->first();
        $new_professor->curso_id = $cursoID->id;
        $new_professor->save();
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





}
