@extends('adm.gerenciarCursos')
	@section('novaTurma_Curso')
	<div class=" container">	    	
		    	<!--<div class="jumbotron bg-light border border-secondary col-lg-6">
		    			<div class="text-center" style="margin-bottom: 3em;">
            				<h2 class="text-info">Novo Curso</h2>
        				</div>
				        <div class="card-deck text-center">
				            <div class="card border border-primary">
				                <div class="card-body">
				                    <h5 class="card-title">Cadastro de novo Curso</h5>
				                    <form action="/adm/gerenciarCursos/salvarCurso" method="POST">
						            @csrf
							            <div class="form-group">
							                <label for="nomeCurso">Nome do Curso</label>
							                <input type="text" class="form-control" name="nomeCurso" 
							                       id="nomeCurso" placeholder="Nome do curso">
							            </div>
							            <button type="submit" class="btn btn-md btn-primary">Salvar</button>
			       					</form>
				                </div>
				           </div>
				       </div>
		    	</div> -->
		    	<div class="jumbotron bg-light border border-secondary">
		    			<div class="text-center" style="margin-bottom: 3em;">
            				<h2 class="text-info">Nova Turma</h2>
        				</div>
			        	<div class="card-deck">
				            <div class="card border border-primary">
				                <div class="card-body">
				                    <h5 class="card-title">Cadastro de nova Turma</h5>
				                    <form action="/adm/gerenciarCursos/salvarTurma" method="POST">
						            @csrf
							            <div class="form-group">
							                <label for="nomeCurso">Escolha um curso:</label>
							                <select class="form-control" id="nomeCurso" name="nomeCurso">
										      	@foreach($cursos as $c)
										      		<option>{{$c->nome}}</option> <!--Mostra todos os cursos já cadastrados -->
										      	@endforeach
										    </select>
							        		
							        		<br>
							                <label for="nivel">Nível:</label>
							                <select class="form-control" id="nivel" name="nivel">
										      <option>Básico       </option>
										      <option>Intermediário</option>
										      <option>Avançado     </option>
										      <option>Único        </option>
										    </select>
										    
										    <br>
							                <label for="horario">Horário:</label>
							                <input type="text" class="form-control" name="horario" 
							                       id="horario" placeholder="Ex:8:00h">  
							                <br>
							                <label for="nivel">Dia da Semana:</label>
							                <select class="form-control" id="dia" name="dia">
										      <option>Segunda-Feira</option>
										      <option>Terça-Feira</option>
										      <option>Quarta-Feira</option>
										      <option>Quinta-Feira</option>
										      <option>Sexta-Feira</option>
										      <option>Sábado</option>
										      <option>Domingo</option>
										    </select>   	

							            </div>
							            <button type="submit" class="btn btn-md btn-primary">Salvar</button>
							            <a href="/adm/gerenciarCursos" class="btn btn-md btn-danger">Cancelar</a>
			       					</form>
				                </div>
				            </div>   
			            </div>   
		            
		            </div>   
		        
		    </div>
@stop