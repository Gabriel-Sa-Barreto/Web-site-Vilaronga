<?php
    session_start();
    $nome     = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email    = $_POST["email"];
    $assunto  = $_POST["assunto"];
    $mensagem = $_POST["msg"];
    $arquivo   = $_FILES["arquivo"];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    $mail = new PHPMailer(true);
    try {

        //configuração do gmail
        $mail->SMTPDebug   = 0;               
        $mail->IsSMTP();
        $mail->IsHTML(true);  
        $mail->Port        = 465;   
        $mail->Mailer      = 'smtp';         
        $mail->SMTPSecure  = 'ssl'; 
        $mail->CharSet     = 'UTF-8';    
        $mail->Host        = 'ssl://smtp.gmail.com:465';
        
        //configuração do usuário do gmail
        $mail->SMTPAuth    = true;             
        $mail->Username    = ''; //colocar email 
        $mail->Password    = '';     // e senha do professor
        $mail->SingleTo = true;

        /*---------------Envio principal para o tradutor responsável---------------*/
        $mail->setFrom($email, $nome);
        $mail->addAddress('', 'Oráculo Traduções');//destinatário(email do professor)

        $mail->Subject = "Oráculo Traduções: {$assunto}";
        $mail->msgHTML("<html>Nome: {$nome}<br/>Telefone: {$telefone}<br/> Email: {$email}<br/>Mensagem: <br/>{$mensagem}</html>");
        $mail->AltBody = "Nome: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";
        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
        /*---------------------------------------------------------------------------*/
        
        if ($mail->send()) {
            echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
        } else {
           echo "<p align=center>$nome, ocorreu um erro no envio da solicitação</p>";
        }

        # Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        /*-----------Envio de resposta ao cliente-------------------------------------*/

        $mail->setFrom('', 'Oráculo Traduções');//email do professor
        $mail->addAddress($email, $nome);//destinatário
        $mail->Subject = "Solicitação feita com Sucesso!";
        $mail->msgHTML("<html>Sua Solicitação foi realizada com sucesso.<br/>Oráculo Traduções agradece sua preferência, entraremos em contato em breve.</html>");
        /*------------------------------------------------------------------------------*/

        if ($mail->send()) {
            echo "<p align=center>Verifique seu email para confirmação!</p>";
        } else {
           echo "<p align=center>$nome, ocorreu um erro na confirmação do seu email!</p>";
        }
        # Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    die();    
?>