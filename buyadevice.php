<?php require  'session.php'; ?>
<?php require 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buy A Device</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
 


<?php include 'navbar.php'; ?>

<div class="loading-overlay">
        <span class="fas fa-spinner fa-3x fa-spin"></span>
      </div>







        
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>              
                    <div class="container-fluid px-4">
      

                     
               

<!-- form  -->


<div id='preview'></div>
<div class="row justify-content-center">
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

  <div class="col-md-6">
    <label for="c_nid" class="form-label">NID Card No</label>
    <input type="text" name="c_nid" class="form-control" id="c_nid" >
  </div>
  <div class="col-md-6">
    <label for="c_bdris" class="form-label">Birth-Certificate No</label>
    <input type="text" name="c_bdris" class="form-control" id="c_bdris"  >
  </div>

  <div class="col-12">
    <label for="c_address" class="form-label">Address</label>
    <input type="text" name="c_address" class="form-control" id="c_address"   required>
  </div>

<!-- data picker -->
 
    <div class="col-md-6">
        <label for="c_birthdate"  class="form-label">Customer's Birthdate</label>
        <input name="c_birthdate" class="form-control"  id="c_birthdate" type="date"  data-date-split-input="true" />
   </div>
   <div class="col-md-6">
    <label for="c_email" class="form-label">Customer's Email</label>
    <input type="email" name="c_email" class="form-control" id="c_email" >
  </div>
    


   <div class="mb-3">
  <label for="c_attached" class="form-label">Attatched Necessary File</label>
  <input name="c_attached" class="form-control" type="file" id="c_attached" multiple>
</div>



<div class="card text-center">
  <div class="card-header">Mobile Details</div>
</div>
 
<div class="mobileform" style="height: 100%;width:100%">
 
  <div class="col-12">
    <label for="m_model" class="form-label ">Model No</label>
    <input type="text" name="m_model" class="form-control m_model" id="m_model"  required>
  </div>
  <div class="row">
  <div class="col-md-6">
    <label for="m_imei1" class="form-label ">IMEI NO 1</label>
    <input type="text" name="m_imei1" class="form-control m_imei1" id="m_imei1"  required>
  </div>
  <div class="col-md-6">
    <label for="m_imei2" class="form-label">IMEI NO 2</label>
    <input type="text" name="m_imei2" class="form-control m_imei2" id="m_imei2"   >
  </div>

  </div>
  

 <div class="row">
  <div class="col-md-4">
    <label for="m_ram" class="form-label">Ram</label>
    <select class="form-select m_ram" aria-label="Default select example" name="m_ram" id="m_ram"   required>
  
  <option value="1">1GB</option>
  <option  value="2">2GB</option>
  <option value="3">3GB</option>
  <option selected value="4">4GB</option>
  <option value="6">6GB</option>
  <option value="8">8GB</option>
  <option value="12">12GB</option>
</select>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-md-4">
    <label for="m_rom" class="form-label">Rom</label>
    <select class="form-select m_rom" aria-label="Default select example"  name="m_rom" id="m_rom"   required>
 
  <option value="4">4GB</option>
  <option value="8">8GB</option>
  <option  value="16">16GB</option>
  <option value="32">32GB</option>
  <option selected value="64">64GB</option>
  <option value="128">128GB</option>
  <option value="256">256GB</option>
  <option value="512">512GB</option>
</select>
    <!-- <input type="text" class="form-control"  name="m_rom" id="m_rom"   required> -->
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="m_price" class="form-label">Price</label>
    <input type="text" class="form-control m_price"  name="m_price" id="m_price"   required>
   
  </div>
  </div>
  </div>



  <button type="button" id="adddevice" class="btn btn-secondary">Add Another Device</button>



 
 
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



<!-- Button trigger modal -->
<button type="button" id="clickTheButton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" hidden>
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seller Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>





                    </div>
                </main>
                <?php include 'footerlayer.php'; ?>
            </div>
        </div>

      
<script>

let overlay = document.getElementsByClassName('loading-overlay')[0];
       
 



 



 



</script>



<script>
 





 var formsubmit=0;



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

    $("#adddevice").click(function(){

 

 
  
// var mobilenoform = $(".mobileform").children();
// console.log(mobilenoform)
$(".mobileform").append('<div class="col-12"> <label for="m_model" class="form-label ">Model No</label> <input type="text" name="m_model" class="form-control m_model" id="m_model" required> </div><div class="row"> <div class="col-md-6"> <label for="m_imei1" class="form-label ">IMEI NO 1</label> <input type="text" name="m_imei1" class="form-control m_imei1" id="m_imei1" required> </div><div class="col-md-6"> <label for="m_imei2" class="form-label">IMEI NO 2</label> <input type="text" name="m_imei2" class="form-control m_imei2" id="m_imei2" > </div></div><div class="row"> <div class="col-md-4"> <label for="m_ram" class="form-label">Ram</label> <select class="form-select m_ram" aria-label="Default select example" name="m_ram" id="m_ram" required> <option value="1">1GB</option> <option value="2">2GB</option> <option value="3">3GB</option> <option selected value="4">4GB</option> <option value="6">6GB</option> <option value="8">8GB</option> <option value="12">12GB</option></select> <div class="valid-feedback"> Looks good! </div></div><div class="col-md-4"> <label for="m_rom" class="form-label ">Rom</label> <select class="form-select m_rom" aria-label="Default select example" name="m_rom" id="m_rom" required> <option value="4">4GB</option> <option value="8">8GB</option> <option value="16">16GB</option> <option value="32">32GB</option> <option selected value="64">64GB</option> <option value="128">128GB</option> <option value="256">256GB</option> <option value="512">512GB</option></select> <div class="valid-feedback"> Looks good! </div></div><div class="col-md-4"> <label for="m_price" class="form-label">Price</label> <input type="text" class="form-control m_price"   name="m_price" id="m_price" required> </div></div></div>') ;  
})



  $("form").submit(function(event){
    event.preventDefault();
  
    





console.log(formsubmit);


    if(formsubmit==1){
      overlay.classList.toggle('is-active');
      var mobiledevice = 0;
        var mobileinfo = [];
        var m_mobile=  $(".m_model");
     var m_imei1=  $(".m_imei1");
     var m_imei2=  $(".m_imei2");
     var m_ram=  $(".m_ram");
     var m_rom=  $(".m_rom");
     var m_price=  $(".m_price");
      var c_name = $("#c_name").val();
 var c_phone = $("#c_phone").val();
 var c_nid = $("#c_nid").val();
 var c_bdris = $("#c_bdris").val();
 var c_address = $("#c_address").val();
 var c_birthdate = $("#c_birthdate").val();
 var c_email = $("#c_email").val();
 

//  var m_model = $("#m_model").val();
//  var m_imei1 = $("#m_imei1").val();
//  var m_imei2 = $("#m_imei2").val();
 
//  var m_ram = $("#m_ram").val();
//  var m_rom = $("#m_rom").val();
//  var m_price = $("#m_price").val();
//  var mobile = {
//    model: m_model,
//    imei1: m_imei1,
//    imei2: m_imei2,
//    ram: m_ram,
//    rom:m_rom,
//    price:m_price
//  }
 var r_name = $("#r_name").val();
 var r_phone = $("#r_phone").val();
 var r_address = $("#r_address").val();
var recommendator = {
  name:r_name,
  phone:r_phone,
  address:r_address
} 



    
for(var i=0;i<m_mobile.length;i++){
  var  m_imei1value =   m_imei1[i].value
  var  m_mobilevalue =  m_mobile[i].value
  var  m_imei2value =   m_imei2[i].value
  var  m_ramvalue =   m_ram[i].value
  var  m_romvalue =   m_rom[i].value
  var  m_pricevalue =   m_price[i].value
 var mobile = {
   m_id : i,
   m_mobile:  m_mobilevalue,
      m_imei1: m_imei1value ,
      m_imei2: m_imei2value,
      m_ram:  m_ramvalue,
      m_rom:  m_romvalue,
      m_price: m_pricevalue  ,
      m_sold:0
 }
 
mobileinfo.push(mobile);
}

  
 
 var attachedFile = Array();
var form_data = new FormData();

// Read selected files
var totalfiles = document.getElementById('c_attached').files.length;
for (var index = 0; index < totalfiles; index++) {
   form_data.append("files[]", document.getElementById('c_attached').files[index]);
    attachedFile[index] = document.getElementById('c_attached').files[index].name;
    
 } 
 
 var customer = {
   name : c_name,
   phone: c_phone,
   nid: c_nid,
   bdris: c_bdris,
   address: c_address,
   birthdate: c_birthdate,
   email: c_email,
   attached :  attachedFile
 }

 customer = JSON.stringify(customer);
mobile = JSON.stringify(mobileinfo);
recommendator = JSON.stringify(recommendator);
form_data.append("customer",customer);
 
form_data.append("mobile",mobile);
form_data.append("recommendator",recommendator);
 
// AJAX request
$.ajax({
  url: 'buyerdatasubmit.php', 
  type: 'post',
  data: form_data,
  dataType: 'json',
  contentType: false,
  processData: false,
  success: function (response){
   if(response==1){
       $(".modal-body").html("Seller Data Has Submitted");
    
       $("#clickTheButton").click();
       overlay.classList.toggle('is-active');
   }
 
    // console.log(response);
  }
});



    }




   
  });
});

 


 </script>

 <!-- code sesh -->

<?php include 'footer.php'; ?>
    </body>
</html>
