<?php require  'session.php'; ?><?php require 'conn.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sold A Device</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid  ">
                       
                        <div class="card mb-4">
                            <div align="center" class="card-header">
                                 
                              List Of Sold Device
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Model</th>
                                            <th>IMEI</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>



                                    <?php 

 require 'conn.php';
 $imei2array = array();
 $loadData = "SELECT * FROM `sell`  ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $id = $row['id'];
    $customer_info = $row['customer_info'];
     $mobile = $row['mobile_info'];
     $recommendator = $row['recommendator_info'];
    $customer_info = json_decode($customer_info) ;
     $mobile = json_decode($mobile) ;
     $recommendator = json_decode($recommendator) ;
 

     $name =$customer_info->name;
     $phone =$customer_info->phone;
     $countMobileinfo =  count($mobile);
     $mobileModel = array();
     $mobilePrice = array();
     /** */
     for($i=0;$i<$countMobileinfo; $i++){
    
 
        $model = $mobile[$i]->m_mobile;
        $imei1 = $mobile[$i]->m_imei1;
        $imei2 = $mobile[$i]->m_imei2;
        $ram = $mobile[$i]->m_ram;
        $rom = $mobile[$i]->m_rom;
        $price = $mobile[$i]->m_price; 
 array_push($mobileModel, $model .'( IMEI1 : '.$imei1.', IMEI2 : '. $imei2.')' );
 array_push($mobilePrice, $price);
 array_push( $imei2array, 'IMEI1 : '.$imei1.' , IMEI2 : '. $imei2 );
} 

 
  $mobile =   $mobile[0];
    
  $model = $mobile->m_mobile;
     $imei1 = $mobile->m_imei1;
     $imei2 = $mobile->m_imei2;
     $ram = $mobile->m_ram;
     $rom = $mobile->m_rom;
     $price = $mobile->m_price;

$model = $mobile->m_mobile;



  
     $r_name =    $recommendator-> name;
     $r_phone =    $recommendator-> phone;
     $r_address =    $recommendator-> address;

  
    
                                    
               ?>
        
             
        <td><?php echo $name ; ?></td>
                                            <td><?php echo $phone ; ?></td>
                                         
                                            <td><?php echo join("<br>",$mobileModel); ?></td>
                                            <td><?php echo join("<br>",$imei2array); ?></td>
                                            <td><?php echo join("<br>",$mobilePrice); ?></td>
                                            <td><span class="badge bg-dark">Sold</span></td>
                                            <td><a href="invoice.php?id=<?php echo $id ; ?>"  class="btn btn-primary btn-sm">View</a></td>
                                            </tr> 
                                            
        
        <?php
 }
 
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footerlayer.php' ; ?>
            </div>
        </div>


<script>
    
//     getAllFileUploadByUser();

//     function getAllFileUploadByUser(){
//         var url  =  window.location.hostname
//   let request = new XMLHttpRequest();
//  var UrlForLoad  ="https://localhost/cashmemo/api/?type=buyall";
//  request.open("GET", UrlForLoad );
//  request.send();
//  request.onload = () => {
//    if (request.status === 200) {
//    var getAllBuyerFile = request.response;
//   }
 
//    var getAllBuyerFile = JSON.parse(getAllBuyerFile);
 
//     getAllBuyerFile.forEach((item)=>{
//  var customer_info =item['customer_info'];
//  var mobile_info  = item['mobile_info']
//  var recommendator_info =  item['recommendator_info'];
//  customer_info = JSON.parse(customer_info);
//  mobile_info = JSON.parse(mobile_info);
//  recommendator_info = JSON.parse(recommendator_info);
// var name = customer_info['name'];
// var phone = customer_info['phone'];
// var r_name = recommendator_info['name'];
// var model = mobile_info['model']; 
// var price = mobile_info['price']; 
// var htmlOfVideoMEta ='<tr> <td>'+name+'</td><td>'+phone+'</td><td>'+model+'</td><td>'+r_name+'</td><td>'+price+'</td><td>'+name+'</td></tr>';
// //  var htmlOfVideoMEta = '  <tr><td>'+name+'</td><td>'+user_name+'</td><td>Edinburgh</td><td>61</td><td>2011/04/25</td><td>$320,800</td></tr>';

// $("tbody").append(htmlOfVideoMEta);
 
//  })
//  }
//  }




</script>


<?php include 'footer.php'; ?>
    </body>
</html>
