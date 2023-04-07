<?php require  'session.php'; ?>
<?php require 'conn.php'; ?> 
<?php 

 
$id = $_GET['id'];
 $loadData = "SELECT * FROM `buy` WHERE `id` = '$id' ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $customer_info = $row['customer_info'];
     $mobile = $row['mobile_info'];
     $recommendator = $row['recommendator_info'];
     $customer_info = json_decode($customer_info) ;
     $mobile = json_decode($mobile) ;
     $recommendator = json_decode($recommendator) ;

$buyingdate = $row['date'];
     $name = $customer_info->name;
     $phone = $customer_info->phone;
     $nid = $customer_info->nid;
     $bdris = $customer_info->bdris;
     $address = $customer_info->address;
     $birthdate = $customer_info->birthdate;
     $email = $customer_info->email;
     $nid = $customer_info->nid;
     $nid = $customer_info->nid;
     $attached=$customer_info ->attached;

   

 $countmobilelength = count($mobile);
 
  
     $r_name =    $recommendator-> name;
     $r_phone =    $recommendator-> phone;
     $r_address =    $recommendator-> address;

  


 }
 $count =  count($attached);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Seller Profile</title>
       <?php include 'header.php' ; ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
            <div class="row">
<div class="col-md-3">
    <h1> </h1>
</div>

    <div class="col-md-6">


<div class="secondheaderlogo" style="text-align:center;"><span class="logo">Caiver</span></div>
        <div id="secondheader">
            <div><span id="date"><?php echo $buyingdate; ?> </span></div>
            <div id="logo" style="text-align:center;"> <span class="logo">Caiver</span> </div>
            <div><span id="photos">Photos</span></div>
          </div>
    

     
     
 
 <br><br>
 
 
<div class="buyerinfotitle"><span>Buyer Information</span> <hr style="width: 100%;"></div>
  <table class="table table-borderless " style="  
    
    margin-left: 20px;">
    <tbody>
        <tr>
            <th scope="row">Name</th>
            <td>: <?php echo $name; ?></td>
            
          </tr>
      <tr>
        <th scope="row">Mobile</th>
        <td>: <?php echo $phone; ?></td>
      
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td>: <?php echo $address; ?></td>
  
      </tr>
      <tr>
        <th scope="row">NID</th>
        <td>: <?php echo $nid; ?></td>
      </tr>
      <tr>
        <th scope="row">Birth</th>
        <td>: <?php echo $bdris; ?></td>
      </tr>
      <tr>
        <th scope="row">Birth Date</th>
        <td>: <?php echo $birthdate; ?></td>
      </tr>
      
    </tbody>
  </table>


  <div class="buyerinfotitle"><span>Mobile Information</span> <hr style="width: 100%;"></div>

  <table class="table table-borderless "  style="margin-left: 20px;">
     <tbody>

     <?php 
  
    for ($i=0;$i<$countmobilelength;$i++) {
      $mmmm= $mobile[$i];
      
        $model =  $mmmm->m_mobile;
     $imei1 = $mmmm->m_imei1;
     $imei2 =  $mmmm->m_imei2;
    //  $ram = $mobile->ram;
    //  $rom = $mobile->rom;
    //  $price = $mobile->price;
        ?>
          <tr>
            <th scope="row"><?php echo $i + 1; ?>.</th>
            <th>Model : </th>
            <td>: <?php echo $model; ?></td>
        </tr>
          <tr>
            <th scope="row"></th>
            <th scope="row">IMEI1 : </th>
            <td>: <?php echo $imei1; ?></td>
            </tr>
          <tr>
            <th scope="row"></th>
            <th scope="row">IMEI2 : </th>
            <td>: <?php echo $imei2; ?></td>
          </tr>

          <?php
    }
     ?>
   
        </tbody>
 
  </table>

 
  <div class="row">
    <div class="col-md-6">
        <div class="recommendatorinfotitle"><span>Recommendator</span> <hr></div>
        <table class="table table-borderless"  style="margin-left: 20px;">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td>: <?php echo $r_name; ?></td>
                    
                  </tr>
              <tr>
                <th scope="row">Mobile</th>
                <td>: <?php echo $r_phone; ?></td>
              
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td>: <?php echo $r_address; ?></td>
          
              </tr>
             
              
            </tbody>
          </table>
        
            
           
      
    </div>
    <div class="col-md-6 x">
        <div class="buyersignature">
            <hr>
        <span>Buyer Signature</span>
        </div>
    </div>
   
    </div>
    
  </div>
     
  <div class="col-md-3">

   
 
 

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

  </div>
 



</div>


 </div>

        
        </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->


        <?php include 'footer.php' ; ?>


    </body>
</html>
