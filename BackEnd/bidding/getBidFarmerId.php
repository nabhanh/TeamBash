<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT p.name, b.bid_price, b.bid_qty, b.id FROM product as p, bidding as b WHERE p.id = b.pid AND p.id = '.$_GET['id'].' AND b.status = 0 ORDER BY b.bid_price DESC';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {

    $response[] = $row;
}

echo json_encode($response);

