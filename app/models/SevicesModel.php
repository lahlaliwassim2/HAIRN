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


}