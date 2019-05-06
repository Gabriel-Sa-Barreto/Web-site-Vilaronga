@extends('layout.homeAluno')
	@section('conteudo')
	<div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Visualize suas notas</h2>
        </div> 
	    <div class="row">		    	
			    	<div class="jumbotron bg-light border border-secondary col-lg-6">
			    			<div class="text-center" style="margin-bottom: 3em;">
	            				<h2 class="text-info">Qual nota deseja ver?</h2>
	        				</div>
					        <div class="card-deck text-center">
					            <div class="card border border-primary">
					                <div class="card-body">
					                    <h5 class="card-title">Turma desejada </h5>
					                    <form action="/alunos/visualizarNotas/turmaEscolhida" method="POST">
							            @csrf
								            <div class="form-group">
										    	<label for="suasTurmas">Escolha uma turma que você pertence</label>
										    	<select class="form-control" id="suasTurmas">
										    	@foreach($turmasAluno as $a)
										    		@foreach($turmas as $t)
										    			@if($a->id_tuma == $t->id)
											    			@foreach($cursos as $c)
											    				@if($c->id == $t->curso_id)
													      			<option value="{{$t->id_turma}}">
													      				Curso:{{$c->nome}}; Nível:{{$t->nivel}} às {{$t->horario}}({{$t->diaDaSemana}}) 
													      			</option>
											      				@endif
											      			@endforeach
										      			@endif
										      		@endforeach
										      	@endforeach
										    	</select>
										  	</div>
								            <button type="submit" class="btn btn-md btn-primary">Selecionar</button>
				       					</form>
					                </div>
					           </div>
					       </div>
			    	</div>
			    	<div class="jumbotron bg-light border border-secondary col-lg-6">
			    			<div class="text-center" style="margin-bottom: 3em;">
	            				<h2 class="text-info">Valor e composição</h2>
	        				</div>
				        	<div class="card-deck">
					            <div class="card border border-primary">
					                <div class="card-body">
					                    <h5 class="card-title">Veja o valor e a composição de suas notas</h5>
					                    @if(isset($turmasAluno))
						                    <input class="form-control" type="text" value=""  readonly><br>
						                    <input class="form-control" type="text" value=""  readonly><br>
						                    <input class="form-control" type="text" value=""  readonly><br>
						                    <input class="form-control" type="text" value=""  readonly><br>
						                    <!-- Button trigger modal -->
											<!-- Large modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Composição</button>
										@else
											<h5><b><i>Para visualizar escolha uma turma!!</i></b></h5>	
										@endif
					                </div>
					            </div>   
				            </div>   
			        </div>   
		</div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header  text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle">Composição das notas:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                </div>
	    	</div>
	  	</div>
	</div




@stop