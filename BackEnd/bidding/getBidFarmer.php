<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT p.id, p.name FROM product as p WHERE fid = '.$_GET['fid'];
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {

    $query1 = 'SELECT b.bid_price, b.bid_qty, b.id FROM product as p, bidding as b WHERE p.id=b.pid AND p.id = '. $row['id'] .' AND b.status = 0 ORDER BY b.bid_price DESC';
    $results1 = mysqli_query($db, $query1);
    
    $response1 = [];
    
    while ($row1 = $results1->fetch_assoc()) {
        $response1[] = $row1;
    }
    $row['requests'] = json_encode($response1);

    $response[] = $row;
}

echo json_encode($response);

