<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT * FROM farmer';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);
