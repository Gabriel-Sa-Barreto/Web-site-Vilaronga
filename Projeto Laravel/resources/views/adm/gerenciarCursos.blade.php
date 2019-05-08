@extends('layout.homeAdm')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie seus cursos e turmas</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/curso.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Cadastre uma nova turma e relacione a um curso</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarCursos/novaTurma_Curso" class="btn btn-md btn-primary">Cadastrar</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/lista.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Listagem de Turmas por cursos</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarAlunos/listagemDeTurma" class="btn btn-md btn-primary">Visualizar lista completa</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/turma.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Vincular aluno em curso e turma</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/adm/gerenciarAlunos/vincularAlunoCurso" class="btn btn-md btn-primary">Vincular aluno</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('novaTurma_Curso')
    </div>

    <div class="container">
        @yield('vincularAlunoCurso')
    </div>

    <div class="container">
        @yield('vincularTurma')
    </div>

    <div class="container">
        @yield('listagemDeTurma')
    </div>
     <div class="container">
        @yield('listagemDeTurmaAlunos')
    </div>
@stop