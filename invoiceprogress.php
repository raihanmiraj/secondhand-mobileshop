<?php require  'session.php'; ?><?php 

require 'conn.php'; 
include 'api/markassold.php';

if($_POST['markassold']){

   $markassold = $_POST['markassold'];
   $markassold = json_decode($markassold);
   $countmarkassold = count($markassold);
   if($countmarkassold>0){
   for($i=0;$i<$countmarkassold;$i++){
   
   
      markassold($conn, $markassold[$i] );
   
   
   }
    
   }
    }
    $u_id = $_SESSION['u_id'];
$customer  = $_POST['customer'];
$mobile = $_POST['mobile'];
$recommendator = $_POST['recommendator'];
$other = $_POST['other'];

$insertData = "INSERT INTO `sell`( `u_id`, `customer_info`, `mobile_info`, `recommendator_info`, `other`) VALUES ('".$u_id."','".$customer."','".$mobile."','".$recommendator."','".$other."')";

 
if(mysqli_query($conn, $insertData)){
   echo  1;
}else{
   echo 0;
}


 


    ?>