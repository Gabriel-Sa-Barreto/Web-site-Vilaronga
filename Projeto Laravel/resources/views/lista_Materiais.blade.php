<!DOCTYPE html>
<html>
<head>
	<title>Curso Vilaronga</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Cursos Vilaronga</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">Turmas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="">Avisos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/material/criar">Material</a></li>
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
    <div id="main" class="container-fluid" style="margin-top: 50px">
 		<div id="top" class="row">
			<div class="col-sm-3">
				<h2>Materiais</h2>
			</div>
		</div>
		<div class="col-sm-3">
			<a href="/material/criar" class="btn btn-primary pull-right h2">Novo Item</a>
		</div> 	
		<div id="list" class="row">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Turma</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($materiais as $material)
							<tr>	
								<td>: {{$material->id}}</td>
								<td>: {{$material->nome}}</td>
								<td>: {{$material->turma_id}}</td>
								<td class="actions">
									<a class="btn btn-success btn-xs" href="/material/download/{{$material->id}}">Download</a>
									<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>		
			</div>		
		</div>
	</div>		
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>