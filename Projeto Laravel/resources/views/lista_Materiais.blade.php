@extends('professor.gerenciarMaterial')
	@section('visualizarMaterial')
    <div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista de Material</h4></b>
			<table class="table table-ordered table-hover" id="tabela">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Turma</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($materiais as $material)
						<tr>	
							<td>: {{$material->id}}</td>
							<td>: {{$material->nome}}</td>
							<td>: {{$material->turma_id}}</td>
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
