<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE bidding
SET pid = ?,vid= ?,bid_price=?,bid_qty=?,status=?
WHERE id= ?";

$bind = $db->prepare($query);
$bind->bind_param('iiiiii', $_GET['pid'], $_GET['vid'], $_GET['bid_price'], $_GET['bid_qty'],$_GET['status'] ,$_GET['id']);
$bind->execute();

echo 'Bidding Updated!'
?>

