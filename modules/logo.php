<?php
$getTheLogo = "SELECT * FROM `settings` WHERE  `name` = 'logo'";
$results = mysqli_query($conn, $getTheLogo);
$logo =  mysqli_fetch_assoc($results);
$value = $logo['value'];
$logo_url = "uploads/site/".$value;
?>