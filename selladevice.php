 <?php require 'session.php'; ?>
<?php require 'conn.php'; ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sell A Device</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'navbar.php' ; ?>

    <div class="loading-overlay">
        <span class="fas fa-spinner fa-3x fa-spin"></span>
      </div>

    <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
 

 

<div id='preview'></div>
<div id="layoutSidenav_content">
<div class=" container-fluid px-4 row justify-content-center">
                    <div class="col-md-6">

                    <!-- class="row g-3"                                           -->
<form  class="row g-3 needs-validation" novalidate>

<div class="card text-center">
  <div class="card-header">Buyer Information</div>
</div>
  <div class="col-md-6">
    <label for="c_name" class="form-label">Customer's Name</label>
    <input type="text" name="c_name"   class="form-control" id="c_name"  required>
  </div>
  <div class="col-md-6">
    <label for="c_phone" class="form-label">Phone Number</label>
    <input type="text" name="c_phone"  class="form-control" id="c_phone"   required>
  </div>

   

  <div class="col-12">
    <label for="c_address" class="form-label">Address</label>
    <input type="text" name="c_address" class="form-control" id="c_address"   required>
  </div>

<!-- data picker -->
 

<div class="card text-center">
  <div class="card-header">Mobile Details</div>

</div>
 



 <div class="mobileform" style="height: 100%;width:100%">
 
  </div>

  <!-- <div class="col-md-12"><hr>
    <span style="float:left;font-size:2rem">Total Price : </span>
    <span id="totalprice" style="float: right;font-size:2rem">0 </span>
  </div> -->

<!--  
 
<button type="button" id="adddevice" class="btn btn-secondary">Add Another Device</button>
 
 
<button type="button" id="custom" class="btn btn-secondary">custom</button> -->
 
 
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" id="adddevice" class="btn btn-secondary btn-sm">Add Custom</button>
  <button type="button" id="addSelectdevice" class="btn btn-primary btn-sm">Add Selected</button>
  <button type="button" id="totalresult" class="btn btn-warning btn-sm">Total</button>
</div>
 

<div class="row">
<div class="col-6">
<span  style="float: left ;padding-top:20px;font-size:20px;">Total Price</span>
</div>
<div  class="col-6">

  <span id="totalmoney" style="float: right ;padding-top:20px;font-size:20px;">0BDT</span>
</div>

</div>

<div style="width: 100%;" class="paidordue">

<div class="row"> <div class="col-6">  
<select class="form-select" id="payresult" aria-label="Default select example">
  
  <option value="1">Paid</option>
  <option value="2">Due</option>
  
</select>
</div><div class="col-6"> <input type="text"  class="form-control" id="paidmoney"> </div></div>
</div>



 


<!-- <div style="width: 100%;" class="row">
<div class="col-md-6">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
 
</div>
<div  class="col-md-6">
 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
 
</div>

</div> -->


 
  <div class="card text-center">
  <div class="card-header">Mobile Condition</div>
</div>


<table style="width:300px"; align="center">
    <tr>
      <td><input id="new" class="radiopick form-check-input" type="radio" name="test" value="1" />New </td>
      <td><input id="old" class="radiopick form-check-input" type="radio" name="test" value="2" />Old</td>		
    </tr>
    </table>


<div class="card text-center">
  <div class="card-header">Warrenty</div>
</div>


 <div class="form-check form-check-inline">
  <input class="form-check-input warrenty" type="radio" name="inlineRadioOptions" id="1yow" value="1">
  <label class="form-check-label" for="">1 Year Official Warranty</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input warrenty" type="radio" name="inlineRadioOptions" id="1ysw" value="2">
  <label class="form-check-label" for=""> I Year Service Warranty</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input warrenty" type="radio" name="inlineRadioOptions" id="1ypw" value="3">
  <label class="form-check-label" for="">1 Year Parts Warranty</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input warrenty" type="radio" name="inlineRadioOptions" id="nw" value="4">
  <label class="form-check-label" for="">No Warranty</label>
</div>

 
     
         
     <div  class="form-check form-check-inline" id="div1"> <input class="form-check-input warrenty" type="radio" name="inlineRadioOptions" id="wf" value="5"> <span>Warranty For</span><input type="text" class=" warrenty" id="days" placeholder="360" aria-label="Amount (to the nearest dollar)"></span><span>days</span> </div>   
  
  <style>
    .dark-mode .warrenty{
      background: none;
      color: white;

    }
  </style>

 

 
 
  <div class="card text-center">
  <div class="card-header">Recommendator</div>
</div>
 

  <div class="col-md-6">
    <label for="r_name" class="form-label">Recommendator's Name</label>
    <input type="text" name="r_name" class="form-control" id="r_name" >
  </div>
  <div class="col-md-6">
    <label for="r_phone" class="form-label">Recommendator's Phone No</label>
    <input type="text" name="r_phone" class="form-control" id="r_phone"   >
  </div>
  <div class="col-12">
    <label for="r_address" class="form-label">Recommendator's Address</label>
    <input type="text" name="r_address" class="form-control" id="r_address"  >
  </div>

  <div class="col-12">
    <button type="submit" id="submit" class="btn btn-primary">Update</button>
  </div>
</form>  


 

</div> </div> 
<?php include 'footerlayer.php'; ?>
</div>



 
</div>


<!-- Button trigger modal -->
<button type="button" id="clickTheButton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" style="text-align: center;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"   id="exampleModalLabel">Data Has Submitted</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Data Has Submitted Successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>













 
<script>

 
let overlay = document.getElementsByClassName('loading-overlay')[0];


 var ArrayOfPrice=[];
 var ArrayOfAllMobile = [];
 var ArrayOfId=[];
 var ArraySelected = [];
 var ArrayOfSelectedMobileDetails = [];

 var formsubmit=0;
 var ArrayForMarkAsSold = [];

 










 function getSelected(){


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
miraj(xhttp.responseText);
   }
};


xhttp.open("GET", "api/getalldevicefrombuytable.php", true);
xhttp.send();

function miraj(x){
   
 x= JSON.parse(x);
 
 
  var l=1;
  var stringmake ;
  x.map((e, i, arr)=>{
  
      var valueselect = 'id'+e.id+'m_id'+e.m_id; 
 
ArraySelected[valueselect]=e.m_price;
 ArrayOfSelectedMobileDetails[valueselect]=e.full_details;
 
  
if(e.full_details.m_sold == 0){
  $(".selectdevice").append('<option value='+valueselect +'>'+e.m_mobile+'</option>  ');
}

 


});
}

}

 




var x=1;


 

function getAllMobileDetails(){
  ArrayForMarkAsSold=[];
  ArrayOfPrice=[];
  ArrayOfAllMobile=[];
var indexCount=0;
  var i=0;
  var m=0;

  var mobileinfo = [];
     var m_mobile=  $(".m_model");
     var m_imei1=  $(".m_imei1");
     var m_imei2=  $(".m_imei2");
     var m_ram=  $(".m_ram");
     var m_rom=  $(".m_rom");
     var m_price=  $(".m_price");
     /** */
     var c_name = $("#c_name").val();
 var c_phone = $("#c_phone").val();
 var c_address = $("#c_address").val();
     /** */

     var r_name = $("#r_name").val();
 var r_phone = $("#r_phone").val();
 var r_address = $("#r_address").val();


var countAll = $(".mobileform").children();
for(var k=0;k<countAll.length;k++){

  if($(".mobileform").children()[k].className.indexOf("selectdevice")!=-1){

var index =  $(".mobileform").children()[k].value;
ArrayOfSelectedMobileDetails[index].m_id = indexCount
 ArrayOfSelectedMobileDetails[index].m_sold = 1 ;
ArrayOfAllMobile.push(ArrayOfSelectedMobileDetails[index]);
ArrayForMarkAsSold.push($(".mobileform").children()[k].value);
ArrayOfPrice.push(ArrayOfSelectedMobileDetails[index].m_price);

indexCount++;
m++;
}else if($(".mobileform").children()[k].className.indexOf("custom")!=-1){

  var  m_imei1value =   m_imei1[i].value
  var  m_mobilevalue =  m_mobile[i].value
  var  m_imei2value =   m_imei2[i].value
  var  m_ramvalue =   m_ram[i].value
  var  m_romvalue =   m_rom[i].value
  var  m_pricevalue =   m_price[i].value
  ArrayOfPrice.push(m_pricevalue);
  var mobile = {
    m_id:indexCount,
   m_mobile:  m_mobilevalue,
      m_imei1: m_imei1value ,
      m_imei2: m_imei2value,
      m_ram:  m_ramvalue,
      m_rom:  m_romvalue,
      m_price: m_pricevalue ,
      m_sold: 1
 }


 ArrayOfAllMobile.push(mobile);
 i++;
 indexCount++;
}
}


// console.log(JSON.stringify(ArrayOfAllMobile) );




}








   $(document).ready(function(){



    (function () {
  formsubmit=0;
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }else{
           formsubmit=1;
        }

        form.classList.add('was-validated')
      }, false)
    })
})()










    $("#totalresult").click(function(){
      getAllMobileDetails();
      var sum=0;
    
 
for(var i=0;i<ArrayOfPrice.length; i++){
  sum+= parseInt(ArrayOfPrice[i]) ;
}

$("#totalmoney").html(sum + "BDT");
 
 

    });



$("#addSelectdevice").click(function(){
  if($(".selectdevice").length==0){
    $(".mobileform").append('<br><select class="form-select selectdevice"   aria-label="Default select example"></select>')
    getSelected();
  }else{
    $(".mobileform").append('<br><select class="form-select selectdevice" aria-label="Default select example">'+$(".selectdevice").html()+'</select>');
$(".selectdevice").html()
  }

  //  getSelected();
})
$("#adddevice").click(function(){
 
 $(".mobileform").append('<div class="custom"><div class="col-12"> <label for="m_model" class="form-label ">Model No</label> <input type="text" name="m_model" class="form-control m_model" id="m_model" required> </div><div class="row"> <div class="col-md-6"> <label for="m_imei1" class="form-label ">IMEI NO 1</label> <input type="text" name="m_imei1" class="form-control m_imei1" id="m_imei1" required> </div><div class="col-md-6"> <label for="m_imei2" class="form-label">IMEI NO 2</label> <input type="text" name="m_imei2" class="form-control m_imei2" id="m_imei2" > </div></div><div class="row"> <div class="col-md-4"> <label for="m_ram" class="form-label">Ram</label> <select class="form-select m_ram" aria-label="Default select example" name="m_ram" id="m_ram" required> <option value="1">1GB</option> <option value="2">2GB</option> <option value="3">3GB</option> <option selected value="4">4GB</option> <option value="6">6GB</option> <option value="8">8GB</option> <option value="12">12GB</option></select> <div class="valid-feedback"> Looks good! </div></div><div class="col-md-4"> <label for="m_rom" class="form-label ">Rom</label> <select class="form-select m_rom" aria-label="Default select example" name="m_rom" id="m_rom" required> <option value="4">4GB</option> <option value="8">8GB</option> <option value="16">16GB</option> <option value="32">32GB</option> <option selected value="64">64GB</option> <option value="128">128GB</option> <option value="256">256GB</option> <option value="512">512GB</option></select> <div class="valid-feedback"> Looks good! </div></div><div class="col-md-4"> <label for="m_price" class="form-label">Price</label> <input type="text" class="form-control m_price"   name="m_price" id="m_price'+x+'" required> </div></div></div></div>') ;  
    })

 

   

    $("form").submit(function(){
        event.preventDefault();
if(formsubmit==1){
  overlay.classList.toggle('is-active');

//         function getNeworOld(){

//         }
// var neworold = 0;
 
// var newoldget = document.querySelectorAll(".radiopick");
// for(var j=0;j<newoldget.length; j++){
//     if(newoldget[j].value!=null)
//     console.log(newoldget[j].value);
// }
getAllMobileDetails()

var neworold= 0 ;

        if($('#new').is(':checked')) { neworold =document.getElementById("new").value  }
        if($('#old').is(':checked')) { neworold = document.getElementById("old").value}
var warrentyfordays = 365;
        var warrenty = 0;
        if($('#1yow').is(':checked')) { warrenty = document.getElementById("1yow").value}
        if($('#1ysw').is(':checked')) { warrenty = document.getElementById("1ysw").value }
        if($('#1ypw').is(':checked')) { warrenty = document.getElementById("1ypw").value }
        if($('#nw').is(':checked')) { warrenty = document.getElementById("nw").value }
        if($('#wf').is(':checked')) { warrenty =document.getElementById("wf").value }
     if(warrenty==5){
      warrentyfordays =document.getElementById("days").value;
   
     }else if(warrenty==4){
      warrentyfordays =0;
     }
 

        var other = {
          condition: neworold,
          warrenty : warrenty,
          warrentydays: warrentyfordays
        }
 













    //     var mobileinfo = [];
    //  var m_mobile=  $(".m_model");
    //  var m_imei1=  $(".m_imei1");
    //  var m_imei2=  $(".m_imei2");
    //  var m_ram=  $(".m_ram");
    //  var m_rom=  $(".m_rom");
    //  var m_price=  $(".m_price");
     /** */
     var c_name = $("#c_name").val();
 var c_phone = $("#c_phone").val();
 var c_address = $("#c_address").val();
     /** */

     var r_name = $("#r_name").val();
 var r_phone = $("#r_phone").val();
 var r_address = $("#r_address").val();

     var customer = {
   name : c_name,
   phone: c_phone,
   address: c_address,
  
 }
 
 
var recommendator = {
  name:r_name,
  phone:r_phone,
  address:r_address
} 

var payresult =   $("#payresult")[0].value;
var paidmoney = $("#paidmoney")[0].value;
 
var playDetails = {
  pay: payresult,
  p_money: paidmoney
}
    
// for(var i=0;i<m_mobile.length;i++){
//   var  m_imei1value =   m_imei1[i].value
//   var  m_mobilevalue =  m_mobile[i].value
//   var  m_imei2value =   m_imei2[i].value
//   var  m_ramvalue =   m_ram[i].value
//   var  m_romvalue =   m_rom[i].value
//   var  m_pricevalue =   m_price[i].value
//  var mobile = {
//    m_mobile:  m_mobilevalue,
//       m_imei1: m_imei1value ,
//       m_imei2: m_imei2value,
//       m_ram:  m_ramvalue,
//       m_rom:  m_romvalue,
//       m_price: m_pricevalue  
//  }
 
// mobileinfo.push(mobile);
// }


/** */
// var ArrayForOther = [];
// ArrayForOther

other= {
  m_condition:other,
  p_details:playDetails

}
 
var form_data = new FormData();

 other = JSON.stringify(other);
 customer = JSON.stringify(customer);
mobile = JSON.stringify(ArrayOfAllMobile);
recommendator = JSON.stringify(recommendator);
 

form_data.append("customer",customer);
form_data.append("mobile",mobile);
form_data.append("recommendator",recommendator);
form_data.append("other",other);
if(ArrayForMarkAsSold.length>0){
  ArrayForMarkAsSold=  JSON.stringify(ArrayForMarkAsSold);
  form_data.append("markassold",ArrayForMarkAsSold);
}
 
 
$.ajax({
  url: 'invoiceprogress.php', 
  type: 'post',
  data: form_data,
  dataType: 'json',
  contentType: false,
  processData: false,
  success: function (response){
   
 
    console.log(response);
    $("#clickTheButton").click();
    overlay.classList.toggle('is-active');

  }
});

 
/** */



    }

    })
var totalprice = 0;

  
 
});
</script>


<!--  -->




      


 


<?php include 'footer.php'; ?>
    </body>
</html>
