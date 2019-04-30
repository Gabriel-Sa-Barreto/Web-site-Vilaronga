@extends('adm.gerenciarProfessores')
	@section('vincular_desvincular')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Selecione um professor desejado</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do curso" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
				  		@foreach($professores as $p)
						    <tr>	
						      <td>{{$p->nome}}</td>
						      <td>{{$p->telefone}}</td>
						      <td>{{$p->email}}</td>
						      <td>
						      	<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg" id="vincular" data-id='{{$p->id}}'>Vincular</button>
						      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg" id="desvincular">Desvincular</button>
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
	                <h5 class="modal-title" id="exampleModalLongTitle">Seus dados pessoais</h5>
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
								  	@foreach($cursos as $c)
								  		@foreach($turmas as $t)
											<tr>	
												@if($t->curso_id == $c->id)
													<td>{{$c->nome}}</td>
											    	<td>{{$t->nivel}}</td>
											    	<td>{{$t->horario}}</td>
											    	<td>{{$t->nome}}</td>
													<td><a href="/adm/gerenciarProfessores/vincular/{{}}" class="btn btn-md btn-danger">Vincular</a></td>
												@endif
											</tr>
										@endforeach
									@endforeach
								</tbody>
							</table>
		              	@endif
		              	<input type="text" class="form-control" name="meuid" id="meuid" readonly="readonly">
		              </div>
		        </div>
              	<div class="modal-footer">
               		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              	</div>
	    	</div>
	  	</div>
	</div>

	
@stop