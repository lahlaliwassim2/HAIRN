<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/sidebar-admin.php'; ?>
<div class="content ">

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
  </header>
  <!--end Header admin -->
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo URLROOT ?>/img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center pb-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Mon compte</h1>
    
      </div>
    </div>
  </div>
  <!-- Page Header End -->
  <div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                  width="150">
                <div class="mt-3">
                  <h4>John Doe</h4>
                  <p class="text-secondary mb-1">admin</p>
                  <p class="text-muted font-size-sm"></p>

                  <button class="btn btn-outline-info">Mes Messages</button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  wassim lahlali
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  fip@jukmuh.al
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  0655930708
                </div>
              </div>
              <hr>


              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Youcode Youssoufia
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " target="__blank"
                    href="#">Edit</a>
                </div>
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>

  </div>
</div>

<!-- Sale & Revenue Start -->
</div>

<!-- Content End -->