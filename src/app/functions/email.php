<?php

use PHPMailer\PHPMailer\PHPMailer;

function send(array $data)
{
    $email = new PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->isSMTP();
    $email->SMTPSecure = $_ENV['EMAIL_SMTP_SECURE'];
    $email->SMTPAuth =  $_ENV['EMAIL_SMTP_AUTH'];
    $email->Host = $_ENV['EMAIL_HOST'];
    $email->Port = $_ENV['EMAIL_PORT'];
    $email->Username = $_ENV['EMAIL_USERNAME'];
    $email->Password = $_ENV['EMAIL_PASSWORD'];
    $email->isHTML(true);
    $email->setFrom($data['email']); // Email que vai enviar
    $email->FromName = $data['name']; // Nome que vai enviar
    $email->addAddress($_ENV['EMAIL_ADDRESS']); // Email que vai receber
    $email->Subject = $data['subject'];
    $email->Body  = $data['message'];
    $email->AltBody = 'Use um software de email compatível com HTML para visualizar este conteúdo.';
    $email->msgHTML($data['message']);
    return $email->send();
}
