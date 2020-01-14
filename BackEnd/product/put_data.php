<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "INSERT INTO product ( name, quantity, price, fid, status) VALUES ( ?, ?, ?, ?, 1)";

$bind = $db->prepare($query);
$bind->bind_param('siii', $_GET['name'], $_GET['quantity'], $_GET['price'], $_GET['fid']);
$bind->execute();

echo 'Product Added!'
?>
