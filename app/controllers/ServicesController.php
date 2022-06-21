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
        $img = $this->checkImg();
        if($_SERVER['REQUEST_METHOD']=='POST'){
           

            if(empty($_POST['name'])&&(empty($_POST['description']))&&empty($_POST['pris'])&&($_POST['rate'])){
                redirect('pages/ajouterService');
            }
            else{
                $data = $_POST;
                $services = $this->ServicesModel->addService($data,$img);
                redirect('pages/adminService');
            }





        }
        else{
            redirect('pages/ajouterService');
        }
    }
    public function checkImg(){ 
        $fileName = $_FILES["img"]["name"];
        $fileSize = $_FILES["img"]["size"];
        $tmpName = $_FILES["img"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName = uniqid();
          $newImageName .= '.' . $imageExtension;
          $folder = $_SERVER['DOCUMENT_ROOT'].'/barber-fr-mvc/public/upload/';
          move_uploaded_file($tmpName,$folder. $newImageName);
          return $newImageName;

      }
}
public function shearService($type){
  $service = $this->ServicesModel->getService($type);
  $this->view('pages/admin/services-admin',$service);
}


}