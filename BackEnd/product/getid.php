<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT p.name as pname, p.quantity, p.price, p.fid, p.id, f.name as fname FROM product as p, farmer as f WHERE p.id = '.$_GET['id'].' AND p.fid = f.id ';

$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}

echo json_encode($response);

