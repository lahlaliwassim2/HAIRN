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


}