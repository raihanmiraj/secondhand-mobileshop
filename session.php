<?php


if(!isset($_SESSION)) { 
    session_start();
  } 
  
  if(isset($_SESSION['u_email']) && isset($_SESSION['u_pass'])){
  // echo  $_SESSION['u_email'] . "raihan " . $_SESSION['u_pass'];
  } else{
    header("Location:login.php");
  }
   
?>