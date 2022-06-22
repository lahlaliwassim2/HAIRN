<?php 
    class ModelMessage{
        
        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }


    public function SendMessage($data,$id){
        $this->db->query('INSERT INTO `messages`(`sujet`, `content`,`fk_user`) VALUES (? ,? ,?)');//:name,:email,:phone,:address
        
        $this->db->bind(1 ,$data['sujet']);      
        $this->db->bind(2 ,$data['content']);
        $this->db->bind(3 ,$id);

        $this->db->execute();
        
    }
    public function deleteMessage($id){
        $this->db->query('DELETE FROM `messages` WHERE `id` = ?');
        $this->db->bind(1,$id);
        $this->db->execute();
    }
    public function getAllMesages(){//SELECT * FROM `professors` WHERE 1
        $this->db->query('SELECT messages.*, user.*
        FROM messages
        INNER JOIN user ON user.id = messages.fk_user;');
        try{
            return $this->db->resultSet();
            
        }catch(EXCEPTION $e){
            return 'ERROR '. $e->getMessage();
        }
        
    }


}