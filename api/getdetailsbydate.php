<?php
require '../conn.php';
 $from = $_GET['from'];
 $to = $_GET['to'];
 $table = $_GET['table'];
function getDataByTime($from , $to , $conn ,  $table){
    $getdetails = "SELECT * FROM  $table where date between '".$from."' and '".$to."' ";
    $results = mysqli_query($conn, $getdetails);
     
     
     $all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
     return json_encode($all);
}

// getDataByTime('2021-07-01' , '2021-07-11' , $conn)

?>


 