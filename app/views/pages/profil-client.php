    <!--partien profil de client-->
    <?php require APPROOT . '/views/inc/header.php'; ?>
    <?php if (isset($_SESSION['id'])) {
    }
    require APPROOT . '/views/inc/navbar-client.php'; ?>


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
                                        <button type="button" class="btn col-5 m-1 btn-secondary">envoyer un message </button>
                                        <button type="button" class="btn col-5 m-1 btn-secondary">deconexion</button>

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

        <div>
            <div class="table-wrap table-responsive">
                <table class="table table-responsive table-borderless">
                    <thead>

                        <th>Service</th>
                        <th>Prix</th>
                        <th>date</th>

                    </thead>
                    <tbody>
                        <tr class="align-middle alert border-bottom" role="alert">
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                                    <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                                </div>
                            </td>
                            <td class="text-center">
                                <img class="pic" src="https://www.freepnglogos.com/uploads/shoes-png/dance-shoes-png-transparent-dance-shoes-images-5.png" alt="">
                            </td>
                            <td>
                                <div>

                                    <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                                </div>
                            </td>



                    </tbody>
                </table>
            </div>
        </div>









    </div>