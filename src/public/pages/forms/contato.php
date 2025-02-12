<?php

require "../../../bootstrap.php";

// dd($_POST);

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
