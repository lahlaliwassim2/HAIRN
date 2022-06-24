<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/Navbar-user.php'; ?>
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title text-center text-info text-uppercase">Contacter nous
                    </h6>
                    <h1 class="mb-5"><span class="text-info text-uppercase">Message</span> pour nous</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-info text-uppercase">admin</h6>
                                <p><i class="fa fa-envelope-open text-info me-2"></i>wlahlali@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-info text-uppercase">chef d'equipe</h6>
                                <p><i class="fa fa-envelope-open text-info me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-info text-uppercase">Numero</h6>
                                <p><i class="fa fa-envelope-open text-info me-2"></i>+212 55 93 07 08</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                    <img style="width : 100%" src="<?php echo URLROOT ?>/img/team-1.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class=" d-flex fadeInUp">
                            <form action="<?php echo URLROOT ?>/Message/SendMessage" method="POST">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="sujet" id="subject" placeholder="Subject">
                                            <label for="subject">Sujet</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="content" class="form-control" placeholder="Leave a message here"
                                                id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 py-3" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        <!-- Contact End -->

