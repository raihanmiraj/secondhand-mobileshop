<?php require  'session.php'; ?><?php 

 require 'conn.php';
$id = $_GET['id'];
 $loadData = "SELECT * FROM `buy` WHERE `id` = '$id' ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $customer_info = $row['customer_info'];
     $mobile = $row['mobile_info'];
     $recommendator = $row['recommendator_info'];
     $customer_info = json_decode($customer_info) ;
     $attached=$customer_info ->attached;



 }
 
 $count =  count($attached);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/darkmode.css">
    <title>Document</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://aloronbd.net/movie/movie">BlazeBD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://aloronbd.net/movie">Home</a>
              </li>
              
               <li class="nav-item dropdown">
                
                       <a class="nav-link" aria-current="page" href="https://aloronbd.net/movie/login">Login</a> 
                      
              </li>
            </ul>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="https://aloronbd.net/movie/search/movie" method="POST">
              <input type="hidden" name="_token" value="JCKCTosBXwJgFSNfxG5nfjg9MP0RoAB4dPEME21e">         <div class="input-group">
                 <input name="name" class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                     <button class="btn btn-primary" ><ion-icon name="search-outline"></ion-icon></button>
                 </div>
                 
             </div>
         </form>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="darkMode">
                <label class="form-check-label" for="darkMode">Dark Mode</label>
              </div>
             
          </div>
         
        </div>
      </nav>
         

 
 

    <div class="gg-container" style="padding:30px;">
        <div class="gg-box">

        <?php
      for($i=0;$i<$count ; $i++){
        echo ' <img src="uploads/'.$attached[$i].'">';
         }

        ?>
          
            <!-- <img src="https://source.unsplash.com/OoqKykDmBXw/">                -->
            
        </div>
       
       </div>

 
<script>
gridGallery({

// gallery selector
selector: "#mSelector",

// enable dark mode
darkMode: true,

// or "horizontal"
layout: "horizontal",

// space between images
gapLength: 4,

// row height
rowHeight: 180,

// column width
columnWidth: 200

});

</script>
<link rel="stylesheet" href="assets/css/grid-gallery.min.css">
<script src="assets/js/grid-gallery.min.js"></script>
 
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/darkmode.js"></script>
</body>
</html>