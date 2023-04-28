<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


if(!isset($_GET['author_id']))
{
    echo json_encode([
        "code" => 0,
        "message" => "author_id is empty"
    ], 448);
    die();
}


$author_id = $_GET['author_id'];


if(!isset($author_id) || empty($author_id))
{
    echo json_encode([
        "code" => 0,
        "message" => "author_id not found"
    ], 448);
}

$sql = "SELECT * FROM books WHERE author_id = $author_id";
$query = mysqli_query($connect, $sql);

$results = [];

while($result = mysqli_fetch_assoc($query))
{
    $results[] = $result;
}

if (mysqli_num_rows($query) == 0) {
    echo json_encode([
        "code" => 0,
        "message" => "this author_id not found"
    ], 448);
} else {
    echo json_encode($results, JSON_UNESCAPED_UNICODE | 448);
}



?>