<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "INSERT INTO orders ( pid, price, qty, vid ) VALUES ( ?, ?, ?, ?)";

$bind = $db->prepare($query);
$bind->bind_param('iiii', $_GET['pid'], $_GET['price'], $_GET['qty'], $_GET['vid']);
$bind->execute();

echo 'order Added!'
?>
