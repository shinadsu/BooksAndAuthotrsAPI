<?php
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';


if(!isset($_GET['id']))
{
    echo json_encode([
        "code" => 0,
        "message" => "id is empty"
    ], 448);
    die();
}


$id = $_GET['id'];


if(!isset($id) || empty($id))
{
    echo json_encode([
        "code" => 0,
        "message" => "not found"
    ], 448);
}

$sql = "SELECT * FROM books WHERE id = $id";
$query = mysqli_query($connect, $sql);

$results = [];

while($result = mysqli_fetch_assoc($query))
{
    $results[] = $result;
}

if (mysqli_num_rows($query) == 0) {
    echo json_encode([
        "code" => 0,
        "message" => "this id - $id is not created"
    ], 448);
} else {
    echo json_encode($results, JSON_UNESCAPED_UNICODE | 448);
}



?>