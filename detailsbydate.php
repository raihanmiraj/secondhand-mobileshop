<?php require  'session.php'; ?><?php require 'conn.php'; ?><?php
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
<div class="col-md-4">
 
        <label for="selectform" class="form-label">Select</label>
        <select class="form-select form-select" id="selectform" aria-label=".form-select-sm example">
  <option value="1">Bought Device</option>
  <option value="2">Sold Device</option>

</select>
  
</div>
<div class="col-md-4">
 
        <label for="from_date" class="form-label">From</label>
        <input name="from_date" class="form-control" id="from_date" type="date"   value="<?php echo  $before7days ; ?>" data-date-split-input="true">
  
</div>
<div class="col-md-4">

<label for="to_date" class="form-label">To</label>
        <input name="to_date" class="form-control" id="to_date" value="<?php echo $date ; ?>" type="date" data-date-split-input="true">
    
</div>
 
</div>
<div class="container" style="padding:20px;">
        <div class="col-md-12 text-center">
            <button type="button" id="getdata" class="btn btn-primary">Submit</button>
           
        </div>
    </div>







 

</div>



</div>


 


<!-- <div class="row">
                    <div class="col-xl-3 col-md-6">
<div class="card border-dark mb-3" >
<div class="card-header">tOTAL</div>
<div class="card-body">

<p  id="mobileincomedetails" class="card-text"> NO dATA</p>
</div>
</div>
</div>
              
  <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text">NO dATA</p>
  </div>
</div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text"> NO dATA</p>
  </div>
</div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                               
                            <div class="card border-dark mb-3" >
  <div class="card-header">Header</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text">NO dATA </p>
  </div>
</div>
                            </div>
       
                            </div> -->
 
 
                       <main id="tablehere">
                       
                     
                    
                              

                            
                         
                        </main>
               
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
function getTheResult(){

   var from_date =  $("#from_date")[0].value;
   var to_date =  $("#to_date")[0].value;
    var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
printresult(xhttp.responseText);
   }
};
var select =  document.getElementById("selectform").value;
if(select==1){
  var url = 'modules/tableofdatebydate.php?from='+from_date+'&to='+to_date + '&table=buy';
}else{
  var url = 'modules/tableofdatebydate.php?from='+from_date+'&to='+to_date + '&table=sell';
}

console.log(url);
xhttp.open("GET", url, true);
xhttp.send();


};

function printresult(e){
    $("#tablehere").html(e);
}
// function printresult(data){
 


//     var getAllBuyerFile = JSON.parse(data);
 
//  getAllBuyerFile.forEach((item)=>{
// var customer_info =item['seller_info'];
// var mobile_info  = item['mobile_info']
// var recommendator_info =  item['recommendator_info'];
// customer_info = JSON.parse(customer_info);
// mobile_info = JSON.parse(mobile_info);
// recommendator_info = JSON.parse(recommendator_info);
// var name = customer_info['name'];
// var phone = customer_info['phone'];
// var r_name = recommendator_info['name'];
// // var model = mobile_info['model']; 
// // var price = mobile_info['price']; 
// var model = 0; 
// var price = 0; 
// var htmlOfVideoMEta ='<tr> <td>'+name+'</td><td>'+phone+'</td><td>'+model+'</td><td>'+r_name+'</td><td>'+price+'</td><td>'+name+'</td></tr>';
// //  var htmlOfVideoMEta = '  <tr><td>'+name+'</td><td>'+user_name+'</td><td>Edinburgh</td><td>61</td><td>2011/04/25</td><td>$320,800</td></tr>';

// $(".dataTable-container")[0].style="height:100%"

// $("tbody").append(htmlOfVideoMEta);
 

// });

// }

 
 




</script>

    </body>
</html>
