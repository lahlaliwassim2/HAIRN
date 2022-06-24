<?php
  class Pages extends Controller {
    public function __construct(){
      $this->ProductModel= $this->model('ProduitModel');
      $this->CoiffeurModel= $this->model('CoiffeurModel');
      $this->servicesModel= $this->model('SevicesModel');   
      $this->ModelMessage= $this->model('ModelMessage');  
      $this->User  = $this->model('User');
      
    }
    
    public function index(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur(); 
      $visage =   $this->ProductModel->rowCount("visage");
      $barbe =   $this->ProductModel->rowCount("barbe");
      $odeurs =   $this->ProductModel->rowCount("odeurs");
      $cheveux =   $this->ProductModel->rowCount("cheveux");
      $prods = $this->ProductModel->rowOneCount();
      $servcs = $this->servicesModel->rowOneCount();
      $coifs = $this->CoiffeurModel->rowOneCount();

      $data = [
        'coiffeur' => $coiffeurs,
        'visage' => $visage,
        'barbe' => $barbe,
        'odeurs' => $odeurs,
        'prods' => $prods,
        'cheveux' => $cheveux,
        'servcs' => $servcs ,
        'coifs' => $coifs
      ];

     if(isset($_SESSION['id'])){
     if($_SESSION['role'] == 'client'){
      $this->view('pages/index',$data); }
      else{
        $this->view('pages/formLogin');
      }}else{
        $this->view('pages/index',$data);
      }
    }
    public function couifAdmn(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){

      
      $this->view('pages/admin/coiffeurAdmin');
    } else{
      $this->view('pages/formLogin');
    } }
      }


    public function contact(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'client'){

    
      $this->view('pages/contact');
        }else{
          $this->view('pages/formLogin');
        }
      }
    }

    public function produits(){
      $AllProducts = $this->ProductModel->getAllProducts();
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'clien'){

      $this->view('pages/products',$AllProducts);
        } else{
          $this->view('pages/formLogin');
        }
      }
    }
    public function messageadmin(){
      $messages = $this->ModelMessage->getAllMesages();
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){

      $this->view('pages/admin/message',$messages);
        }else{
          $this->view('pages/formLogin');
        }
      }
    }

    public function coiffeur(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur(); 
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'client'){

      $this->view('pages/about',$coiffeurs);
        }else{
          $this->view('pages/formLogin');
        }
      }
      
     
    }
    public function service(){
      $allservices =  $this->servicesModel->getAllServices();
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'client'){

      $this->view('pages/services',$allservices);
        }else{
          $this->view('pages/formLogin');
        }
      }
    }

    public function adminprod(){
      if($_SESSION['role'] == 'admin'){
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/admin/product-admin',$AllProducts);
    }else{
      redirect('pages/formLogin');
    }
  }

  public function showReservation(){
    if($_SESSION['role'] == 'admin'){
      $Reservation = $this->User->getAllReserve();
      $this->view('pages/admin/rendez-admin',$Reservation);
    }else{
      redirect('pages/formLogin');
    }
  }

    //function pour es services 
    public function adminService(){
      $allservices = $this->servicesModel->getAllServices();
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){

      $this->view('pages/admin/services-admin',$allservices);
        }else{
          $this->view('pages/formLogin');
        }
      }
    }
 public function profil(){
  if(isset($_SESSION['id'])){
    if($_SESSION['role'] == 'client'){

   $this->view('pages/profil-client');
 }else{
  $this->view('pages/formLogin');
 }
}
 }


    // function pour log in 
    public function formLogin(){
      $this->view('pages/formLogin');
    }
    public function formRegister(){
      $this->view('pages/formSignup');
    }


    // function pour ajouter des produits 
    public function ajouterProduct(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){

      $this->view('inc/formPruduct');}
        }
    }
    public function ajouterCoiffeur(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){

      $this->view('pages/admin/formCoiffeur');}
        }
    }
   


    public function ajouterService(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){


      $this->view('inc/formService');
    }else{ $this->view('pages/formLogin');}}
  }
    public function adminBarbers(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur();
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){


      $this->view('pages/admin/coiffeurAdmin',$coiffeurs);
        }else{
          $this->view('pages/formLogin');
        }
      }
    }
    //function pour le crud de barber 

    public function adminDash(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admin'){
    
       $this->view('pages/admin/dashboard');
     }else{
      $this->view('pages/formLogin');
     }
    }
     }
    public function updateProuct(){
      if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'admine'){

      $this->view('inc/UpdateProduct');
        }
      else{
        $this->view('pages/formLogin');
      }}
    }
  }