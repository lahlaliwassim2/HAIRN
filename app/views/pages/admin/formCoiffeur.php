<?php require APPROOT . '/views/inc/header.php'; ?>
<form action="<?php echo URLROOT ?>/CoiffeurController/addCoiffeur" method="POST" enctype="multipart/form-data">
<div class="container">
    

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-8">

                <div class="card py-5">
                <div class="py-20 h-screen bg-white px-2">
    <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:">
            <div class="w-full p-3">
                <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">

                  <div class="absolute">
                    <h1 class=" ">Ajouter un coiffeur</h1>
                    <div class="flex flex-col items-center">
                      <i class="fa fa-folder-open fa-4x text-blue-700"></i>
                    <span class="block text-gray-400  font-normal">ajouter une photo </span>
                    </div>
                  </div>

                  <input type="file" class="h-full w-full opacity-0" name="img">

                  


                </div>
            </div>
        </div>
    </div>
</div>


                    <div class="row mt-1 g-2">

                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="text-uppercase">nom  </span>
                          <input type="text" name="nom" class="form-control">
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="text-uppercase">prenom</span>
                          <input name="prenom" type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row mt-1 g-2">

                      
                    <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="text-uppercase">chaise  </span>
                          <input type="nombre" name="nombre" class="form-control">
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="text-uppercase">heure de travail</span>
                          <input name="date" type="text" class="form-control">
                        </div>
                      </div>


                   
                      
                    </div>
               

                   

                    <div class="mt-3 px-4 d-flex justify-content-between align-items-center">
                      
                      <button class="btn options btn-info">AJOUTER </button>      
                     <a href=" <?php echo URLROOT ?>/pages/ajoutercoiff">  <--retour </a>           
                    </div>

                  
                  
                </div>
                
              </div>
              
            </div>
             
           </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>