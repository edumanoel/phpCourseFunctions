<?php

function validate(array $fields)
{
    $validate = [];

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 'string':
                $filter = FILTER_SANITIZE_STRING;
                break;
            case 'email':
                $filter = FILTER_SANITIZE_EMAIL;
                break;
            case 'int':
                $filter = FILTER_SANITIZE_NUMBER_INT;
                break;
            default:
                $filter = FILTER_SANITIZE_STRING;
                break;
        }
        $validate[$field] = filter_var(request()[$field], $filter);
    }
    return $validate;
}

function isEmpty(array $fields)
{
    foreach ($fields as $field) {
        if (empty(request()[$field])) {
            return true;
        }
    }
    return false;
}
