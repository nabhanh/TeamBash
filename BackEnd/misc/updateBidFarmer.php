<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE bidding SET status = ? WHERE id = ?";

$bind = $db->prepare($query);
$bind->bind_param('ii', $_GET['status'] ,$_GET['id']);
$bind->execute();


$query = 'SELECT bid_qty, pid FROM bidding WHERE id = '.$_GET['id'];
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    //$response[] = $row; 

    $query = "UPDATE product SET quantity = (quantity-?) WHERE id = ?";
    
    $bind = $db->prepare($query);
    $bind->bind_param('ii',$row['bid_qty'], $row['pid']);
    $bind->execute();
}

//print_r($row);

echo 'Bidding Updated!'
?>

