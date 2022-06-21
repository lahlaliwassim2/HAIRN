  <?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/Navbar-client.php'; ?>
  
  <!-- Page Header Start -->
  <div class=" page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/2.jpg" alt="">);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
                 
                </div>
            </div>
    </div>
        <!-- Page Header End -->
      

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="">
                <div class="text-center " >
                    <h6 class="section-title text-center text-info text-uppercase">nom de produits</h6>
                    <h1 class="mb-5">decouvrire notre <span class="text-info text-uppercase">produits</span></h1>
                </div>

                <div class="row g-4">
           

            <?php  foreach($data as $product):?>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="height: 441px;" src="<?php echo URLROOT ?>/upload/<?php echo $product->image ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-info text-white rounded py-1 px-3 ms-4"><?php echo $product->quantite; ?> pcs</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $product->label; ?></h5>
                                    
                                </div>
                              
                                <p class="text-body mb-3"><?php echo $product->description; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-info rounded py-2 px-4" href=""> Detail</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php endforeach;  ?>
        </div>
        <!-- Room End -->

    
 </body>

        <?php require APPROOT . '/views/inc/footer.php'; ?>

       


