<?php

require "../../../bootstrap.php";

if (isEmpty(['name', 'lastName', 'email', 'password'])) {
    setFlashMessage('Todos os campos são obrigatórios');
    redirct('create_user');
    die();
}

$validate = validate([
    'name' => 'string',
    'lastName' => 'string',
    'email' => 'email',
    'password' => 'string'
]);

try {
    create($table, $validate);
    setFlashMessage('Cadastrado com sucesso', 'success');
} catch (Exception $e) {
    setFlashMessage($e->getMessage());
} finally {
    redirct('create_user');
}
