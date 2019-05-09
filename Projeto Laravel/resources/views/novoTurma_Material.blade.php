@extends('professor.gerenciarMaterial')
	@section('conteudoMaterial')
	<div class="jumbotron bg-light border border-secondary">
	    <div class="row">
	    	<div class="col-lg-8 offset-lg-2">
		        <div class="card-deck">
		            <div class="card border border-primary">
		                <div class="card-body">
		                    <h5 class="card-title">Cadastro Material</h5>
		                    <form action="/vilarongacursos/material/novo" method="POST" enctype="multipart/form-data">
				            @csrf
					            <div class="form-group">
					                <label for="nomeCurso">Escolha uma turma:</label>
					                <select class="form-control" id="nomeTurma" name="nomeTurma" enctype="multipart/form-data">
								      	@foreach($turmas as $t)
								      		<option value="{{$t->nivel}}">Turma: {{$t->nivel}} às {{$t->horario}} ({{$t->diaDaSemana}})</option> <!--Mostra todos as turmas que o professor pertence -->
								      	@endforeach
								    </select>
					                
					                <input type="file"  class="myfrm form-control" name="arquivo" id="arquivo" enctype="multipart/form-data">
					            	<br>
					            	<button type="submit" class="btn btn-success">Upload</button>
					            	<a class="btn btn-danger btn-xs"  href="/professor/gerenciarMaterial">Cancelar</a>
					            </div>	
	       					</form>
		                </div>
		            </div>            
		        </div>
		    </div>    
	    </div>
	</div>
@stop