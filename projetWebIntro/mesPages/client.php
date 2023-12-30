<?php 
    include("testConn.php");
    entete("Client et compte",$_SESSION['nom']);
    menu(7);
?>
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-3">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="mt-sm-5 d-block d-sm-none" >
            &emsp;
        </div>
    </div>
    <div class=" col-11 mx-auto">
    <?php    if (isset($_GET['message'])) {
        $message=$_GET['message'];
        echo "<div class=\"alert alert-success text-center\">
        $message
        </div>";  
        
    }
    ?>
        <?php
        if ($_SESSION['compte']==1){
    
        echo "
        <form class=\"col-12 pt-2 d-flex\" role=\"search\" method=\"post\">
                <input name=\"cherche\" class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher un client par son nom\" aria-label=\"Search\">
                <button class=\"btn btn-outline-secondary mx-1\" type=\"submit\" name=\"maj\"><img src=\"../images/search.png\" alt=\"\"></button>
                <button class=\"btn btn-outline-secondary mx-1\" type=\"submit\" name=\"maj\"><img src=\"../images/update.png\" alt=\"\"></button>
                <a href=\"ajout.php\" class=\"btn btn-outline-secondary mx-1\"><img src=\"../images/add.png\" alt=\"\"></a>
            </form>

            <table class=\"table table-sm table-light table-hover mx-auto mx-lg-2 table-responsive border-5 border-secondary shadow-lg\">
                <caption class=\"caption-top  fs-4 fw-bold text-left\">liste des clients et des membres</caption>
                <thead class=\"table-light text-uppercase fw-bold  text-secondary\">
                    <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">nom</th>
                    <th scope=\"col\">sexe</th>
                    <th scope=\"col\">adresse</th>
                    <th scope=\"col\">numéro de télephone</th>
                    <th scope=\"col\">email</th>
                    <th scope=\"col\">Action</th>
                    
                    </tr>
                </thead>
                <tbody class=\"table-group-divider border border-5 border-secondary border-start-0 border-end-0  \">   
                ";     
                
                    MAJuser("utilisateurs");
                    try{
                        include("connectionDb.php");
                        // preparer la requette de lecture 
                        if (isset($_POST['cherche']) AND !empty($_POST['cherche'])) {
                            $recherche=htmlentities($_POST['cherche']);
                            $req=$conn->prepare("SELECT * FROM utilisateurs WHERE nom LIKE '%$recherche%' OR adresse LIKE '%$recherche%' OR email LIKE '%$recherche%';");
                            $req->execute();
                            $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                        } else {
                            $req=$conn->prepare("SELECT * FROM utilisateurs");
                            $req->execute();
                            $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                        
                        }
                        
                            foreach ($datat as $row) {

                                $iduser=$row['id'];
                                $nomuser=$row['nom'];
                                $sexeuser=$row['sexe'];
                                $adresseuser=$row['adresse'];
                                $numeroDeTelephoneuser=$row['numeroDeTelephone'];
                                $emailuser=$row['email'];
                                $typeDeCompteuser=$row['typeDeCompte'];
                                echo "<tr>
                                    <th scope=\"row\">$iduser</td>
                                    <td>$nomuser</td>
                                    <td>$sexeuser</td>
                                    <td>$adresseuser</td>
                                    <td>$numeroDeTelephoneuser</td>
                                    <td>$emailuser</td>
                                    <td>
                                        <a href=\"elements/suprimer.php?id={$iduser}\" class='btn btn-default btn-sm'><img src=\"../images/efface.png\" alt=\"\"></a>
                                    ";
                                    if ($typeDeCompteuser !=1) {
                
                                        echo "<a href=\"elements/admnis.php?id={$iduser}\" class='btn btn-outline-secondary fw-bold btn-sm'>Faire Admin</a>
                                ";
                                    }elseif ($typeDeCompteuser ==1) {
                
                                        echo "<a href=\"elements/admnism.php?id={$iduser}\" class='btn btn-secondary btn-sm'>Desaprouver</a>
                                ";
                                    }

                                echo "   
                                </td>
                                </tr>";
                                

                            }


                            }catch(PDOException $e){
                                echo $e->getMessage();

                            } 

                    echo "    
                    </tbody>
                    <tfoot class=\"table-light border-3 border-light\">
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">nom</th>
                            <th scope=\"col\">sexe</th>
                            <th scope=\"col\">adresse</th>
                            <th scope=\"col\">pnone number</th>
                            <th scope=\"col\">email</th>
                            <th scope=\"col\">Action</th>
                            
                        </tr>
                    </tfoot>

                </table>
                
            </div>";

        }
        elseif ($_SESSION['compte']!=1) {
            MAJuser("utilisateurs");
            echo "<!-- code visible uniquement sur les petits écran -->
            <div class=\"my-5 d-block d-sm-none\" >
                &emsp;
            </div>
            ";
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
                                echo "
                                <div class=\"col-md-5 p-3 rounded-3 my-4 mx-auto shadow border border-5 border-primary border-start-0 border-end-0\">
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>Compte numéro : $iduser</h4>
                                    </div>
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>noms : $nomuser</h4>
                                    </div>
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>sexe : $sexeuser</h4>
                                    </div>
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>Votre adresse : $adresseuser</h4>
                                    </div>
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>Votre numero de télephone : $numeroDeTelephoneuser</h4>
                                    </div>
                                    <div class=\"col mx-auto my-1  text-dark\">
                                        <h4>Votre email : $emailuser</h4>
                                    </div>
                                        <a href=\"editer.php?id={$iduser}\" class='btn btn-primary mt-3 ms-5 btn-sm'>editer mes informations</a>
                                    </div>";
                            }


                        }catch(PDOException $e){
                            echo $e->getMessage();

                        }

        }


    ?>
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
            <div class="my-sm-3">
                &emsp;
            </div>
            <!-- code visible uniquement sur les petits écran -->
            <div class="my-5 d-block d-sm-none" >
                &emsp;
            </div>
    </div>
    </body>
</html>