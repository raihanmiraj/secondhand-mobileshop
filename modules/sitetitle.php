<?php
 
// $getTheTitle= "SELECT * FROM `settings` WHERE  `name` = 'title'";
// $results = mysqli_query($conn, $getTheTitle);
// $title=  mysqli_fetch_assoc($results);
// $site_title = $title['value'];
 

$getTheTitle= "SELECT * FROM `settings`";
$results = mysqli_query($conn, $getTheTitle);
 
$results = mysqli_fetch_all($results,$resulttype = MYSQLI_ASSOC);
 $site_logo = $results[0]['value'];
 $url = $results[1]['value'];
 $site_title = $results[2]['value'];

 


