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
      
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])&&(empty($_POST['description']))&&empty($_POST['nombre'])&&($_POST['rate'])){
            redirect('pages/ajouterProduct');
        }

        else{
        $data = $_POST;
        $products = $this->ProductModel->addProduct($data);
        redirect('pages/adminprod');
        }
    }
    else{

        redirect('pages/ajouterProduct');
    }
    
}
}