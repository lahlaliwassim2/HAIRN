<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    // Register User 
    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO user (nom,prenom, email, password) VALUES(:name,prenom ,:email, :password)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':name', $data['prenom']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


        // Login User
        public function login($email, $password){
          $this->db->query('SELECT * FROM user WHERE email = :email AND password = :password');
          $this->db->bind(':email', $email);
          $this->db->bind(':password', $password);
          
          
    
          return  $this->db->single();
        }
    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }


    public function rendez_vous($data,$idUser){
      $this->db->query('INSERT INTO `rendez-vous`(`datTime`, `id-user`, `chez`, `message`) VALUES (:datTime,:id_user,:chez,:message)');
      // Bind values
      $this->db->bind(':datTime', $data['datTime']);
      $this->db->bind(':id_user', $idUser);
      $this->db->bind(':chez', $data['chez']);
      $this->db->bind(':message', $data['message']);
      $this->db->execute();
    }


    public function check_Reservation($datTime){
      $this->db->query('SELECT * FROM `rendez-vous` WHERE datTime = :datTime');
      // Bind value
      $this->db->bind(':datTime', $datTime);

      $row = $this->db->single();

      if($row){
        return true;
      }
      else{
        return false;
      }
    }
    public function getAllReserve(){//SELECT * FROM `professors` WHERE 1
      $this->db->query('SELECT rendez-vous.*, user.*
      FROM rendez-vous
      INNER JOIN user ON user.id = rendez-vous.fk_user;');
      try{
          return $this->db->resultSet();
          
      }catch(EXCEPTION $e){
          return 'ERROR '. $e->getMessage();
      }
      
  }
  }