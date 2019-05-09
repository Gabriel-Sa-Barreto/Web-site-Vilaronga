@extends('layout.homeAluno')
    @section('conteudo')
	    <div class="card border border-secondary">
			<div class="card-body">
                <br>
				<b><h2 class="card-title text-center">Lista de Material</h2></b>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
                    </div>
                    <input type="text" id="myInput" onkeyup="myFunction('myInput','materiaisAluno')" placeholder="Digite o nivel da sua turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
				<table class="table table-ordered table-hover" id="materiaisAluno">
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
									<a class="btn btn-success btn-xs" href="/vilarongacursos/material/download/{{$material->id}}">Download</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
        <section style="height: 300px;"></section>
	@stop
