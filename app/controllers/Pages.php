<?php
  class Pages extends Controller {
    public function __construct(){
      $this->ProductModel= $this->model('ProduitModel');
      $this->CoiffeurModel= $this->model('CoiffeurModel');
      $this->servicesModel= $this->model('SevicesModel');     
    }
    
    public function index(){
      $coiffeurs = $this->CoiffeurModel->getCoiffeur(); 
      
      $this->view('pages/index',$coiffeurs);
    }

    public function contact(){
     
      $this->view('pages/contact');
    }

    public function produits(){
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/products',$AllProducts);
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
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/admin/product-admin',$AllProducts);
    }

    //function pour es services 
    public function adminService(){
      $allservices = $this->servicesModel->getAllServices();
      $this->view('pages/admin/services-admin',$allservices);
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


    public function ajouterService(){

      $this->view('inc/formService');
    }
    public function adminBarbers(){

      $this->view('pages/admin/BarberAdmin');
      
    }
    //function pour le crud de barber 

    public function adminDash(){
        $this->view('pages/admin/dashboard');
    }
    public function updateProuct(){

      $this->view('inc/UpdateProduct');
    }
  }