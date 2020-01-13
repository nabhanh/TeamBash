<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT p.name as name, p.quantity as qty, MAX(b.bid_price) as price FROM product as p, bidding as b WHERE p.id = b.pid AND p.fid = '.$_GET['id'].' GROUP BY b.pid';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);
