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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">Turmas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.html">Meus dados</a></li>
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
    
    <main class="page landing-page">
         <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85); margin-bottom: 3em;">
            <div class="text">
                <h2>Seja bem-vindo (nomeAluno)</h2>
                <p>Visualize seus dados cadastrados, tenha acesso aos avisos dos professores, suas notas, materiais de apoio e tudo que lhe trará maior usabilidade no seus estudos e período de aulas.</p><button class="btn btn-outline-light btn-lg" type="button">Área do Aluno</button></div>
        </section>
        <div class="text-center" style="margin-bottom: 3em;">
            <h2 class="text-info">Área do aluno</h2>
        </div>  
        <div class="container">  
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center"> 
                            <img class="card-img-top img-fluid" src="img/teamwork.png" alt="Card image cap" style="width: 11em; height: 11em; display: block; margin:auto;">
                            <div class="card-header">
                                <b><h5>Materiais de Apoio</h5></b>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text text-left">
                                    Realize o download dos materiais que você necessita.
                                    Selecione a turma desejada, baixe o arquivo e bons estudos.
                                </p>
                                <a href="#" class="btn btn-lg btn-primary">Download de Materiais</a>
                            </div>
                    </div>              
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center">
                            <img class="card-img-top img-fluid" src="img/teamwork.png" alt="Card image cap" style="width: 11em; height: 11em; display: block; margin:auto;"> 
                            <div class="card-header">
                                <b><h5>Avisos</h5></b>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text text-left">
                                    Descubra se algum professor deixou um recado.<br><br><br>
                                </p>
                                <a href="#" class="btn btn-lg btn-primary">Visualizar Avisos</a>
                            </div>
                    </div>              
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class= "card shadow-sm p-3 mb-5 bg-white rounded text-center">
                            <img class="card-img-top img-fluid" src="img/teamwork.png" alt="Card image cap" style="width: 11em; height: 11em; display: block; margin:auto;"> 
                            <div class="card-header">
                                <b><h5>Notas</h5></b>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text text-left">
                                    Veja suas notas do curso ao qual você está cadastrado.<br><br><br>
                                </p>
                                <a href="#" class="btn btn-lg btn-primary">Visualizar Notas</a>
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