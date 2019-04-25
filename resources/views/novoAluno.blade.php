<!DOCTYPE html>
<html>
<head>
	<title>Novo Aluno</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="jumbotron bg-light border border-secondary">
		<div class="row">
			<div class="card-deck">
				<div class="card border border-primary">
	                <div class="card-body">
	                    <h5 class="card-title">Cadastro de novo Aluno</h5>
	                    <form action="/novoAluno" method="POST">
			            @csrf
	                    	<div class="form-group">
				                	<label for="nomeAluno">Nome Completo</label>
				                	<input type="text" class="form-control" name="nomeAluno" id="nomeAluno" placeholder="....">
				            </div>
							<div class="form-row">
							    <div class="form-group col-md-6">
							    	<label for="email">Email</label>
							      	<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
							    </div>
							    
							    <div class="form-group col-md-6">
							      	<label for="password">Password</label>
							      	<input type="password" class="form-control" id="password" name="password">
							    </div>
							</div>

							<div class="form-group">
				                	<label for="telefone">Telefone</label>
				                	<input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxx-xxxx">
				            </div>
							 
							<h5>Endereço</h5>
							<div class="form-row">
								<div class="form-group col-md-8">
							    	<label for="rua">Rua</label>
							    	<input type="text" class="form-control" id="rua" name="rua" placeholder="Apartment, studio, or floor">
								</div>

								<div class="form-group col-md-4">
							    	<label for="numero">Número</label>
							    	<input type="text" class="form-control" id="numero" name="numero" placeholder="">
								</div>
							</div>							  
							<div class="form-row">
							    <div class="form-group col-md-8">
							      	<label for="bairro">Bairro</label>
							      	<input type="text" class="form-control" id="bairro" name="bairro">
								</div>
							        
								<div class="form-group col-md-4">
								    <label for="cep">CEP</label>
								    <input type="text" class="form-control" id="cep" name="cep">
								</div>
							</div>

							<div class="form-group">
								    <label for="cidade">Cidade</label>
								    <input type="text" class="form-control" id="cidade" name="cidade">
							</div>

							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
						</form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>