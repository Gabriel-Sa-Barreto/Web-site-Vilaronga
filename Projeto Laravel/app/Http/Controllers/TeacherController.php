<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Professor;
use App\Curso;
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

        $nomeCurso = $request->input('nomeCurso');
        //busca ID do curso que será vinculado à turma que está sendo criada.
        $cursoID = Curso::Where('nome', $nomeCurso)->get()->first();
        $new_professor->curso_id = $cursoID->id;
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
