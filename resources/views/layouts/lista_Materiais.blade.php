<!DOCTYPE html>
<html>
<head>
	<title>Curso Vilaronga</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container lst">
		@if (count($errors) > 0)

		<div class="alert alert-danger">
    		<strong>Sorry!</strong> There were more problems with your HTML input.<br><br>

    		<ul>

      			@foreach ($errors->all() as $error)

          			<li>{{ $error }}</li>

      			@endforeach

    		</ul>

		</div>

		@endif


		@if(session('success'))

		<div class="alert alert-success">

  		{{ session('success') }}

		</div> 

		@endif
	</div>	
	<div class="jumbotron bg-light border border-secondary">
	    <div class="row">
	        <div class="card-deck">
	            <div class="card border border-primary">
	                <div class="card-body">
	                    <h5 class="card-title">Cadastro Material</h5>
	                    <form action="/material/novo" method="POST" enctype="multipart/form-data">
			            @csrf
				            <div class="form-group">
				                <label for="nomeCurso">Escolha uma turma:</label>
				                <select class="form-control" id="nomeTurma" name="nomeTurma" enctype="multipart/form-data">
							      	@foreach($turmas as $t)
							      		<option>{{$t->nivel}}</option> <!--Mostra todos as turmas já cadastrados -->
							      	@endforeach
							    </select>
				                
				                <input type="file"  class="myfrm form-control" name="arquivo" id="arquivo" enctype="multipart/form-data">

				            	<button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
				            	<button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
				            </div>	
       					</form>
	                </div>
	            </div>            
	        </div>
	    </div>
	</div>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>