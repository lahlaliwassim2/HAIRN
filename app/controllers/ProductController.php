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
}