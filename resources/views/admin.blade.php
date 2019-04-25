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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="/">Cursos Vilaronga</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">cursos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="">Alunos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/professor/criar">Professores</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="">Materiais</a></li>
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
        <section class="clean-block clean-hero" style="background-image:url(&quot;/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button></div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Ir para:</h5>
                    <ul>
                        <li><a href="home_page.html">Home</a></li>
                        <li><a href="#">Fale conosco&nbsp;</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Instituição</h5>
                    <ul>
                        <li><a href="sobreNos.html">Sobre Nós ( detalhes )</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="/adm/login">Administrador</a></li>
                        <li><a href="/professor/login">Professor</a></li>
                        <li><a href="/aluno/login">Aluno</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Apoio</h5>
                    <ul>
                        <li><a href="#">Materiais Compartilhados</a></li>
                        <li><a href="#">Help desk</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Gabriel e Samuel</p>
        </div>
    </footer>
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/js/smoothproducts.min.js"></script>
    <script src="/js/theme.js"></script>
</body>

</html>
