<?php

class DB {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "ingenuity_db";
    
    
    //Connect database
public function __construct(){
   try{
       $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass,null);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }catch(PDOException $e){
       //Catches connection and output it if database connection failed
     echo 'Connection failed'. $e->getMessage();
   }
 }
 public function submitData($emp,$proj, $deadline) {
  $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass,null);
  $query = "INSERT INTO works_on(pro_id, emp_id, deadline) VALUES('$emp', '$proj', '$deadline')";
  $stmt = $conn->prepare($query);
  $stmt->execute();
 }

 public function retrieveStaff(){
    $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass,null);

    $stmt = $conn->prepare("Select * from staff");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data = json_encode($result);
    echo $data;
}
public function retrieveProjects(){
  $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass,null);

  $stmt = $conn->prepare("Select * from projects");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $data = json_encode($result);
  echo $data;
}

}