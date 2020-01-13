<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE product
SET name = ?,quantity=?,price=?,fid=?
WHERE id= ?";

$bind = $db->prepare($query);
$bind->bind_param('siiii', $_GET['name'], $_GET['quantity'], $_GET['price'], $_GET['fid'], $_GET['id']);
$bind->execute();

echo 'Product Updated!'
?>
