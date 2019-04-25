<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Endereco;
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
       
        return view('alunos.dados');
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
        return redirect('/aluno/dados');
    }


}
