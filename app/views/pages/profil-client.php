    <!--partien profil de client-->
    <?php require APPROOT . '/views/inc/header.php'; ?>
    <?php if (isset($_SESSION['id'])) {
        
          require APPROOT . '/views/inc/navbar-client.php';
    }
   ?>


    <!--profil client-->
    <div class="container">
        <div class="row  d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600"><?= $_SESSION['name'] ?></h6>
                                <p><?= $_SESSION['role'] ?></p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?= $_SESSION['email'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">98979989898</h6>
                                    </div>
                                </div>
                                <!-- <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">prenom</p>
                                        <h6 class="text-muted f-w-400"> <?= $_SESSION['prenom'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">date de premiere vidite</p>
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                    <div class="btn-group row" role="group" aria-label="Button group with nested dropdown">
                                      <a class="col-6" href="">  <button type="button" class="btn  m-1 btn-secondary">envoyer un message </button></a>
                                    <a href="<?php echo URLROOT?>/users/logout" class="col-6">   <button type="button" class="btn  m-1 btn-secondary">deconexion</button></a> 

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--END PROFIL -->

        <!--tableau d'achat-->










    </div>