<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/Navbar-client.php'; ?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/about-3.jpg" alt="">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>

            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->





<!-- Service Start -->


<!--For Page-->


    <!--For Row containing all card-->
    <div class="row">


        <!-- partie back End -->
        <?php foreach ($data as $services) : ?>
            <!--Card 1-->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow mb-5 ">

                    <!--Card image-->
                    <div class="view view-cascade overlay text-center">
                        <img class="card-img-top" src="<?php echo URLROOT ?>/upload/<?php echo $services->image ?>" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>


                    <!--Card Body-->
                    <div class="card-body card-body-cascade text-center">

                        <!--Card Title-->
                        <h4 class="card-title"><strong><a href='<?php echo URLROOT ?>/ServicesController/getService/<?php echo $services->type; ?>'><?php echo $services->type; ?> </a></strong></h4>

                        <!-- Card Description-->
                        <h3 class="card-text"><?= $services->label ?>
                        </h3>


                        <p class="price"><?= $services->pris ?>dh</p>

                        <!-- Card Rating-->



                        <!--Card footer-->
                        <div class="card-footer">
                            <p>ADD TO CART</p>
                        </div>


                    </div>
                </div>
            </div>
        <?php endforeach; ?>








    </div>

<!-- Service End -->


<?php require APPROOT . '/views/inc/footer.php'; ?>