<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/sidebar-admin.php'; ?>
<!-- Content Start -->
<div class="content ">



    <!--Star Header admin -->
    <header
        class="d-flex m-2 justify-content-between align-items-center navbar navbar-expand bg-dark  sticky-top px-4 py-0">
        <div class="sidebar-toggler flex-shrink-0 btn">
            <i class="fa fa-bars"></i>
        </div>

        <div class="mt-1 d-flex gap-3 p-1">
            <div class="d-flex ms-4">
                <input type="search" name="search" id="search" placeholder="search..." class="border-0 search">
                <i class="recherche btn fas fa-search"></i>
            </div>
        </div>
    </header>
    
    <!--end Header admin -->
       <!-- Page Header Start -->
       <div class="container-fluid d-flex justify-content-around mt-2">



<div class="row">
 <?php foreach ($data as $key => $value ) :?>
    
   <div class="col-lg-4 mt1">
     
      <div class="card">
         <div class="card-body text-center">
           
            <img src="https://i.imgur.com/uIgDDDd.jpg" class="rounded-circle" width="200" height="200"> 
            <h5 class="card-title mt-2 mb-1"><?= $value->nom?></h5>
            <span class="fs-2 mb-3 font-weight-bold"><?= $value->sujet?></span>
            <p class="mb-3 mt-3"><?= $value->content?></p>
           
          

         </div>
      </div>
   </div>
<?php endforeach ;?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</div>








