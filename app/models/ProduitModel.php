<?php 
    class ProduitModel{
        
        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }
    
  
    
        public function addProduct($data,$img){
            $this->db->query('INSERT INTO `produits`( `label`, `image`, `description`,`quantite`,`type`) VALUES (? ,? ,? ,? ,? )');//:name,:email,:phone,:address
            
            $this->db->bind(1 ,$data['nom']);
            $this->db->bind(2 ,$img);
            $this->db->bind(3 ,$data['description']);
            $this->db->bind(4 ,$data['nombre']);
            $this->db->bind(5 ,$data['rate']);
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
        public function deleteProduct($id){
            $this->db->query('DELETE FROM `produits` WHERE `id` = ?');
            $this->db->bind(1,$id);
            $this->db->execute();
           
        }

        public function getProduit($id){//for update
            $this->db->query('SELECT * FROM `produits` WHERE `id` = ?');
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


        public function update($data,$id){

            $this->db->query("UPDATE produits SET label=?,
             description= ?, quantite = ? ,type = ? WHERE id = ?");

            $this->db->bind(1 ,$data['nom']);
            // $this->db->bind(2 ,$img);
            $this->db->bind(2 ,$data['description']);
            $this->db->bind(3 ,$data['nombre']);
            $this->db->bind(4 ,$data['rate']);
            $this->db->bind(5 ,$id);
            $this->db->execute();
        }

        public function rowCount($type){
            $this->db->query('SELECT * FROM `produits` WHERE `type` = ?');
            $this->db->bind(1 ,$type );
            $this->db->execute();          
            return  $this->db->rowCount();  
        }
        public function rowOneCount(){
            $this->db->query('SELECT * FROM `produits`');
          $row =  $this->db->rowCount();
           
                    
            return $row ;
        }
    }