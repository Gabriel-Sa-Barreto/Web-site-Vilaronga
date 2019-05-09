@extends('layout.homeAdm')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie seus alunos</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/aluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Novo Aluno</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarAlunos/novo" class="btn btn-md btn-primary">Cadastrar novo aluno</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/deletarAluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Deletar aluno</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarAlunos/deletar" class="btn btn-md btn-primary">Deletar</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/listarAluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Visualizar lista de alunos</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarAlunos/listagem" class="btn btn-md btn-primary">Lista de alunos</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('conteudoAluno')
    </div>
    <div class="container">
        @yield('deletar')
    </div>
    <div class="container">
        @yield('visualizarAluno')
    </div>

    <div class="container">
        @yield('visualizarDadosAluno')
    </div>
@stop