<?php

header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");


DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';


if (mysqli_connect_errno()) 
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


if(!isset($_GET['title']))
{
    echo json_encode([
        "code" => 0,
        "message" => "title is empty"
    ], 448);
    die();
}


$title = $_GET['title'];


if(!isset($title) || empty($title))
{
    echo json_encode([
        "code" => 0,
        "message" => "title not found"
    ], 448);
}

$sql = "SELECT * FROM books WHERE title = '$title'";
$query = mysqli_query($connect, $sql);

$results = [];

while($result = mysqli_fetch_assoc($query))
{
    $results[] = $result;
}


if (mysqli_num_rows($query) == 0) {
    echo json_encode([
        "code" => 0,
        "message" => "this book not found"
    ], 448);
} 
else 
{
    echo json_encode($results, JSON_UNESCAPED_UNICODE | 448);
}



?>