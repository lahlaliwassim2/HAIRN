<?php require APPROOT . '/views/inc/header.php'; ?>
<form id="form" action="<?php echo URLROOT ?>/ProductController/addProduct" method="POST" enctype="multipart/form-data">
<div class="container">
    
<div class="col-md-6 container">
   <div class="alert alert-general">
      <i class="fa fa-info"></i> General Message. Your Message Comes Here
      <span class="close"></span>
   </div>
            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-8">

                <div class="card py-5">
                <div class="py-20 h-screen bg-white px-2">
    <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:">
            <div class="w-full p-3">
                <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">

                  <div class="absolute">
                    <h1 class=" ">Ajouter un produit</h1>
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
                          <span class="text-uppercase">nom de produit</span>
                          <input id="name" type="text" name="nom" class="form-control" required>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="text-uppercase">description</span>
                          <input id="description" name="description" type="text" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row mt-1 g-2">

                      <div class="col-md-6">
                      <div class="inputs px-4">
                          <span class="text-uppercase">nombre</span>
                          <input id='number' type="text" name="nombre" class=" form-control w-25" required>
                        </div>
                      </div>


                   
                      
                    </div>
               

                    <div class="row g-2 mt-4">
           
                      <span class="text-uppercase px-4 name">choisir le type</span>
                      <div class="col-md-3">
                        <div class="px-4">
                          <label class="radio"> <input type="radio" name="rate" value=" cheuveux" checked> <span>cheveux</span> </label>
                          
                        </div>

                      </div>

                      <div class="col-md-3">
                     <div class="px-4">
                        <label class="radio"> <input type="radio" name="rate" value="barbe"> <span>barbe</span> </label>
                        </div>
                      </div>
                    
                      <div class="col-md-3">
                     <div class="px-4">
                        <label class="radio"> <input type="radio" name="rate" value="visage"> <span>visage</span> </label>
                        </div>
                      </div>
                   
                     <div class="col-md-3">
                     <div class="px-4">
                        <label class="radio"> <input type="radio" name="rate" value="odeurs"> <span>odeurs</span> </label>
                        </div>
                      </div>
                   
                    </div>
                

                    <div class="mt-3 px-4 d-flex justify-content-between align-items-center">
                      
                      <button class="btn options btn-info">Create product</button>      
                     <a href=" <?php echo URLROOT ?>/pages/adminprod"> retour     </a>           
                    </div>

                  
                  
                </div>
                
              </div>
              
            </div>
             
           </div>
        </form>

        <script>
          let form = document.getElementById('form')
          let name = document.getElementById('name')
          let description = document.getElementById('description')
          let number = document.getElementById('number')

          form.addEventListener('submit', (e) => {
            if(name.value == '' || !name.value.match(/^[a-zA-Z0-9]{4,}$/)) {
              e.preventDefault();
            } else {
              // remove alert
            }
            if(description.value == '' || !description.value.match(/^[a-zA-Z0-9]{10,}$/)) {
              e.preventDefault();
            } else {
              // remove alert
            }
            if(number.value == '' || isNaN(number.value)) {
              e.preventDefault();
            } else {
              // remove alert
            }

            
          })
          

        </script>