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
                    <h6 class="section-title text-center text-primary text-uppercase">Contacter nous
                    </h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Message</span> pour nous</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">admin</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>wlahlali@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">chef d'equipe</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Numero</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>+212 55 93 07 08</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="<?php echo URLROOT ?>/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="<?php echo URLROOT ?>/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="<?php echo URLROOT ?>/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="<?php echo URLROOT ?>/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Sujet</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here"
                                                id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

