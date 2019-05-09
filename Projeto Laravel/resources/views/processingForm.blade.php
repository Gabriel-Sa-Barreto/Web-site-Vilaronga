<!DOCTYPE html>
<html class="text-justify" style="background-color: transparent;height: 600px;margin-right: 0px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cursos Vilaronga</title>
    <link rel="stylesheet" href="/../../vilarongacursos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/../../vilarongacursos/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/../../vilarongacursos/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/../../vilarongacursos/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_sobreNos/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/3-Columns-Info-Icons-1.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/best-carousel-slide.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/blocosAnimados.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/Bold-BS4-Cards-with-Hover-Effect-74.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/Card-hover-affect-2.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_login/Login-Form-Clean.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_traducao/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_traducao/Features-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/../../vilarongacursos/css/css_home/Team-1.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <style type="text/css">
        h2  {
            font-size: 3em;
            font-family: 'Kaushan Script', cursive, 'Roboto Slab', serif;
            color: white;
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
            <a class="navbar-brand logo" href="/vilarongacursos" style="font-size: 2em; font-family: 'Lobster', cursive;">
                <em>Cursos Vilaronga</em>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/vilarongacursos/sobrenos">Sobre Nós</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/ingles">Cursos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/traducao">Serviços</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/vilarongacursos/perguntas">Dúvidas</a></li>
                </ul>
        </div>
        </div>
    </nav>
     <div style="background-image: url(&quot;/img/imagens/traducao/technology.jpg&quot;);height: 550px;background-position: center;background-size: cover;background-repeat: no-repeat;">
            <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
                <div class="d-flex align-items-center order-12" style="height:200px;">
                    <div class="container">
                        <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Oráculo Traduções</h1>
                        <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">
                                <?php
                                    session_start();
                                    $nome     = $_POST["nome"];
                                    $telefone = $_POST["telefone"];
                                    $email    = $_POST["email"];
                                    $assunto  = $_POST["assunto"];
                                    $mensagem = $_POST["msg"];
                                    $arquivo   = $_FILES["arquivo"];
                                
                                    //use PHPMailer\PHPMailer\PHPMailer;
                                    //use PHPMailer\PHPMailer\Exception;
                                    //use PHPMailer\PHPMailer\SMTP;
                                    use PHPMailer\PHPMailer;
                                 
                                    //require 'PHPMailer/src/PHPMailer.php';
                                    //require 'PHPMailer/src/SMTP.php';
                                    //require 'PHPMailer/src/Exception.php';
                                
                                    $mail = new PHPMailer\PHPMailer();
                                    try {
                                
                                        //configuração do gmail
                                        $mail->SMTPDebug   = 0;               
                                        $mail->IsSMTP();
                                        $mail->IsHTML(true);  
                                        $mail->Port        = 587;   
                                        $mail->Mailer      = 'smtp';         
                                        $mail->SMTPSecure  = 'tls'; 
                                        $mail->CharSet     = 'UTF-8';    
                                        $mail->Host        = 'smtp.gmail.com';
                                        
                                        //configuração do usuário do gmail
                                        $mail->SMTPAuth    = true;             
                                        $mail->Username    = 'bielbarretoalves@gmail.com'; //colocar email 
                                        $mail->Password    = 'biel81018840';     // e senha do professor
                                        $mail->SingleTo = true;
                                
                                        /*---------------Envio principal para o tradutor responsável---------------*/
                                        $mail->setFrom($email, $nome);
                                        $mail->addAddress('bielbarretoalves10@gmail.com', 'Oráculo Traduções');//destinatário(email do professor)
                                
                                        $mail->Subject = "Oráculo Traduções: {$assunto}";
                                        $mail->msgHTML("<html>Nome: {$nome}<br/>Telefone: {$telefone}<br/> Email: {$email}<br/>Mensagem: <br/>{$mensagem}</html>");
                                        $mail->AltBody = "Nome: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";
                                        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
                                        /*---------------------------------------------------------------------------*/
                                        
                                        if ($mail->send()) {
                                            echo "
                                                     <h2><p align=center>$nome, sua mensagem foi enviada com sucesso!</p></h2>
                                                     <h2><p align=center>Obrigado pela preferência. Entraremos em contato em breve!</p></h2>";
                                        } else {
                                           echo "    
                                                     <h2><p align=center>$nome, ocorreu um erro no envio da solicitação.</p></h2>
                                                     <h2><p align=center>Por favor, retorne a página e tente novamente!</p></h2>";
                                        }
                                
                                        # Limpa os destinatários e os anexos
                                        $mail->ClearAllRecipients();
                                        $mail->ClearAttachments();
                                        /*-----------Envio de resposta ao cliente-------------------------------------*/
                                    } catch (Exception $e) {
                                        echo 'Message could not be sent.';
                                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    }
                                    //die();    
                                ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>


    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Ir para:</h5>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/vilarongacursos/ingles">Cursos&nbsp;</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Instituição</h5>
                    <ul>
                        <li><a href="/vilarongacursos/sobrenos">Sobre Nós ( detalhes )</a></li>
                        <li><a href="/vilarongacursos/traducao">Serviços</a></li>
                        <li><a href="/vilarongacursos/adm/login">Administrador</a></li>
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
                        <li><a href="/vilarongacursos/perguntas">Perguntas frequentes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Gabriel e Samuel</p>
            <p>Imagens adquiridas por Bootstrap e pixabay.com</p>
        </div>
    </footer>
    <script src="/../../vilarongacursos/js/jquery.min.js"></script>
    <script src="/../../vilarongacursos/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/../../vilarongacursos/js/Card-hover-affect-2.js"></script>
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
</body>
</html>