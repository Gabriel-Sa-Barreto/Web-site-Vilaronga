<!DOCTYPE html>
<html>
<head>
	<title>Novo curso</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	
	<div class="jumbotron bg-light border border-secondary">
	    <div class="row">
	        <div class="card-deck">
	            <div class="card border border-primary">
	                <div class="card-body">
	                    <h5 class="card-title">Cadastro de novo Curso</h5>
	                    <form action="/cursos" method="POST">
			            @csrf
				            <div class="form-group">
				                <label for="nomeCurso">Nome do Curso</label>
				                <input type="text" class="form-control" name="nomeCurso" 
				                       id="nomeCurso" placeholder="Nome do curso">
				            </div>
				            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
				            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
       					</form>
	                </div>
	            </div>
	            <div class="card border border-primary">
	                <div class="card-body">
	                    <h5 class="card-title">Cadastro de nova Turma</h5>
	                    <form action="/turma" method="POST">
			            @csrf
				            <div class="form-group">
				                <label for="nomeCurso">Escolha um curso:</label>
				                <select class="form-control" id="nomeCurso" name="nomeCurso">
							      	@foreach($cursos as $c)
							      		<option>{{$c->nome}}</option> <!--Mostra todos os cursos já cadastrados -->
							      	@endforeach
							    </select>
				                
				                <label for="senha">Senha que será vinculada:</label>
				                <input type="text" class="form-control" name="senha" 
				                       id="senha" placeholder="senha">  

				                <label for="nivel">Nível:</label>
				                <select class="form-control" id="nivel" name="nivel">
							      <option>Básico       </option>
							      <option>Intermediário</option>
							      <option>Avançado     </option>
							      <option>Único        </option>
							    </select>
							    
				                <label for="horario">Horário:</label>
				                <input type="text" class="form-control" name="horario" 
				                       id="horario" placeholder="Ex:8:00h">     	

				            </div>
				            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
				            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
       					</form>
	                </div>
	            </div>            
	        </div>
	    </div>
	</div>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>