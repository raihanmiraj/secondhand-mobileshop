<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Table
                            </div>
                            <div  class="card-body"><div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr><th data-sortable="" style="width: 27.3381%;"><a href="#" class="dataTable-sorter">Name</a></th><th data-sortable="" style="width: 28.777%;"><a href="#" class="dataTable-sorter">Phone</a></th><th data-sortable="" style="width: 28.4173%;"><a href="#" class="dataTable-sorter">Model</a></th><th data-sortable="" style="width: 23.741%;"><a href="#" class="dataTable-sorter">IMEI</a></th><th data-sortable="" style="width: 25.1799%;"><a href="#" class="dataTable-sorter">Price</a></th><th data-sortable="" style="width: 25.5396%;"><a href="#" class="dataTable-sorter">Type</a></th><th data-sortable="" style="width: 25.1799%;"><a href="#" class="dataTable-sorter">View</a></th></tr>
                                    </thead>
                                    
                                    <tbody><?php 

require '../conn.php';
 $from = $_GET['from'];
 $to = $_GET['to'];
 $table = $_GET['table'];





$imei1array = array();
$loadData = "SELECT * FROM  $table where date between '".$from."' and '".$to."' ";
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
        array_push($mobileModel2, $b_model);
        array_push($mobilePrice2, $b_price);
        array_push($imei1array, 'IMEI1 : '.$b_imei1.' , IMEI2 : '. $b_imei2);
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
                                </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 1 of 1 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>
                            </div>   </div>
                        </div>


 
                           