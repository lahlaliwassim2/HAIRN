<?php
  class Pages extends Controller {
    public function __construct(){
      $this->ProductModel= $this->model('ProduitModel');

    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function contact(){
     
      $this->view('pages/contact');
    }
    public function produits(){
      $AllProducts = $this->ProductModel->getAllProducts();
      $this->view('pages/products',$AllProducts);
    }
  }
   