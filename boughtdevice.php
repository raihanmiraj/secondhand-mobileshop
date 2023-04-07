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
        <title>Bought Device </title>
        <?php include 'header.php' ; ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
             <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
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

 
 $imei1array = array();
 $loadData = "SELECT * FROM `buy` WHERE `id`  ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $id = $row['id'];
   
   $customer_info = $row['customer_info'];
    $mobile = $row['mobile_info'];
    $recommendator = $row['recommendator_info'];
    $customer_info = json_decode($customer_info) ;
    $mobile = json_decode($mobile) ;
    $recommendator = json_decode($recommendator) ;

    $countMobileinfo =  count($mobile);
    $mobileModel2 = array();
    $mobilePrice2 = array();
    
    $b_name = $customer_info->name;
    $b_phone = $customer_info->phone;
    $b_nid = $customer_info->nid;
    $b_bdris = $customer_info->bdris;
    $b_address = $customer_info->address;
    $b_birthdate = $customer_info->birthdate;
    $b_email = $customer_info->email;
    $b_nid = $customer_info->nid;
    $b_nid = $customer_info->nid;

 

    for ($i=0;$i<$countMobileinfo; $i++) {
        $b_model = $mobile[$i]->m_mobile;
        $b_imei1 = $mobile[$i]->m_imei1;
        $b_imei2 = $mobile[$i]->m_imei2;
        $b_ram = $mobile[$i]->m_ram;
        $b_rom = $mobile[$i]->m_rom;
        $b_price = $mobile[$i]->m_price;
        array_push($mobileModel2, $b_model  );
        array_push($mobilePrice2, $b_price);
        array_push( $imei1array, 'IMEI1 : '.$b_imei1.' , IMEI2 : '. $b_imei2 );
     }
 
    $r_name =    $recommendator-> name;
    $r_phone =    $recommendator-> phone;
    $r_address =    $recommendator-> address;

  

?>
                                    
                             
        <tr>
                                            <td><?php echo $b_name ; ?></td>
                                            <td><?php echo $b_phone ; ?></td>
                                            <td><?php echo join("<br>",$mobileModel2); ?></td>
                                            <td><?php echo join("<br>",$imei1array); ?></td>
                                       
                                       <td><?php echo join("<br>",$mobilePrice2); ?></td>
                                            <td><span class="badge bg-warning text-dark">Bought</span></td>
                                            <td><a href="sellerprofile.php?id=<?php echo $id ; ?>"  class="btn btn-primary btn-sm">View</a></td>
                                            <!-- <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td> -->
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
<?php include 'footer.php' ; ?>
    </body>
</html>
