<?php
    include('phpmailer/PHPMailerAutoload.php');
    include('Mail.php');
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");

    $data = json_decode(file_get_contents('php://input'), true);

    $mail = new Mail(array("subject"=>'Olá danki code',"content"=>'Aqui é meu email de boas vindas.'));

    $mail->addAdress('guilhermegrillo.13@gmail.com','gui');

    $mail->sendMail();
    
    die(json_encode($data));
?>