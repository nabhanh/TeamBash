<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
checkData();

function checkData(){
    include '../login.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $query = 'SELECT id from bidding where pid='.$_GET['pid'].' AND vid='.$_GET['vid'];
    $results = mysqli_query($db, $query);

    $response = [];

    while ($row = $results->fetch_assoc()) {
        $response[] = $row;
    }
    if(count($response)==0)
    insertData();
    else
    updateData($response[0]['id']);
}

function updateData($id){
    include '../login.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $query = "UPDATE bidding
    SET bid_price=?, bid_qty=? WHERE id = ?";

    $bind = $db->prepare($query);
    $bind->bind_param('iii',$_GET['bid_price'], $_GET['bid_qty'], $id);
    $bind->execute();

    echo 'Bidding Updated!';
}

function insertData(){
    include '../login.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $query = "INSERT INTO bidding ( pid, vid, bid_price, bid_qty, status ) VALUES ( ?, ?, ?, ?, ?)";
    $_GET['status'] = '0';
    $bind = $db->prepare($query);
    $bind->bind_param('iiiii', $_GET['pid'], $_GET['vid'], $_GET['bid_price'], $_GET['bid_qty'], $_GET['status']);
    $bind->execute();

    echo 'Bidding Added!';
}
?>
