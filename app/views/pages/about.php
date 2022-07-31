<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar-client.php'; ?>
  
  <div class="container-xxl bg-white p-0">
        
       

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/carousel-1.jpg" alt="">);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->


       

       <!-- About Start -->
       <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5  align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-info text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-info text-uppercase">BarberShop</span></h1>
                    <p class="mb-4">Fondé en 2022, The Barber Shop Group a un engagement passionné envers les soins pour hommes et propose des coupes de cheveux, coiffure  et rasage pour hommes de haute qualité et d'un bon rapport qualité-prix.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-info mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">coupes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-info mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">coiffeurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-info mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">BARBERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-info py-3 px-5 mt-2" href="">Voir plus</a>
                </div>
                <div class="col-lg-6">
                    <img style="width : 100%" src="<?php echo URLROOT ?>/img/team-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


 <!-- Team Start -->
 <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-info text-uppercase">notre coiffeurs</h6>
                    <h1 class="mb-5">Découvrez notre <span class="text-info text-uppercase">coifeurs</span></h1>
                </div>
                <div class="row g-4">
                    <?php foreach($data as $coiffeur) :
                       ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid"  src="<?php echo URLROOT ?>/upload/<?php echo $coiffeur->image ?>"  alt="">
                        
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"> <?= $coiffeur->nom?></h5>
                                <small>chaise   <?= $coiffeur->chaise ?> </small>
                            </div>
                        </div>
                    </div>
                   <?php endforeach ;?>
                </div>
            </div>
        </div>
        <!-- Team End -->
<?php require APPROOT . '/views/inc/footer.php'; ?>