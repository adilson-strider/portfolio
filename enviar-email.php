<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("../vendor/autoload.php");

$mail = new PHPMailer(true);

try{

    // Configurações do servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'exploit7@hotmail.com';                     //SMTP username
    $mail->Password   = 'Q1w2e3Q1w2e3$';                               //SMTP password
    $mail->SMTPSecure = tls;            //Enable implicit TLS encryption
    $mail->Port       = 587;  

    $mail->setFrom($mail->Username , 'Adilson');
    $mail->addAddress($mail->Username , 'Adilson');     //Add a recipient
    $mail->Subject = 'Fale comigo';

    $conteudo_email = utf8_encode("
    Você recebeu uma mensagem de $nome ($email):
    <br><br>

    Mensagem: <br>
    $mensagem
    ");

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Body    = $conteudo_email;

    $mail->send();

    echo "A mensagem foi enviada com sucesso!";
    echo "<meta http-equiv='refresh' content='1; URL=../index.php'>";

} catch (Exception $e) {
    echo "A mensagem não pôde ser enviada. Código do erro: {$mail->ErrorInfo}";
}