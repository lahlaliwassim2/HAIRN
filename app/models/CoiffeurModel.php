<?php 
    class CoiffeurModel{
        
        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }
    public function getCoiffeur(){

            $this->db->query('SELECT * FROM `coiffeurs`');
            return $this->db->resultSet();
            
        }
    // public function addCoiffeur(){
    //     $this->db>query('INSERT INTO `coiffeurs`(`nom`,`chaise`) VALUES (?,?)');

    //     // $this->db->bind(1 ,$data['nom']);
    //     // $this->db->bind(2 ,$data['chaise']);
    //     $this->db->execute();
    // }
    
        
    
}