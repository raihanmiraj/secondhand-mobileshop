 

 <?php
 require 'conn.php';
 $date = strtotime("-7 day");
$before7days = date("Y-m-d", $date);



$date = date("Y-m-d");
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid ">

 
       
                    <div class="  row justify-content-center">
                    <div class="col-md-6">

<div class="row">

<div class="col-md-6">
 
        <label for="from_date" class="form-label">From</label>
        <input name="from_date" class="form-control" id="from_date" type="date"   value="<?php echo  $before7days ; ?>" data-date-split-input="true">
  
</div>
<div class="col-md-6">

<label for="to_date" class="form-label">To</label>
        <input name="to_date" class="form-control" id="to_date" value="<?php echo $date ; ?>" type="date" data-date-split-input="true">
    
</div>
 

<div class="container  " style="padding:20px;">
        <div class="col-md-12 text-center">
            <button type="button" id="getdata" class="btn btn-primary">Submit</button>
           
        </div>
    </div>




</div>


 

</div>



</div>


 


<div class="row">
                    <div class="col-xl-3 col-md-6">
<div class="card border-dark mb-3" >
<div class="card-header">Mobile Statics</div>
<div class="card-body">

<p  id="mobileincomedetails" class="card-text"> </p>
</div>
</div>
</div>
              
  <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text"> </p>
  </div>
</div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text"> </p>
  </div>
</div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text"> </p>
  </div>
</div>
                            </div>
       
                            </div>
 
 
                     
        <div id="x" class="x">

        </div>
                    
                            <!--  -->






                    </div>
                </main>
            <?php include 'footerlayer.php'; ?>
            </div>
        </div>
  
<?php include 'footer.php'; ?>


<script>

$( document ).ready(function() {




$("#getdata").click(getTheResult);






});
// function getTheResult(){

//    var from_date =  $("#from_date")[0].value;
//    var to_date =  $("#to_date")[0].value;
//     var xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
      
// printresult(xhttp.responseText);
//    }
// };
// var url = 'api/getdetailsbydate.php?from='+from_date+'&to='+to_date + '&table=buy';
// xhttp.open("GET", url, true);
// xhttp.send();


// };
// function printresult(data){
 

// $("#x").html(data)
//  console.log(data);

// }

 function getTheResult(){

   var from_date =  $("#from_date")[0].value;
   var to_date =  $("#to_date")[0].value;
    var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
printresult(xhttp.responseText);
   }
};
var table = 'buy';
 

var url = 'table/boughttable.php?from='+from_date+'&to='+to_date+'&table='+table;
xhttp.open("GET", url, true);
xhttp.send();


};
 

function printresult(data){
 

$("#x").html(data)
 console.log(data);

}


</script>

    </body>
</html>
