<?php

use PHPMailer\PHPMailer\PHPMailer;

function send(){
    $email = new PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->isSMTP();
    $email->SMTPSecure = $_ENV['EMAIL_SMTP_SECURE'];
    $email->SMTPAuth = true;
    $email->Host = $_ENV['EMAIL_HOST'];
    $email->Port = $_ENV['EMAIL_PORT'];
    $email->Username = $_ENV['EMAIL_USERNAME'];
    $email->Password = $_ENV['EMAIL_PASSWORD'];
    $email->isHTML(true);
    $email->setFrom(''); // Email que vai enviar
    $email->FromName = ''; // Nome que vai enviar
    $email->addAddress($_ENV['EMAIL_ADDRESS']); // Email que vai receber
    $email->Subject = '';
    $email->Body  = '';
    $email->AltBody = '';
    $email->msgHTML('');
    return $email->send();
}