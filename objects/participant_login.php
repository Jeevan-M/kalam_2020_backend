<?php

class participant_login{

    // Database Connection
    private $conn;
    private $table_name = 'participant_login';

    //object properties
    public $email;
    public $first_name;
    public $last_name;
    public $department;
    public $year;
    public $college;
    public $password;
    public $status;
    public $mob_no;

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

    function create(){
        // try {
      
         $query = "INSERT INTO    " . $this->table_name ."
                 SET
                      email=:email,
                      first_name=:first_name,
                      last_name=:last_name,
                      department=:department,
                      year=:year,
                      college=:college,
                      password=:password,
                      status =:status,
                      mob_no=:mob_no";
      
         $stmt = $this->conn->prepare($query);
     
         // sanitize
         $this->email=htmlspecialchars(strip_tags($this->email));
         $this->first_name=htmlspecialchars(strip_tags($this->first_name));
         $this->last_name=htmlspecialchars(strip_tags($this->last_name));
         $this->department=htmlspecialchars(strip_tags($this->department));
         $this->year=htmlspecialchars(strip_tags($this->year));
         $this->college=htmlspecialchars(strip_tags($this->college));
         $this->password=htmlspecialchars(strip_tags($this->password));
         $this->status=htmlspecialchars(strip_tags($this->status));
         $this->mob_no=htmlspecialchars(strip_tags($this->mob_no));
     
     
         // bind new values
         $stmt->bindParam(":email", $this->email);
         $stmt->bindParam(":first_name", $this->first_name);
         $stmt->bindParam(":last_name", $this->last_name);
         $stmt->bindParam(":department", $this->department);
         $stmt->bindParam(":year", $this->year);
         $stmt->bindParam(":college", $this->college);
         $stmt->bindParam(':password', $this->password);
         $stmt->bindParam(":status", $this->status);
         $stmt->bindParam(":mob_no", $this->mob_no);
             
         // execute query
         if($stmt->execute()){
             return true;
         }
         return false;  
     }
    

}
?>