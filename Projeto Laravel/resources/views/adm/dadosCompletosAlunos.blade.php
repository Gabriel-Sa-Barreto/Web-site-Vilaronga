@extends('adm.gerenciarAlunos')
	@section('visualizarDadosAluno')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista de dados completa</h4></b>
			<div class="container">
				<div class="text-left">
                    <b><h4>Conta:</h4></b>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i><h5>Nome Completo:</h5></i> <p>{{$userAluno->nome}}</p>
                    </div>
                    <div class="col-md-4">
                        <i><h5>Telefone:</h5></i> <p>{{$userAluno->telefone}}</p>
                    </div>

                    <div class="col-md-4">
                        <i><h5>Email:</h5></i><p>{{$userAluno->email}}</p>
                    </div>
                </div>
                <div class="text-left">
                    <b><h4>Endereço:</h4></b>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <i><h5>Rua:</h5></i> <p>{{$userAluno->rua}}</p> 
                    </div>
                    <div class="col-md-3">
                        <i><h5>Bairro:</h5></i> <p>{{$userAluno->bairro}}</p>
                    </div>
                    <div class="col-md-3">
                        <i><h5>Numero:</h5></i>  <p>{{$userAluno->numero}}</p>
                    </div>
                    <div class="col-md-3">
                        <i><h5>Cidade:</h5></i>  <p>{{$userAluno->cidade}}</p>
                    </div>
                </div>
                <i><h5>Cep:</h5></i>  <p>{{$userAluno->cep}}</p>    
            </div>
		</div>
	</div>
@stop