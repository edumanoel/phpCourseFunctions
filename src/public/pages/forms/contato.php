<?php

require "../../../bootstrap.php";

if (isEmpty(['name', 'email', 'subject', 'message'])) {
    setFlashMessage('danger', 'Todos os campos são obrigatórios');
    header('Location: /?page=contato');
    die();
}

$validate = validate([
    'name' => 'string',
    'email' => 'email',
    'subject' => 'string',
    'message' => 'string'
]);

echo $validate->name . "<br />";
echo $validate->email . "<br />";
echo $validate->subject . "<br />";
echo $validate->message . "<br />";
