@extends('adm.gerenciarCursos')
	@section('vincularTurma')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Selecione um aluno e escolha a turma</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do aluno" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<table class="table table-ordered table-hover" id="tabela">
				<thead class="thead-dark">
				    <tr>
				     	<th scope="col">Aluno</th>
				      	<th scope="col">telefone</th>
				      	<th scope="col">Turmas Disponíveis | Id do aluno</th>
				    </tr>
				</thead>
				<tbody>
				  	@if(( isset($alunos) && isset($turma) ) ) 
				  		@foreach($alunos as $a)
						    <tr>	
						      <td>{{$a->nome}}</td>
						      <td>{{$a->telefone}}</td>
						      <td>
						      	<form class="form-inline" action="/adm/gerenciarCursos/vincularTurma" method="POST">
						      	@csrf
						      		<div class="input-group">
										<select class="custom-select" id="nivelTurma" name="nivelTurma">
											@foreach($turma as $t)
									    		<option selected value="{{$t->id}}">{{$t->nivel}} às {{$t->horario}}</option>
									    	@endforeach
									  	</select>
									  	<input class="form-control" type="text" readonly value="Curso:{{$curso->nome}}">
									  	<input class="form-control" name="idAluno" type="text" readonly value="{{$a->id}}">
									  	<div class="input-group-append">
									    	<button type="submit" class="btn btn-outline-secondary" type="button">Vincular</button>
									  	</div>
									</div>
				            	</form>
						      </td>
						    </tr>
						@endforeach
					@else
						@if(isset($alunos))
							<h5>Não existe alunos cadastrados!!</h5>
						@endif

						@if(isset($turma))
							<h5>Não existe turmas cadastradas para esse curso!!</h5>
						@endif

						@if(!isset($alunos) && !isset($turma))
							<h5>Não existe turmas para este curso nem alunos cadastrados!!</h5>
						@endif
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop