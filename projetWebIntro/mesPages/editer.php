<?php
include_once("testConn.php");
entete("Modification","Connexion");
menu(0);
try{
        include("connectionDb.php");
        // preparer la requette de lecture 
        $iduser1=$_SESSION['id'];
        $req=$conn->prepare("SELECT * FROM utilisateurs WHERE id=$iduser1");
        $req->execute();
        $datat=$req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($datat as $row) {

                $iduser=$row['id'];
                $nomuser=$row['nom'];
                $sexeuser=$row['sexe'];
                $adresseuser=$row['adresse'];
                $numeroDeTelephoneuser=$row['numeroDeTelephone'];
                $emailuser=$row['email'];
                $typeDeCompteuser=$row['typeDeCompte'];
            }


        }catch(PDOException $e){
            echo $e->getMessage();

        }
    
?>
    <div class="container bg-body">
        <div class="row ">
            <div class="col-md-12 mt-auto">&thinsp;</div>
        </div>
        
        <div>  
          
            <form action="" method="post" class="mx-5 mt-5 mb-2 p-5 form-horizontal text-dark bg-light shadow-lg">
                <div class="row form-control btn btn-default pasdecourseur">
                    <h2 >Enregistrement </h2>
                </div>
                <?php

                // je déclare les variables
                    //Si j'enregistre
                    if ((isset($_POST['btenregistrer']))) {
                        # code...
                        $nom=htmlentities($_POST['nom']);
                        $sexe=htmlentities($_POST['sexe']);
                        $numerophone=htmlentities($_POST['numerophone']);
                        $Email=htmlentities($_POST['Email']);
                        $Adresse=htmlentities($_POST['Adresse']);
                        RequetteSql("UPDATE utilisateurs SET nom='$nom',sexe='$sexe',
                        adresse='$Adresse',numeroDeTelephone='$numerophone',email='$Email' 
                        WHERE id=$iduser1;");
                        echo "<div class=\"text-success form-control text-center\">
                        Enregistrement réussi !!!
                    </div>";  
                    header('location:client.php?message="Enregistrementréussi"');        
                    }          

                echo "

                <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label for=\"nom\" class=\"form-label\">nom complet </label>
                        <input type=\"text\" required class=\"form-control\" name=\"nom\" id=\"nom\" value=\" $nomuser\">
                    </div>
             
                    <div class=\"form-group col-md-4\">
                        <label for=\"sexe\" class=\"form-label\">Sexe </label>
                        <select name=\"sexe\" id=\"sexe\" class=\"form-select\" value=\" $sexeuser\">
                            <option value=\"\"></option>
                            <option value=\"M\">Masculin</option>
                            <option value=\"F\">Féminin</option>
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label for=\"numerophone\" class=\"form-label\">numero de téléphone</label>
                        <input type=\"tel\" required class=\"form-control\" name=\"numerophone\" id=\"numerophone\" value=\" $numeroDeTelephoneuser\">
                    </div>                 
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label for=\"Email\" class=\"form-label\">Email </label>
                        <input type=\"email\" required class=\"form-control\" name=\"Email\" id=\"Email\" value=\" $emailuser\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label for=\"Adresse\" class=\"form-label\">Adresse </label>
                        <input type=\"text\" required class=\"form-control\" name=\"Adresse\" id=\"Adresse\" value=\" $adresseuser\">
                    </div>
                </div>
                
                <div class=\"row \">
                    <div class=\"btn-group-justified mt-4 col-md-4 mx-auto\">
                        <input type=\"submit\" required class=\"btn btn-primary form-control\" value=\"Enregistrer\" name=\"btenregistrer\">
                    </div>
                </div>
                <div class=\"form-control btn btn-default\">
                    Vous ne voulez plus modifier?<a href=\"client.php\" class=\"btn btn-link \">Retourner au menu du compte.</a>
                </div>
            </form>
        </div>
        
        ";
        ?>

</body>
</html>