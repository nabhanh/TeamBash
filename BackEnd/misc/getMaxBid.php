<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'select MAX(bid_price) from bidding where pid='.$_GET['pid'].' group by pid';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);

