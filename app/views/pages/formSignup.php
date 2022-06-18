



<?php require APPROOT . '/views/inc/header.php'; ?>
<form action="<?php echo URLROOT; ?>/users/register" method="POST">
<div class="container mt-5 mb-5">
    <div class="d-flex flex row g-0">
        <div class="col-md-6 mt-3">
            <div class="card card1 p-3">
                <div class="d-flex flex-column"> 
                    <img src="https://i.imgur.com/kFFNY1q.png" height="50" width="50" /> 
                 <span class="login mt-3">Sign up </span> 
                </div>
                <div class="input-field d-flex flex-column mt-3"> 
                   <div class="nomprenom d-flex "> 
                     <input value="" class="form-control nom <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"  value="" name="name" placeholder="<?php echo  !empty($data['name_err']) ? $data['name_err'] : 'Name' ; ?>">
                 
                    
                     <input value="" class="form-control prenom <?php echo (!empty($data['prenom_err'])) ? 'is-invalid' : ''; ?>"  name="prenom" placeholder="<?php echo  !empty($data['prenom_err']) ? $data['prenom_err'] : ' Prenom' ; ?>"> 
                   
                   </div><div class="email my-2">
                   <input value="" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"  name="email" placeholder="<?php echo  !empty($data['email_err']) ? $data['email_err'] : ' Email' ; ?>"> 
                  
                   </div>
                    
                   <div class="nomprenom d-flex "> 
                     <input value="" class="form-control nom <?php echo  (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" placeholder=" <?php echo  !empty($data['password_err']) ? $data['password_err'] : ' password' ; ?> "> 
                  
                    
                     <input value="" class="form-control prenom <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"  name="confirm_password" placeholder="confirme mot de passe"> 
               
                   </div>
                   <div class="role d-flex iam d-flex">
                          
                                            <div class="col-md-10 pt-1">
                                               
                                             
                                                
                                             </div>   
                      </div>
                      <button class="btn btn-dark d-flex justify-content-center align-items-center " type="submit " name="submit">Sign up</button>
                    <div class="mt-3 text1"> 
                       <span>you  have an gmail?<span class="register">Register here</span></span>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card card2 p-3">
                <div class="image">
                    <img src="https://i.imgur.com/OgCz2Ly.jpg">
                </div>
                 </div>
        </div>
    </div>
</div>
</form>