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
        
    
}