<?php

DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';

header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Methods: POST");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST')
{
    addauthor($connect, $_POST);
} 
else 
{
    echo json_encode([
        "code" => 0,
        "message" => "invalid request method"
    ], 448);
}


function addauthor($connect, $data)
{   
    $id = $data['id'];
    $name = $data['name'];
    $middlename = $data['middlename'];
    $lastname = $data['lastname'];

    mysqli_query($connect, "INSERT INTO authors (id, name, middlename, lastname) VALUES ('$id', '$name', '$middlename', '$lastname')");

    $responce = [
        "status" => 201,
        "message" => "author was created"
    ]; 


    echo json_encode($responce, JSON_UNESCAPED_UNICODE | 448);
}


?>