@extends('adm.gerenciarAlunos')
	@section('visualizarAluno')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de aluno cadastrados</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do aluno" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			 
			<table class="table table-ordered table-hover" id="tabela">
				<thead class="thead-dark">
				    <tr>
				     	<th scope="col">Nome</th>
				      	<th scope="col">Telefone</th>
				      	<th scope="col">Email</th>
				      	<th scope="col">....</th>
				    </tr>
				</thead>
				<tbody>
				  	@if(isset($alunosCad))
				  		@foreach($alunosCad as $a)
						    <tr>	
						      <td>{{$a->nome}}</td>
						      <td>{{$a->telefone}}</td>
						      <td>{{$a->email}}</td>
						      <td><a href="/adm/gerenciarAlunos/dadosCompletos/{{$a->id}}" class="btn btn-md btn-danger">Dados Completos</a></td>
						    </tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop