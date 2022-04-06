<?php

 class s2eDao{
   public $conn;

   // constructor //
   public function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "ervajekralj";
    $this->conn = new PDO("mysql:host=$servername;dbname=stake2earndb", $username, $password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

    public function getAll(){
    $stmt = $this->conn->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getById($id){
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = $id");
    $stmt->execute();
    return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function add($params){
      $stmt = $this->conn->prepare("INSERT INTO users(name,surename,email) VALUES (:name, :surename, :email)");
      $stmt->execute($params);
      return $params;

    }

    public function delete($id){
      $stmt = $this->conn->prepare("DELETE FROM users WHERE id=:id");
      $stmt->bindParam('id',$id);
      $stmt->execute();
    }

    public function update($params){
      $stmt = $this->conn->prepare("UPDATE users SET name=:name, surename=:surename, email=:email WHERE id=:id");
      $stmt->execute($params);
  }
 }




 ?>
