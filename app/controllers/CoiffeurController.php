<?php 
class CoiffeurController extends Controller {
   


    public function __construct()
   {
        $this->CoiffeurModel= $this->model('CoiffeurModel');
    }
    public function getCoiffeur()
    {
            $coiffeurs=  $this->CoiffeurModel->getCoiffeur();
            $this->view('pages/index',$coiffeurs);
    }




    public function addCoiffeur()
    {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['name'])&&(empty($_POST['description']))){
                    redirect('pages/ajouterCoiffeur');
                }    
                else{
                $data = $_POST;
                $products = $this->CoiffeurModel->addCoiffeur($data);
                redirect('pages/adminCoiffeur');
                }
            }
            else{
                    redirect('pages/ajouterCoiffeur');
            }       
    }
}



