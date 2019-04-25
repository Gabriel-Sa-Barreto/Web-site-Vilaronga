<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cursos Vilaronga</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/smoothproducts.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <style type="text/css">
        h2  {
            font-size: 3em;
            font-family: 'Kaushan Script', cursive, 'Roboto Slab', serif;
        }

        a{
            font-family: 'Kaushan Script', cursive, 'Roboto Slab', serif;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#" style="font-size:2em;">Cursos Vilaronga</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Turmas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Meus dados</a></li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page landing-page" style="margin-top: 3em; margin-bottom: 3em;">
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Meus dados</h2>
        </div>  
        <div class="row">
            <div class = "col-lg-6 offset-lg-3 offset-sm-0 offset-md-0" >
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Edição de dados</h5>
                            <form action="/aluno/editar" method="POST">
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

                                <button type="submit" class="btn btn-md btn-primary">Salvar edição</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>Instituição Cursos Vilaronga</p>
            <p>© 2019 Copyright Gabriel e Samuel</p>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/js/smoothproducts.min.js"></script>
    <script src="/js/theme.js"></script>
</body>
</html>