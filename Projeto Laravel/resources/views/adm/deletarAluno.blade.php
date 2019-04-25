@extends('adm.gerenciarAlunos')
	@section('deletar')
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Curso</th>
      <th scope="col">Turma</th>
      <th scope="col">Horário</th>
      <th scope="col">....</th>
    </tr>
  </thead>
  <tbody>
  	@if(isset($alunos))
  		@foreach($alunos as $a)
		    <tr>	
		      <td>{{$a->nome}}</td>
		      <td>{{$a->nome}}</td>
		      <td>{{$a->nome}}</td>
		      <td>{{$a->nome}}</td>
		      <td><a href="" class="btn btn-md btn-danger">Deletar</a></td>
		    </tr>
		@endforeach
	@endif
  </tbody>
</table>
@stop