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


if ($method == 'DELETE')
{   
   
    $id = $_GET['id'];

    deleteAuthor($connect, $id);

} 
else 
{
    echo json_encode([
        "code" => 0,
        "message" => "invalid request method"
    ], 448);
} 

function deleteAuthor($connect, $id)
{   
    
    $result = mysqli_query($connect, "SELECT COUNT(*) FROM books WHERE author_id = '$id'");
    $count = mysqli_fetch_array($result)[0];

    if ($count > 0) {
         
        mysqli_query($connect, "DELETE FROM books WHERE author_id = '$id'");
    }

     
    mysqli_query($connect, "DELETE FROM authors WHERE id = '$id'");

    $response = [
        "status" => 200,
        "message" => 'author was deleted'
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE | 448);
} 

?>