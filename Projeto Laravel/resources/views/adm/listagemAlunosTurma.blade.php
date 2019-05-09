@extends('adm.gerenciarCursos')
	@section('listagemDeTurmaAlunos')

	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Alunos na turma selecionada</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','materias')" placeholder="Digite o nivel da turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<table class="table table-ordered table-hover" id="materiais">
				<thead class="thead-dark">
				    <tr>
				     	<th scope="col">Nome</th>
				      	<th scope="col">Email</th>
				      	<th scope="col">.....</th>
				    </tr>
				</thead>
				<tbody>
					@if(isset($alunos))
					  	@foreach($alunos as $c)
							<tr>	
							    <td>{{$c->nome}}</td>
							    <td>{{$c->email}}</td>
							    <td>
							    	<a href="/adm/gerenciarCursos/listagemDeTurma/visualizar/deletarAluno/{{$c->id}}/{{$c->id_turma}}" class="btn btn-md btn-danger">Excluir</a>
							    </td>
						@endforeach
					@else
						<h5>Não existe alunos nessa turma!!</h5>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop