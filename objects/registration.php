<?php

class Registration{

    // Database Connection
    private $conn;
    private $table_name = 'events_registration';

    //object properties
    public $email;
    public $full_name;
    public $mob_no;
    public $event_name;
    public $status;
   

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
 
        $query = "SELECT
                       *
                   FROM
                       " . $this->table_name;
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
       }

    
       function read_one($event_name){
        $query = "SELECT
                       *
                   FROM
                       " . $this->table_name . "
                    WHERE  event_name = '".$event_name."'";
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
    }

      

    function create(){
        // try {      
         $query = "INSERT INTO    " . $this->table_name ."
                 SET
                      email=:email,
                      full_name=:full_name,
                      mob_no=:mob_no,
                      event_name=:event_name,
                      status =:status";
      
         $stmt = $this->conn->prepare($query);
     
         // sanitize
         $this->email=htmlspecialchars(strip_tags($this->email));
         $this->full_name=htmlspecialchars(strip_tags($this->full_name));
         $this->mob_no=htmlspecialchars(strip_tags($this->mob_no));
         $this->event_name=htmlspecialchars(strip_tags($this->event_name));
         $this->status=htmlspecialchars(strip_tags($this->status));
         
     
         // bind new values
         $stmt->bindParam(":email", $this->email);
         $stmt->bindParam(":full_name", $this->full_name);
         $stmt->bindParam(":event_name", $this->event_name);
         $stmt->bindParam(":mob_no", $this->mob_no);
         $stmt->bindParam(":status", $this->status);
        
             
         // execute query
         if($stmt->execute()){
             return true;
         }
            return false;
    }
}
?>