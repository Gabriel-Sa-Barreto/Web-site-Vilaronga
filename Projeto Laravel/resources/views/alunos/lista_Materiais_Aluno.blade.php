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
        <div class="container"><a class="navbar-brand logo" href="/aluno" style="font-size:2em;">Cursos Vilaronga</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">Turmas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/aluno/dados">Editar Dados</a></li>
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
	    <div class="card border border-secondary">
			<div class="card-body">
				<b><h4 class="card-title text-center">Lista de Material</h4></b>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
                    </div>
                    <input type="text" id="myInput" onkeyup="myFunction('myInput','materiaisAluno')" placeholder="Digite o nivel da sua turma" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
				<table class="table table-ordered table-hover" id="materiaisAluno">
					<thead class="thead-dark">
						<tr>
							<th>Nome</th>
							<th>Turma</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($materiais as $material)
							<tr>	
								<td>{{$material->nome}}</td>
								<td>{{$material->nivel}}</td>
								<td class="actions">
									<a class="btn btn-success btn-xs" href="/material/download/{{$material->id}}">Download</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
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
