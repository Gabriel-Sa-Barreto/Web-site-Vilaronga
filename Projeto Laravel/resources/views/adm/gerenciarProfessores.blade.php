@extends('layout.homeAdm')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie seus professores</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/curso.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Cadastrar um novo professor</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarProfessores/novo" class="btn btn-md btn-primary">Cadastrar</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/lista.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Deletar Professor do sistema</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarProfessores/deletar/1" class="btn btn-md btn-primary">Visualizar lista completa</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/turma.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Vincular/Desvincular professor a turma</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/adm/gerenciarProfessores/vincularDesvincular/2" class="btn btn-md btn-primary">Vincular</a>
                        <a href="/vilarongacursos/adm/gerenciarProfessores/vincularDesvincular/3" class="btn btn-md btn-primary">Desvincular</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('novoProfessor')
    </div>
    <div class="container">
        @yield('deletar')
    </div>

    <div class="container">
        @yield('vincular_desvincular')
    </div>
@stop