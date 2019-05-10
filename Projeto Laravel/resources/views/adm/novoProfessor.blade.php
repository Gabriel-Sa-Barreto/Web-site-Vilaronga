@extends('adm.gerenciarProfessores')
@section('novoProfessor')
<div class="jumbotron bg-light border border-primary">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Cadastre um novo Professor</h2>
        </div>  
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de novo Professor</h5>
                            <form action="/vilarongacursos/adm/gerenciarProfessores/novo/salvar" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="nomeProfessor">Nome do Professor</label>
                                    <input type="text" class="form-control" name="nomeProfessor" 
                                           id="nomeProfessor" placeholder="Nome do Professor" required>
                                    <br>
                                    <label for="nomeCurso">Escolha um curso:</label>
                                    <select class="form-control" id="nomeCurso" name="nomeCurso">
                                        @foreach($cursos as $c)
                                            <option>{{$c->nome}}</option> <!--Mostra todos os cursos já cadastrados -->
                                        @endforeach
                                    </select>

                                    <br>
                                    <label for="email">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" 
                                           id="telefone" placeholder="Telefone" required>

                                    <br>
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" 
                                           id="email" placeholder="Email" required>

                                    <br>
                                    <label for="senha">Senha - acima de 6 caracteres</label>
                                    <input type="password" class="form-control" name="senha" 
                                           id="senha" placeholder="Senha" required>                     
                                </div>
                                <button type="submit" class="btn btn-primary btn-md">Salvar</button>
                                <a href="/vilarongacursos/adm/gerenciarProfessores" class="btn btn-danger btn-md">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@stop