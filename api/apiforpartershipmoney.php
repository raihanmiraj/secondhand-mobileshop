<?php 
 
function DeleteMoneyDetails($id, $conn){
    $delete = "DELETE FROM `moneyspent` WHERE  `u_id` = '$id'";
    if(mysqli_query($conn, $delete)){
        echo 1;
    }else{
        echo 0;
    }
}



function AddMoney( $conn, $u_id, $u_name, $reason, $taka){
    $insertData = "INSERT INTO `moneyspent`( `u_id`, `u_name`, `reason`, `taka` ) VALUES ('".$u_id."','".$u_name."','".$reason."','".$taka."' )";
    if(mysqli_query($conn, $insertData)){
        echo 1;
    }else{
        echo 0;
    }
}
 
 
?>