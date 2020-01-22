<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db_connection.php';
include_once '../objects/registration.php';

$database = new Database();
$db = $database->getConnection();

$Registration_get = new Registration($db);

$stmt = $Registration_get->event_registration();
$num = $stmt->rowCount();

if($num>0){ 
    
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $product_item=array(
            "kalam_id" => $kalam_id,
            "email" => $email,
            "full_name" => $full_name,
            "college" =>$college,
            "mob_no" => $mob_no,
            "event_name" => $event_name,
            "description" => $description,
            "event_rules" => $event_rules,
            "event_date"=>$event_date,
            "event_start_time" =>$event_start_time,
            "event_end_time" => $event_end_time,
            "venue" => $venue
           
        );
        
    }
     http_response_code(200);
     $kalam_id          = $product_item["kalam_id"]   
     $email             = $product_item["email"]   
     $full_name         = $product_item["full_name"]   
     $college           = $product_item["college"]  
     $mob_no            = $product_item["mob_no"]   
     $event_name        = $product_item["event_name"]   
     $description       = $product_item["description"]   
     $event_rules       = $product_item["event_rules"]  
     $event_date        = $product_item["event_date"] 
     $event_start_time  = $product_item["event_start_time"]  
     $event_end_time    = $product_item["event_end_time"]   
     $venue             = $product_item["venue"]
     if( !empty($data->email)&&
    !empty($data->full_name)&&
    !empty($data->kalam_id)&&
    !empty($data->event_name)&&
    !empty($data->event_date)&&
    !empty($data->venue)&&
    !empty($data->mob_no)){
        

    }
     
     //echo json_encode($products_arr);
}
 
else{
    http_response_code(404);
     echo json_encode(
        array("message" => "No services found.")
    );
}

?>