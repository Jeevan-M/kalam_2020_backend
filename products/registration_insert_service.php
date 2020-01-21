<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/db_connection.php';

// instantiate product object
include_once '../objects/registration.php';

$database = new Database();
$db = $database->getConnection();
 
$Registration_insert = new Registration($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));



if( !empty($data->email)&&
    !empty($data->full_name)&&
    !empty($data->event_name)&&
    !empty($data->mob_no)){
        
    $Registration_insert->email = $data->email;
    $Registration_insert->full_name = $data->full_name;
    $Registration_insert->event_name = $data->event_name;
    $Registration_insert->mob_no = $data->mob_no;
    $Registration_insert->status = 1;
    
    
    // create the Registration_insert
    if($Registration_insert->create()){
 
    // set response code - 201 created
    http_response_code(201);

    // tell the user
    echo json_encode(array("message" => "Registration_insert was created."));  
    }
    // if unable to create the Registration_insert, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("Registration_insert" => $Registration_insert));

        // tell the user
        echo json_encode(array("message" => "Unable to create Registration_insert."));
    }
}
// tell the user data is incomplete
else{

// set response code - 400 bad request
http_response_code(400);

// tell the user
echo json_encode(array("message" => "Unable to create Registration_insert. Data is incomplete."));

}
?>