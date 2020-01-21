<?php

class events_details{

    // Database Connection
    private $conn;
    private $main_table_name = 'events_id';
    private $sub_table_name = 'event_details';

    //object properties
    public $event_date;
    public $category;
    public $event_name_id_main;
    public $event_name_id;
    public $event_name;
    public $description;
    public $event_rules;
    public $student_coordinator_name;
    public $student_coordinator_number;
    public $staff_coordinator_name;
    public $staff_coordinator_number;
    public $event_time;
    public $venue;
    public $status;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
 
        $query = "SELECT * FROM events_id INNER JOIN event_details on event_name_id_main = event_name_id";
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
       }
    
    

    function create_events_id(){
        // try {
      
         $query = "INSERT INTO    " . $this->main_table_name ."
                 SET
                      event_date=:event_date,
                      category=:category,
                      event_name_id_main=:event_name_id_main,
                      status =:status";
      
         $stmt = $this->conn->prepare($query);
     
         // sanitize
         $this->event_date=htmlspecialchars(strip_tags($this->event_date));
         $this->category=htmlspecialchars(strip_tags($this->category));
         $this->event_name_id_main=htmlspecialchars(strip_tags($this->event_name_id_main));
         $this->status=htmlspecialchars(strip_tags($this->status));
        
     
         // bind new values
         $stmt->bindParam(":event_date", $this->event_date);
         $stmt->bindParam(":category", $this->category);
         $stmt->bindParam(":event_name_id_main", $this->event_name_id_main);
         $stmt->bindParam(":status", $this->status);
             
         // execute query
         if($stmt->execute()){
             return true;
         }
            return false;
    }

    function create_events_details(){
        // try {
      
         $query = "INSERT INTO    " . $this->sub_table_name ."
                 SET
                      event_name_id=:event_name_id,
                      event_name=:event_name,
                      description=:description,
                      event_rules=:event_rules,
                      student_coordinator_name=:student_coordinator_name,
                      student_coordinator_number=:student_coordinator_number,
                      staff_coordinator_name=:staff_coordinator_name,
                      staff_coordinator_number=:staff_coordinator_number,
                      event_time=:event_time,
                      venue =:venue,
                      status =:status";
      
         $stmt = $this->conn->prepare($query);
     
         // sanitize
         $this->event_name_id=htmlspecialchars(strip_tags($this->event_name_id));
         $this->event_name=htmlspecialchars(strip_tags($this->event_name));
         $this->description=htmlspecialchars(strip_tags($this->description));
         $this->event_rules=htmlspecialchars(strip_tags($this->event_rules));
         $this->student_coordinator_name=htmlspecialchars(strip_tags($this->student_coordinator_name));
         $this->student_coordinator_number=htmlspecialchars(strip_tags($this->student_coordinator_number));
         $this->staff_coordinator_name=htmlspecialchars(strip_tags($this->staff_coordinator_name));
         $this->staff_coordinator_number=htmlspecialchars(strip_tags($this->staff_coordinator_number));
         $this->event_time=htmlspecialchars(strip_tags($this->event_time));
         $this->venue=htmlspecialchars(strip_tags($this->venue));
         $this->status=htmlspecialchars(strip_tags($this->status));
        
     
         // bind new values
         $stmt->bindParam(":event_name_id", $this->event_name_id);
         $stmt->bindParam(":event_name", $this->event_name);
         $stmt->bindParam(":description", $this->description);
         $stmt->bindParam(":event_rules", $this->event_rules);
         $stmt->bindParam(":student_coordinator_name",$this->student_coordinator_name);
         $stmt->bindParam(":student_coordinator_number",$this->student_coordinator_number);
         $stmt->bindParam(":staff_coordinator_name",$this->staff_coordinator_name);
         $stmt->bindParam(":staff_coordinator_number",$this->staff_coordinator_number);
         $stmt->bindParam(":event_time",$this->event_time);
         $stmt->bindParam(":venue",$this->venue);
         $stmt->bindParam(":status", $this->status);
             
         // execute query
         if($stmt->execute()){
             return true;
         }
            return false;
    }
}
?>