@extends('adm.gerenciarProfessores')
	@section('deletar')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de professores cadastrados</h4></b>
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
				  		<h5>O professor automaticamente será excluído de todas as turmas ao qual está vinculado!!</h5>
				  		@foreach($professores as $p)
						    <tr>	
						      <td>{{$p->nome}}</td>
						      <td>{{$p->telefone}}</td>
						      <td>{{$p->email}}</td>
						      <td><a href="/adm/gerenciarProfessores/deletar/salvar/{{$p->id}}" class="btn btn-md btn-danger">Deletar</a></td>
						    </tr>
						@endforeach
					@else
						<h5>Não existe professores cadastrados!!</h5>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop