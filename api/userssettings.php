
<?php
// require '../conn.php';
// $id = $_POST['id'];

function DeleteUser($id, $conn){
    $delete = "DELETE FROM `users` WHERE  `u_id` = '$id'";
    if(mysqli_query($conn, $delete)){
        echo 1;
    }else{
        echo 0;
    }
}



function insertUser( $conn, $u_name, $u_email, $u_pass){
    $insertData = "INSERT INTO `users`(  `u_name`, `u_email`, `u_pass` ) VALUES ('".$u_name."','".$u_email."','".$u_pass."' )";
    if(mysqli_query($conn, $insertData)){
        echo 1;
    }else{
        echo 0;
    }
}













?>