



<?php require APPROOT . '/views/inc/header.php'; ?>
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
                     <input class="form-control nom" placeholder="Nom"> 
                    
                     <input class="form-control prenom " placeholder="Prenom"> 
                   </div><div class="email my-2">
                   <input class="form-control " placeholder="Email"> 
                   </div>
                    
                   <div class="nomprenom d-flex "> 
                     <input class="form-control nom" placeholder="mot de passe "> 
                    
                     <input class="form-control prenom " placeholder="confirme mot de passe"> 
                   </div>
                   <div class="role d-flex iam">
                            <label class="col-md-2 col-form-label user_group">I am a</label>
                                            <div class="col-md-10 pt-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Customer</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Vendor</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Both</label>
                                                </div>
                                             </div>   
                      </div>
                      <button class="btn btn-dark d-flex justify-content-center align-items-center">Sign up</button>
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