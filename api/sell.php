<?php
require '../conn.php';
 
$getdetails = "SELECT * FROM `sell`";
$results = mysqli_query($conn, $getdetails);
 
 
 $all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
 echo json_encode($all);
?>


 