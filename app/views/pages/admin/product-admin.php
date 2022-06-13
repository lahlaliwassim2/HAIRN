<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/sidebar-admin.php'; ?>
<!-- Content Start -->
<div class="content">



    <!--Star Header admin -->
    <header class="d-flex m-2 justify-content-between bg-dark align-items-center navbar navbar-expand  sticky-top px-4 py-0">
        <div class="sidebar-toggler flex-shrink-0 btn">
            <i class="fa fa-bars"></i>
        </div>

        <div class="mt-1 d-flex gap-3">
            <div class="d-flex ms-4">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                            </path>
                        </svg><!-- <i class="fas fa-search"></i> Font Awesome fontawesome.com --></button>
                </div>
            </div>
        </div>
    </header>
    <!--end Header admin -->



    <!-- Sale & Revenue Start -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/carousel-1.jpg" alt="">)
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">les produits</h1>
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content End -->
    <div class="container ">

        <!-- Page Header Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h6 class="section-title text-center text-primary text-uppercase">Produits</h6>
                    <h1 class="mb-5">Gerer les<span class="text-primary text-uppercase"> Produits </span></h1>
                </div>
                <div class="row g-4">
                    <div class="row g-4">

                        <div class="col-lg-3 col-md-6 ">
                            <a class=" " href="">
                                <div class="rounded shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid im" src="<?= URLROOT ?>/img/ch3ar.jpg" alt="">

                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">visage</h5>
                                        <small>Designation</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 " data-wow-delay="0.3s">
                            <a class="" href="">
                                <div class="rounded shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid im" src="<?= URLROOT ?>/img/ch3ar.jpg" alt="">

                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Barbe</h5>
                                        <small>Designation</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6" data-wow-delay="0.3s">
                            <a href="">
                                <div class="rounded shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid im" src="<?= URLROOT ?>/img/ch3ar.jpg" alt="">

                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">cheveux</h5>
                                        <small>Designation</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="service-item " href="">
                                <div class="rounded shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid im" src="<?= URLROOT ?>/img/ch3ar.jpg" alt="">

                                    </div>
                                    <div class="text-center p-4 mt-3">
                                        <h5 class="fw-bold mb-0">Odeurs</h5>
                                        <small>Designation</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row flex-lg-nowrap">


                    <div class="col mt-5">
                        <div class="e-tabs mb-3 px-3">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#">Produits</a></li>
                            </ul>
                        </div>

                        <div class="row flex-lg-nowrap">
                            <div class="col mb-3">
                                <div class="e-panel card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h6 class="mr-2"><span>Tous</span><small class="px-1">les service </small>
                                            </h6>
                                        </div>
                                        <div class="e-table">
                                             <div class="card">
              <div class="card-body">
                <div class="text-center px-xl-3">
                 <a href="<?php echo URLROOT ?>/pages/ajouterProduct"> <button class="btn btn-success btn-block" type="button" data-toggle="modal"
                    data-target="#user-form-modal">New product</button></a>
                </div>
               
             
                <div>

                 
                </div>

              </div>

            </div>
                                            <div class="table-responsive table-lg mt-3">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>Photo</th>
                                                            <th class="max-width">Name</th>
                                                            <th class="sortable">description</th>

                                                            <th>type </th>
                                                            <th class="">Quantitée</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <?php foreach($data as $products) : ?>
                                                    <tr>

                                                        <td class="align-middle text-center">
                                                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;">
                                                                <i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle"><?= $products->label?></td>
                                                        <td class="text-nowrap align-middle"><?= $products->description?></td>

                                                        <td class="text-nowrap align-middle"><span><?= $products->type?></span></td>
                                                                <td class="text-nowrap align-middle"><span><?= $products->quantite?></span></td>
                                                        <td class="text-center align-middle">
                                                            <div class="btn-group align-top">
                                                                <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                                                                <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                        <?php endforeach ;?>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<!-- Page Header End -->