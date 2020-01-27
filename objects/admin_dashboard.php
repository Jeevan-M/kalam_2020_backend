<?php

class Registration{

    // Database Connection
    private $conn;
    private $events_registration = 'events_registration';
    private $event_table = 'event_details';
    private $participant_table = 'participant_login';

    //object properties
    
    public $Kalam_id;
    public $event_id;
    public $email;
    public $full_name;
    public $college;
    public $mob_no;
    public $event_name;
    public $description;
    public $event_rules;
    public $student_coordinator_name;
    public $student_coordinator_number;
    public $staff_coordinator_name;
    public $staff_coordinator_number;
    public $event_date;
    public $event_start_time;
    public $event_end_time;
    public $venue;
    
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
 
        $query = "SELECT
                       *
                   FROM
                       " . $this->participant_table;
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
       }

}
?>