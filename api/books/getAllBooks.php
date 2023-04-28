<?php
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

DEFINE('PATH', '/var/www/html/api/config');
require_once PATH . '/autoload.php';

$sql = "SELECT * FROM books";
$query = mysqli_query($connect, $sql);

$results = [];

while($result = mysqli_fetch_assoc($query))
{
    $results[] = $result;
}

echo json_encode($results, JSON_UNESCAPED_UNICODE);


?>