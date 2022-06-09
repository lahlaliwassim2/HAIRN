<?php 
    class ProduitModel{
        
        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }
    
    public function getProduits(){
        
        $this->db->query("SELECT * FROM tests");

        return $this->db->single();
    }
    
        public function addProduit($label , $image , $description ,$quantite ,$type){
            $this->db->query('INSERT INTO `professors`( `label`, `image`, `description`,`quantite`,`type`) VALUES (? ,? ,? ,? ,? )');//:name,:email,:phone,:address
            
            $this->db->bind(1 ,$label);
            $this->db->bind(2 ,$image);
            $this->db->bind(3 ,$description);
            $this->db->bind(4 ,$quantite);
            $this->db->bind(5 ,$type);
          
            $this->db->execute();
            
        }
        public function getAllProduits(){//SELECT * FROM `professors` WHERE 1
            $this->db->query('SELECT * FROM `produits`');
            try{
                return $this->db->resultSet();
                
            }catch(EXCEPTION $e){
                return 'ERROR '. $e->getMessage();
            }
            
        }
        public function delete($id){
            $this->db->query('DELETE FROM `produits` WHERE `id_pro` = ?');
            $this->db->bind(1,$id);
            $this->db->execute();
            $this->getAllProduits();

        }
        public function getProduit($id){//for update
            $this->db->query('SELECT * FROM `produits` WHERE `id_pro` = ?');
            $this->db->bind(1 ,$id );
            return $this->db->single();
        }
     

        public function getProduct($type){
            $this->db->query('SELECT * FROM `produits` WHERE `type` = ?');
            $this->db->bind(1 ,$type );
            return $this->db->resultSet();
        }

        public function getAllProducts(){
            $this->db->query('SELECT * FROM `produits`');
            return $this->db->resultSet();
        }
        
    }