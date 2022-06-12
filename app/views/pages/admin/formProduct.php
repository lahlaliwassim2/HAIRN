<?php require APPROOT . './views/inc/header.php'; ?>

<body class="d-flex align-items-center">
         <div class="container w-50 h-100">
             <h1>Formulaires</h1>
             <form>
               <fieldset>
                 <legend>Exemple de formulaire Bootstrap</legend>
                 <div class="form-group m-5">
                     <label for="fichier">Fichier</label>
                     <input type="file" class="form-control-file" id="fichier">
                 </div>
                 
                 <div class="form-group m-5">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="nom" placeholder="Pierre GIRAUD">
                 </div>
                 
                 <div class="form-group m-5">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" id="email" placeholder="pierre.giraud@edhec.com">
                 </div>
                 
                 <div class="form-group m-5">
                   <label for="selection">Une liste select</label>
                   <select id="selection" class="form-control">
                     <option value="">Liste de choix...</option>
                     <optgroup label="Groupe d'options 1">
                       <option value="">Option 1</option>
                       <option value="">Option 2</option>
                       <option value="">Option 3</option>
                     </optgroup>
                     <optgroup label="Groupe d'options 2">
                       <option value="">Option 4</option>
                       <option value="">Option 5</option>
                     </optgroup>
                   </select>
                 </div>
                 <div class="form-group m-5">
                   <label for="bio">Biographie</label>
                   <textarea class="form-control" id="bio" rows="3"></textarea>
                 </div>
               </fieldset>
             </form>
         </div>
    </body>