@extends('layout.homeAluno')
	@section('conteudo')
	<div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
        	<br><br>
            <h2 class="text-info">Visualize suas notas</h2>
        </div> 
	    <div class="row">		    	
			    	<div class="jumbotron bg-light border border-secondary col-lg-7">
			    			<div class="text-center" style="margin-bottom: 3em;">
	            				<h2 class="text-info">Qual turma deseja ver?</h2>
	        				</div>
					        <div class="card-deck text-center">
					            <div class="card border border-primary">
					                <div class="card-body">
					                    <h5 class="card-title">Escolha uma turma ao qual você pertence:</h5>
					                    <form action="/aluno/visualizarNotas/turmaEscolhida" method="POST">
							            @csrf
								            <table class="table table-ordered table-hover" id="tabela2">
												<thead class="thead-dark">
												    <tr>
												     	<th scope="col">Informações da turma</th>
												      	<th scope="col">.....</th>
												    </tr>
												</thead>
												<tbody>
												  	@if(isset($turmasAluno))	
															    @foreach($turmasAluno as $a)
															    	@foreach($turmas as $t)
															    		@if($t->id == $a->id_turma)
																    		@foreach($cursos as $c)
																    		<tr>
																    			@if($c->id == $t->curso_id)
																    				<td>
																    					{{$c->nome}} - Nível: {{$t->nivel}} às {{$t->horario}} ({{$t->diaDaSemana}})	
																    				</td>
																    				<td>
																    					<a class="btn btn-md btn-success" href="/aluno/visualizarNotas/turmaEscolhida/{{$t->id}}" >Selecionar</a>
																    				</td>
																    			@endif
																    		</tr>
																    		@endforeach
																		@endif
															      	@endforeach
															    @endforeach					
														    </tr>
													@else
														<h5><b>Desculpe, você não está vinculado a nenhuma turma no momento!!</b></h5>
													@endif
												</tbody>
											</table>
				       					</form>
					                </div>
					           </div>
					       </div>
			    	</div>
			    	<div class="jumbotron bg-light border border-secondary col-lg-5">
			    			<div class="text-center" style="margin-bottom: 3em;">
	            				<h2 class="text-info">Valor e composição</h2>
	        				</div>
				        	<div class="card-deck">
					            <div class="card border border-primary">
					                <div class="card-body">
					                    <h5 class="card-title">Veja o valor e a composição de suas notas</h5>
					                    @if(isset($notas))
					                    	@if($class->id == 1 || $class->id == 2)

					                    		@if(($notas->nota1 != null))
						                    		<label for="valor1"><b>Média 1:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota1}}"  name="valor1" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota1}}"
								                    data-descricao="{{$notas->descricao1}}">
								                    Composição</button><br>
								                    <hr>
							                    @endif

							                    @if(($notas->nota2 != null))
								                    <label for="valor2"><b>Média 2:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota2}}"  name="valor2" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota2}}"
								                    data-descricao="{{$notas->descricao2}}">
								                    Composição</button><br>
								                    <hr>
							                    @endif

							                    @if(($notas->nota3 != null))
								                    <label for="valor3"><b>Média 3:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota3}}"  name="valor3" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota3}}"
								                    data-descricao="{{$notas->descricao3}}">
								                    Composição</button><br>
								                    <hr>
								                @endif

								                @if(($notas->nota4 != null))
								                    <label for="valor4"><b>Média 4:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota4}}"  name="valor4" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota4}}" data-descricao="{{$notas->descricao4}}">
								                    Composição</button><br>
								                    <hr>
							                    @endif

							                    @if(($notas->nota5 != null))
								                    <label for="valor5"><b>Média 5:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota5}}"  name="valor5" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota5}}" data-descricao="{{$notas->descricao5}}">
								                    Composição</button><br>
								                    <hr>
							                    @endif
						                   	@else
						                   		@if(($notas->nota1 != null))
							                   		<label for="valor1"><b>Média 1:</b></label>
							                   		<input class="form-control" type="text" value="{{$notas->nota1}}"  name="valor1" readonly><br>
							                   		<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota1}}" data-descricao="{{$notas->descricao1}}">
							                   		Composição</button><br>
							                   		<hr>
						                   		@endif

						                   		@if(($notas->nota2 != null))
							                   		<label for="valor2"><b>Média 2:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota2}}"  name="valor2" readonly><br>
								                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota2}}" data-descricao="{{$notas->descricao2}}">
								                    Composição</button><br>
								                    <hr>
							                    @endif

							                    @if(($notas->nota3 != null))
								                    <label for="valor3"><b>Média 3:</b></label>
								                    <input class="form-control" type="text" value="{{$notas->nota3}}"  name="valor3" readonly>
													<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNotas" data-whatever="{{$notas->nota3}}" data-descricao="{{$notas->descricao3}}">
													Composição</button><br>
												@endif
						                   	@endif
										@else
											<h5><b><i>Para visualizar escolha uma turma!!</i></b></h5>	
										@endif
					                </div>
					            </div>   
				            </div>   
			        </div>   
		</div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="modalNotas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header  text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle">Composição das notas:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card border border-secondary">
                        <div class="card-body">
                        	<h5 class="modal-nota"></h5>
                        	<p class="modal-composicao"></p>
                       	</div>
                    </div>
                </div>

                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                </div>
	    	</div>
	  	</div>
	</div
@stop