<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT product.name,product.id, bidding.bid_price, bidding.bid_qty FROM product, bidding WHERE bidding.pid=product.id and bidding.status=1 and fid='.$_GET['fid'];
$results = mysqli_query($db, $query);


$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);
