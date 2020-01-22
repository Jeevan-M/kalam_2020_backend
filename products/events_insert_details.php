<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/db_connection.php';

// instantiate product object
include_once '../objects/events_details.php';

$database = new Database();
$db = $database->getConnection();
 
$events_details_insert = new events_details($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));


if( !empty($data->admin_id)&&
    !empty($data->category)){
        
        $events_details_insert->admin_id = $data->admin_id;
        $events_details_insert->category = $data->category;
        $events_details_insert->event_name = $data->event_name;
        $events_details_insert->description = $data->description;
        $events_details_insert->event_rules = $data->event_rules;
        $events_details_insert->student_coordinator_name = $data->student_coordinator_name;
        $events_details_insert->student_coordinator_number = $data->student_coordinator_number;
        $events_details_insert->staff_coordinator_name = $data->staff_coordinator_name;
        $events_details_insert->staff_coordinator_number = $data->staff_coordinator_number;
        $events_details_insert->event_date = $data->event_date;
        $events_details_insert->event_start_time = $data->event_start_time;
        $events_details_insert->event_end_time = $data->event_end_time;
        $events_details_insert->venue = $data->venue;
        $events_details_insert->status = 1;
    
    // create the events_details_insert
    if($events_details_insert->create_events_details()){
 
    // set response code - 201 created
    http_response_code(201);

    // tell the user
    echo json_encode(array("message" => "events_details_insert was created."));  
    }
    // if unable to create the events_details_insert, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("events_details_insert" => $events_details_insert));

        // tell the user
        echo json_encode(array("message" => "Unable to create events_details_insert."));
    }
}
// tell the user data is incomplete
else{

// set response code - 400 bad request
http_response_code(400);

// tell the user
echo json_encode(array("message" => "Unable to create events_details_insert. Data is incomplete."));

}
?>