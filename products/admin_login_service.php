<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db_connection.php';
include_once '../objects/admin_dashboard.php';

$database = new Database();
$db = $database->getConnection();

$admin_login_user = new admin($db);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents("php://input"));
    $email = $data->email_id;
    $password = $data->password;
    if($admin_login_user->login($email,$password)){
    
        http_response_code(200);
        echo json_encode(array("status"=>"200","message" => "Login successfully."));
    }

    else{
        http_response_code(200);
        echo json_encode(
            array("status"=>"404","message" => "Login Unsuccessfully.")
        );
    }
}
else{
    http_response_code(200);
    echo json_encode(array("status"=>"405","message"=>"Method Not Allowed"));
}
?>