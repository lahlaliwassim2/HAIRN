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
  }