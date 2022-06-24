<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/sidebar-admin.php'; ?>
<!-- Content Start -->
<div class="content position-relative">



    <!--Star Header admin -->
    <header class="d-flex m-2 justify-content-between bg-dark align-items-center navbar navbar-expand  sticky-top px-4 py-0">
        <div class="sidebar-toggler flex-shrink-0 btn">
            <i class="fa fa-bars"></i>
        </div>

        <div class="mt-1 d-flex gap-3">
            <div class="d-flex ms-4">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
                    <button class="btn btn-info" id="btnNavbarSearch" type="button"></button>


                </div>
            </div>
        </div>
    </header>


    <!-- Page Header Start -->
    <div class="container-fluid page-header  mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/carousel-1.jpg" alt="">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">les coiffeurs</h1>
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
            <div class="row g-4">
<?php foreach($data as $coiffeurs) : ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo URLROOT ?>/upload/<?php echo $coiffeurs->image ?>"  alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0"><?= $coiffeurs->nom?>  <?= $coiffeurs->prenom?></h5>
                            <small class="text-uppercase"><?= $coiffeurs->chaise?>></small>
                        </div>
                    </div>
                </div>
<?php endforeach ;?>
            </div>
        </div>


        <div class="container">
            <div class="row flex-lg-nowrap">


                <div class="col mt-5">
                    <div class="e-tabs mb-3 px-3">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="">Produits</a></li>
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
                                                    <a href="<?php echo URLROOT ?>/pages/ajouterCoiffeur"> <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal">ajouter un nouveau coiffeur</button></a>
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
                                                        <th class="max-width">prenom</th>
                                                        <th class="sortable">chaise</th>

                                                        <th>heure de travail </th>
                                                        <th>options </th>

                                                    </tr>
                                                </thead>
                                                <?php foreach($data as $coiffeurs) : ?>
                                                <tr>

                                                    <td class="align-middle text-center">
                                                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;">
                                                            <img class="rounded-circle" src="<?php echo URLROOT ?>/upload/<?php echo $coiffeurs->image ?>" alt="" width="50">
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                    <?= $coiffeurs->nom?>
                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                    <?= $coiffeurs->prenom?>
                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                    <?= $coiffeurs->chaise?>
                                                    </td>
                                                    <td class="text-nowrap align-middle">
                                                    <?= $coiffeurs->date?>
                                                    </td>
                                                   

                                                    <td class="text-center align-middle">
                                                        <div class="btn-group align-top">
                                                            <a href=""> <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button></a>
                                                            <a href=""> <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button> </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>


<!-- Page Header End -->