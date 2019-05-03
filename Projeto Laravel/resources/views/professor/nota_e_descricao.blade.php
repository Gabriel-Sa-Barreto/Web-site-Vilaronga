@extends('professor.gerenciarTurmas')
	@section('nota_e_descricao')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de aluno nesta turma:</h4></b>
			<h5>Nome do Aluno:</h5>
			<input class="form-control" type="text" readonly value="{{$alunoNome->nome}}">
			
			<h5>Curso:</h5>
			<input class="form-control" type="text" readonly value="{{$cursoNome->nome}}: nível->{{$turmaNota->nivel}} às {{$turmaNota->horario}}, {{$cursoNome->nome}}">
			
			<h5>Nota:</h5>
			<input class="form-control" type="text" readonly value="{{$nota}}">
			<br>
			<!--Formulário para colocar notas -->
			<form action="/professor/gerenciarTurmas/notasTurma/salvarNota" method="POST">
			@csrf
				<div class="form-group">
			    	<label for="valor"><b>Valor da nota</b></label>
			    	<input type="text" class="form-control" id="valor" name="valor">
			  	</div>
				<div class="form-group">
			    	<label for="descricao"><b>Descrição/Composição da nota:</b></label>
			    	<textarea class="form-control" id="descricao" name = "descricao" rows="3"></textarea>
			  	</div>
			  	<input type="hidden" id="idTurma" name="idTurma" value="{{$turmaNota->id}}">
				<input type="hidden" id="idAluno" name="idAluno" value="{{$alunoNome->id}}">
				<input type="hidden" id="nota" name="nota" value="{{$nota}}">
				<button type="submit" class="btn btn-outline-success" type="button">Salvar</button>
				<a class="btn btn-outline-danger" href="/professor/gerenciarTurmas/notasTurma/{{$turmaNota->id}}">Cancelar</a> 
			</form>
		</div>
	</div>
@stop