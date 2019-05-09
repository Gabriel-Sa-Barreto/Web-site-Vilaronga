@extends('adm.gerenciarProfessores')
	@section('vincular_desvincular')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Selecione um professor desejado</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do professor" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
				  	@if(isset($professores))
				  		<h5>O professor automaticamente será retirado ou colocado na turma escolhida!!</h5>
				  		@if(isset($erro))
				  			<h5>Já existe um professor nessa turma!!</h5>
				  		@endif
				  		@foreach($professores as $p)
						    <tr>	
						      <td>{{$p->nome}}</td>
						      <td>{{$p->telefone}}</td>
						      <td>{{$p->email}}</td>
						      <td>
						      	@if($opcao == 1)
						      		<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg" id="desvincularVincular" data-id='{{$p->id}}:{{$p->nome}}'>Vincular</button>
						      	@else
						      		<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg" id="desvincularVincular" data-id='{{$p->id}}:{{$p->nome}}'>Desvincular</button>
						      	@endif
						      </td>
						    </tr>
						@endforeach
					@else
						<h5>Não existe professores cadastrados!!</h5>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header text-center">
	      			@if($opcao == 1)
	                	<h5 class="modal-title" id="exampleModalLongTitle">Escolha uma turma para vinculação:</h5>
	                @else
	                	<h5 class="modal-title" id="exampleModalLongTitle">Escolha uma turma para desvinculação:</h5>
	                @endif
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                </button>
              	</div>
              	<div class="card border border-secondary">
					<div class="card-body">
		              	@if(isset($cursos) && isset($turmas))
		              		<table class="table table-ordered table-hover" id="tabela">
								<thead class="thead-dark">
								    <tr>
								     	<th scope="col">Curso</th>
								      	<th scope="col">Turma</th>
								      	<th scope="col">Horário</th>
								      	<th scope="col">Dia da semana</th>
								      	<th scope="col">....</th>
								    </tr>
								</thead>
								<tbody>
									<input type="text" class="form-control" name="nomeProfessor" id="nomeProfessor" readonly="readonly">
										  	@foreach($cursos as $c)
										  		@foreach($turmas as $t)
													<tr>	
														@if($t->curso_id == $c->id)
															<td>{{$c->nome}}</td>
													    	<td>{{$t->nivel}}</td>
													    	<td>{{$t->horario}}</td>
													    	<td>{{$t->nome}}</td>
															<td>
																@if($opcao == 1)
																	<form class="form-inline" action="/vilarongacursos/adm/gerenciarProfessores/vincular" method="POST">
							      									@csrf
							      								@else
							      									<form class="form-inline" action="/vilarongacursos/adm/gerenciarProfessores/desvincular" method="POST">
							      									@csrf
							      								@endif
																	<input type="hidden" name="idTurma" value="{{$t->id}}" readonly="readonly">
																	<input type="hidden" id="idProfessor" name="idProfessor" readonly="readonly">			
																	<button type="submit" class="btn btn-outline-primary" type="button">Selecionar</button>
																</form>
															</td>
														@endif
													</tr>
												@endforeach
											@endforeach
								</tbody>
							</table>
		              	@endif
		              </div>
		        </div>
              	<div class="modal-footer">
               		<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
              	</div>
	    	</div>
	  	</div>
	</div>

	
@stop