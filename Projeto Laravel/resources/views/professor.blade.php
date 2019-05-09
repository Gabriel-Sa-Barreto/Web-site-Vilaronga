<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">-->
    <title>Cursos Vilaronga</title>
    <link rel="stylesheet" href="/../../vilarongacursos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/../../vilarongacursos/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/smoothproducts.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <style type="text/css">
        h2,h3,h4 {
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
        <div class="container"><a class="navbar-brand logo" href="/vilarongacursos/professor">Cursos Vilaronga</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/professor/gerenciarTurmas">Turmas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/professor/gerenciarMaterial">Material</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/professor/gerenciarAviso">Aviso</a></li>
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
        <section class="clean-block clean-hero" style="background-image:url(&quot;img/login.jpg&quot;);color:rgba(9, 162, 255, 0.5);">
            <div class="text">
                <h2>Seja Bem-Vindo {{$professor}}</h2>
                <p>Você tem a possibilidade de disponibilizar atividades, notas e avisos para as respectivas turmas aos quais está responsável.</p>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>Instituição Cursos Vilaronga</p>
            <p>© 2019 Copyright Gabriel e Samuel</p>
        </div>
    </footer>
    <script src="/../../vilarongacursos/js/jquery.min.js"></script>
    <script src="/../../vilarongacursos/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/../../vilarongacursos/js/smoothproducts.min.js"></script>
    <script src="/../../vilarongacursos/js/theme.js"></script>
</body>

</html>