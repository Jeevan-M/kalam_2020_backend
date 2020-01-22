<?php

class participant_login{

    // Database Connection
    private $conn;
    private $table_name = 'participant_login';

    //object properties
    public $email;
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
}
?>