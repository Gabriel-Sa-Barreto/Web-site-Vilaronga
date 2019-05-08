<!DOCTYPE html>
<html class="text-justify" style="background-color: transparent;height: 600px;margin-right: 0px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cursos Vilaronga</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="/css/css_sobreNos/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="/css/css_home/3-Columns-Info-Icons-1.css">
    <link rel="stylesheet" href="/css/best-carousel-slide.css">
    <link rel="stylesheet" href="/css/css_home/blocosAnimados.css">
    <link rel="stylesheet" href="/css/css_home/Bold-BS4-Cards-with-Hover-Effect-74.css">
    <link rel="stylesheet" href="/css/css_home/Card-hover-affect-2.css">
    <link rel="stylesheet" href="/css/css_home/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="/css/css_login/Login-Form-Clean.css">
    <link rel="stylesheet" href="/css/css_traducao/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="/css/css_traducao/Features-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/css_home/Team-1.css">
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

<body style="margin-top: 10px;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-light clean-navbar" 
        style="margin-bottom:0px;background-image: linear-gradient(to right,#C2C7C8,#9FB1B3);">
        <div class="container">
            <a class="navbar-brand logo" href="/" style="font-size: 2em; font-family: 'Lobster', cursive;">
                <em>Cursos Vilaronga</em>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/sobrenos">Sobre Nós</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/ingles">Cursos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/traducao">Serviços</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/perguntas">Dúvidas</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page landing-page">
        @yield('conteudo')
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Ir para:</h5>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/ingles">Cursos&nbsp;</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Instituição</h5>
                    <ul>
                        <li><a href="/sobrenos">Sobre Nós ( detalhes )</a></li>
                        <li><a href="/traducao">Serviços</a></li>
                        <li><a href="/adm/login">Administrador</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Apoio</h5>
                    <ul>
                        <li><a href="#">Materiais Compartilhados</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Dúvidas?</h5>
                    <ul>
                        <li><a href="/perguntas">Perguntas frequentes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Gabriel e Samuel</p>
            <p>Imagens adquiridas por Bootstrap e pixabay.com</p>
        </div>
    </footer>
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/js/Card-hover-affect-2.js"></script>
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
</body>
</html>