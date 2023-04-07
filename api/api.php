<?php
require '../conn.php';
if(isset($_GET['get_users'])){

echo  getData('users' ,  $conn);

}

if(isset($_GET['moneyspentbyid'])){

 echo getDataByID('moneyspent', $conn ,'id' ,$_GET['moneyspentbyid'] );
  
  }


  if(isset($_GET['userbyid'])){

    echo getDataByID('users', $conn, 'u_id' , $_GET['userbyid'] );
     
     }

function getData($table, $conn ){
    $getdetails = "SELECT * FROM $table";
    $results = mysqli_query($conn, $getdetails);
  $all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
     return json_encode($all);
}

function getDataByID($table, $conn ,$idname, $id ){
  $getdetails = "SELECT * FROM $table WHERE $idname='$id'";
  $results = mysqli_query($conn, $getdetails);
$all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
   return json_encode($all);
}


if(isset($_GET['search']) && isset($_GET['imei'])){
 echo searchData('buy', $conn ,'mobile_info',$_GET['search'] );


}

function searchData($table, $conn ,$idname, $id ){
  $getdetails = "SELECT * FROM $table WHERE $idname like '%$id%'";
  $results = mysqli_query($conn, $getdetails);
$all = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
   return json_encode($all);
}



 



?>