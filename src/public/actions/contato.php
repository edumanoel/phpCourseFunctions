<?php

require "../../bootstrap.php";

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

try {
    send($validate);
    setFlashMessage('Mensagem enviada com sucesso', 'success');
} catch (Exception $e) {
    setFlashMessage($e->getMessage());
} finally {
    redirct('contato');
}
