<?php
include 'conn.php';
$deletesell = "DELETE FROM `sell` ";
$deletebuy = "DELETE FROM `buy` ";
if(mysqli_query($conn, $deletesell) && mysqli_query($conn,  $deletebuy)  ){
    echo 1;
    
}else{
    echo 0;
}





?>