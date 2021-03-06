@extends('layout.homeAluno')
    @section('conteudo')
    <div class="card border border-secondary">
		<div class="card-body">
			<br>
			<b><h2 class="card-title text-center">Avisos</h2></b>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction('myInput','materiaisAluno')" placeholder="Digite o nivel da sua turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
			<table class="table table-ordered table-hover" id="materiaisAluno">
				<thead class="thead-dark">
					<tr>
						<th>Titulo</th>
						<th>Data</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($avisos as $aviso)
						<tr>	
							<td>{{$aviso->titulo}}</td>
							<td>{{$aviso->data}}</td>
							<td class="actions">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$aviso->titulo}}" data-data="{{$aviso->data}}"  data-aviso="{{$aviso->aviso}}">Ver</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<section style="height: 300px;"></section>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel"></h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
               		<h5>Data:</h5><p class="modal-data"></p>
               		<h5>Aviso:</h5><p class="modal-aviso"></p> 
		      </div>
		      <div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		</div>
	</div>
@stop
