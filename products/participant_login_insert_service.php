<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/db_connection.php';

// instantiate product object
include_once '../objects/participant_login.php';

$database = new Database();
$db = $database->getConnection();
 
$participant_login_insert = new participant_login($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
$email = $data->email;


if( !empty($data->email)&&
    !empty($data->full_name)&&
    !empty($data->department)&&
    !empty($data->year)&&
    !empty($data->college)&&
    !empty($data->password)&&
    !empty($data->mob_no)){
        
    
    

    if ($participant_login_insert->signup($email)){
        
        $participant_login_insert->email = $data->email;
        $participant_login_insert->full_name = $data->full_name;
        $participant_login_insert->department = $data->department;
        $participant_login_insert->year = $data->year;
        $participant_login_insert->college = $data->college;
        $participant_login_insert->password = $data->password;
        $participant_login_insert->status = $data->status;
        $participant_login_insert->mob_no = $data->mob_no;

        if($participant_login_insert->create()){
 
            // set response code - 201 created
            http_response_code(201);
        
            // tell the user
            echo json_encode(array("message" => "participant_login_insert was created."));  
            }
            // if unable to create the participant_login_insert, tell the user
            else{
        
                // set response code - 503 service unavailable
                http_response_code(503);
                echo json_encode(array("participant_login_insert" => $participant_login_insert));
        
                // tell the user
                echo json_encode(array("message" => "Unable to create participant_login_insert."));
            }

    }else:
        http_response_code(200);
        echo json_encode(array("message" => "User already exist."));
    
    // create the participant_login_insert
   
}
// tell the user data is incomplete
else{

// set response code - 400 bad request
http_response_code(400);

// tell the user
echo json_encode(array("message" => "Unable to create participant_login_insert. Data is incomplete."));

}
?>