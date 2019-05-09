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
        <div class="container"><a class="navbar-brand logo" href="/adm">Cursos Vilaronga</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/vilarongacursos/adm/gerenciarCursos">Cursos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/adm/gerenciarAlunos">Alunos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/adm/gerenciarProfessores">Professores</a></li>
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
    <main class="page landing-page" style="margin-bottom: 2em; margin-top: 3em;">
        @yield('conteudo')
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>Instituição Cursos Vilaronga</p>
            <p>© 2019 Copyright Gabriel e Samuel</p>
        </div>
    </footer>

    <script>
        //Função responsável por filtrar dados em uma tabela tabela
        //idEntrada corresponde ao id do input
        //idTabela corresponde ao id da tabela que deseja-se realizar o filtro
        function myFunction(idEntrada, idTabela) {
          // Declare variables 
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById(idEntrada);
          filter = input.value.toUpperCase();
          table = document.getElementById(idTabela);
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
          }
        }
    </script>
    <script src="/../../vilarongacursos/js/jquery.min.js"></script>
    <script src="/../../vilarongacursos/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/../../vilarongacursos/js/smoothproducts.min.js"></script>
    <script src="/../../vilarongacursos/js/theme.js"></script>
    <script>
        $(document).on("click", "#desvincularVincular", function () {
            var info = $(this).attr('data-id');
            var str = info.split(':');
            var id = str[0];
            var nome = str[1];
            $(".modal-content #idProfessor").val(id);
            $(".modal-content #nomeProfessor").val(nome);
         });

        $('#senha').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var id = button.data('id') 
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Aluno: ' + recipient)
          modal.find('#aluno').val(id)
        })
    </script>
</body>

</html>
