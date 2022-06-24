<?php 

class SevicesModel{
        
    private $db;
    public function __construct( )    {
    $this->db = new Database();
}

public function getService($type){
    $this->db->query('SELECT * FROM `services` WHERE `type` = ?');
    $this->db->bind(1 ,$type );
    return $this->db->resultSet();

}

public function getAllServices(){
    $this->db->query('SELECT * FROM services');
    return $this->db->resultSet();
}

public function addService($data,$img){
    $this->db->query('INSERT INTO `services` (`label`,`image`,`description`,`pris`,`type`) VALUES (?,?,?,?,?)');
      
    $this->db->bind(1 ,$data['nom']);
    $this->db->bind(2 ,$img);
    $this->db->bind(3 ,$data['description']);
    $this->db->bind(4 ,$data['pris']);
    $this->db->bind(5 ,$data['rate']);
    $this->db->execute();
}
public function rowOneCount(){
    $this->db->query('SELECT * FROM `services`');
  $row =  $this->db->rowCount();
   
            
    return $row ;
}

}