<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "INSERT INTO bidding ( pid, vid, bid_price, bid_qty, status ) VALUES ( ?, ?, ?, ?, ?)";

$bind = $db->prepare($query);
$bind->bind_param('iiiii', $_GET['pid'], $_GET['vid'], $_GET['bid_price'], $_GET['bid_qty'], $_GET['status']);
$bind->execute();

echo 'Bidding Added!'
?>
