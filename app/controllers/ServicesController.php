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
}