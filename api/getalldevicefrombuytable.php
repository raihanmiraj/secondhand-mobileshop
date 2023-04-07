<?php
require '../conn.php';
 
$getdetails = "SELECT * FROM `buy`";
$results = mysqli_query($conn, $getdetails);
 
 
 $all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
//  echo json_encode($all);

$mobile_info = $all;
$totalmobilenamearray = Array();
//  $mobileNumber = $mobile_info[0];
//  $mobile2nd = json_decode();
$totalfilecounted  = count($mobile_info);
for($j=0;$j<$totalfilecounted; $j++ ){
  $mobilesinglearray = json_decode($mobile_info[$j]['mobile_info'])  ;
//   var_dump( $mobilesinglearray);
    
     $getcounted = count($mobilesinglearray);
 for($i=0;$i < $getcounted; $i++ ){
    // var_dump($mobilesinglearray[$i]->m_mobile);
 $array =    array("m_mobile"=>$mobilesinglearray[$i]->m_mobile, "id"=>$all[$j]['id'], "m_id"=>$mobilesinglearray[$i]->m_id,  "m_price"=>$mobilesinglearray[$i]->m_price, "full_details"=>$mobilesinglearray[$i]);
   array_push($totalmobilenamearray,$array  );

  //  array_push($totalmobilenamearray,$mobilesinglearray[$i]->m_mobile. 'id'.$all[$j]['id'] );
  // array_push($totalmobilenamearray,$mobilesinglearray[$i]);
 }


}
echo json_encode($totalmobilenamearray);

?>


 