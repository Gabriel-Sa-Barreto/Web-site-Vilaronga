@extends('professor.gerenciarTurmas')
	@section('nota_e_descricao')
	<div class="card border border-secondary">
		<div class="card-body">
			<b><h4 class="card-title text-center">Lista completa de aluno nesta turma:</h4></b>
			<h5>Nome do Aluno:</h5>
			<input class="form-control" type="text" readonly value="{{$alunoNome->nome}}">
			<br>
			<h5>Curso:</h5>
			<input class="form-control" type="text" readonly value="{{$cursoNome->nome}}: nível->{{$turmaNota->nivel}} às {{$turmaNota->horario}}, {{$turmaNota->diaDaSemana}}">
			<br>
			
			<h5>Média do trimestre (final/parcial):</h5>
			<input class="form-control" type="text" readonly value="">
			<br>
			<!--Formulário para colocar notas -->
			<form action="/vilarongacursos/professor/gerenciarTurmas/notasTurma/salvarNota" method="POST">
			@csrf
				<div class="form-group">
			    	<label for="valor"><b>Escolha uma nota:</b></label>
			    	<select class="custom-select" id="notaEscolhida" name="notaEscolhida">
					   @if($cursoNome->id == '1' || $cursoNome->id == '2') <!--inglês ou espanhol-->
							<option selected value="1">Nota 1</option>
							<option selected value="2">Nota 2</option>
							<option selected value="3">Nota 3</option>
							<option selected value="4">Nota 4</option>
							<option selected value="5">Nota 5</option>
						@else
							<option selected value="1">Nota 1</option>
							<option selected value="2">Nota 2</option>
							<option selected value="3">Nota 3</option>	
						@endif					   
					</select>
			  	</div>

				<div class="form-group">
			    	<label for="valor"><b>Valor da nota:</b></label>
			    	<input type="text" class="form-control" id="valor" name="valor" required>
			  	</div>

				<div class="form-group">
			    	<label for="descricao"><b>Descrição/Composição da nota:</b></label>
			    	<textarea class="form-control" id="descricao" name = "descricao" rows="3" required></textarea>
			  	</div>
			  	<input type="hidden" id="idTurma"   name="idTurma"     value="{{$turmaNota->id}}">
				<input type="hidden" id="idAluno"   name="idAluno"     value="{{$alunoNome->id}}">
				<input type="hidden" id="trimestre"   name="trimestre"   value="{{$trimestre}}">
				<button type="submit" class="btn btn-outline-success" type="button">Salvar</button>
				<a class="btn btn-outline-danger" href="/vilarongacursos/professor/gerenciarTurmas/notasTurma/{{$turmaNota->id}}">Cancelar</a> 
			</form>
		</div>
	</div>
@stop