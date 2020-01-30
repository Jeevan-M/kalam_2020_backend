<?php

class admin{

    // Database Connection
    private $conn;
    private $events_registration = 'events_registration';
    private $event_table = 'event_details';
    private $participant_table = 'participant_login';
    private $department_admin = 'department_admin';

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
    
       function login($email,$password){

        $query = "SELECT
                       *
                   FROM
                       " . $this->department_admin . "
                    WHERE  email_id = '".$email."'
                    AND password = '".$password."'";
        
           $stmt = $this->conn->prepare($query);
           if($stmt->execute()){
            return true;
        }
           return false;
         
        }

        function truncat(){
            $query = "TRUNCATE TABLE customers";
            $stmt = $this->conn->prepare($query);
           if($stmt->execute()){
            return true;
        }
           return false;
         
        }

        function event_name(){
            $query = "SELECT
                       event_name
                   FROM
                       " . $this->event_table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

}

?>