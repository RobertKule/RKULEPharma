<?php
include("testConn.php");
    entete("Inscription","connexion");
    menu(0);
?>
    <div class="container bg-body">
        <div class="row ">
            <div class="col-md-12 mt-auto">&thinsp;</div>
        </div>
        
        <div>  
          
            <form action="" method="post" class="mx-5 mt-5 mb-2 p-5 form-horizontal text-dark bg-light shadow-lg">
                <div class="row form-control btn btn-default pasdecourseur">
                    <h2 >Ajout d'un nouveau compte</h2>
                </div>
                <?php

                // je déclare les variables
                    //Si j'enregistre
                    if ((isset($_POST['btenregistrer']))) {
                        # code...
                        $nom=htmlentities($_POST['nom']);
                        $mdpasse=password_hash(htmlentities($_POST['mdpasse']),PASSWORD_DEFAULT);
                        $typecompte=0;
                        $sexe=htmlentities($_POST['sexe']);
                        $numerophone=htmlentities($_POST['numerophone']);
                        $Email=htmlentities($_POST['Email']);
                        $Adresse=htmlentities($_POST['Adresse']);
                        RequetteSql("INSERT INTO  utilisateurs(nom,sexe,motDePasse,adresse,numeroDeTelephone,email,typeDeCompte) 
                            VALUES ('$nom','$sexe','$mdpasse','$Adresse','$numerophone','$Email','$typecompte');");
                        echo "<div class=\"text-success form-control text-center\">
                        Enregistrement réussi !!!
                    </div>";  
                    header('location:client.php?message="inserez avec succès"');        
                    }          

                ?>


                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nom" class="form-label">nom complet </label>
                        <input type="text" required class="form-control" name="nom" id="nom">
                    </div>
             
                    <div class="form-group col-md-4">
                   
                        <label for="mdpasse" class="form-label">Mot de passe </label>
                        <div class="input-group">
                            <span class="input-group-text" id="nom"><img src="../images/password.png" alt=""></span>
                            <input type="password" required class="form-control " name="mdpasse" id="mdpasse">
                        </div>
                   
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="sexe" class="form-label">Sexe </label>
                        <select name="sexe" id="sexe" class="form-select">
                            <option value=""></option>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="numerophone" class="form-label">numero de téléphone</label>
                        <div class="input-group">
                            <span class="input-group-text" id="nom"><img src="../images/phone.png" alt=""></span>
                            <input type="tel" required class="form-control" name="numerophone" id="numerophone">
                        </div>
                
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Email" class="form-label">Email </label>
                        <div class="input-group">
                            <span class="input-group-text" id="nom"><img src="../images/email.png" alt=""></span>
                            <input type="email" required class="form-control" name="Email" id="Email">
                        </div>
                
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Adresse" class="form-label">Adresse </label>
                        <div class="input-group">
                            <span class="input-group-text" id="nom"><img src="../images/adresse.png" alt=""></span>
                            <input type="text" required class="form-control" name="Adresse" id="Adresse">
                        </div>
                
                    </div>
                </div>
                
                <div class="row ">
                    <div class="btn-group-justified offset-4 mt-4 col-4">
                        <input type="submit" required class="btn btn-secondary form-control" value="Enregistrer" name="btenregistrer">
                    </div>
                </div>
                <div class="form-control btn btn-default">
                    Vous ne voulez plus ajouter un client?<a href="client.php" class="btn btn-link ">Retournez au tableau</a>
                </div>
            </form>
        </div>
        

</body>
</html>