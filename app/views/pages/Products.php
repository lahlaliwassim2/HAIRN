  <!-- Page Header Start --><?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/Navbar-user.php'; ?>
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><a href="<?php echo URLROOT ?>/pages/">Products</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
      

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center " >
                    <h6 class="section-title text-center text-primary text-uppercase">nom de produits</h6>
                    <h1 class="mb-5">decouvrire notre <span class="text-primary text-uppercase">produits</span></h1>
                </div>

                <div class="row g-4">
                    <!-- <div class="col-lg-4 col-md-6 ">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$10/1piece</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">nom produit</h5>
                                    
                                </div>
                              
                                <p class="text-body mb-3"> dans ce descriptif doivent apparaître des éléments clés permettant de comprendre à quoi sert le produit, quels sont ses atouts, comment il fonctionne, .</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""> Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">acheter</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <?php  foreach($data as $product) :?>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo URLROOT ?>/img/room-1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $product->quantite; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $product->label; ?></h5>
                                    
                                </div>
                              
                                <p class="text-body mb-3"><?php echo $product->description; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""> Detail</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php endforeach;  ?>
        </div>
        <!-- Room End -->


       


