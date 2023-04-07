<?php require  'session.php'; ?><?php 
require 'conn.php'; 

if (!empty($_FILES['files']['name'])) {

 
   $countfiles = count($_FILES['files']['name']);

// Upload directory
    $upload_location = "uploads/";

    // To store uploaded files path
    $files_arr = array();

    // Loop all files
    for ($index = 0;$index < $countfiles;$index++) {
        if (isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '') {
            // File name
            $filename = $_FILES['files']['name'][$index];

            // Get extension
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            // Valid image extension
            $valid_ext = array("png","jpeg","jpg");

            // Check extension
            if (in_array($ext, $valid_ext)) {

         // File path
                $path = $upload_location.$filename;

                // Upload file
                if (move_uploaded_file($_FILES['files']['tmp_name'][$index], $path)) {
                    $files_arr[] = $path;
                }
            }
        }
    }
}

$u_id = $_SESSION['u_id'];
 
$customer  = $_POST['customer'];
$mobile = $_POST['mobile'];
$recommendator = $_POST['recommendator'];

$insertData = "INSERT INTO `buy`(  `u_id`,`customer_info`, `mobile_info`, `recommendator_info`) VALUES ('".$u_id."','".$customer."','".$mobile."','".$recommendator."')";

// $conn = mysqli_connect("localhost", "root", "", "mobileshop");
if(mysqli_query($conn, $insertData)){
   // echo json_encode($files_arr);
   echo 1;
}else{
   echo 0;
}


// echo json_encode($customer);

// echo $customer;

// die;
