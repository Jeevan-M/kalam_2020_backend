<?php

class participant_login{

    // Database Connection
    private $conn;
    private $table_name = 'participant_login';

    //object properties
    public $email;
    public $Kalam_id;
    public $full_name;
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
       
       function signup($email){
        $query = "SELECT
                        *
                    FROM
                        " . $this->table_name . "
                    WHERE  email = '".$email."'";

            $stmt = $this->conn->prepare($query);
            if($stmt->execute()){
                return true;
            }
         
            return false;
        }
            


       function read_one($email){
 
        $query = "SELECT
                       *
                   FROM
                       " . $this->table_name . "
                    WHERE  email = '".$email."'";
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
    }

    function login($email,$password){

        //SELECT * FROM `participant_login` WHERE email = 'Jeevan@gmail.com' AND password = 'pwd'
        $query = "SELECT
                       *
                   FROM
                       " . $this->table_name . "
                    WHERE  email = '".$email."'
                    AND password = '".$password."'";
        
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
    }

    function create(){	
        // try {	

         $query = "INSERT INTO    " . $this->table_name ."	
                 SET	
                      Kalam_id=:Kalam_id,
                      email=:email,	
                      full_name=:full_name,	
                      department=:department,	
                      year=:year,	
                      college=:college,	
                      password=:password,	
                      status =:status,	
                      mob_no=:mob_no";	

         $stmt = $this->conn->prepare($query);	

         // sanitize	
         
         $this->Kalam_id=htmlspecialchars(strip_tags($this->Kalam_id));	
         $this->email=htmlspecialchars(strip_tags($this->email));	
         $this->full_name=htmlspecialchars(strip_tags($this->full_name));	
         $this->department=htmlspecialchars(strip_tags($this->department));	
         $this->year=htmlspecialchars(strip_tags($this->year));	
         $this->college=htmlspecialchars(strip_tags($this->college));	
         $this->password=htmlspecialchars(strip_tags($this->password));	
         $this->status=htmlspecialchars(strip_tags($this->status));	
         $this->mob_no=htmlspecialchars(strip_tags($this->mob_no));	


         // bind new values	
         $stmt->bindParam(":Kalam_id", $this->Kalam_id);	
         $stmt->bindParam(":email", $this->email);	
         $stmt->bindParam(":full_name", $this->full_name);	
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