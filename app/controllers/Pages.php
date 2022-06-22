<?php
  class Pages extends Controller {
    public function __construct(){
      $this->ProductModel= $this->model('ProduitModel');
      $this->CoiffeurModel= $this->model('CoiffeurModel');
      $this->servicesModel= $this->model('SevicesModel');   
      $this->ModelMessage= $this->model('ModelMessage');  
    }
    
    public function index(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur(); 
      $visage =   $this->ProductModel->rowCount("visage");
      $barbe =   $this->ProductModel->rowCount("barbe");
      $odeurs =   $this->ProductModel->rowCount("odeurs");
      $cheveux =   $this->ProductModel->rowCount("cheveux");

      $data = [
        'coiffeur' => $coiffeurs,
        'visage' => $visage,
        'barbe' => $barbe,
        'odeurs' => $odeurs,
        'cheveux' => $cheveux,
      ];

     
     
      
      $this->view('pages/index',$data);
    }
    public function couifAdmn(){
      $this->view('pages/admin/coiffeurAdmin');
    }


    public function contact(){
    
      $this->view('pages/contact');
    }

    public function produits(){
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/products',$AllProducts);
    }
    public function messageadmin(){
      $messages = $this->ModelMessage->getAllMesages();
      $this->view('pages/admin/message',$messages);
    }

    public function coiffeur(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur(); 
      $this->view('pages/about',$coiffeurs);
     
    }
    public function service(){
      $allservices =  $this->servicesModel->getAllServices();
      $this->view('pages/services',$allservices);
    }

    public function adminprod(){
      if($_SESSION['role'] == 'admin'){
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/admin/product-admin',$AllProducts);
    }else{
      redirect('pages/formLogin');
    }
  }

    //function pour es services 
    public function adminService(){
      $allservices = $this->servicesModel->getAllServices();
      $this->view('pages/admin/services-admin',$allservices);
    }
 public function profil(){
   $this->view('pages/profil-client');
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

      $this->view('inc/formPruduct');
    }
    public function ajouterCoiffeur(){
      $this->view('pages/admin/formCoiffeur');
    }
   


    public function ajouterService(){

      $this->view('inc/formService');
    }
    public function adminBarbers(){

      $this->view('pages/admin/coiffeurAdmin');
      
    }
    //function pour le crud de barber 

    public function adminDash(){
        $this->view('pages/admin/dashboard');
    }
    public function updateProuct(){

      $this->view('inc/UpdateProduct');
    }
  }