<?php

// require '../conn.php';
 

function markassold($conn, $id ){

    preg_match_all('/id(.*[0-9]?)m_id(.*[0-9]?)/m', $id, $matches, PREG_SET_ORDER, 0);
  
      $id = $matches[0][1];
      $arrayid = $matches[0][2];
      
  
      $markassold = "update buy set `mobile_info` = JSON_SET(  `mobile_info` , '$[$arrayid].m_sold', 1)   where id='$id'"; 
      if(mysqli_query($conn, $markassold)){
    //   echo 1;
      
      }else{
          // echo 0;
      }
  }
  


  
























//  require '../conn.php';
// $id=  $_GET['id'];

// $idOfMobileArray=$_GET['ids'];
 
//     $markassold = "update buy set `mobile_info` = JSON_SET(  `mobile_info` , '$[$idOfMobileArray].m_sold', 1)   where id='$id' "; 
//     if(mysqli_query($conn, $markassold)){
//     echo 1;
    
//     }else{
//         echo 0;
//     }
 




// $getdetails = "SELECT * FROM `buy`where id='$id'";
// $results = mysqli_query($conn, $getdetails);
 
 /*
 $all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
//  echo json_encode($all);
// UPDATE `buy` SET  `JSON_EXTRACT(mobile_info, "$")`="1"    where `id` = 45    
// SELECT  JSON_EXTRACT(mobile_info, "$[0].m_sold")  FROM `buy`
$mobile_info= $all[0]['mobile_info'];
 
// SELECT JSON_REPLACE( `recommendator_info` , '$.key2', 10) from buy;
// JSON_SET( `recommendator_info` , '$[0].key2', 10)  from buy where id=45; 
$mobile_info = json_decode($mobile_info);
echo($mobile_info[0]->m_sold);*/


// update buy set `recommendator_info` = JSON_SET( `recommendator_info` , '$[0].key2', 10)   where id=45; 
?>