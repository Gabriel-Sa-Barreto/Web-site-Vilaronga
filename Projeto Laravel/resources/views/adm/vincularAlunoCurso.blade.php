@extends('adm.gerenciarCursos')
	@section('vincularAlunoCurso')
		<div class="card-border border-secondary">
			<div class="card-body">
				<b><h4 class="card-title text-center">Escolha um curso</h4></b>
				<form action="/adm/gerenciarCursos/escolherCurso" method="POST">
				@csrf
					<select class="form-control" id="nomeCurso" name="nomeCurso">
						@foreach($cursos as $c)
							<option>{{$c->nome}}</option> <!--Mostra todos os cursos já cadastrados -->
						@endforeach
					</select>
					<br>
					<div style="text-align: center">
						<button type="submit" class="btn btn-primary btn-md">Selecionar</button>
				</form>
			</div>
		</div>
@stop