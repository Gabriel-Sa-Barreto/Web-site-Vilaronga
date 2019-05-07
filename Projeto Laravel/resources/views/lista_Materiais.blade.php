@extends('professor.gerenciarMaterial')
	@section('visualizarMaterial')
    <div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista de Material</h4></b>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				   <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
				</div>
				<input type="text" id="myInput" onkeyup="myFunction('myInput','materiais')" placeholder="Digite o nivel da turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<table class="table table-ordered table-hover" id="materiais">
				<thead class="thead-dark">
					<tr>
						<th>Nome</th>
						<th>Turma</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($materiais as $material)
						<tr>	
							<td>{{$material->nome}}</td>
							<td>{{$material->nivel}}</td>
							<td class="actions">
								<a class="btn btn-success btn-xs" href="/material/download/{{$material->id}}">Download</a>
								<a class="btn btn-danger btn-xs"  href="/material/remover/{{$material->id}}">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>		
@stop
