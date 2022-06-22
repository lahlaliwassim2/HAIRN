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
            $img = $this->checkImg();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['nom'])&&(empty($_POST['prenom']))&&(empty($_POST['nombre']))(empty($_POST['date']))){
                    redirect('pages/ajouterCoiffeur');
                }    
                else{
                $data = $_POST;
                $coiffeurs = $this->CoiffeurModel->addCoiffeur($data,$img);
                // redirect('pages/adminBarbers');
                }
            }
            else{
                    redirect('pages/ajouterCoiffeur');
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


}