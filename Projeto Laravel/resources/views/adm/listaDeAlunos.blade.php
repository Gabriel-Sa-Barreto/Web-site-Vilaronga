@extends('adm.gerenciarAlunos')
	@section('visualizarAluno')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de aluno cadastrados</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','tabela')" placeholder="Digite o nome do aluno" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
				  	@if(isset($alunosCad))
				  		@foreach($alunosCad as $a)
						    <tr>	
						      <td>{{$a->nome}}</td>
						      <td>{{$a->telefone}}</td>
						      <td>{{$a->email}}</td>
						      <td><a href="/vilarongacursos/adm/gerenciarAlunos/dadosCompletos/{{$a->id}}" class="btn btn-md btn-danger">Dados Completos</a>
						      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#senha" data-whatever="{{$a->nome}}" data-id="{{$a->id}}">Mudar senha</button></td>
						    </tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
	<div class="modal fade" id="senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"></h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="/vilarongacursos/adm/gerenciarAlunos/listagem/mudarSenha" method="POST">
		          @csrf
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Nova Senha:</label>
		            <input type="text" class="form-control" id="password" name="password">
		            <input type="hidden" class="form-control" id="aluno" name="aluno">
		          </div>
		          <button type="submit" class="btn btn-primary">Salvar</button>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
	</div>
@stop