<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'select MAX(bid_price) as price from bidding where pid='.$_GET['id'].' group by pid';
$results = mysqli_query($db, $query);

$response = [];

while ($row = $results->fetch_assoc()) {
    $response[] = $row;
}
if(count($response)==0)
echo 0;
else
echo $response[0]['price'];
//echo json_encode($response);

