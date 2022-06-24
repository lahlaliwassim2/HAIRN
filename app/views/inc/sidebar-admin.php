<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
   
    <nav class="navbar">
        <div class="d-flex align-items-center ms-4 mb-4">

            <div class="ms-3 p-2 d-flex admn ">
                <div class="d-flex ">
                <h6 class="mb-0 m-1 colo nom-adm"><?= $_SESSION['name']?></h6> 
                <h6 class="mb-0 colo m-1 nom-adm"><?= $_SESSION['prenom']?></h6></div>
                <span><?= $_SESSION['role']?></span>
            </div>
           
        </div>
        <div class="navbar-nav w-100">
            <a href="<?php echo URLROOT ?>/pages/admindash" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                    class="fa mx-5 fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item">
                <a href="<?php echo URLROOT ?>/pages/adminService" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>Services</a>
            </div>
            <div class="nav-item">
                <a href="<?php echo URLROOT ?>/pages/adminprod" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>Produits</a>
            </div>
            <div class="nav-item">
                <a href="<?php echo URLROOT ?>/pages/adminBarbers" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>les coiffeurs</a>
            </div>
            <div class="nav-item">
                <a href="<?php echo URLROOT ?>/pages/adminReservations" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>Réservation</a>
            </div>
            <div class="nav-item">
                <a href="<?php echo URLROOT ?>/pages/messageadmin" class="nav-item dash nav-link my-3 mx-2 active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>Messages</a>
            </div>
            
        </div>
        <div class="nav-item">
                <a href="<?php echo URLROOT?>/users/logout"  class="nav-item dash nav-link mt-2  active" style="backdrop-filter: blur(14px);"><i
                        class="fa mx-5 fa-tachometer-alt me-2"></i>log out </a>
            </div>
    </nav>
</div>
<!-- Sidebar End -->