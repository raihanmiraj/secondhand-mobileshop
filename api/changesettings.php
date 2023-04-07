<?php
require '../conn.php';

function changeSetting($value,$conn, $name) {
       $changeFile = "UPDATE `settings` SET  `value`='$value' WHERE  `name` = '$name'";
       if(mysqli_query($conn, $changeFile)){
       return 1;
       }else{
              return  0;
       }
     }


if(!empty($_FILES['banner_image']['name'])){
       $image_name=$_FILES['banner_image']['name'];
       $temp = explode(".", $image_name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
       $newfilename=$newfilename;
       $imagepath="../uploads/site/".$newfilename;
       move_uploaded_file($_FILES["banner_image"]["tmp_name"],$imagepath);
       $name = 'logo';
$value = $newfilename;

changeSetting($value,$conn, $name) ;
}
if(!empty($_POST['title'])){
$name = 'title';
$value =$_POST['title'];

changeSetting($value,$conn, $name) ;

}

if(!empty($_POST['url'])){
       $name = 'url';
       $value =$_POST['url'];
       
       changeSetting($value,$conn, $name) ;
       
       }

?>