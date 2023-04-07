<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


$conn = mysqli_connect("localhost", "root", "", "mobileshop");

$type = $_GET['type'];



if($type == 'sellerall'){

    $getAllSellerFile = "SELECT * FROM `sell` ORDER BY id DESC";
    $results = mysqli_query($conn, $getAllSellerFile);
    $data =$results->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
 
}

if($type == 'buyall'){
    $getAllSellerFile = "SELECT * FROM `buy` ORDER BY id DESC";
    $results = mysqli_query($conn, $getAllSellerFile);
    $data =$results->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
}





























 
?>