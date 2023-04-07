<div class="card">
  <div align="center" class="card-header">
   Bought Table
  </div>
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Model</th>
                                            <th>Recommedator Name</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>



                                    <?php 

 require '../conn.php';

 $from = $_GET['from'];
 $to = $_GET['to'];
 $table = $_GET['table'];


 $loadData  = "SELECT * FROM  $table where date between '".$from."' and '".$to."' ";
 $result = mysqli_query($conn, $loadData);
 if(mysqli_num_rows($result)>0){
 while ($row = mysqli_fetch_assoc($result)) {
     $id = $row['id'];
   
   $seller_info = $row['seller_info'];
    $mobile = $row['mobile_info'];
    $recommendator = $row['recommendator_info'];
    $seller_info = json_decode($seller_info) ;
    $mobile = json_decode($mobile) ;
    $recommendator = json_decode($recommendator) ;

    $countMobileinfo =  count($mobile);
    $mobileModel2 = array();
    $mobilePrice2 = array();
    
    $b_name = $seller_info->name;
    $b_phone = $seller_info->phone;
    $b_nid = $seller_info->nid;
    $b_bdris = $seller_info->bdris;
    $b_address = $seller_info->address;
    $b_birthdate = $seller_info->birthdate;
    $b_email = $seller_info->email;
    $b_nid = $seller_info->nid;
    $b_nid = $seller_info->nid;

 

    for ($i=0;$i<$countMobileinfo; $i++) {
        $b_model = $mobile[$i]->m_mobile;
        $b_imei1 = $mobile[$i]->m_imei1;
        $b_imei2 = $mobile[$i]->m_imei2;
        $b_ram = $mobile[$i]->m_ram;
        $b_rom = $mobile[$i]->m_rom;
        $b_price = $mobile[$i]->m_price;
        array_push($mobileModel2, $b_model .'( IMEI1 : '.$b_imei1.', IMEI2 : '. $b_imei2.')');
        array_push($mobilePrice2, $b_price);
     }
 
    $r_name =    $recommendator-> name;
    $r_phone =    $recommendator-> phone;
    $r_address =    $recommendator-> address;

  

?>
                                    
                                    <tr>
                                            <td><?php echo $b_name ; ?></td>
                                            <td><?php echo $b_phone ; ?></td>
                                            <td><?php echo join("<br>",$mobileModel2); ?></td>
                                       
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
}else{
    ?>

<tr> <td  align="center" colspan="6"> nothing to Display</td>
                                        </tr>

<?php
} ?>
                                    </tbody>
                                </table>
                           