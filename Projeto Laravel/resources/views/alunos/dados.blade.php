@extends('layout.homeAluno')
    @section('conteudo')
    <div class="text-center">
        <div class="text-center">
            <br><br>
            <h2 class="text-info">Meus dados</h2>
        </div>  
    </div>
        <div class="row">
            <div class = "col-lg-6 offset-lg-3" >
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title text-center">Edição de dados</h5>
                            <form action="/vilarongacursos/aluno/editar" method="POST">
                            @csrf
                                <div class="form-group">
                                        <label for="nomeAluno">Nome Completo</label>
                                        <input type="text" class="form-control" name="nomeAluno" id="nomeAluno" placeholder="...." value="{{$aluno->nome}}">
                                </div>
                                
                                <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxx-xxxx" value="{{$aluno->telefone}}">
                                </div>
                                 
                                <h5>Endereço</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="rua">Rua</label>
                                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Apartment, studio, or floor" value="{{$enderecoAluno->rua}}">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="numero">Número</label>
                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="" value="{{$enderecoAluno->numero}}">
                                    </div>
                                </div>                            
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" value="{{$enderecoAluno->bairro}}">
                                    </div>
                                        
                                    <div class="form-group col-md-4">
                                        <label for="cep">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep" value="{{$enderecoAluno->cep}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$enderecoAluno->cidade}}">
                                </div>

                                <button type="submit" class="btn btn-md btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Salvar edição
                                </button>
                                <a class="btn btn-danger btn-md" href="/vilarongacursos/aluno">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style="height: 200px;"></section>
@stop