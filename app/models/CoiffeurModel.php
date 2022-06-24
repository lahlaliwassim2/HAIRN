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

    public function addCoiffeur($data,$img){

        
       $this->db->query('INSERT INTO `coiffeurs`(`nom`,`prenom`,`chaise`,`date`,`image`) VALUES (?,?,?,?,?)');

    $this->db->bind(1 ,$data['nom']);
    $this->db->bind(2 ,$data['prenom']);
    $this->db->bind(3 ,$data['nombre']);
    $this->db->bind(4 ,$data['date']);
    $this->db->bind(5 ,$img);
     $this->db->execute();
     }
     public function rowOneCount(){
        $this->db->query('SELECT * FROM `produits`');
        $this->db->execute();
      $row =  $this->db->rowCount();
       
                
        return $row ;
    }
        
    
}