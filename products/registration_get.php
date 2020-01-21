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

$stmt = $Registration_get->read();
$num = $stmt->rowCount();

if($num>0){ 

    $products_arr=array();
    $products_arr["Registration_get"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $product_item=array(
            "email" => $email,
            "full_name" => $full_name,
            "event_name" => $event_name,
            "mob_no" => $mob_no,
            "status" => $status,
           
        );
        array_push($products_arr["Registration_get"], $product_item);
    }
     http_response_code(200);
     echo json_encode($products_arr);
}
 
else{
    http_response_code(404);
     echo json_encode(
        array("message" => "No services found.")
    );
}

?>