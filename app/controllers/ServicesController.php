<?php 
 class ServicesController extends Controller{
    public function __construct()
    {
        $this->ServicesModel= $this->model('SevicesModel');
    }

    public function getService($type){
        $allservices = $this->ServicesModel->getService($type);
        $this->view('pages/services',$allservices);
    }
    public function addService(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
           

            if(empty($_POST['name'])&&(empty($_POST['description']))&&empty($_POST['pris'])&&($_POST['rate'])){
                redirect('pages/ajouterService');
            }
            else{
                $data = $_POST;
                $services = $this->ServicesModel->addService($data);
                redirect('pages/adminService');
            }





        }
        else{
            redirect('pages/ajouterService');
        }
    }

}