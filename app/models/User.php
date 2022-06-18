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
  }