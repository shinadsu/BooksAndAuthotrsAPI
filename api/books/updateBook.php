<?php

header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PATCH");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");


DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'PATCH')
{   
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    updateBook($connect, $data);

} 
else 
{
    echo json_encode([
        "code" => 0,
        "message" => "invalid request method"
    ], 448);

}


function updateBook($connect, $data)
{   
    $id = $data['id'];
    $title = $data['title'];
    $description = $data['title'];
    $year = $data['year'];
    $genre = $data['genre'];
    $author_id = $data['author_id'];

    mysqli_query($connect, "UPDATE books SET title='$title', description='$description', year='$year', genre='$genre', author_id='$author_id' WHERE id='$id'");

    $responce = [
        "status" => 200,
        "message" => 'book was updated'
    ];

    echo json_encode($responce, JSON_UNESCAPED_UNICODE | 448);
}       

?>