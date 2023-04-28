<?php

DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';

header("Access-Control-Allow-Headers: access");
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Methods: POST");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST')
{
    addpost($connect, $_POST);
} 
else 
{
    echo json_encode([
        "code" => 0,
        "message" => "invalid request method"
    ], 448);

}


function addpost($connect, $data)
{   
    $id = $data['id'];
    $title = $data['title'];
    $description = $data['description'];
    $year = $data['year'];
    $genre = $data['genre'];
    $author_id = $data['author_id'];

    mysqli_query($connect, "INSERT INTO books (id, title, description, year, genre, author_id) VALUES ('$id', '$title', '$description', '$year', '$genre', '$author_id')");

    $responce = [
        "status" => 201,
        "message" => "book was created"
    ]; 


    echo json_encode($responce, JSON_UNESCAPED_UNICODE | 448);
}


?>