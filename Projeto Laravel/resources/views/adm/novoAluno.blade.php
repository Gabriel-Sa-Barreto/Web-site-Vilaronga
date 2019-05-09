@extends('adm.gerenciarAlunos')
@section('conteudoAluno')
<div class="jumbotron bg-light border border-primary">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Cadastre um novo aluno</h2>
        </div>  
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            @if(isset($erro))
                                <h5><b>{{$erro}}</b></h5>
                            @endif
                            <h5 class="card-title">Cadastro de novo Aluno</h5>
                            <form action="/adm/gerenciarAlunos/novo/salvar" method="POST">
                            @csrf
                                <div class="form-group">
                                        <label for="nomeAluno">Nome Completo</label>
                                        <input type="text" class="form-control" name="nomeAluno" id="nomeAluno" placeholder="...." required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required> 
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxx-xxxx" required>
                                </div>
                                 
                                <h5>Endereço</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="rua">Rua</label>
                                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Apartment, studio, or floor" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="numero">Número</label>
                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="" required>
                                    </div>
                                </div>                            
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                                    </div>
                                        
                                    <div class="form-group col-md-4">
                                        <label for="cep">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep">
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-md">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop