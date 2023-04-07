<?php
require "../conn.php";

$selectAllFile = "SELECT * FROM buy
 
UNION ALL
SELECT * FROM sell
 
ORDER BY date DESC;";
$results = mysqli_query($conn, $selectAllFile);

// $data =$results->fetch_all(MYSQLI_ASSOC);
// echo json_encode($data);

while ($row = mysqli_fetch_assoc($results)) {
    $type = $row['type'];

    if ($type==2) {
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
            array_push($mobilePrice, $price);
        }
    }else if($type==1){
        $customer_info = $row['customer_info'];
        $mobile = $row['mobile_info'];
        $recommendator = $row['recommendator_info'];
        $customer_info = json_decode($customer_info) ;
        $mobile = json_decode($mobile) ;
        $recommendator = json_decode($recommendator) ;
   
   
        $name = $customer_info->name;
        $phone = $customer_info->phone;
        $nid = $customer_info->nid;
        $bdris = $customer_info->bdris;
        $address = $customer_info->address;
        $birthdate = $customer_info->birthdate;
        $email = $customer_info->email;
        $nid = $customer_info->nid;
        $nid = $customer_info->nid;
   
        $model = $mobile->model;
        $imei1 = $mobile->imei1;
        $imei2 = $mobile->imei2;
        $ram = $mobile->ram;
        $rom = $mobile->rom;
        $price = $mobile->price;
     
        $r_name =    $recommendator-> name;
        $r_phone =    $recommendator-> phone;
        $r_address =    $recommendator-> address;
    }
 
}


?>