<?php

use PHPMailer\PHPMailer\PHPMailer;

function send(array $data)
{
    $email = new PHPMailer();
    $email->isSMTP();
    $email->SMTPDebug = 3;
    $email->Host = $_ENV['EMAIL_HOST'];
    $email->Port = $_ENV['EMAIL_PORT'];
    $email->SMTPSecure = $_ENV['EMAIL_SMTP_SECURE'];
    $email->SMTPAuth =  $_ENV['EMAIL_SMTP_AUTH'];
    $email->Username = $_ENV['EMAIL_USERNAME'];
    $email->Password = $_ENV['EMAIL_PASSWORD'];
    $email->isHTML(true);
    $email->CharSet = 'UTF-8';
    $email->setFrom($_ENV['EMAIL_ADDRESS'],  $data['name']);
    $email->addReplyTo($data['email'], $data['name']);
    $email->addAddress($_ENV['EMAIL_ADDRESS']);
    $email->Subject = $data['subject'];
    $email->msgHTML($data['message']);
    $email->Body  = $data['message'];
    $email->AltBody = 'Use um software de email compatível com HTML para visualizar este conteúdo.';
    
    if (!$email->send()) {
        throw new Exception($email->ErrorInfo);
    }
    return true;
}
