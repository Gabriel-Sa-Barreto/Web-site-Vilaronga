@extends('adm.gerenciarCursos')
	@section('listagemDeTurma')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Veja todas as turmas cadastradas por curso</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do curso" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<table class="table table-ordered table-hover" id="tabela">
				<thead class="thead-dark">
				    <tr>
				     	<th scope="col">Curso</th>
				      	<th scope="col">Turmas Disponíveis</th>
				    </tr>
				</thead>
				<tbody>
				  	@if(( isset($cursos) && isset($turma) ) ) 
				  		@foreach($cursos as $c)
						    <tr>	
						      <td>{{$c->nome}}</td>
						      <td>
						      	<form class="form-inline" action="/adm/gerenciarCursos/listagemDeTurma/visualizar" method="POST">
						      	@csrf
						      		<div class="input-group">
										<select class="custom-select" id="turma" name="turma">
												@foreach($turma as $t)
													@if($t->curso_id == $c->id)
														<option selected value="{{$t->id}}">{{$t->nivel}} às {{$t->horario}} ({{$t->diaDaSemana}})</option>
													@endif
												@endforeach								    		
									  	</select>
									  	@foreach($turma as $t) <!-- somente mostra visualização caso exista alguma turma disponível -->
												@if($t->curso_id == $c->id)
													<button type="submit" class="btn btn-outline-secondary" type="button" style="margin-right:5px;">
														Visualizar
													</button>
													<a href="/adm/gerenciarCursos/deletarTurma/{{$t->id}}" class="btn btn-outline-danger">Deletar Turma</a>
													@break;
												@endif
										@endforeach					
									  	</div>
									</div>
				            	</form>
						      </td>
						    </tr>
						@endforeach
					@else
						@if(isset($cursos))
							<h5>Não existe turmas cadastrados!!</h5>
						@endif
s
						@if(!isset($cursos) && !isset($turma))
							<h5>Não existe turmas nem cursos cadastrados!!</h5>
						@endif
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop