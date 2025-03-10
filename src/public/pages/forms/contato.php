<?php

require "../../../bootstrap.php";

if (isEmpty(['name', 'email', 'subject', 'message'])) {
    setFlashMessage('Todos os campos são obrigatórios');
    redirct('contato');
    die();
}

$validate = validate([
    'name' => 'string',
    'email' => 'email',
    'subject' => 'string',
    'message' => 'string'
]);

if (send($validate)) {
    setFlashMessage('Mensagem enviada com sucesso', 'success');
    redirct('contato');
} else {
    setFlashMessage('Erro ao enviar mensagem');
    redirct('contato');
}