<?php require  'session.php'; ?>
<?php 

$totalprice = 0;
 require 'conn.php';
 
$id = $_GET['id'];
 $loadData = "SELECT * FROM `sell` WHERE `id` = '$id' ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $customer_info = $row['customer_info'];
     $mobile = $row['mobile_info'];
     $recommendator = $row['recommendator_info'];
     $other = $row['other'];
     $customer_info = json_decode($customer_info) ;
     $mobile = json_decode($mobile) ;
     $recommendator = json_decode($recommendator) ;
     $other = json_decode($other) ;

     $c_name = $customer_info->name;
     $c_phone = $customer_info->phone;
     $c_address = $customer_info->address;
      
    $id =  $row['id'];

  
     $r_name =    $recommendator-> name;
     $r_phone =    $recommendator-> phone;
     $r_address =    $recommendator-> address;
$date = $row['date'];
$mobile_condition =$other->m_condition; 


$condition =   $mobile_condition->condition;
$warrenty =   $mobile_condition->warrenty;
$warrentydays =   $mobile_condition->warrentydays;

$p_details = $other->p_details;

$pay = $p_details->pay;
$p_money = $p_details->p_money;
 
 }
 
?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        
 <link rel="stylesheet" type="text/css" href="assets/Print/print.css">
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
            

            <div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #<?php echo $id; ?>
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="print.php?id=<?php echo $id; ?>" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

     
    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">Cavier</span> -->
<img style="width: 200px;height:auto" src="uploads/site/<?php echo $site_logo; ?>" alt="">

                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-6">
                        <div>
                          <span class="text-sm text-grey-m2 align-middle"><b>Customer Name : </b> </span> 
                            <span class="text-600 text-110 text-blue align-middle"><?php echo $c_name; ?></span>
                        </div>
                        <div class="text-grey-m2">
                        <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600"><?php echo $c_phone; ?></b></div>
                        <span class="text-sm text-grey-m2 align-middle"><b>Address : </b> </span> 
                            <div class="my-1">
                            <?php echo $c_address; ?>
                            </div>
                         
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-6 align-self-start d-flex justify-content-end">
                        <!-- <hr class="d-sm-none" /> -->
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #<?php echo $id; /**str_pad($id, 4, '0', STR_PAD_LEFT);  */ ?> </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> <?php echo $date; ?></div>
                     
                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> 
                            <?php if($pay==1){      ?> <span class="badge rounded-pill bg-success">Paid</span>  <?php } ?>
                            <?php if($pay==2){      ?>    <span class="badge rounded-pill bg-warning text-dark">Unpaid</span> <?php } ?>
                            </div>

                          
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                     

                    <div class="row border-b-2 brc-default-l2"></div>
  
                    
            <div class="table-responsive-sm">
            <!-- table-striped table-borderless border-0 border-b-2 brc-default-l1 -->
                <table class="table table-striped">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">SL</th>
                           
                            <th>Mobile name</th>
                            <th>IMEI No</th>
                            <!-- <th>Qty</th>
                            <th>Unit Price</th> -->
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                       <?php 
                
for ($i=0; $i<count($mobile); $i++) {
    $model = $mobile[$i]->m_mobile;
    $imei1 = $mobile[$i]->m_imei1;
    $imei2 = $mobile[$i]->m_imei2;
    $ram = $mobile[$i]->m_ram;
    $rom = $mobile[$i]->m_rom;
    $price = $mobile[$i]->m_price;
    $totalprice += $price ?>
                          <tr>
                            <td><?php echo $i+1; ?></td>
                           
                            <td><?php echo $model . "(". $ram. ",".  $rom . ")"; ?></td>
                            <td><?php echo   $imei1; ?>
                            <br>
                            <?php echo   $imei2; ?></td>
                            <!-- <td>2</td>
                            <td class="text-95">$10</td> -->
                            <td class="text-secondary-d2"><?php echo    $price." /="; ?> </td>
                        </tr> 

 <?php
} 
?>
                    </tbody>
                </table>
            </div>
           





 











                    <div class="row mt-3">
                        <div class="col-6 text-grey-d2 text-95">
                          
                          <!-- Mobile condition -->


   <?php  
   $right ='assets/img/right.png' ;
   $wrong = 'assets/img/wrong.png';

   $new = $wrong;
   $old = $wrong;  
    
   $oyow = $wrong;
   $oysw = $wrong;
   $oypw =$wrong;
   $nw =$wrong;
   $cw =$wrong;
   $warrentydaysPRINT = 120;
//    $warrentydays = 120;

//    if($condition==1){
//     $new = $right;
//    }else{
//     $old = $wrong;  
//    }
   
//    if($condition==2){
//     $old = $right;  
//    }else{
//     $new = $wrong;
//    }

$condition==1?   $new = $right:$old = $right;  
$condition==1?   $new = $right:$old = $right;  

$warrenty==1?$oyow =  $right : 0 ;
 $warrenty==2 ?$oysw=$right: 0 ;
 $warrenty==3?$oypw =  $right : 0 ;
 $warrenty==4 ?$nw=$right: 0 ;
 $warrenty==5?$cw =  $right   : 0 ;
 if($warrenty ==5){
     $warrentydaysPRINT  = $warrentydays;
 }
 

//    $oyow = 'assets/img/right.png';
//    $oysw = 'assets/img/right.png';
//    $oypw ='assets/img/right.png';
//    $nw ='assets/img/right.png';
//    $cw ='assets/img/right.png';
//    $warrentydays = 120;
   ?>


                        <span><b>Mobile Condition : </b> </span>  <img style='vertical-align:middle;' src='<?php echo $new; ?>'>
<div style='vertical-align:middle; display:inline;'>
New </div>
<img style='vertical-align:middle;' src='<?php echo $old; ?>'>
<div style='vertical-align:middle; display:inline;'>
Old </div>
 


 <br><br>
<!-- select button -->



<img style='vertical-align:middle;' src='<?php echo $oyow; ?>'>
<div style='vertical-align:middle; display:inline;'>
1 Year Official Warranty </div><br>
<img style='vertical-align:middle;' src='<?php echo $oysw; ?>'>
<div style='vertical-align:middle; display:inline;'>
I Year Service Warranty</div><br>
<img style='vertical-align:middle;' src='<?php echo $oypw; ?>'>
<div style='vertical-align:middle; display:inline;'>
1 Year Parts Warranty</div><br>
<img style='vertical-align:middle;' src='<?php echo $nw; ?>'>
<div style='vertical-align:middle; display:inline;'>
No Warranty</div><br>
<img style='vertical-align:middle;' src='<?php echo $cw; ?>'>
<div style='vertical-align:middle; display:inline;'>
Warranty For <?php echo $warrentydaysPRINT; ?> days</div>
 









<!-- 

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
 1 Year Official Warranty
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" disabled>
  <label class="form-check-label" for="flexCheckDefault">
   I Year Service Warranty
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
  <label class="form-check-label" for="flexCheckChecked">
 1 Year Parts Warranty
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
  <label class="form-check-label" for="flexCheckChecked">
No Warranty
  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
  <label class="form-check-label" for="flexCheckChecked">
Warranty For 120 days
  </label>
</div> -->



<!-- select button -->



                        </div>

                        <div class="col-6 text-grey text-90">
                            <div class="row my-2">
                                <div class="col-7 text-right" style="padding-left: 40px;">
                                    Total Price
                                </div>
                                <div class="col-5">
                                    <span class="text-120" style="float: right;padding-right:40px"><?php echo $totalprice."Bdt"; ?></span>
                                </div>
                            </div>

                            <div class="row my-2">
                            <div class="col-7 text-right" style="padding-left: 40px;">
                                    Paid
                                </div>
                                <div class="col-5">
                                    <span class="text-120" style="float: right;padding-right:40px"><?php echo $p_money."Bdt"; ?></span>
                                </div>
                            </div>

                            <hr>
                            <?php $moneyneed = $totalprice - $p_money; ?>
                            <div class="row my-2">
                            <div class="col-7 text-right" style="padding-left: 40px;">
                                    Due
                                </div>
                                <div class="col-5">
                                    <span class="text-120" style="float: right;padding-right:40px"><?php echo $moneyneed."Bdt"; ?></span>
                                </div>
                            </div>

                           

                          



                        </div>
                    </div>

                <br><br>

                     
                </div>
            </div>
        </div>
    </div>


</div>

<!-- <button type="button" onclick="printJS('invoiceprint', 'html')">
    Print Form
 </button> -->
<!-- <button type="button" onclick="printJS({ printable: 'invoiceprint', type: 'html', header: 'PrintJS - Form Element Selection' })">
    Print Form with Header
 </button> -->

<style type="text/css">
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}







 



</style>




            </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
        <script src="assets/Print/print.min.js"></script>
<?php include 'footer.php'; ?>

    </body>
</html>
