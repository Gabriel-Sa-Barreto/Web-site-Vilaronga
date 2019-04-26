@extends('layout.homeAdm')
	@section('conteudo')
    <div class="container">
    	<div class="row">
    		<div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/aluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Cadastrar nova turma ou curso</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarCursos/novaTurma_Curso" class="btn btn-md btn-primary">Cadastrar</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/deletarAluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Cadastrar novo Curso</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarAlunos/deletar" class="btn btn-md btn-primary">Novo curso</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/listarAluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Vincular aluno em uma turma</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarAlunos/listagem" class="btn btn-md btn-primary">Vincular aluno</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('novaTurma_Curso')
    </div>
    
    </div>
@stop