<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT b.bid_price, b.bid_qty, f.name as fname, p.name as name FROM bidding as b, farmer as f, product as p WHERE b.status = 1 AND b.vid = '.$_GET['id'].' AND b.pid = p.id';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);
