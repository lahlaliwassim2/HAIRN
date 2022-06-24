 <?php 
 class ProductController extends Controller{
public function __construct()
    {
        $this->ProductModel= $this->model('ProduitModel');
    }
public function getProduct($type){
    $products = $this->ProductModel->getProduct($type);
    $this->view('pages/products',$products);
}

public function addProduct(){
    $img = $this->checkImg();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])&&(empty($_POST['description']))&&empty($_POST['nombre'])&&($_POST['rate'])){
            redirect('pages/ajouterProduct');
        }

        else{
        $data = $_POST;
        $products = $this->ProductModel->addProduct($data,$img);
        redirect('pages/adminprod');
        }
    }
    else{

        redirect('pages/ajouterProduct');
    }
}
    public function deleteProduct($id){
        $this->ProductModel->deleteProduct($id);
        redirect('pages/adminprod');
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
    public function sherchProduct($type){
      $product =   $this->ProductModel-> getProduct($type);
      $this->view('/pages/admin/product-admin',$product);
    }
    public function getProduit($id){
        $product = $this->ProductModel->getProduit($id);
        $this->view('pages/admin/UpdateProduct',$product);
    }
    public function updateProduct($id){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('pages/admin/product-admin');
         }
         else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = $_POST;           
            $this->ProductModel->update($data,$id);
            redirect('admin/product-admin');
        } 
    }
    public function rowCount($type){
      $rows =   $this->ProductModel->rowCount($type);
      return $rows;
    }
    


    
                                                                  
}