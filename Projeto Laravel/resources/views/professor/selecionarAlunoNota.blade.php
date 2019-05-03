@extends('professor.gerenciarTurmas')
	@section('selecionarAlunoNota')
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
				      	<th scope="col">Email</th>
				      	<th scope="col">Escolha uma Nota</th>
				    </tr>
				</thead>
				<tbody>
				  	@if(isset($alunos))
				  		@foreach($alunos as $a)
						    <tr>	
						      <td>{{$a->nome}}</td>
						      <td>{{$a->email}}</td>
						      <td>
						        	<form class="form-inline" action="/professor/gerenciarTurmas/notasTurma/salvar" method="POST">
						      		@csrf
						      			<div class="input-group">
											<select class="custom-select" id="notaEscolhida" name="notaEscolhida">
												<option selected value="1">Nota 1</option>
												<option selected value="2">Nota 2</option>
												<option selected value="3">Nota 3</option>
												<option selected value="4">Nota 4</option>								    		
										  	</select>
										  	<input type="hidden" id="idTurma" name="idTurma" value="{{$id_turma}}">
										  	<input type="hidden" id="idAluno" name="idAluno" value="{{$a->id}}">
									    	<button type="submit" class="btn btn-outline-secondary" type="button">Selecionar</button>
									  	</div>
						      		</form>
						      </td>
						    </tr>
						@endforeach
					@else
						<h5>Não existe alunos cadastrados nessa turma!!</h5>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop