@extends('layout.homeProfessor')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie seus materiais</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/upload.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Upload de material para uma turma</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/material/criar" class="btn btn-md btn-primary">Realizar Upload</a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/img/book.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Visualizar lista de materiais</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="/material/lista" class="btn btn-md btn-primary">Lista de materiais</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('conteudoMaterial')
    </div>
    <div class="container">
        @yield('visualizarMaterial')
    </div>
@stop