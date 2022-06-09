<?php 
class CoiffeurController extends Controller {
   
    public function __construct()
    {
        $this->CoiffeurModel= $this->model('CoiffeurModel');
    }
    public function getCoiffeur(){
     $coiffeurs=  $this->CoiffeurModel->getCoiffeur();
     $this->view('pages/index',$coiffeurs);
    }


}