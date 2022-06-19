<?php
  class Users extends Controller {
    public function __construct(){
      $this->userModel = $this->model('User');
      session_start();
    }

    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'prenom' => trim($_POST['prenom']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'prenom_err' =>'',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
        //chek si il y a deja un autre email 
        if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'this email is elready exist';
        }
        }
        if(empty($data['prenom'])){
          $data['prenom_err'] = 'Pleae enter email';
        }
        // Validate Name
        if(empty($data['name'])){
          $data['name_err'] = 'Pleae enter name';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Pleae enter password';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Pleae confirm password';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Passwords do not match';
          }
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated
         //hash password 
         $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
          // regster User
          if($this->userModel->register($data)){
            redirect('pages/formLogin');
            
          }else{
            die('something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('pages/formSignup', $data);
        }

      } else {
        // Init data
        $data =[
            'name' => '',
          'email' => '',
          'prenom' => '',
          'password' => '',
          'confirm_password' =>'',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load view
        $this->view('pages/formSignup', $data);
      }
    }





      public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];
        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }
        //chercher ssi l email exis dans la base de doneer 

        if($this->userModel->findUserByEmail($data['email'])){
          
          //user found          
        }else{
          $data['email_err'] ='NO FOUND USER';
        }
        // Validate Password
  
        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
        // chek and set logged in user 
        $compteUser = $this->userModel->login($data['email']  , $data['password']);

        if($compteUser){
         
          $this->createUserSession($compteUser);

          $role = $this->isLoggedIn();

          if($role){
          redirect('pages/about');
          }
          else{
            redirect("pages/index");
          }
          //creat session
        }
        else{
          echo 'mamzyanch0';
          $data['password_err'] = 'password erreur';
         $this->view('pages/formLogin',$data);
        }
        } 
        else 
        {
          // Load view with errors
          $this->view('pages/formLogin',$data);
        }
      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];
        // Load view
        $this->view('pages/formLogin', $data);
      }
    }

    public function createUserSession($compteUser){
      $_SESSION['id'] = $compteUser->id;
      $_SESSION['email'] = $compteUser->email;
      $_SESSION['name'] = $compteUser->nom;
      $_SESSION['prenom'] = $compteUser->prenom;
      $_SESSION['role'] = $compteUser->role;
      $_SESSION['creat_at'] = $compteUser->creat_at;
      
    }

    public function isLoggedIn(){
      if(isset($_SESSION['ID'])){
        return true;
      } else {
        return false;
      }
    }
   public function clientSession(){
    if($_SESSION['role'] == "client"){
      return true ; 
    }else{
      return false ;
    }
   }
    
  }