@extends('professor.gerenciarTurmas')
	@section('listagemDeAlunosTurma')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de aluno nesta turma:</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela2')" placeholder="Digite o nome do aluno" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			 
			<table class="table table-ordered table-hover" id="tabela2">
				<thead class="thead-dark">
				    <tr>
				     	<th scope="col">Nome</th>
				      	<th scope="col">Telefone</th>
				      	<th scope="col">Email</th>
				    </tr>
				</thead>
				<tbody>
				  	@if(isset($alunos))
				  		@foreach($alunos as $a)
						    <tr>	
						      <td>{{$a->nome}}</td>
						      <td>{{$a->telefone}}</td>
						      <td>{{$a->email}}</td>
						    </tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop