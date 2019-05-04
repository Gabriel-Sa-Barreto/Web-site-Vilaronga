@extends('layout.homeAluno')
    @section('conteudo')
    <div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Avisos</h4></b>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction('myInput','materiaisAluno')" placeholder="Digite o nivel da sua turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
			<table class="table table-ordered table-hover" id="materiaisAluno">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Titulo</th>
						<th>Data</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($avisos as $aviso)
						<tr>	
							<td>{{$aviso->id}}</td>
							<td>{{$aviso->titulo}}</td>
							<td>{{$aviso->data}}</td>
							<td class="actions">
							<a class="btn btn-success btn-xs" href="/aviso/ver/{{$aviso->id}}">Ver</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@stop
