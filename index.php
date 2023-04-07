
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
        <title>DashBoard</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                        
                        <div class="row" style="padding-top:  20px; ;">
                            <!-- <div class="col-xl-3 col-md-6">


                            <div class="card border-dark mb-3" >
  <div class="card-header">Mobile Statics</div>
  <div class="card-body">
  
    <p  id="mobileincomedetails" class="card-text"> </p>
  </div>
</div>

      
                            </div> -->
                            <!-- <div class="col-xl-3 col-md-6">
                               
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
                            </div> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div align="center" class="card-header">
                               All Selling And Buying Data
                            </div>
                            <div class="card-body">
                                <table class="table-responsive" id="datatablesSimple">
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
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                    <?php
                                     
require "conn.php";

$selectAllFile = "SELECT * FROM sell
 
UNION ALL
SELECT * FROM buy
 
ORDER BY date DESC;";
$results = mysqli_query($conn, $selectAllFile);

// $data =$results->fetch_all(MYSQLI_ASSOC);
// echo json_encode($data);

while ($row = mysqli_fetch_assoc($results)) {
    $type = $row['type'];
    $id = $row['id'];

    if ($type==2) {
        $imei2array = array();

     
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
        for ($i=0;$i<$countMobileinfo; $i++) {
            $model = $mobile[$i]->m_mobile;
            $imei1 = $mobile[$i]->m_imei1;
            $imei2 = $mobile[$i]->m_imei2;
            $ram = $mobile[$i]->m_ram;
            $rom = $mobile[$i]->m_rom;
            $price = $mobile[$i]->m_price;
            array_push($mobileModel, $model);
            array_push( $imei2array, 'IMEI1 : '.$imei1.' , IMEI2 : '. $imei2 );
            array_push($mobilePrice, $price);
           
        }
    }else if($type==1){
           $imei1array = array();
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
            array_push($mobileModel2, $b_model );
            array_push($mobilePrice2, $b_price);
            array_push( $imei1array, 'IMEI1 : '.$b_imei1.' , IMEI2 : '. $b_imei2 );
        
        }
     
        $r_name =    $recommendator-> name;
        $r_phone =    $recommendator-> phone;
        $r_address =    $recommendator-> address;
    }


    if($type == 1){
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
    }else if($type ==2){

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
 
}


?>



 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            <?php include 'footerlayer.php'; ?>
            </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
<script>
 
</script>
<?php include 'footer.php'; ?>


    </body>
</html>
