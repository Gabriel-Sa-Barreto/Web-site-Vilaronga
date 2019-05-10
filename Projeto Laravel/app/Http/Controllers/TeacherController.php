<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Professor;
use App\Curso;
use App\Turma;
use App\Aluno;
use Auth;

class TeacherController extends Controller
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
        if(Auth::guard('administrador')->check()){
            //se o adm estiver logado
            $cursos = Curso::all();
            return view('adm.novoProfessor',compact('cursos'));
        }else{
            return redirect('/');//redireciona para a home_page do site
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_professor = new Professor();
        $new_professor->nome = $request->input('nomeProfessor');
        $new_professor->telefone = $request->input('telefone');
        $new_professor->email = $request->input('email');
        $new_professor->password = Hash::make($request->input('senha'));
        $busca = Professor::Where('email',$request->input('email'))->get()->first();
        if(isset($busca)){//já existe professor com este email
            return redirect('/adm/gerenciarProfessores/novo');
        }
        $new_professor->save();
        return redirect('/adm/gerenciarProfessores/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $professor = Professor::Where('id',$id)->get()->first(); //busca os dados do professor.
        if(isset($professor)){//caso ache o professor desejado 
            $turmas = Turma::Where('professor_id', $id)->get();//busca todas as turmas que este professor pertence
            foreach ($turmas as $t) {
                $t->professor_id = null;
                $t->save();
            }
            $professor->delete();
            return redirect('/adm/gerenciarProfessores/deletar/1');
        }
        return redirect('/adm/gerenciarProfessores/deletar/1');
    }


    public function listagemDeProfessores($opcao){
        if(Auth::guard('administrador')->check()){
            $professores = Professor::All();
            if(count($professores) > 0){
                if($opcao == 1){//para deletar   
                    return view('adm.deletarProfessor', compact('professores'));
                }else if($opcao == 2){//para vincular um professor
                    $cursos  = Curso::all();
                    $turmas = Turma::all();
                    $opcao = 1; 
                    return view('adm.vincular_desvincularProfessor', compact('professores', 'cursos', 'turmas','opcao'));
                }else if ($opcao == 3){//para desvincular um professor.
                    $cursos  = Curso::all();
                    $turmas = Turma::all();
                    $opcao = 2; 
                    return view('adm.vincular_desvincularProfessor', compact('professores', 'cursos', 'turmas','opcao'));
                }
            }else{//caso não existam professores cadastrados.
                if($opcao == 1){//para deletar   
                    return view('adm.deletarProfessor');
                }else if($opcao == 2){//para vincular um professor
                    $cursos  = Curso::all();
                    $turmas = Turma::all();
                    $opcao = 1;
                    return view('adm.vincular_desvincularProfessor', compact('professores', 'cursos', 'turmas','opcao'));
                }else if($opcao == 3){//para vincular um professor
                    $cursos  = Curso::all();
                    $turmas = Turma::all();
                    $opcao = 2;
                    return view('adm.vincular_desvincularProfessor', compact('professores', 'cursos', 'turmas','opcao'));
                }
            }
        }else{
            return redirect('/');
        }
    }

    public function vincular(Request $request){
        if(Auth::guard('administrador')->check()){
            $professores = Professor::all();
            $turma = Turma::Where('id',$request->input('idTurma'))->get()->first(); //retorna a turma desejada
            if($turma->professor_id != null){ //já existe professor nessa turma
                $erro = 0;
                $cursos  = Curso::all();
                $turmas = Turma::all();
                $opcao = 1; 
                return view('adm.vincular_desvincularProfessor', compact('professores', 'cursos', 'turmas','opcao','erro'));
            }else{
                $turma->professor_id = $request->input('idProfessor');
                $turma->save();
            }
            return redirect('/adm/gerenciarProfessores/vincularDesvincular/2');
        }else{
            return redirect('/');
        }

    }

    public function desvincular(Request $request){
        if(Auth::guard('administrador')->check()){
            $professores = Professor::all();
            $turma = Turma::Where('id',$request->input('idTurma'))->get()->first(); //retorna a turma desejada
            if($turma->professor_id == $request->input('idProfessor')){
                $turma->professor_id = null;
                $turma->save();
                return redirect('/adm/gerenciarProfessores/vincularDesvincular/3');
            }else{
                //o professor não pertece à turma escolhida
                return redirect('/adm/gerenciarProfessores/vincularDesvincular/3');    
            }
        }else{
            return redirect('/');
        }

    }
}
