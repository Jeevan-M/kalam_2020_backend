<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db_connection.php';
include_once '../objects/participant_login.php';

$database = new Database();
$db = $database->getConnection();

$participant_login_profile = new participant_login($db);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents("php://input"));
    $email = $data->email;
    $stmt = $participant_login_profile->read_one($email);
    $num = $stmt->rowCount();

    if($num>0){ 

        $products_arr=array();
        $products_arr["participant_login_profile"]=array();
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $product_item=array(
                "Kalam_id" => $Kalam_id,
                "event_id" => $event_id,
                "email" => $email,
                "full_name" => $full_name,
                "department" => $department,
                "college" => $college,
                "year" => $year,
                "mob_no" => $mob_no,
                "event_name" => $event_name,
                "description" => $description,
                "event_rules" => $event_rules,
                "event_date" => $event_date,
                "event_start_time" => $event_start_time,
                "event_end_time" => $event_end_time,
                "venue" => $venue
            );
            array_push($products_arr["participant_login_profile"], $product_item);
        }
        http_response_code(200);
        echo json_encode($products_arr);
    }
    
    else{
        http_response_code(404);
        echo json_encode(array("status"=>"404","message" => "No services found.")
        );
    }
}
else{
    http_response_code(405);
    echo json_encode(array("status"=>"405","message"=>"Method Not Allowed"));
}

?>