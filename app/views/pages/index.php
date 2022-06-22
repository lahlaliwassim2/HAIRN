<?php require APPROOT . '/views/inc/header.php'; ?>
<?php 
if($_SESSION['role'] == 'client'){ 
     require APPROOT . '/views/inc/navbar-client.php'; 
}else{
     require APPROOT . '/views/inc/navbar-user.php'; 
}
?>




  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?php echo URLROOT ?>/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3 para-caros">
                                <h6 class="section-title text-white text-uppercase mb-3  ">Barber Shop</h6>
                                <h1 class="display-3 text-white mb-4  ">le salon de réussite dans pfr</h1>
                                <?php if(($_SESSION['role']=='client')) : ?>
                                <a href="" class="btn btn-info py-md-3 px-md-5 me-3  ">PRODUITS</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 ">SERVICES</a>
                                <?php else : ?>
                                    <a href="" class="btn btn-info py-md-3 px-md-5 me-3  ">SIGN UP</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 ">LOG IN </a>
                                <?php  endif ;?>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?php echo URLROOT ?>/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">BARBER
                                    SHOP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrire notre salon </h1>
                                <?php if($_SESSION['role'] == 'client') : ?>
                                <a href="" class="btn btn-info py-md-3 px-md-5 me-3  ">PRODUITS</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 ">SERVICES</a>
                                <?php else : ?>
                                    <a href="" class="btn btn-info py-md-3 px-md-5 me-3  ">SIGN UP</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 ">LOG IN </a>
                                <?php  endif ;?>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div>
                <div class="row g-5  align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text- text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text- text-uppercase">BarberShop</span></h1>
                        <p class="mb-4">Fondé en 2022, The Barber Shop Group a un engagement passionné envers les soins
                            pour hommes et propose des coupes de cheveux, un coiffage et un rasage pour hommes de haute
                            qualité et d'un bon rapport qualité-prix.</p>
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
                        <a class="btn btn-info py-3 px-5 mt-2" href="<?php echo URLROOT ?>/pages/coiffeur">Voir plus</a>
                    </div>
                    <div class="col-lg-6">
                    <img style="width : 100%" src="<?php echo URLROOT ?>/img/team-1.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h6 class="section-title text-center text-info text-uppercase">NOTRE Services</h6>
                    <h1 class="mb-5">Découvrez notre<span class="text-info text-uppercase"> service </span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="height: 266px;" src="<?php echo URLROOT ?>/img/room-1.jpg" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-info text-white rounded py-1 px-3 ms-4">+100
                                    exemplest</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">coupe cheveux</h5>

                                </div>

                                <p class="text-body mb-3">Façon de disposer, tailler ou modeler la chevelure afin de lui
                                    apporter une structure à sa convenance.</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info  py-2 px-4" href="<?php echo URLROOT ?>/ServicesController/getService/cheveux">View all</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="height: 266px;" src="<?php echo URLROOT ?>/img/room-2.jpg" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-info text-white rounded py-1 px-3 ms-4">+100
                                    exemplest</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">coupe barbe</h5>

                                </div>

                                <p class="text-body mb-3">Nous vous ferons une description rapide de chaque style, vous
                                    indiquerons quel trait de .</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info  py-2 px-4" href="<?php echo URLROOT ?>/ServicesController/getService/barbe">View all</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" >
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid"src="<?php echo URLROOT ?>/img/room-3.jpg" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-info text-white rounded py-1 px-3 ms-4">+100
                                    exemplest</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Soin visage</h5>

                                </div>

                                <p class="text-body mb-3">Un soin du visage est un soin du corps destiné à prépar un
                                    pain dermatologique, un lait de toi.</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info  py-2 px-4" href="<?php echo URLROOT ?>/ServicesController/getService/visage">View all</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-info text-uppercase">notre coiffeurs</h6>
                    <h1 class="mb-5">Découvrez notre <span class="text-info text-uppercase">coifeurs</span></h1>
                </div>
                <div class="row g-4">
                    <?php foreach($data['coiffeur'] as $coiffeur) :
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

        <!-- Pruduits Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-info text-uppercase">notre produits</h6>
                    <h1 class="mb-5">Découvrez notre <span class="text-info text-uppercase">Produits</span></h1>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">

                        <div class="row g-4">

                            <div class="col-lg-3 col-md-6 ">
                                <a class=" " href="<?php echo URLROOT ?>/ProductController/getProduct/visage">
                                    <div class="rounded shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid im" src="<?php echo URLROOT ?>/img/ch3ar.jpg" alt="">

                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">visage</h5>
                                            <small><?php echo $data['visage']; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 " data-wow-delay="0.3s">
                                <a class="" href="<?php echo URLROOT ?>/ProductController/getProduct/Barbe">
                                    <div class="rounded shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid im" src="<?php echo URLROOT ?>/img/ch3ar.jpg" alt="">

                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Barbe</h5>
                                            <small><?php echo $data['barbe']; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6" data-wow-delay="0.3s">
                                <a href="<?php echo URLROOT ?>/ProductController/getProduct/cheveux">
                                    <div class="rounded shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid im" src="<?php echo URLROOT ?>/img/ch3ar.jpg" alt="">

                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">cheveux</h5>
                                            <small><?php echo $data['cheveux']; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="service-item " href="<?php echo URLROOT ?>/ProductController/getProduct/Odeurs">
                                    <div class="rounded shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid im" src="<?php echo URLROOT ?>/img/ch3ar.jpg" alt="">

                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Odeurs</h5>
                                            <small><?php echo $data['odeurs']; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rendez vous -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center  ">
                    <h6 class="section-title text-center text-info text-uppercase">Rendez-vous</h6>
                    <h1 class="mb-5">prendre votre <span class="text-info text-uppercase">Rendez-vous</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 col-md-4 maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.257557979313!2d-8.52485928501372!3d32.24384258113635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefdd4fcbbdbc1%3A0x846cbd9f328a7bdb!2sYOUCODE!5e1!3m2!1sfr!2sma!4v1653766821655!5m2!1sfr!2sma"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <form>
                                <div class="row g-3">
                                    <div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="datetime-local" class="form-control datetimepicker-input"
                                                id="checkin" placeholder="Check In" data-target="#date3"
                                                data-toggle="datetimepicker">
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                                <option value="1">chaise A</option>
                                                <option value="2">chaise B</option>
                                                <option value="3">chaise C</option>
                                                <option value="1">chaise D</option>
                                            </select>
                                            <label for="select3">choisir votre coiffeur</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message"
                                                style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 py-3" type="submit">Rendez-vous</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rendez vous End -->
</div>



</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>
