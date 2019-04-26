<!DOCTYPE html>
<html>
<head>
	<title>Curso Vilaronga</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	
	<div class="jumbotron bg-light border border-secondary">
	    <div class="row">
	        <div class="card-deck">
	            <div class="card border border-primary">
	                <div class="card-body">
	                    <h5 class="card-title">Cadastro de novo Professor</h5>
	                    <form action="/adm/criarProfessor/salvar" method="POST">
			            @csrf
				            <div class="form-group">
				                <label for="nomeProfessor">Nome do Professor</label>
				                <input type="text" class="form-control" name="nomeProfessor" 
				                       id="nomeProfessor" placeholder="Nome do Professor">
				                <label for="nomeCurso">Escolha um curso:</label>
				                <select class="form-control" id="nomeCurso" name="nomeCurso">
							      	@foreach($cursos as $c)
							      		<option>{{$c->nome}}</option> <!--Mostra todos os cursos já cadastrados -->
							      	@endforeach
							    </select>
							    <label for="email">Telefone</label>
				                <input type="text" class="form-control" name="telefone" 
				                       id="telefone" placeholder="Telefone">
				                <label for="email">Email</label>
				                <input type="text" class="form-control" name="email" 
				                       id="email" placeholder="Email">
				                <label for="senha">Senha</label>
				                <input type="text" class="form-control" name="senha" 
				                       id="senha" placeholder="Senha">                     
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