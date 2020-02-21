<?php
class User{
 
   
    private $conn;
    private $table_name = "users";
 

    public $Name;
    public $Email;
    public $phone;
    public $ID_number;
    public $dates;
    public $times;
    public $speciality;
    
    public function __construct($db){
        $this->conn = $db;
    }
   
    function signup(){
     

        if($this->isAlreadyExist()){
            return false;
        }
       
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                Name=:Name, Email=:Email, phone=:phone, ID_number=:ID_number,dates=:dates,  times=:times,  speciality=:speciality";
    
                
       
        $stmt = $this->conn->prepare($query);
    
       
        $this->Name=htmlspecialchars(strip_tags($this->Name));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->phone=htmlspecialchars(strip_tags($this->phone));
        $this->ID_number=htmlspecialchars(strip_tags($this->ID_number));
        $this->dates=htmlspecialchars(strip_tags($this->dates));
        $this->times=htmlspecialchars(strip_tags($this->times));
        $this->speciality=htmlspecialchars(strip_tags($this->speciality));
    
        $stmt->bindParam(":Name", $this->Name);
        $stmt->bindParam(":Email", $this->Email);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":ID_number", $this->ID_number);

        $stmt->bindParam(":dates", $this->dates);
        $stmt->bindParam(":times", $this->times);
        $stmt->bindParam(":speciality", $this->speciality);
      
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
            ID_number='".$this->ID_number."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}