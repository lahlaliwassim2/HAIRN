<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/sidebar-admin.php'; ?>
<!-- Content Start -->
<div class="content">



  <!--Star Header admin -->
  <header
    class="d-flex m-2 justify-content-between bg-dark align-items-center navbar navbar-expand  sticky-top px-4 py-0">
    <div class="sidebar-toggler flex-shrink-0 btn">
    file
    </div>

    <div class="mt-1 d-flex gap-3">
      <div class="d-flex ms-4">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
            aria-describedby="btnNavbarSearch">
          <button class="btn btn-primary" id="btnNavbarSearch" type="button"><!-- <i class="fas fa-search"></i> Font Awesome fontawesome.com --></button>
        </div>
      </div>
    </div>
  </header>
  <!--end Header admin -->



  <!-- Sale & Revenue Start -->

  <!-- Content End -->
  <div class="container ">

    <!-- Page Header Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h6 class="section-title text-center text-primary text-uppercase">Service</h6>
          <h1 class="mb-5">Gerer les<span class="text-primary text-uppercase"> services </span></h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="<?php echo URLROOT ?>/img/room-1.jpg" alt="">
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">+100
                  exemplest</small>
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">coupe cheveux</h5>

                </div>

                <p class="text-body mb-3"></p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-primary  py-2 px-4" href="">View all</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="<?php echo URLROOT ?>/img/room-1.jpg" alt="">
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">+100
                  exemplest</small>
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">coupe barbe</h5>

                </div>

                <p class="text-body mb-3"></p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-primary  py-2 px-4" href="">View all</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="<?php echo URLROOT ?>/img/room-1.jpg" alt="">
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">+100
                  exemplest</small>
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">Soin visage</h5>

                </div>

                <p class="text-body mb-3"></p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-primary  py-2 px-4" href="">View all</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container">
    <div class="row flex-lg-nowrap">


      <div class="col">
        <div class="e-tabs mb-3 px-3">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#">Service</a></li>
          </ul>
        </div>

        <div class="row flex-lg-nowrap">
          <div class="col mb-3">
            <div class="e-panel card">
              <div class="card-body">
                <div class="card-title">
                  <h6 class="mr-2"><span>Tous</span><small class="px-1">les service </small></h6>
                </div>
                <div class="col-12 col-lg-3 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="text-center px-xl-3">
                  <button class="btn btn-success btn-block" type="button" data-toggle="modal"
                    data-target="#user-form-modal">New Service</button>
                </div>
               
             
                <div>

                 
                </div>

              </div>

            </div>
          </div>
                <div class="e-table">
                  
                  <div class="table-responsive table-lg mt-3">
                    <table class="table table-bordered">
                    <thead>
                                                        <tr>

                                                            <th>Photo</th>
                                                            <th class="max-width">Name</th>
                                                            <th class="sortable">description</th>

                                                            <th>type </th>
                                                            <th class="">prix</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    </tr>
                      <tbody>
                      <?php foreach($data as $services) : ?>
                                                    <tr>

                                                        <td class="align-middle text-center">
                                                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;">
                                                                <i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle"><?= $services->label?></td>
                                                        <td class="text-nowrap align-middle"><?= $services->description?></td>

                                                        <td class="text-nowrap align-middle"><span><?= $services->type?></span></td>
                                                                <td class="text-nowrap align-middle"><span><?= $services->pris?></span></td>
                                                        <td class="text-center align-middle">
                                                            <div class="btn-group align-top">
                                                                <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                                                                <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ;?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>





    <!-- Page Header End -->