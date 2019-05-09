@extends('layout.homeProfessor')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie seus avisos</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/notification.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Cadastre um aviso</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/aviso/criar" class="btn btn-md btn-primary">Realizar um aviso</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/calendar.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Visualizar lista de avisos</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/vilarongacursos/aviso/lista" class="btn btn-md btn-primary">Lista de avisos</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('conteudoAviso')
    </div>
    <div class="container">
        @yield('visualizarAvisos')
    </div>
@stop