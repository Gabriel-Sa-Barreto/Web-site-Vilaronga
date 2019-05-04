@extends('professor.gerenciarAviso')
	@section('conteudoAviso')
	<div class="jumbotron bg-light border border-secondary">
	    <div class="row">
	    	<div class="col-lg-8 offset-lg-2">
		        <div class="card-deck">
		            <div class="card border border-primary">
		                <div class="card-body">
		                    <h5 class="card-title">Cadastro Material</h5>
		                    <form action="/aviso/novo" method="POST" enctype="multipart/form-data">
				            @csrf
					            <div class="form-group">
					                <label for="nomeCurso">Escolha uma turma:</label>
					                <select class="form-control" id="nomeTurma" name="nomeTurma" enctype="multipart/form-data">
								      	@foreach($turmas as $t)
								      		<option>{{$t->nivel}}</option> <!--Mostra todos as turmas já cadastrados -->
								      	@endforeach
								    </select>
					                
					                <div class="form-group">
                                        <label for="nomeAluno">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="...." required>
                                	</div>

                                	<div class="form-group">
                                        <label for="nomeAluno">Aviso</label>
                                        <textarea id ="aviso" name= "aviso" class="form-control"></textarea>
                                	</div>	
														         
					            	<button type="submit" class="btn btn-success">Submit</button>
					            	<button type="cancel" class="btn btn-danger">Cancel</button>
					            </div>	
	       					</form>
		                </div>
		            </div>            
		        </div>
		    </div>    
	    </div>
	</div>
@stop