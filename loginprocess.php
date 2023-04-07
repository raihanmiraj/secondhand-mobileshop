<?php
require 'conn.php';
$u_email = $_POST['email'];
$u_pass =$_POST['pass'];

$HasAvaiable = "SELECT * FROM `users` WHERE  u_email = '".$u_email."' AND u_pass = '".$u_pass."' ";
$results = mysqli_query($conn, $HasAvaiable);
if(mysqli_num_rows($results)>0){
     $results = mysqli_fetch_assoc( $results);
   session_start();
   $_SESSION['u_id'] = $results['u_id'];
   $_SESSION['u_name'] =  $results['u_name'];
   $_SESSION['is_admin'] =  $results['is_admin'];
 $_SESSION['u_email'] = $u_email;
 $_SESSION['u_pass'] = $u_pass;
 header("Location:index.php");

}else{
    header("Location:login.php");
}







?>