<?php

function connect()
{
    $host = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_DATABASE'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];

    $pdo = new \PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function create($table, $data) {}

function update($table, $data, $id) {}

function find($table) {}

function findById($table, $id) {}

function delete($table, $id) {}