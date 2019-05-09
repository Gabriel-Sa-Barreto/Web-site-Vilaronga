@extends('layout.homeProfessor')
	@section('conteudo')
    <div class="container">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Gerencie suas turmas e notas</h2>
        </div> 
    	<div class="row">
    		<div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/aluno.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Listagem completa de alunos por turma</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                            Lista completa
                        </a>
                    </div>
                </div>              
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                    <img class="card-img-top img-fluid" src="/../../vilarongacursos/img/notas.png" alt="Card image cap" style="width: 6em; height: 6em; display: block; margin:auto;">
                    <div class="card-header">
                        <b><h5>Notas de atividades e avaliações</h5></b>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-md btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Colocar notas
                        </a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
        @yield('listagemDeAlunos')
    </div>

    <!-- Modal de listagem de alunos-->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header  text-center">
                        <h5 class="modal-title" id="exampleModalLongTitle">Turmas que voçê está cadastrado como professor:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card border border-secondary">
                            <div class="card-body">
                                        <table class="table table-ordered table-hover" id="tabela">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Curso</th>
                                                    <th scope="col">Nível</th>
                                                    <th scope="col">Horário</th>
                                                    <th scope="col">Dia da semana</th>
                                                    <th scope="col">.....</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($turmas))
                                                    @foreach($cursos as $c)
                                                        @foreach($turmas as $t)
                                                            <tr>  
                                                                @if($t->curso_id == $c->id)  
                                                                    <td>{{$c->nome}}</td>
                                                                    <td>{{$t->nivel}}</td>
                                                                    <td>{{$t->horario}}</td>
                                                                    <td>{{$t->diaDaSemana}}</td>
                                                                    <td>
                                                                        <a class="btn btn-md btn-success" href="/vilarongacursos/professor/gerenciarTurmas/listagemDeAlunos/{{$t->id}}" >Selecionar</a>
                                                                    </td>
                                                                @endif
                                                            </tr>  
                                                            @endforeach
                                                        @endforeach
                                                    @endif
                                                 
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Escolha a turma desejada:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card border border-secondary">
                        <div class="card-body">
                                    <table class="table table-ordered table-hover" id="tabela">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Nível</th>
                                                <th scope="col">Horário</th>
                                                <th scope="col">Dia da semana</th>
                                                <th scope="col">.....</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($turmas))
                                                @foreach($cursos as $c)
                                                    @foreach($turmas as $t)
                                                        <tr>  
                                                            @if($t->curso_id == $c->id)  
                                                                <td>{{$c->nome}}</td>
                                                                <td>{{$t->nivel}}</td>
                                                                <td>{{$t->horario}}</td>
                                                                <td>{{$t->diaDaSemana}}</td>
                                                                <td>
                                                                    <a class="btn btn-md btn-success" href="/vilarongacursos/professor/gerenciarTurmas/notasTurma/{{$t->id}}" >Selecionar</a>
                                                                </td>
                                                            @endif
                                                        </tr>  
                                                        @endforeach
                                                    @endforeach
                                                @endif
                                             
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('listagemDeAlunosTurma')
    </div>

    <div class="container">
        @yield('selecionarAlunoNota')
    </div>

    <div class="container">
        @yield('nota_e_descricao')
    </div>
@stop